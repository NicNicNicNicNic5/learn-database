<?php

namespace App\Http\Controllers;

use App\Models\Selling;
use App\Models\Book;
use Illuminate\Http\Request;

class SellingController extends Controller
{
    public function select()
    {
        $selling = Selling::find(5);
        echo $selling->acc_sold_count . " buku <b>" . $selling->book->judul . "</b> terjual.";
    }

    public function insert()
    {
        // //add selling to existing book data
        // $selling = new Selling();
        // $selling->acc_earnings = 1000000;
        // $selling->acc_sold_count = 10;
        // //ngasih data penjualan ke buku yang uda ada (ceritanya)
        // $selling->book_id = 1; //kasih ke foreign keynya
        // $selling->save();

        //associateNew (add new book and its selling data
        // $newBook = new Book();
        // $newBook->judul = 'Eloquent ORM';
        // $newBook->harga = 100000;
        // $newBook->halaman = 100;
        // $newBook->save();

        // $newSelling = new Selling;
        // $newSelling->acc_earnings = 700000;
        // $newSelling->acc_sold_count = 7;
        // $newSelling->book()->associate($newBook); // penting
        // $newSelling->save();

        // echo "Penambahan $newBook->judul dan penjualannya berhasil.";


        //associate ke buku yang sudah ada
        // $book = Book::find(9);
        // $newSelling = new Selling;
        // $newSelling->acc_earnings = $book->harga * 25;
        // $newSelling->acc_sold_count = 25;
        // $newSelling->book()->associate($book);
        // $newSelling->save();
        // echo "Data penjualan $book->judul sudah ditambahkan.";
    }

    public function update()
    {
    }

    public function delete(){
        $selling = Selling::find(4);
        $selling->delete();
        $selling->book()->delete(); //keunggulan dari ORM, kenapa bisa? karena dari awal uda nyimpen object, sebagai object $selling

    }
}
