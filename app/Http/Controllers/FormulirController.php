<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class FormulirController extends Controller
{
    private $arr;
    function __construct()
    {
        $this->arr = ['','Sangat Kurang', 'Kurang', 'Cukup', 'Baik', 'Sangat Baik'];
    }
    
    function printPDF(Request $req)
    {
        $data = $req->input();
        print_r($data);
        view()->share('data', $data);
        $pdf = PDF::loadView('pdf');
        $pdf->setTemporaryFolder(storage_path('tmp'));
        return $pdf->download('result.pdf');
    }

    public static function formIndex()
    {
        return view('test',['name'=>'a1']);
    }


}
