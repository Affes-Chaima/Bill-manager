<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\bline;
use App\Http\Requests\bline as Requestsbline;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF;

class BillLineController extends Controller
{
    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data =bline::all();
        // share data to view
        view()->share('blines',$data);
        $pdf = PDF::loadView('blines.artlist', $data);

        // download PDF file with download method
        return $pdf->download('blines_list.pdf');
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $blines = bline::paginate(10)->orderBy("id","desc");
        return view('articles.index', compact('articles'))->with('i',(request()->input('page',1)-1)*10);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = bline::join('bills', 'bills.IDFACT', '=', 'blines.IDFACT')
        ->join('articles', 'articles.IDART', '=', 'blines.IDART')
        ->get(['blines.id', 'bills.IDFACT', 'articles.lib_art','articles.puht_art','articles.maxremise_art']);

        return view ('billine.create',compact('data'));
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
            'IDART'=> 'required|numeric',
            'qte_art'=> 'required|numeric',
            'puht_art'=> 'required|numeric',
            'remise_art'=> 'required|numeric',
            'punetht_art'=> 'required|numeric',
            'totalnetht_art'=> 'required|numeric',
            'totalht_art'=> 'required|numeric',
            'totalttc_art'=> 'required|numeric']);
        $blines =bline::create($storeData);

        return redirect('/bline')->with('completed', 'bill line has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(bline $bline)
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
        $blines = bline::findOrFail($id);
        return view('billine.edit', compact('blines'));
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
            'IDFACT'=> 'required|numeric',
            'IDART'=> 'required|numeric',
            'qte_art'=> 'required|numeric',
            'puht_art'=> 'required|numeric',
            'remise_art'=> 'required|numeric',
            'punetht_art'=> 'required|numeric',
            'totalnetht_art'=> 'required|numeric',
            'totalht_art'=> 'required|numeric',
            'totalttc_art'=> 'required|numeric']);
        bline::whereId($id)->update($updateData);
        return redirect('/blines')->with('completed', 'Bill line has been updated');
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(bline $bline)
    {
        $bline->delete();
        return back()->with('info', 'the bill line was deleted');    }

    //show list
    public function showlist(){
        $blines= bline::all();
        return view('billine.blinelist',compact('blines'));
    }

        }
