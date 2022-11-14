<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('nip', 5)->unique();
            $table->string('nama_pegawai');
            $table->date('tanggal_lahir');
            $table->string('jabatan');
            $table->date('tanggal_masuk');
            $table->char('status', 1);
        });

        //harusnya gini
        // Schema::create('employees', function (Blueprint $table) {
        //     $table->char('nip', 5)->primary();
        //     $table->string('nama_pegawai');
        //     $table->date('tanggal_lahir');
        //     $table->string('jabatan');
        //     $table->date('tanggal_masuk');
        //     $table->char('status', 1);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
