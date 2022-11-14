<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Selling;
use Illuminate\Http\Request;
use Error; //error yang generic / umum
use PDO;

class BookController extends Controller
{
    public function select()
    {
        $book = Book::find(4);

        // //tampilin semua dari book
        // dump($book);
        // //tampilin semua dari book sebagai selling
        // dump($book->selling);

        //tampilin buku beserta kategorinya 1 per 1
        echo "<h3>" . $book->judul . "</h3>";
        echo "<p>";
        echo "harga: " . $book->harga . "<br>";
        echo "halaman: " . $book->halaman . "<br>";
        echo "Pendapatan penjualan: " . $book->selling->acc_earnings . "<br>";
        echo "Buku terjual: " . $book->selling->acc_sold_count . "<br>";
        echo "Rata-rata nilai jual buku: " . ($book->selling->acc_earnings / $book->selling->acc_sold_count);
        echo "</p>";

        //nama teknik = lazy loading
        //select all dari 1 tabel, smua data dari 1 tabel itu kita select lagi ke tabel yg berelasi
        //select * from books;
        //select * from sellings where book_id = n;
        // $allBooks = Book::all();

        //nama teknik = eager loading
        //select * from bookk where id IN (select id from selling);
        $allBooks = Book::with('selling')->get();
        dump($allBooks);

        //nyari semua buku yang punya relasi selling
        $allBooks = Book::has('selling')->get();
        dump($allBooks);

        //nyari semua buku yang ga punya relasi selling
        $allBooks = Book::doesntHave('selling')->get();
        dump($allBooks);

        //filter semua buku yang punya relasi selling DAN pakai fitur where terhadap data yang berelasi
        $allBooks = Book::whereHas('selling', function ($row) {
            $row->where('acc_earnings', '<', 1000000);
        })->get();
        dump($allBooks);

        //tampilin semua buku yang punya relasi selling dengan yang memiliki selling (?)
        $allBooks = Book::with('selling')->has('selling')->get();
        dump($allBooks);
    }

    public function insert()
    {
        // $book = new Book();
        // $book->judul = "Buku Baru";
        // $book->harga = 10000;
        // $book->halaman = 10;
        // //nginput biasa (yg ada pk)
        // $book->save(); //secara ORM

        // $selling = new Selling();
        // $selling->acc_earnings = 1000000;
        // $selling->acc_sold_count = 100;
        // //nginput table yang ada fknya
        // $book->selling()->save($selling);

        // echo "Data buku " . $book->judul . " tersimpan dengan jumlah buku terjual sebanyak " . $book->selling->acc_sold_count;

        //errorrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr
        //mass assignment
        $book = Book::create([
            "judul" => "Buku Baru #2",
            "harga" => 120000,
            "halaman" => 50
        ]);

        $book->selling()->create(
            [
                "acc_earnings" => 1000000,
                "acc_sold_count" => 100
            ]
        );

        echo "Data buku <b>" . $book->judul . "</b> tersimpan dengan jumlah buku terjual sebanyak " . $book->selling->acc_sold_count;
    }

    public function update()
    {
        //mass assignment
        // $book = Book::find(3);
        // $book-> selling()->update([
        //     "acc_sold_count"=>300
        // ]);

        // echo "buku <b>" . $book->judul . "</b> terjual sebanyak " . $book->selling->acc_sold_count;

        //update dengan pake pencegahan
        // $book = Book::find(1);

        // if($book->selling){
        //     $book->selling()->update([
        //         "acc_sold_count"=>300
        //     ]);


        //     echo "buku <b>" . $book->judul . "</b> terjual sebanyak " . $book->selling->acc_sold_count;
        // } else {
        //     echo "Data buku <b>" . $book->judul . "</b> tidak ada data penjualan!";
        // }

        //update push (normal ORM)
        $bookToUpdate = Book::find(3); //atau where

        $bookToUpdate->selling->acc_earnings = 5000000;
        //push terhadap data parrent
        $bookToUpdate->push();
    }

    public function delete()
    {
        //delete normal
        $book = Book::find(3);
        $book->selling->delete(); //menghapus data selling saja
        $book->delete(); //menghapus data book saja (ada urutannya, fk dlu baru pk)

        //pakai pencegahan
        $book = Book::find(1);
        if ($book->selling) {
            $book->selling->delete();
        }
        $book->delete();

        //pake onDelete('cascade'); di migration fknya
        $book = Book::find(2);
        $book->delete();

        //*CATATAN
        //kenapa pas didelete, di selling ilang tapi di books ga ilang

        //struktur tabelnya beda, si data books pake softdelete, si selling ga pake softdelete
        //proses softdelete TIDAK MEMANGGIL query delete (sebenarnya query yg berjalan adalah update -> set). karna meng"update" jadi tidak hilang

        //kalau ingin hilang, harus menghilangkan softdelete di migration books dan importan model books
        //kalau menggunakan softdeletes, akan kehilangan fitur onDelete('cascade') di migration fk;
        //cara ngakalin : proses delete manual, dicek dulu, bisa panggil force delete();
    }
}

//
// BOOK CONTROLLER LAMA
//

// class BookController extends Controller
// {
//     public function insert()
//     {
//         // $book = new Book();

//         // $book->judul = "Buku #1";
//         // $book->halaman = 100;
//         // $book->penerbit = "ANDI";
//         // $book->harga = 100000;
//         // $book->isbn = "1234567890123";
//         // $book->kategori = "Undang-Undang";
//         // //baru melengkapi object, belum masuk ke database

//         // $book->save();

//         Book::create( //teknik mass assignment, harus tambahin di model, blom bisa banyak skaligus, pake array jg gagal
//             [
//                 //case sensitive
//                 'judul' => 'The Bench',
//                 'isbn' => '9780597434512',
//                 'kategori' => 'Growing Up & Facts of Life',
//                 'harga' => 181500,
//                 'halaman' => 40,
//                 'penerbit' => 'Random House Books for Young Readers'
//             ]
//         );
//     }

//     public function update()
//     {
//         // $book = Book::find(1);//harus pake idnya, cari tabel yg idnya 1 di model Book
//         // $book->judul = "Buku Bagus";
//         // $book->harga = 250000;


//         // $book = Book::where('isbn', '1234567890123')->first();//where = array of object, klo yakin cuma ada 1 data, pake function first(), klo banyak bisa pake for atau apapun yg bentuknya perulangan
//         // $book->judul = "Buku Jelek";
//         // $book->harga = 350000;

//         // $books = Book::where('harga', '<', 200000)->get(); //dapetin array of object collection, rundownnya lama dan berulang-ulang
//         // foreach($books as $book){
//         //     $book->judul = "Buku Saya";
//         //     $book->harga *= 1.5;
//         // }

//         // $book->save();
//         // dump($book);

//         Book::where('isbn', '1234567890123')->first()->update([
//             'judul' => "Buku Bagus",
//             'harga' => 100000
//         ]);
//     }

//     public function delete()
//     {
//         Book::find(1)->delete();//find dulu, kalo ada ya jalan, kalo ga ada ya error, id not found

//         // Book::destroy(1);//ga ada error, aman, bisa masukin lebih dari 1 id yang mau dihapus, tinggal masukin sebagai array
//         // echo Book::destroy(1);

//         // try {
//         //     Book::find(1)->delete();
//         // } catch (Error $error) {
//         //     echo "Error nih";
//         // }
//     }

//     public function select()
//     {
//         $result = Book::all(); //select all array of collection object

//         $result = Book::where('harga', '<', 200000)->get();

//         // $result = Book::latest()->get();

//         // $result = Book::withTrashed()->get();

//         foreach ($result as $book) {
//             echo "Judul buku: " . $book->judul . "<br>";
//         }


//         dump($result);
//     }

//     public function latest()
//     {
//         $result = Book::latest()->get(); // tampilin semua data diurutkan dari data yang terakhir kali diinputkan
//     }

//     public function softdelete()
//     //ngehapus data tapi data dari database tetep ada, yang bikin ga adanya ketika kita melakukan query, ketauannya dari 1 kolom baru dari tabel yang ngasih tau waktu kapan terakhir dihapus
//     //tambahkan function softDeletes(); di migration
//     //di function delete tambahkan //Book::find(1)->delete();
//     //tambahkan //use SoftDeletes; di book.php (model)
//     //pastikan di book.php bagian atas terdapat //use Illuminate\Database\Eloquent\SoftDeletes;
//     {

//     }

//     public function restore(){
//         //ngambil data yang uda dihapus bisa pake find / where
//         Book::withTrashed()->find(1)->restore();
//     }
// }

// //nanya date diff, cara ngurangin tanggal, ato cari selisih hari dari awal masuk kerja sampai sekarang

// //raw query = mudah, tpi problemnya sangat beresiko kalo kesusup si aplikasinya, istilah dihacking = SQL injection, hacker bisa nyusup lewat html, ketrigger lewat javascript, keambil ke backend(php), bisa ngelakuin reverse creater scaling, masuk ke project, ketrigger, baca sourcecode.
// //query builder = tengah2, kalo ada query yg komplek, ky subquery, join, agak sulit untuk pakai query builder, convenience tapi terbatas, hanya untuk yg umum
// //eloquent = paling efisien, tapi bergantung pada cara kerja si laravel, harus dipastiin bahwa data yg diolah harus biubah jadi collection dulu!
