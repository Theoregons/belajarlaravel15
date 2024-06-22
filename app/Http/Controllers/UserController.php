<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\SiswaImport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function import(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }

    public function siswaimport(Request $request)
    {
        Excel::import(new SiswaImport,  $request->file('file')->store('temp'));
        return redirect('/siswa')->with('success', 'Berhasil Import File!');
    }
}
