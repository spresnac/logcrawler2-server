<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProjects extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('key');
            $table->timestamps();
            $table->timestamp('archived_at')->nullable();

            $table->foreign('user_id')->on('users')->references('id');
            $table->index('key', 'idx_projectkey');
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
