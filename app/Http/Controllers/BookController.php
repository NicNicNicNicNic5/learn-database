<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App\Http\Controllers\BooksControler;

class BookController extends Controller
{
    public function index()
    {
        //teknis dasar melakukan query di laravel
        //select
        $result = DB::select("SELECT * FROM books"); //syntax sql dalam bentuk string

        dump($result);
    }

    public function insert()
    {
        //manual
        $result = DB::insert("INSERT INTO books (judul, halaman, isbn, kategori, penerbit, harga, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())", [
            "Buku Nikah", "10", "1234567890123", "rumah tangga", "kua", "0.05"
        ]); //? = placeholder dari preparedStatement

        dump($result);

        //binding
        $result = DB::insert("INSERT INTO books (judul, halaman, isbn, kategori, penerbit, harga, created_at) VALUES (:judul, :halaman, :isbn, :kategori, :penerbit, :harga, NOW())", [
            "judul" => "Buku Nikah",
            "halaman" => "10",
            "isbn" => "1234567890123",
            "kategori" => "rumah tangga",
            "penerbit" => "kua",
            "harga" => "0.05"
        ]); //? = placeholder dari preparedStatement

        dump($result);
    }
}
