<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\AgeImport;
use App\Imports\BQIImport;
use App\Imports\BMIImport;

class ImportQuotaController extends Controller
{
    public function importAge(Request $request) {
        // dd('age');
        $url = $request->file('file');
        Excel::import(new AgeImport,$url,null,\Maatwebsite\Excel\Excel::XLSX);

        dd('Hoàn tất');
    }
    public function importBMI(Request $request) {
        // dd('bmi');
        $url = $request->file('file');
        Excel::import(new BMIImport,$url,null,\Maatwebsite\Excel\Excel::XLSX);

        dd('Hoàn tất');
    }
    public function importBQI(Request $request) {
        // dd('bqi');
        $url = $request->file('file');
        Excel::import(new BQIImport,$url,null,\Maatwebsite\Excel\Excel::XLSX);

        dd('Hoàn tất');
    }
}
