<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('version_php')
                ->nullable()
                ->after('key');
            $table->string('version_laravel')
                ->nullable()
                ->after('version_php');
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('version_laravel');
            $table->dropColumn('version_php');
        });
    }
};
