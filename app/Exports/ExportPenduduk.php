<?php

namespace App\Exports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportPenduduk implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Penduduk::all();
        return $data;
    }

    
}
