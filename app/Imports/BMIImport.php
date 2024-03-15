<?php

namespace App\Imports;

use App\Models\SpecificQuotaBoneMineral;
use App\Models\SpecificQuotaVolume;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BMIImport implements ToModel,WithHeadingRow, SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new SpecificQuotaVolume([
            'vol_min' => isset($row['vol_min']) ? (float)$row['vol_min'] : null,
            'vol_max'=> isset($row['vol_max']) ? (float)$row['vol_max'] : null,
            'result'=> $row['result'] ?? '',
            'note'=> $row['note'] ?? '',
        ]);
    }
    public function headingRow(): int
    {
        return 1;
    }
}
