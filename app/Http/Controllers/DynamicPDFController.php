<?php

namespace App\Http\Controllers;

use App\Models\Mesero;
use DB;
use Illuminate\Http\Request;
// use PDF;
use Dompdf\Dompdf;

class DynamicPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Data = $this->GetData();
        return view('Gerente.Informes', compact('Data'));
    }

    function GetData(){
        $Data = Mesero::get();
        return $Data;
    }

    // public function pdf(){
    //     $pdf = \App::make('dompdf.wrapper');
    //     $pdf->loadHTML($this->convert_Data_to_html());
    //     $pdf->stream();
    // }

    function convert_Data_to_html(){
        $Data = $this->GetData();
        $output = '
        <h3 align="center"> Informe de mesero</h3>
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;">
                Nombre
            </th>
            <th style="border: 1px solid; padding:12px;">
                Apellido
            </th>
            <th style="border: 1px solid; padding:12px;">
                Email
            </th>
            <th style="border: 1px solid; padding:12px;">
                Telefono
            </th>
            <th style="border: 1px solid; padding:12px;">
                Sueldo
            </th>
        </tr>
        ';

        foreach($Data as $D){
            $output .= '
            <tr>
                <td style="border: 1px solid; padding:12px;">
                    '.$D->nombre.'
                </td>
                <td style="border: 1px solid; padding:12px;">
                    '.$D->apellido.'
                </td>
                <td style="border: 1px solid; padding:12px;">
                    '.$D->email.'
                </td>
                <td style="border: 1px solid; padding:12px;">
                '.$D->telefono.'
                </td>
                <td style="border: 1px solid; padding:12px;">
                '.$D->sueldo.'
                </td>
            </tr>
            ';
        }
        $output .= '</table>'; 
        return $output;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml($this->convert_Data_to_html());
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Infomes.pdf', ['Attachment'=>false]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mesero  $mesero
     * @return \Illuminate\Http\Response
     */
    public function show(Mesero $mesero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mesero  $mesero
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesero $mesero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mesero  $mesero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesero $mesero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mesero  $mesero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesero $mesero)
    {
        //
    }
}
