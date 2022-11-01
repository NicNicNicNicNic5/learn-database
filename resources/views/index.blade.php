<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book List</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    {{-- soal 1 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 1</h1>
        <h4>Soal : Query semua data yang ada secara lengkap</h4>
        <h4>Query : $soal1 = DB::table("employees")->select('*')->get();</h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal1 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 2 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 2</h1>
        <h4>Soal : Query hanya pegawai yang tanggal masuknya sebelum tahun 2018</h4>
        <h4>Query : $soal2 = DB::table("employees")->select('*')->WHERE("tanggal_masuk","<","2018/01/01")->get();</h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal2 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 3 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 3</h1>
        <h4>Soal : Query pegawai yang jabatannya sebagai "Manajer"</h4>
        <h4>Query : $soal3 = DB::table("employees")->select('*')->WHERE("jabatan","=","manajer")->get();</h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal3 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 4 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 4</h1>
        <h4>Soal : Query pegawai yang statusnya "Aktif"</h4>
        <h4>Query : $soal4 = DB::table("employees")->select('*')->WHERE("status","=","1")->get();</h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal4 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 5 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 5</h1>
        <h4>Soal : Query pegawai yang jabatannya "Staf" dan statusnya "Cuti"</h4>
        <h4>Query : $soal5 = DB::table("employees")->select('*')->WHERE("jabatan","=","Staf")->WHERE("status","=","0")->get();</h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal5 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 6 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 6</h1>
        <h4>Soal : Query pegawai yang berasal dari divisi "Gudang" dan tanggal masuknya di dalam tahun 2019-2020</h4>
        <h4>Query : $soal6 = DB::table("employees")->select('*')->WHERE("nip","LIKE","GU%")->WHERE("tanggal_masuk",">","2018/12/31")->WHERE("tanggal_masuk","<","2020/01/01")->get();</h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal6 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 7 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 7</h1>
        <h4>Soal : Query jumlah data pegawai yang tersimpan di tabel</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>Jumlah data</th>
            </thead>
            <tbody>
                    {{-- {{ $soal7 }} --}}
                    <?php
                    print($hitung7);
                    ?>

            </tbody>
        </table>
    </div>
    {{-- soal 8 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 8</h1>
        <h4>Soal : Query nama pegawai dan masa kerjanya terhitung sejak tanggal masuk hingga hari ini dalam satuan hari</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal8 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 9 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 9</h1>
        <h4>Soal : Query jumlah pegawai menurut divisi</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal9 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 10 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 10</h1>
        <h4>Soal : Query jumlah pegawai menurut jabatannya</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal10 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 11 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 11</h1>
        <h4>Soal : Query jumlah pegawai menurut statusnya</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal11 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 12 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 12</h1>
        <h4>Soal : Query pegawai yang paling lama masa kerjanya</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal12 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 13 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 13</h1>
        <h4>Soal : Query pegawai yang paling baru masuk kerja</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal13 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 14 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 14</h1>
        <h4>Soal : Query pegawai yang paling tua dan paling lama masa kerjanya</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal14 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 15 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 15</h1>
        <h4>Soal : Query pegawai yang paling muda dan paling lama masa kerjanya</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal15 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 16 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 16</h1>
        <h4>Soal : Query pegawai yang paling muda dan paling lama masa kerjanya</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal16 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 17 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 17</h1>
        <h4>Soal : Query divisi yang paling sedikit pegawainya</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal17 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 18 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 18</h1>
        <h4>Soal : Query jumlah pegawai menurut divisi dan statusnya</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal18 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 19 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 19</h1>
        <h4>Soal : Query jumlah pegawai menurut divisi dan jabatannya</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal19 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
    {{-- soal 20 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 20</h1>
        <h4>Soal : Query jumlah pegawai menurut kelompok usia: < 25 tahun, 25-35 tahun, 36-45 tahun, 46-55 tahun, dan > 55 tahun</h4>
        <h4>Query : </h4>
        <table class="table ">
            <thead>
                <th>nip</th>
                <th>nama_pegawai</th>
                <th>tanggal_lahir</th>
                <th>jabatan</th>
                <th>tanggal_masuk</th>
                <th>status</th>
            </thead>
            <tbody>
                @forelse ($soal20 as $employee)
                    <tr>
                        <td>{{ $employee->nip }}</td>
                        <td>{{ $employee->nama_pegawai }}</td>
                        <td>{{ $employee->tanggal_lahir }}</td>
                        <td>{{ $employee->jabatan }}</td>
                        <td>{{ $employee->tanggal_masuk }}</td>
                        <td>{{ $employee->status }}</td>
                    </tr>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data!</div>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
