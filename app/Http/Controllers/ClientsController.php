<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\client;
use App\Http\Requests\Client as requestsClient;
use Barryvdh\DomPDF\PDF;


class ClientsController extends Controller
{
    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data =client::all();
        // share data to view
        view()->share('clients',$data);
        $pdf = PDF::loadView('clients.artlist', $data);

        // download PDF file with download method
        return $pdf->download('clients_list.pdf');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $clients = client::where([
            ['rais_soc_clt','!=',Null],
            [function($query) use ($request){
                if (($term=$request->term)){
                    $query->orWhere('rais_soc_clt','like','%',$term.'%')->get();
                }}]
            ])
            ->orderBy("IDCLT","desc")
            ->paginate(10);
        return view('clients.index', compact('clients'))->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create_clt');
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
            'IDCLT' => 'required|numeric',
            'code_clt' => 'required|numeric',
            'nom_clt' => 'required|max:10',
            'prenom_clt' => 'required|max:10',
            'rais_soc_clt' => 'required|max:20',
            'numtel1_clt' => 'required|numeric',
            'numtel2_clt' => 'required|numeric',
            'email_clt' => 'required|max:25',
            'adr_clt' => 'required|max:50',
            'mf_clt' => 'required|max:8',
            'rc_clt' => 'required|max:11']);
        $clients = client::create($storeData);

        return redirect('/clients')->with('completed', 'Client has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = client::findOrFail($id);
        return view('clients.edit_clt', compact('clients'));
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
            'IDCLT' => 'required|numeric',
            'code_clt' => 'required|numeric',
            'nom_clt' => 'required|max:10',
            'prenom_clt' => 'required|max:10',
            'rais_soc_clt' => 'required|max:20',
            'numtel1_clt' => 'required|numeric',
            'numtel2_clt' => 'required|numeric',
            'email_clt' => 'required|max:25',
            'adr_clt' => 'required|max:50',
            'mf_clt' => 'required|max:8',
            'rc_clt' => 'required|max:11']);
        client::whereId($id)->update($updateData);
        return redirect('/clients')->with('completed', 'Client has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        $client->delete();
        return back()->with('info', 'the client was deleted');    }

    //show list
    public function showlist(){
        $clients= client::all();
        return view('clients.cltlist',compact('clients'));
    }
}
