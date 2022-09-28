<?php

namespace App\Http\Controllers;

use App\Models\reportFiveMinutes;
use Illuminate\Http\Request;



class ReportFiveMinutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['registros'] = reportFiveMinutes::paginate(50);
        return view('Reports.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datosreportDate = request()->all();
        $datosreportDate = request()->except('_token');
        reportFiveMinutes::insert($datosreportDate);

        // return response()->json($datosreportDate);

        return redirect('report')->with('mensaje','Registro agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reportFiveMinutes  $reportFiveMinutes
     * @return \Illuminate\Http\Response
     */
    public function show(reportFiveMinutes $reportFiveMinutes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reportFiveMinutes  $reportFiveMinutes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $reportEdit = reportFiveMinutes::findOrFail($id);

        $reportEdit = reportFiveMinutes::findOrFail($id);
        return view('Reports.edit', compact('reportEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reportFiveMinutes  $reportFiveMinutes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosreportDate = request()->except('_token','_method');
        reportFiveMinutes::where('id','=',$id)->update($datosreportDate);

        $reportEdit = reportFiveMinutes::findOrFail($id);
        return view('Reports.edit', compact('reportEdit'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reportFiveMinutes  $reportFiveMinutes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        reportFiveMinutes::destroy($id);
        return redirect('report');
    }
}
