<?php

namespace App\Exports;

use App\productos;
use App\report;
use App\subcategorys;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class reportsExport implements FromView
{
    public function view(): View
    {
        return view('Exports.products',[
            'reports'=> productos::get()
         ]);
    }

}
