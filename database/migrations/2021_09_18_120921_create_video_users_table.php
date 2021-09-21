<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_users', function (Blueprint $table) {
            $table->id();
           $table->foreignId('user_id')->constrained()->cascadeOnDelete();
           $table->foreignId('video_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('video_user');
    }
}
