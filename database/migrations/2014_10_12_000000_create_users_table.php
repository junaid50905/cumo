<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dob');
            $table->string('type')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('avatar')->nullable();
            $table->string('signature')->nullable();
            $table->string('role_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });        

        // Create the admin user
        User::create([
            'user_id' => '1',
            'name' => 'admin',
            'dob' => '2000-10-10',
            'email' => 'admin@aamra.com.bd',
            'password' => Hash::make('123456'),
            'email_verified_at' => '2022-01-02 17:04:58',
            'avatar' => 'images/avatar-1.jpg',
            'signature' => 'images/avatar-1.jpg',
            'created_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
