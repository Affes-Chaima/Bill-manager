<?php

namespace App\Http\Controllers;

use App\Models\tva;
use Illuminate\Http\Request;
use App\Http\Requests\Tva as requestsTva;

class TVAController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $tvas=tva::all();
            return view('tvas.index' ,compact('tvas'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('tvas.create');
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
                'IDTVA' => 'required|numeric',
                'code_tva' => 'required|numeric',
                'tva_rate' => 'required|max:10']);
            $tvas = tva::create($storeData);

            return redirect('/tvas')->with('completed', 'tva has been saved!');
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(Tva $tva)
        {
            return view('tvas.show', compact('tva'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $tvas = tva::findOrFail($id);
            return view('tvas.edit', compact('tvas'));
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
            $updateData = $request->validate([
                'IDTVA' => 'required|numeric',
                'code_tva' => 'required|numeric',
                'tva_rate' => 'required|max:10']);
            tva::whereId($id)->update($updateData);
            return redirect('/tvas')->with('completed', 'Client has been updated');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy(Tva $tva)
        {
            $tva->delete();
            return back()->with('info', 'the tva was deleted');    }
    }
