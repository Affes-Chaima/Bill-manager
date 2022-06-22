<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Setmeth as RequestsSetmeth;
use App\Models\setmeth;

class SetmethController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setmeths = setmeth::all();
        return view('setmeths.index',compact('setmeths'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setmeths.create');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'IDREG'=> 'required|numeric',
            'IDMODREG'=> 'required|numeric',
            'code_reg'=> 'required|max:16',
            'date_reg'=> 'required|date',
            'montant_reg'=> 'required|numeric',
            'comment_reg'=> 'required|numeric']);
        $setmeths =setmeth::create($storeData);

        return redirect('/setmeths')->with('completed', 'settlement method has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(setmeth $setmeth)
    {

    return view('setmeths.show', compact('setmeth'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setmeths = setmeth::findOrFail ($id);
        return view('setmeths.edit', compact('setmeths'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request,$id)
    {
        $updateData = $request->validate([
            'IDREG'=> 'required|numeric',
            'IDMODREG'=> 'required|numeric',
            'code_reg'=> 'required|max:16',
            'date_reg'=> 'required|date',
            'montant_reg'=> 'required|numeric',
            'comment_reg'=> 'required|numeric']);
        setmeth::whereId($id)->update($updateData);
        return redirect('/setmeths')->with('completed', 'Settlement has been updated');
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(setmeth $setmeth)
    {
        $setmeth->delete();
        return back()->with('info', 'the settlement method was deleted');
    }
}
