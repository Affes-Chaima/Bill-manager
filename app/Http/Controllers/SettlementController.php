<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\Settlement as RequestsSettlement;
use App\Models\settlement;
use Barryvdh\DomPDF\Facade as PDF;

class SettlementController extends Controller
{
    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data =settlement::all();
        // share data to view
        view()->share('settlements',$data);
        $pdf = PDF::loadview('settles.artlist',$data);

        // download PDF file with download method
        return $pdf->download('settlement_list.pdf');
      }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $settlements = settlement::where([
            ['comment_reg','!=',Null],
            [function($query) use ($request){
                if (($term=$request->term)){
                    $query->orWhere('comment_reg','like','%',$term.'%')->get();
                }}]
            ])
            ->orderBy("IDREG","desc")
            ->paginate(10);
        return view('settlements.index', compact('settlements'))->with('i',(request()->input('page',1)-1)*10);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settles.create');
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
        $settlements =settlement::create($storeData);

        return redirect('/settles')->with('completed', 'settlement has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Settlement $settlement)
    {

    return view('settles.show', compact('settlement'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settlements = settlement::findOrFail ($id);
        return view('settles.edit',compact('settlements'));
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
        settlement::whereId($id)->update($updateData);
        return redirect('/settles')->with('completed', 'Settlement has been updated');
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settlement $settlement)
    {
        $settlement->delete();
        return back()->with('info', 'the settlement was deleted');
    }
    //show list
    public function showlist(){
        $settlements= settlement::all();
        return view('settles.setlist',compact('settlements'));
    }
}

