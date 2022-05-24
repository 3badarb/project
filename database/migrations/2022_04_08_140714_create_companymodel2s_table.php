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
        Schema::create('companymodel2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')
                ->references('id')
                ->on('jobs')
                ->onDelete('cascade');
            $table->string('evaluation')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('companymodel2s');
    }
};
