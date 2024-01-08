<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Vehicle;
use PDF;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::paginate(5);
        Vehicle::orderBy('created_at', 'asc');
        return view('vehicles', ['vehicles' => $vehicles]);
    }

    public function total()
    {
        $vehicles = Vehicle::all();
        $totalVehicles = $vehicles->count();
        return view('dashboard', compact('vehicles', 'totalVehicles'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'plat' => 'required'
        ]);

        Vehicle::create([
            'plat'=> $request->plat,
            'jenis_kendaraan'=> $request->jenis_kendaraan,
            'tanggal'=> $request->tanggal,
            'jam_masuk'=> $request->jam_masuk
        ]);

        return redirect('dashboard')->with('status', 'Vehicle has been inserted.');
    }

    public function edit (Vehicle $vehicle)
    {
        return view('edit', compact('vehicle'));
    }

    public function print (Vehicle $vehicle)
    {
        return view('print', compact('vehicle'));
    }

    public function createPDF(Vehicle $vehicle)
    {
        $vehicles = Vehicle::find($vehicle->id);
        $pdf = PDF::loadView('print', ['vehicles' => $vehicles]);
        $pdf->set_paper('letter','portrait');
        return $pdf->download('print.pdf');
    }
    
    public function update (Request $request, Vehicle $vehicle)
    {
        $vehicle->update([
            'plat'=> $request->plat,
            'jenis_kendaraan'=> $request->jenis_kendaraan,
            'tanggal'=> $request->tanggal,
            'jam_masuk'=> $request->jam_masuk
        ]);

        return Redirect::route('vehicles');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return Redirect::route('vehicles');
    
    }
}
