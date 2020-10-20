<?php

namespace App\Http\Controllers;

use App\Models\ResultPU;
use App\Models\PollingUnits;
use Illuminate\Http\Request;

class PollingUnitResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $columns = ['result_id','party_abbreviation','party_score'];
        $result = ResultPU::get($columns)->toArray();
        // dd($result);
        foreach($columns as $key => $name)
        {
            $columns[$key] = str_replace('_',' ',$name);
        }
        return view('table2.index',compact('columns','result'));
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
        $columns = ['result_id','party_abbreviation','party_score'];
        $result = PollingUnits::where('uniqueid',$id)->first() ? PollingUnits::where('uniqueid',$id)->first()->result()->get($columns)->toArray() : [];
        
        // dd($result);
        foreach($columns as $key => $name)
        {
            $columns[$key] = str_replace('_',' ',$name);
        }
        return view('table2.index',compact('columns','result'));
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
