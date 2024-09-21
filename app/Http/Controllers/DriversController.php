<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::all();
        // echo "<pre>";
        // print_r($drivers->toArray());
        // echo "</pre>";
        $data = compact('drivers');
        return view('admin.driver.drivers')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $driver = new Driver;
        $driver->driver_name = $request['driverName'];
        $driver->contact_no = $request['driverContactNo'];
        $driver->license_number = $request['driverLicenseNo'];
        $driver->address = $request['driverAddress'];
        $driver->save();
        // print_r($request->toArray());
        return redirect('/drivers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
