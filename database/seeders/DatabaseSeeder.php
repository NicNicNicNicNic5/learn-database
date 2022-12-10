<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Book;
use App\Models\Category;
use App\Models\Selling;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create('id_ID');
        $faker->seed(123);

        //teknik mass assignment
        for ($i = 0; $i < 10; $i++) {
            Book::create(
                [
                    //atribut sentence otomatis ngerandom
                    'judul' => $faker->sentence,
                    //random angka 10.000-1.000.000
                    'harga' => $faker->randomFloat(0, 10000, 1000000),
                    //random number 3 digit
                    'halaman' => $faker->randomNumber(3),
                ]
            );
        }
        for ($i = 0; $i < 5; $i++) {
            Selling::create(
                [
                    'acc_earnings' => $faker->randomFloat(0, 0, 2000000),
                    'acc_sold_count' => $faker->randomNumber(3),
                    //paksa hasil randomnya unique
                    'book_id' => $faker->unique()->randomDigit,
                ]
            );
        }

        Category::create(
            [
                'kode' => 'AA001',
                'nama' => 'Horor',
                'deskripsi' => 'Horor berisi kisah-kisah yang tergolong mengerikan dan menyeramkan.',
            ]
        );
        Category::create(
            [
                'kode' => 'AB002',
                'nama' => 'Fiksi Ilmiah',
                'deskripsi' => 'Fiksi ilmiah merupakan kisah-kisah imajinasi dengan dasar ilmu
           pengetahuan.',
            ]
        );
        Category::create(
            [
                'kode' => 'AC003',
                'nama' => 'Lifestyle',
                'deskripsi' => 'Lifestyle merupakan kisah-kisah tentang gaya hidup.',
            ]
        );
        Category::create(
            [
                'kode' => 'AD004',
                'nama' => 'Romantis',
                'deskripsi' => 'Romantis merupakan kisah-kisah yang memuat nuansa romantis atau
           kemesraan.',
            ]
        );
        Category::create(
            [
                'kode' => 'AE005',
                'nama' => 'Petualangan',
                'deskripsi' => 'Petualangan memuat kisah-kisah eksplorasi, penjelajahan, atau menemukan
           sesuatu yang baru dalam perjalanan.',
            ]
        );
    }
}
