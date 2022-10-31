<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App\Http\Controllers\BooksControler;
use Carbon\Carbon;

class BookController extends Controller
{
    // public function index() //buat data
    // {
    //     //select
    //     $books = DB::table("books")->
    //     select('judul')->
    //     where('harga', '>=', '0')->
    //     orderByDesc('harga')->
    //     get();
    //     dd($books);
    //     return view('booklist', compact('books'));

    //     // dump($books);
    //     // return view('booklist', ['books' => [$books]]);
    // }

    public function index() //buat tampilan
    {
        //teknis dasar melakukan query di laravel
        //select
        $books = DB::select("SELECT * FROM books"); //syntax sql dalam bentuk string

        // dump($books);
        return view('booklist', compact('books'));
    }

    public function insert()
    {
        // //manual
        // $result = DB::insert("INSERT INTO books (judul, halaman, isbn, kategori, penerbit, harga, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())", [
        //     "Buku Nikah",
        //     "10",
        //     "1234567890123",
        //     "rumah tangga",
        //     "kua",
        //     "0.05"
        // ]); //? = placeholder dari preparedStatement

        // dump($result);

        //binding
        $result = DB::insert("INSERT INTO books (judul, halaman, isbn, kategori, penerbit, harga, created_at) VALUES (:judul, :halaman, :isbn, :kategori, :penerbit, :harga, NOW())", [
            "judul" => "Closers",
            "halaman" => "100",
            "isbn" => "1234567890123",
            "kategori" => "game",
            "penerbit" => "nadek",
            "harga" => "0.05"
        ]); //? = placeholder dari preparedStatement

        dump($result);

        // //manual2
        // $result = DB::insert("INSERT INTO books (judul, halaman, isbn, kategori, penerbit, harga, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [
        //     "Food by Fire",
        //     "10",
        //     "1234567890123",
        //     "rumah tangga",
        //     "kua",
        //     "0.05",
        //     Carbon::now(),
        //     Carbon::now()
        // ]); //? = placeholder dari preparedStatement

        // dump($result);
    }

    public function delete()
    {
        $result = DB::delete("DELETE FROM books WHERE judul = ?", ['buku nikah']);

        dump($result);
    }

    // public function delete(){
    //     $result = DB::delete("DELETE FROM books WHERE judul = 'buku nikah'");

    //     dump($result);
    // }

    public function update()
    {
        $result = DB::update(
            "UPDATE books SET kategori = '  Cooking' WHERE ISBN = ?",
            ['9781592339754']
        );
        dump($result);
    }

    public function statement()
    {
        $result = DB::statement("TRUNCATE books");
        return ('Tabel sudah kosong!');
    }

    public function select()
    {
        $result = DB::table('books')->get();
        return view('booklist', ['books' => $result]);
    }

    public function insert2()
    {
        // ...
        $result = DB::table('books')->insert2([
            [
                'judul' => 'The Bench',
                'ISBN' => '9780593434512',
                'kategori' => 'Growing Up & Facts of Life',
                'harga' => 181500,
                'halaman' => 40,
                'penerbit' => 'Random House Books for Young Readers'
            ],
            [
                'judul' => 'Economic Dignity',
                'ISBN' => '9781984879875',
                'kategori' => 'Business & Leadership',
                'harga' => 222900,
                'halaman' => 384,
                'penerbit' => 'Penguin Press'
            ],
            [
                'judul' => 'Food by Fire: Grilling and BBQ with Derek Wolf of Over the Fire Cooking',
                'ISBN' => '9781592339754',
                'kategori' => 'Meat Cooking',
                'harga' => 310750,
                'halaman' => 208,
                'penerbit' => 'Harvard Common Press'
            ],
            [
                'judul' => 'The 4-Hour Workweek: Escape 9-5, Live Anywhere, and Join the New Rich',
                'ISBN' => '9780307465351',
                'kategori' => 'Self-Improvement',
                'harga' => 253500,
                'halaman' => 448,
                'penerbit' => 'Harmony'
            ]
        ]);
    }

    public function select2()
    {
        $result = DB::table('books')->where('harga', '>', 200000)->orderBy(
            'harga',
            'desc'
        )->get();
        return view('booklist', ['books' => $result]);
    }

    public function insert3()
    {
        $result = DB::table('books')->insert3(
            [
                [
                    'judul' => 'Economic Dignity',
                    'ISBN' => '9781984879875',
                    'kategori' => 'Business & Leadership',
                    'harga' => 222900,
                    'halaman' => 384,
                    'penerbit' => 'Penguin Press'
                ]
            ]
        );
        dump($result);
    }
}
