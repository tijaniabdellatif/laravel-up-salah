<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiblioItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biblio_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('biblionumber')->constrained('biblios','biblionumber');
            $table->string('item_type')->nullable();
            $table->string('ISBN')->nullable();
            $table->string('ISSN')->nullable();
            $table->string('EAN')->nullable();
            $table->longText('volume')->nullable();
            $table->longText('number')->nullable();
            $table->mediumText('publication_year')->nullable();
            $table->string('publisher_code')->nullable();
            $table->date('volume_date')->nullable();
            $table->mediumText('volumedesc')->nullable();
            $table->longText('collection_title')->nullable();
            $table->mediumText('collectionissn')->nullable();
            $table->longText('collection_volume')->nullable();
            $table->mediumText('edition_state')->nullable();
            $table->mediumText('edition_resp')->nullable();
            $table->string('illus')->nullable();
            $table->string('pages')->nullable();
            $table->longText('notes')->nullable();
            $table->string('size')->nullable();
            $table->string('place')->nullable();
            $table->string('lccn')->nullable();
            $table->mediumText('url')->nullable();
            $table->string('cn_source',10)->nullable();
            $table->string('cn_class')->nullable();
            $table->string('cn_item')->nullable();
            $table->string('cn_suffix')->nullable();
            $table->string('cn_sort')->nullable();
            $table->string('agerestriction')->nullable();
            $table->integer('total_issues')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biblio_items');
    }
}
