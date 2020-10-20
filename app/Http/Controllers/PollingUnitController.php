<?php

namespace App\Http\Controllers;

use App\Models\PollingUnits;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PollingUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $columns = ['uniqueid','polling_unit_number','polling_unit_name','polling_unit_description','lat','long'];
        $result = PollingUnits::get($columns)->toArray();
        foreach($columns as $key => $name)
        {
            $columns[$key] = str_replace('_',' ',$name);
        }
        return view('table2.pu',compact('columns','result'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $columns = ['uniqueid','polling_unit_number','polling_unit_name','polling_unit_description','lat','long'];
        $result = PollingUnits::get($columns)->toArray();
        foreach($columns as $key => $name)
        {
            $columns[$key] = str_replace('_',' ',$name);
        }
        return view('table2.pu',compact('columns','result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
