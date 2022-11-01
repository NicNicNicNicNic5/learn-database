<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App\Http\Controllers\EmployeeControler;
use Carbon\Carbon;
use Hamcrest\Core\AllOf;

class EmployeeController extends Controller
{
    public function insert()
    {
        // ...
        $employees = DB::table('employees')->insert(
            [
                //data 1
                [
                    'nip' => 'IT001',
                    'nama_pegawai' => 'Asep',
                    'tanggal_lahir' => '2001/01/01', //format
                    // 'tanggal_lahir' => Carbon::now(),
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2012/08/01',
                    'status' => '1'
                ],
                //data 2
                [
                    'nip' => 'KU001',
                    'nama_pegawai' => 'Aloy',
                    'tanggal_lahir' => '2001/12/20',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2011/01/01',
                    'status' => '1'
                ],
                //data 3
                [
                    'nip' => 'MK001',
                    'nama_pegawai' => 'Chika',
                    'tanggal_lahir' => '2002/02/27',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2018/01/29',
                    'status' => '1'
                ],
                //data 4
                [
                    'nip' => 'PR001',
                    'nama_pegawai' => 'Eres',
                    'tanggal_lahir' => '2002/07/28',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2019/08/09',
                    'status' => '1'
                ],
                //data 5
                [
                    'nip' => 'GU001',
                    'nama_pegawai' => 'Vanka',
                    'tanggal_lahir' => '2001/08/09',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2017/08/08',
                    'status' => '1'
                ],
                //data 6
                [
                    'nip' => 'DV001',
                    'nama_pegawai' => 'Michelle',
                    'tanggal_lahir' => '2002/06/06',
                    'jabatan' => 'Staf',
                    'tanggal_masuk' => '2016/02/03',
                    'status' => '1'
                ],
                //data 7
                [
                    'nip' => 'IT002',
                    'nama_pegawai' => 'Sunagar',
                    'tanggal_lahir' => '1995/01/02',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2014/08/01',
                    'status' => '1'
                ],
                //data 8
                [
                    'nip' => 'KU002',
                    'nama_pegawai' => 'Deden',
                    'tanggal_lahir' => '2004/12/20',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2011/01/01',
                    'status' => '1'
                ],
                //data 9
                [
                    'nip' => 'MK002',
                    'nama_pegawai' => 'Andre',
                    'tanggal_lahir' => '2002/02/28',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2018/01/29',
                    'status' => '1'
                ],
                //data 10
                [
                    'nip' => 'PR002',
                    'nama_pegawai' => 'Eyliem',
                    'tanggal_lahir' => '2003/08/28',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2019/12/09',
                    'status' => '1'
                ],
                //data 11
                [
                    'nip' => 'GU002',
                    'nama_pegawai' => 'Angela',
                    'tanggal_lahir' => '2001/08/09',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2020/09/08',
                    'status' => '1'
                ],
                //data 12
                [
                    'nip' => 'DV002',
                    'nama_pegawai' => 'Karen',
                    'tanggal_lahir' => '2002/10/10',
                    'jabatan' => 'Asisten Manajer',
                    'tanggal_masuk' => '2013/02/03',
                    'status' => '1'
                ],
                //data 13
                [
                    'nip' => 'IT003',
                    'nama_pegawai' => 'Sunarya',
                    'tanggal_lahir' => '2001/01/08',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2018/08/01',
                    'status' => '1'
                ],
                //data 14
                [
                    'nip' => 'KU003',
                    'nama_pegawai' => 'Surya',
                    'tanggal_lahir' => '2001/04/23',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2019/08/01',
                    'status' => '1'
                ],
                //data 15
                [
                    'nip' => 'MK003',
                    'nama_pegawai' => 'Sinar',
                    'tanggal_lahir' => '2003/02/04',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2020/01/05',
                    'status' => '1'
                ],
                //data 16
                [
                    'nip' => 'PR003',
                    'nama_pegawai' => 'Jonathan',
                    'tanggal_lahir' => '2002/09/11',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2019/08/14',
                    'status' => '1'
                ],
                //data 17
                [
                    'nip' => 'GU003',
                    'nama_pegawai' => 'Ferdi',
                    'tanggal_lahir' => '2001/04/19',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2017/03/08',
                    'status' => '1'
                ],
                //data 18
                [
                    'nip' => 'DV003',
                    'nama_pegawai' => 'Tanto',
                    'tanggal_lahir' => '2002/05/16',
                    'jabatan' => 'Manajer',
                    'tanggal_masuk' => '2016/06/09',
                    'status' => '1'
                ],
                //data 19
                [
                    'nip' => 'IT004',
                    'nama_pegawai' => 'Krisna',
                    'tanggal_lahir' => '2001/02/26',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2021/08/11',
                    'status' => '1'
                ],
                //data 20
                [
                    'nip' => 'KU004',
                    'nama_pegawai' => 'Gunawan',
                    'tanggal_lahir' => '2003/12/02',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2015/06/21',
                    'status' => '1'
                ],
                //data 21
                [
                    'nip' => 'MK004',
                    'nama_pegawai' => 'Arby',
                    'tanggal_lahir' => '2002/10/19',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2018/05/22',
                    'status' => '1'
                ],
                //data 22
                [
                    'nip' => 'PR004',
                    'nama_pegawai' => 'Sofyan',
                    'tanggal_lahir' => '2002/07/18',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2019/02/19',
                    'status' => '1'
                ],
                //data 23
                [
                    'nip' => 'GU004',
                    'nama_pegawai' => 'Sauri',
                    'tanggal_lahir' => '2001/04/15',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2017/03/15',
                    'status' => '1'
                ],
                //data 24
                [
                    'nip' => 'DV004',
                    'nama_pegawai' => 'Jaya',
                    'tanggal_lahir' => '2002/08/12',
                    'jabatan' => 'Supervisor',
                    'tanggal_masuk' => '2020/05/13',
                    'status' => '1'
                ],
                //data 25
                [
                    'nip' => 'IT005',
                    'nama_pegawai' => 'Yosef',
                    'tanggal_lahir' => '2002/07/08',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2022/03/01',
                    'status' => '1'
                ],
                //data 26
                [
                    'nip' => 'KU005',
                    'nama_pegawai' => 'Michael',
                    'tanggal_lahir' => '2001/12/27',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2021/03/02',
                    'status' => '1'
                ],
                //data 27
                [
                    'nip' => 'MK005',
                    'nama_pegawai' => 'Hansel',
                    'tanggal_lahir' => '2002/02/04',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2018/01/31',
                    'status' => '1'
                ],
                //data 28
                [
                    'nip' => 'PR005',
                    'nama_pegawai' => 'Bima',
                    'tanggal_lahir' => '2002/09/28',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2022/08/09',
                    'status' => '1'
                ],
                //data 29
                [
                    'nip' => 'GU005',
                    'nama_pegawai' => 'Willy',
                    'tanggal_lahir' => '2001/03/17',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2020/04/05',
                    'status' => '1'
                ],
                //data 30
                [
                    'nip' => 'DV005',
                    'nama_pegawai' => 'William',
                    'tanggal_lahir' => '2000/04/24',
                    'jabatan' => 'Kepala',
                    'tanggal_masuk' => '2016/03/17',
                    'status' => '1'
                ]
            ]
        );
        dump($employees);
    }

    // public function index() //buat data
    // {
    //     $employees = DB::table("employees")->
    //     select('*')->
    //     get();
    //     dd($employees);
    //     return view('index', compact('employees'));

    //     // dump($employees);
    //     // return view('booklist', ['books' => [$books]]);
    //     return view('index', compact($employees));
    // }

    public function index() //buat tampilan
    {
        $soal1 = DB::table("employees")->select('*')->get();
        $soal2 = DB::table("employees")->select('*')->WHERE("tanggal_masuk", "<", "2018/01/01")->get();
        $soal3 = DB::table("employees")->select('*')->WHERE("jabatan", "=", "manajer")->get();
        $soal4 = DB::table("employees")->select('*')->WHERE("status", "=", "1")->get();
        $soal5 = DB::table("employees")->select('*')->WHERE("jabatan", "=", "Staf")->WHERE("status", "=", "0")->get();
        $soal6 = DB::table("employees")->select('*')->WHERE("nip", "LIKE", "GU%")->WHERE("tanggal_masuk", ">", "2018/12/31")->WHERE("tanggal_masuk", "<", "2020/01/01")->get();
        $soal7 = DB::table("employees")->select('*')->get();
        $soal7 = count($soal7);
        // $soal7 = DB::table("employees")->select(DB::raw("COUNT(*) as Jumlah"))->get();
        // $soal7 = DB::table("employees")->select("COUNT(*) as count_row")->get();
        // return $soal7;
        // dd($soal7);
        // dump($soal7);

        $soal8 = DB::table("employees")->select('nama_pegawai','tanggal_masuk')->get();
        $harimasuk8 = DB::table("employees")->select('tanggal_masuk')->get();
        $hariini = now();
        $harilahir = DB::table("employees")->select('tanggal_lahir')->get();
        $harikerja8 = 0;


        // $harikerja8 = $hariini - $harimasuk8;
        // $employees = Employee::whereBetween('hire_date', [Carbon::now(), Carbon::now()->addYear()])->get();
        // $harikerja8 = DB::table("employees")->whereBetween('tanggal_masuk', [Carbon::now(), Carbon::now()->addDays()]);
        $today = Carbon::today()->format('m/d/Y');
        // $tes = strtotime($today);
        // $tes2 = getdate($harimasuk8);

        // $harikerja8 = $today - $harimasuk8;
        // $harikerja8 = $today ->diff($harimasuk8);
        // date_diff($harimasuk8,$tes4);

        // $harikerja8 = count($soal8);
        // $soal8 = DB::table("employees")->select('nama_pegawai', 'status')->get();
        // $soal8 = DB::table("employees")->select('nama_pegawai', 'date_diff(now(), $harimasuk8')->get();
        // $harikerja8 = date_diff(now(),now());
        // $soal8 = DB::table("employees")->select('nama_pegawai')->select(date_diff(now(), ))->get();


        $soal9 = DB::table("employees")->select(DB::raw('LEFT(nip, 2) as divisi'), DB::raw('count(*) as jumlah'))->groupBy('divisi')->having('divisi','LIKE','__%')->get();
        $soal10 = DB::table("employees")->select('jabatan', DB::raw('count(*) as jumlah'))->groupBy('jabatan')->get();
        $soal11 = DB::table("employees")->select('*')->get();
        $soal12 = DB::table("employees")->select('*')->get();
        $soal13 = DB::table("employees")->select('*')->get();
        $soal14 = DB::table("employees")->select('*')->get();
        $soal15 = DB::table("employees")->select('*')->get();
        $soal16 = DB::table("employees")->select('*')->get();
        $soal17 = DB::table("employees")->select('*')->get();
        $soal18 = DB::table("employees")->select('*')->get();
        $soal19 = DB::table("employees")->select('*')->get();
        $soal20 = DB::table("employees")->select('*')->get();
        return view('index', compact(
            'soal1',
            'soal2',
            'soal3',
            'soal4',
            'soal5',
            'soal6',
            'soal7',
            'soal8',
            'harikerja8',
            'soal9',
            'soal10',
            'soal11',
            'soal12',
            'soal13',
            'soal14',
            'soal15',
            'soal16',
            'soal17',
            'soal18',
            'soal19',
            'soal20'
        ));
    }

    public function delete()
    {
        $result = DB::delete("DELETE FROM employees WHERE nip = ?", ['IT001']);
        dump($result);
    }
}
