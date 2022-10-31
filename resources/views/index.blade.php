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
    {{-- soal 3 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 3</h1>
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
    {{-- soal 4 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 4</h1>
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
    {{-- soal 5 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 5</h1>
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
    {{-- soal 6 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 6</h1>
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
    {{-- soal 7 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 7</h1>
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
    {{-- soal 8 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 8</h1>
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
    {{-- soal 9 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 9</h1>
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
    {{-- soal 10 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 10</h1>
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
    {{-- soal 11 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 11</h1>
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
    {{-- soal 12 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 12</h1>
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
    {{-- soal 13 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 13</h1>
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
    {{-- soal 14 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 14</h1>
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
    {{-- soal 15 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 15</h1>
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
    {{-- soal 16 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 16</h1>
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
    {{-- soal 17 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 17</h1>
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
    {{-- soal 18 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 18</h1>
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
    {{-- soal 19 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 19</h1>
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
    {{-- soal 20 --}}
    <div class="container text-center p-4">
        <h1>Jawaban Soal 20</h1>
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
</body>

</html>
