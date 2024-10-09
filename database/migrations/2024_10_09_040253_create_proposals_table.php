<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('email');
            $table->unsignedSmallInteger('hours');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')
                ->references('id')
                ->on('projects');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
