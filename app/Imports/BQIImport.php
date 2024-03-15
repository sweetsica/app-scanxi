<?php

namespace App\Imports;

use App\Models\SpecificQuotaBoneMineral;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BQIImport implements ToModel,WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SpecificQuotaBoneMineral([
            'age_min'=> $row['age_min'] ?? '',
            'age_max'=> $row['age_max'] ?? '',
            'percent'=> isset($row['percent']) ? (float)$row['percent'] : null,
        ]);
    }
    public function headingRow(): int
    {
        return 1;
    }
}
