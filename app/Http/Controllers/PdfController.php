<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Count;

class PdfController extends Controller
{
    public function index($cuenta_id){
        $user_id = Auth::id();
        $cuenta = Count::findOrFail($cuenta_id);
    	$data = $this->getData();
        $user = User::findOrFail($user_id);
        $pdf = PDF::loadView('pdf.ticket', compact('cuenta','user','data'));
        $pdf->setPaper("A4", "portrait");
        $cuenta->status_counts_id = 3;
        $cuenta->save();
        //return $pdf->download('invoice.pdf');
        return $pdf->stream('Ticket.pdf');
    }

    public function getData(){
        $data =  [
            'direccion'=>'Anahuac 47 Puebla, México',
            'correo'=>'kroer17@outlook.com',
            'telefono'=>'2223125882',
        ];
        return $data;
    }
}
