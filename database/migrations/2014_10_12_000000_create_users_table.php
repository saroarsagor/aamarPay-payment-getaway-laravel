<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
             $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique(); 
            $table->string('mobile')->unique()->nullable();
            $table->string('user_type')->default('coaching');
            $table->string('coaching_id')->nullable();
            $table->string('admin_id')->nullable();
            $table->string('teacher_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('coaching_no')->nullable();
            $table->string('last_login')->nullable();
            $table->string('status')->default(0);
            $table->string('verify_code')->nullable();
            $table->dateTime('verify_expires_at')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
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
