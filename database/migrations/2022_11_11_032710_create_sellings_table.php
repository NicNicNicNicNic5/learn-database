<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellings', function (Blueprint $table) {
            $table->id();
            $table->decimal('acc_earnings', 11, 2)->nullable();
            $table->integer('acc_sold_count')->nullable();
            $table->unsignedBigInteger('book_id')->unique();
            // default auto increment laravel = unsignedBigInteger, karna sebagai fk jangan lupa kasih unique (karna membuat relasi 1 to 1)
            $table->timestamps();
            //delete cascade di foreign key
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            //foreign key cara ke 2 v
            // $table->foreignId('book_id')->unique()->constrained('books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellings');
    }
}
