<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use App\DataTables\UnitsDataTable;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view_units')->only('index', 'show');
        $this->middleware('permission:create_units')->only('create', 'store');
        $this->middleware('permission:edit_units')->only('edit', 'update');
        $this->middleware('permission:delete_units')->only('destroy');

    }
    // public function index()
    // {
    //     $units = Unit::all();
    //     return view('units.index', compact('units'));
    // }
    public function index(UnitsDataTable $dataTable)
    {
        
        return $dataTable->render('units.index');
    }

    public function create()
    {
        return view('units.create');
    }

    public function store(Request $request)
    {
        Unit::create($request->all());
        return redirect()->route('units.index');
    }

    public function show(Unit $unit)
{
    return view('units.show', compact('unit'));
}

    public function edit(Unit $unit)
    {
        return view('units.edit', compact('unit'));
    }

    public function update(Request $request, Unit $unit)
    {
        $unit->update($request->all());
        return redirect()->route('units.index');
    }

    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect()->route('units.index');
    }
}
