<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('icon');
            $table->string('subject');
            $table->string('subject_name');
            $table->string('unit');
            $table->string('unit_name');
            $table->string('name');
            $table->string('type');
            $table->string('phase');
            $table->string('sessions')->nullable();
            $table->string('estimated_time')->nullable();
            $table->text('contents');
            $table->text('resources');
            $table->text('education_metodologies');
            $table->text('learning_results')->nullable();
            $table->text('evaluation_criteria')->nullable();
            $table->text('didactic_objectives');
            $table->text('description');
            $table->text('statement');
            $table->text('steps')->nullable();
            $table->text('evaluation')->nullable();
            $table->string('author');
            $table->string('solution_url')->nullable();
            $table->text('solution')->nullable();
            $table->timestamps();

            $table->unique(['code', 'unit']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
};
