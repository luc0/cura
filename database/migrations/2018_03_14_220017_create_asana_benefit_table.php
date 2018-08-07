<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsanaBenefitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asana_benefit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asana_id')->unsigned()
                ->foreign('asana_id')
                ->references('id')
                ->on('asanas')
                ->nullable();
            $table->integer('benefit_id')->unsigned()
                ->foreign('benefit_id')
                ->references('id')
                ->on('benefits')
                ->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asanas_benefits');
    }
}
