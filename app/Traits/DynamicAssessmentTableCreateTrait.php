<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Repositories\Setup\SetupQuestionRepository;

trait DynamicAssessmentTableCreateTrait
{
    private SetupQuestionRepository $assessmentRepository;

    public function __construct(SetupQuestionRepository $assessmentRepository)
    {
        $this->assessmentRepository = $assessmentRepository;
    }

    public function updateDynamicTables($folder, $prefix, $categoryId)
    {
        $questions = $this->assessmentRepository->getQuestionCollectionAccordingSubCategory($categoryId);

        // dd($prefix, $categoryId, $questions);

        foreach ($questions as $collectionName => $collection) {
            $prefixedTableName = Str::lower($prefix . '_' . str_replace(' ', '_', $collectionName));

            // dd($prefixedTableName);
            if (!Schema::hasTable($prefixedTableName)) {
                $tableName = Str::lower($prefixedTableName);
                Schema::create($tableName, function (Blueprint $table) {
                    $table->id();
                    $table->tinyInteger('status')->default(1)->comment('active=1, inactive=0');
                    $table->string('assessment_date')->nullable();
                    $table->timestamps();

                    $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
                    $table->unsignedBigInteger('category_id');
                    $table->unsignedBigInteger('appointment_id')->nullable();
                    $table->unsignedBigInteger('main_teacher_id')->nullable();
                    $table->unsignedBigInteger('assistant_teacher_id')->nullable();
                    $table->foreign('category_id')->references('id')->on('assessment_categories')->onDelete('cascade');
                    $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('set null');
                    $table->foreign('main_teacher_id')->references('id')->on('users')->onDelete('set null');
                    $table->foreign('assistant_teacher_id')->references('id')->on('users')->onDelete('set null');
                });

                // Create model for the table
                $this->createDynamicModel($folder, $prefixedTableName);
            }

            foreach ($collection as $question) {
                if (isset($question['id'])) {
                    $optionName = "option_" . $question['sub_category_id'] . "_" . $question['id'];
                    if (!Schema::hasColumn($prefixedTableName, $optionName)) {
                        $tableName = Str::lower($prefixedTableName);
                        Schema::table($tableName, function (Blueprint $table) use ($optionName) {
                            $table->string($optionName)->nullable();
                        });
                    }
                }
            }
        }

        return response()->json(['message' => 'Dynamic tables updated successfully']);
    }

    public function createDynamicModel($folder, $tableName)
    {
        // Determine model class name
        $className = ucfirst(Str::camel(Str::singular($tableName)));

        // Determine file path
        $directoryPath = app_path('Models/' . $folder);
        $filePath = $directoryPath . '/' . $className . '.php';

        // Ensure the directory exists
        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        // Check if model file already exists
        if (!file_exists($filePath)) {
            // Model stub content
            $stub = <<<EOD
            <?php

            namespace App\Models\\$folder;

            use Illuminate\Database\Eloquent\Model;
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use App\Models\User;
            use App\Models\Appointment;
            use App\Models\AssessmentCategory;

            class $className extends Model
            {
                use HasFactory;
                protected \$guarded = [];

                // Define relationships
                public function creator()
                {
                    return \$this->belongsTo(User::class, 'created_by');
                }

                public function category()
                {
                    return \$this->belongsTo(AssessmentCategory::class, 'category_id');
                }

                public function appointment()
                {
                    return \$this->belongsTo(Appointment::class, 'appointment_id');
                }

                public function mainTeacher()
                {
                    return \$this->belongsTo(User::class, 'main_teacher_id');
                }

                public function assistantTeacher()
                {
                    return \$this->belongsTo(User::class, 'assistant_teacher_id');
                }

                // Add any additional model logic or properties here
            }
            EOD;

            // Write stub content to file
            file_put_contents($filePath, $stub);
        }

        // Update the User model to add relationships
        $this->updateUserModel($className);
        $this->updateAppointmentModel($className);
    }

    private function updateUserModel($className)
    {
        $userModelPath = app_path('Models/User.php');

        // Ensure the User model file exists
        if (file_exists($userModelPath)) {
            $userModelContent = file_get_contents($userModelPath);

            $newMainTeacherMethod = <<<EOD
                    public function mainTeacher{$className}()
                    {
                        return \$this->hasMany($className::class, 'main_teacher_id');
                    }
                EOD;

            $newAssistantTeacherMethod = <<<EOD
                    public function assistantTeacher{$className}()
                    {
                        return \$this->hasMany($className::class, 'assistant_teacher_id');
                    }
                EOD;

            // Ensure the new methods are inserted before the last closing brace
            $userModelContent = preg_replace('/}\s*$/', "\n" . $newMainTeacherMethod . "\n" . $newAssistantTeacherMethod . "\n}", $userModelContent);

            // Write the updated content back to the User model file
            file_put_contents($userModelPath, $userModelContent);
        }
    }

    private function updateAppointmentModel($className)
    {
        $appointmentModelPath = app_path('Models/Appointment.php');

        // Ensure the Appointment model file exists
        if (file_exists($appointmentModelPath)) {
            $appointmentModelContent = file_get_contents($appointmentModelPath);

            $newAppointmentMethod = <<<EOD
                    public function {$className}()
                    {
                        return \$this->hasMany($className::class, 'appointment_id');
                    }
                EOD;

            // Ensure the new method is inserted before the last closing brace
            $appointmentModelContent = preg_replace('/}\s*$/', "\n" . $newAppointmentMethod . "\n}", $appointmentModelContent);

            // Write the updated content back to the Appointment model file
            file_put_contents($appointmentModelPath, $appointmentModelContent);
        }
    }
}
