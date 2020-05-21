<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('classification');
            $table->string('subject');
            $table->string('document_type');
            $table->string('sender_name');
            $table->string('sender_profile');
            $table->string('mode_of_delivery');
            $table->string('addressee');
            $table->string('office_name');
            $table->string('document_file');
            $table->string('date_received');
            $table->string('time_received');
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
        Schema::dropIfExists('documents');
    }
}
