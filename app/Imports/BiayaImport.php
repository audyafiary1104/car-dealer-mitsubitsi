<?php

namespace App\Imports;

use App\Biaya;
use Maatwebsite\Excel\Concerns\ToModel;

class BiayaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Biaya([
            'kode_gl' => $row[0],
            'nama_gl' => $row[1],
            'type_gl' => $row[2],
            'level_gl' => $row[3],
            'group_gl' => $row[4],
            'linnk_gl' => $row[5]
        ]);
    }
}
