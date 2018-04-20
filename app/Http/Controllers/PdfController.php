<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\User;

class PdfController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
    	$data = $this->getData();
    	$id=1;
        $user = User::findOrFail($id);
        $pdf = PDF::loadView('pdf.ticket', compact('data','user'));
        $pdf->setPaper("A4", "portrait");
        //return $pdf->download('invoice.pdf');
        return $pdf->stream('Ticket.pdf');
    }

    public function getData(){
        $data =  [
            'Cantidad'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500',
            'direccion'=>'Anahuac 47 Puebla, México',
            'correo'=>'jjx51@outlook.com',
            'telefono'=>'2226680020',
            'no_ticket'=>1,

        ];
        return $data;
    }
}
