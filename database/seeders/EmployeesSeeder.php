<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $faker = DB::create('id_ID');

    //     DB::table('employees')->insert([
    //         'nip' => 'IT001',
    //         'nama_pegawai' => 'jokowi',
    //         'nama_pegawai' => 'jokowi',
    //         'nama_pegawai' => 'jokowi',
    //         'nama_pegawai' => 'jokowi',
    //     ]);

    //     $divisi = ['IT', 'KU', 'MK', 'PR', 'GU', 'DV'];

    //     foreach($divisi as $d){
    //         for ($i = 1; $i <= rand(20, 40); $i++){
    //             DB::table('employees')->insert({
    //                 'nip' => $faker->numerify("$d###"),
    //                 'nama_pegawai' => $faker->name(),
    //                 'tanggal_lahir' => $faker->dateTimeBetween('')
    //             })
    //         }
    //     }
    // }
}
