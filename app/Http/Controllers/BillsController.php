<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bill as RequestsBill;
use Illuminate\Http\Request;
use App\Models\bill;
use Barryvdh\DomPDF\PDF;

class BillsController extends controller{
    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data =bill::all();
        // share data to view
        view()->share('bills',$data);
        $pdf = PDF::loadView('bills.artlist', $data);

        // download PDF file with download method
        return $pdf->download('bills_list.pdf');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $bills=array();
         $bills = bill::where([
            ['id','!=',Null],
            [function($query) use ($request){
                if (($term=$request->term)){
                    $query->orWhere('id','like','%',$term.'%')->get();
                }}]
            ])
            ->orderBy("id","desc")
            ->paginate(10);
        return view('bills.index', compact('bills'))->with('i',(request()->input('page',1)-1)*10);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('bills.create');
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
            'IDFACT'=> 'required|numeric',
            'IDCLT'=> 'required|numeric',
            'IDREG'=> 'required|numeric',
            'code_fact'=> 'required|max:16',
            'date_fact'=> 'required',
            'totalht_fact'=> 'required|numeric',
            'totaltva_fact'=> 'required|numeric',
            'totalttc_fact'=> 'required|numeric',
            'totremise_fact'=> 'required|numeric',
            'solde_fact'=> 'required|numeric']);
        $bills =bill::create($storeData);

        return redirect('/bills')->with('completed', 'bill has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
     
    return view('bills.show', compact('bill'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill = bill::findOrFail ($id);
        return view('bills.edit', compact('bill'));
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
            'IDFACT'=> 'required|numeric',
            'IDCLT'=> 'required|numeric',
            'IDREG'=> 'required|numeric',
            'code_fact'=> 'required|max:16',
            'date_fact'=> 'required',
            'totalht_fact'=> 'required|numeric',
            'totaltva_fact'=> 'required|numeric',
            'totalttc_fact'=> 'required|numeric',
            'totremise_fact'=> 'required|numeric',
            'solde_fact'=> 'required|numeric']);
        bill::whereId($id)->update($updateData);
        return redirect('/bills')->with('completed', 'Bill has been updated');
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        $bill->delete();
        return back()->with('info', 'the bill was deleted');
    }
    //show list
    public function showlist(){
        $bills= bill::all();
        return view('bills.billist',compact('bills'));
    }
}

