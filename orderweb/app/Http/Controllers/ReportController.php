<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Technician;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $technicians = Technician::all();
        return view('reports.index', compact('technicians'));

    }

    /**
     * reporte que genera el listado de todos los técnicos
     */
    public function export_technicians()
    {
        $technicians = Technician::all();
        $data = array(
            'technicians' => $technicians
        );

        /**
         * dompdv version 3.x
         * se debe agregar el setOptions
         */
        $pdf = Pdf::loadView('reports.export_technicians', $data)->setPaper('letter', 'portrait')
        ->setOptions(['defaultFont' =>'sans-serif', 'isRemoteEnabled' => true]); //landscape: horizontal

        return $pdf->download('technicians.pdf');
    }

    /**
     * Reporte que genera el listado de actividades de un técnico
     */
    public function export_activities_by_technician(Request $request)
    {
        $activities = Activity::where('technician_id', $request['technician_id'])->get();
        
        $data = array(
            'activities' => $activities
        );

        $pdf = Pdf::loadView('reports.export_activities_by_technician', $data)->setPaper('letter', 'portrait')
        ->setOptions(['defaultFont' =>'sans-serif', 'isRemoteEnabled' => true]); //landscape: horizontal

        return $pdf->download('ActivitiesByTechnian-'. $request['technician_id']. '.pdf');
    }
}
