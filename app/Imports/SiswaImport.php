<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            'nis'     => $row[0],
            'nama'    => $row[1],
            'alamat' => $row[2],
            'sekolah_id' => $row[3],
        ]);
    }
}
