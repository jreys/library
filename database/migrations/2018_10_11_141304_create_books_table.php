<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * @var string - Datatable's name.
     */
    const TABLE_NAME = 'books';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() : void
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('quantity');
            $table->integer('pages');
            $table->timestamps();

            // Adding foreign keys
            $table->unsignedInteger('author')
                ->nullable();

            $table->unsignedInteger('book_type')
                ->nullable();

            // Adding foreing key references
            $table->foreign('author', self::TABLE_NAME . "_author_foreign")
                ->references('id')
                ->on('authors')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign("book_type", self::TABLE_NAME . "_book_type_foreign")
                ->references('id')
                ->on('book_types')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() : void
    {
        // Removing foreign key references
        Schema::table(self::TABLE_NAME, function (Blueprint $table) {
            $table->dropForeign(self::TABLE_NAME . '_author_foreign');
            $table->dropForeign(self::TABLE_NAME . '_book_type_foreign');
        });

        Schema::dropIfExists('books');
    }
}
