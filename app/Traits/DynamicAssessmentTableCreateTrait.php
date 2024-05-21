<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Repositories\SetupAssessmentQuestionRepository;
use Illuminate\Support\Str;

trait DynamicAssessmentTableCreateTrait
{
    private SetupAssessmentQuestionRepository $assessmentRepository;

    public function __construct(SetupAssessmentQuestionRepository $assessmentRepository) {
        $this->assessmentRepository = $assessmentRepository;
    }

    public function updateDynamicTables($prefix, $categoryId)
    {
        $questions = $this->assessmentRepository->getQuestionCollectionAccordingSubCategory($categoryId)->toArray();

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
                $this->createDynamicModel($prefixedTableName);
            }

            // Create model for the table
            $this->createDynamicModel($prefixedTableName);

            foreach ($collection as $question) {
                if (isset($question['id'])) {
                    $optionName = "option_".$question['sub_category_id']."_" . $question['id'];
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

    public function createDynamicModel($tableName)
    {
        // Determine model class name
        $className = ucfirst(Str::camel(Str::singular($tableName)));

        // dd($className);
        // Determine file path
        $filePath = app_path('Models/' . $className . '.php');

        // Check if model file already exists
        if (!file_exists($filePath)) {
            // Model stub content
            $stub = <<<EOD
                    <?php

                    namespace App\Models;

                    use Illuminate\Database\Eloquent\Model;
                    use Illuminate\Database\Eloquent\Factories\HasFactory;

                    class $className extends Model
                    {
                        use HasFactory;
                        protected \$guarded = [];

                        // Add any additional model logic or properties here
                    }
                    EOD;

            // Write stub content to file
            file_put_contents($filePath, $stub);
        }
    }
}