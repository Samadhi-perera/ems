<?php

namespace App\Http\Controllers;
use App\Models\Location;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view_locations')->only('index', 'show');
        $this->middleware('permission:create_locations')->only('create', 'store');
        $this->middleware('permission:edit_locations')->only('edit', 'update');
        $this->middleware('permission:delete_locations')->only('destroy');

    }
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        Location::create($request->all());
        return redirect()->route('locations.index');
    }

    public function show(Location $location)
{
    return view('locations.show', compact('location'));
}

    public function edit(Location $location)
    {
        return view('locations.edit', compact('location'));
    }

    public function update(Request $request, Location $location)
    {
        $location->update($request->all());
        return redirect()->route('locations.index');
    }

    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('locations.index');
    }
}
