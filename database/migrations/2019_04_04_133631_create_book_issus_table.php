<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookIssusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_issus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('id_number');
            $table->string('bname');
            $table->string('title');
            $table->date('return');
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
        Schema::dropIfExists('book_issus');
    }
}
