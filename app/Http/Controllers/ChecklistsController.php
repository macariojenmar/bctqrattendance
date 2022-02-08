<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checklist;


class ChecklistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //return Checklist::all();

        $checklists = Checklist::all();
        
        return view('checklists.index')->with('checklists', $checklists);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checklists.newchecklist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'strand' => 'required',
            'grade' => 'required',
            'schedule' => 'required',
            'late' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        Checklist::create($request->all());

        return redirect()->route('checklists.index')
                        ->with('success','Product created successfully.');
                        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $checklists = Checklist::find($id);
        return view('checklists.showchecklist')->with('checklists',$checklists);
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
