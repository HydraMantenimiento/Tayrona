<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\reportsExport;

class reportsController extends Controller
{
    public function exportExcel(){

        return Excel::download(new reportsExport, 'Productos.xlsx');
    }
}
