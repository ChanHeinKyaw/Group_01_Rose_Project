<?php

namespace App\Imports;

use App\Models\Record;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RecordsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Record([
            'user_id' => $row['user_id'],
            'user_name' => $row['user_name'],
            'case' => $row['case'],
            'address' => $row['address'],
        ]);
    }
}
