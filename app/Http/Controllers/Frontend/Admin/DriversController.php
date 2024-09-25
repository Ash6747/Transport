<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Http\Controllers\Controller;
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
        return view('frontend.admin.driver.drivers')->with($data);
    }

    public function trash()
    {
        $drivers = Driver::onlyTrashed()->get();
        $data = compact('drivers');
        return view('frontend.admin.driver.trash')->with($data);
    }
    
    public function restore(string $id)
    {
        $driver = Driver::withTrashed()->find($id);
        if(!is_null($driver)){
            $driver->restore();
        }
        return redirect('drivers');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $url = url('/drivers/create');
        $title = "Driver Registration";
        $routTitle = "Register";
        $data = compact('url', 'title', 'routTitle');
        return view('frontend.admin.driver.form')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $driver = new Driver;
        $driver->driver_name = $request['fName']." ".$request['mName']." ".$request['lName'];
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
        $driver = Driver::find($id);
        // echo "<pre>";
        $driverName = explode(' ', $driver->driver_name );
        // print_r($driverName);
        if (is_null($driver)) {
            return redirect('drivers');
        } else {
            $url = url('/drivers/update')."/".$id;
            $title = "Driver Update";
            $routTitle = "Update";
            $data = compact('url', 'title', 'driverName', 'driver', 'routTitle');
            return view('frontend.admin.driver.form')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $driver = Driver::find($id);
        if (is_null($driver)) {
            return redirect('drivers');
        } else {
            $driver->driver_name = $request['fName']." ".$request['mName']." ".$request['lName'];
            $driver->contact_no = $request['driverContactNo'];
            $driver->license_number = $request['driverLicenseNo'];
            $driver->address = $request['driverAddress'];
            $driver->save();
            return redirect('drivers');
        }
    }

    /**
     * Update the status in table.
     */
    public function active(string $id)
    {
        $driver = Driver::find($id);
        // echo "<pre>";
        // print_r($driver);
        if (is_null($driver)) {
            return redirect('drivers');
        } else {
            $driver->status = !$driver->status;
            $driver->save();
            return redirect('drivers');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $driver = Driver::find($id);
        if(!is_null($driver)){
            $driver->delete();
        }
        return redirect('drivers');
    }

    public function forcefullyDelete(string $id)
    {
        $driver = Driver::withTrashed()->find($id);
        if(!is_null($driver)){
            $driver->forceDelete();
        }
        return redirect('/drivers/trash');
    }
}
