<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class CreateLogs extends Migration
{
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->string('ident')->default('');
            $table->integer('level')->default(0);
            $table->string('level_name')->default('');
            $table->string('channel')->default('');
            $table->dateTime('logged_at')->default(Carbon::now());
            $table->mediumText('message');
            $table->binary('formatted');
            $table->unsignedBigInteger('size')->default(0);
            $table->timestamps();
            $table->foreign('project_id')->on('projects')->references('id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
