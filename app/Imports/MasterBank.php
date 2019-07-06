<?php

namespace App\Imports;

use App\master_bank;
use Maatwebsite\Excel\Concerns\ToModel;

class MasterBank implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new master_bank([
            '//'
        ]);
    }
}
