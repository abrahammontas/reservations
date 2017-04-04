<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Occupancy;
use App\Http\Requests;
use Session;
use App\Http\Requests\Occupancyrules;

class OccupancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occupancies = Occupancy::all();

        return view('occupancy.List', ['occupancies' => $occupancies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('occupancy.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OccupancyRules $request)
    {
        $occupancy = Room::create($request->all());

        if(isset($occupancy->id)){
            $message = "The occupancy '".$request->input('name')."' has been created successfully.";
            $class = "alert alert-success";
        }
        else{
            $message = "Error! please try again.";
            $class = "alert alert-danger";
        }

        return redirect('occupancy')->with('message', $message)
            ->with('class', $class);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('occupancy.Edit', ['occupancy' => Occupancy::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OccupancyRules $request, $id)
    {
        $occupancy = Occupancy::where('id', '=', $id)->update($request->all());

        if(isset($occupancy)){
            $message = "The occupancy '".$request->input('name')."' has been edited successfully.";
            $class   = "alert alert-success";
        }
        else{
            $message = "Error! please try again.";
            $class = "alert alert-danger";
        }

        return redirect('occupancy')->with('message', $message)
            ->with('class', $class);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $occupancy = Occupancy::find($id);
        $occupancy->delete();

        if(isset($occupancy)){
            $message = "The occupancy '".$occupancy->name."' has been deleted successfully";
            $class = "alert alert-success";
        }
        else{
            $message = "Error! Please try again";
            $class = "alert alert-danger";
        }

        return redirect('occupancy')->with('message', $message)
            ->with('class', $class);
    }
}
