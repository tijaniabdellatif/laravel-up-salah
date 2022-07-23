<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('biblionumber')->constrained('biblios','biblionumber');
            $table->foreignId('biblioitemnumber')->constrained('biblio_items','id');
            $table->string('barcode');
            $table->string('itemcallnumber');
            $table->string('location');
            $table->integer("ccode");
            $table->string('itype');
            $table->integer('stock_number');
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
        Schema::dropIfExists('items');
    }
}
