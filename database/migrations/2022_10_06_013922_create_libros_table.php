<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('libros', function (Blueprint $table) {
      $table->id();
      $table->string('titulo');
      $table->string('autor');
      $table->string('editorial');
      $table->string('genero');
      $table->string('isbn');
      $table->string('edicion');
      $table->string('anio');
      $table->string('idioma');
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
    Schema::dropIfExists('libros');
  }
}
