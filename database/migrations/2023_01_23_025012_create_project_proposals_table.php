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
        Schema::create('project_proposals', function (Blueprint $table) {
            $table->id();
            $table->id('sender_id');
            $table->id('recipient_id');
            $table->id('cc_id');
            $table->id('program_id');
            $table->string('project_title');
            $table->text('location');
            $table->string('budget_proposed');
            $table->text('description');
            $table->string('aprrove_date');
            $table->string('declined_data');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_proposals');
    }
};
