<?php

namespace App\Imports;

use App\Models\SpecificQuotaAge;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AgeImport implements ToModel,WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SpecificQuotaAge([
            'age'=> $row['age'] ?? null,
            'sex'=> $row['sex'] ?? null,
            'height'=> $row['height'] ?? null,
            'weight'=> $row['weight'] ?? null,
            'rate'=> $row['rate'] ?? null,
            'result'=> $row['result'] ?? null,
            'note'=> $row['note'] ?? null,
        ]);
    }
    public function headingRow(): int
    {
        return 1;
    }
}
