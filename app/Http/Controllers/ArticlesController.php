<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use App\Http\Requests\Article as requestsArticle;

class ArticlesController extends Controller
{
    // Generate PDF
    public function createPDF()
    {
        // retreive all records from db
        $data = article::all();
        // share data to view
        view()->share('articles', $data);
        $pdf = PDF::loadView('articles.artlist', $data);

        // download PDF file with download method
        return $pdf->download('articles_list.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = article::orderBy("IDART", "desc")->paginate(10);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
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
            'IDART' => 'required|numeric',
            'IDTVA' => 'required|numeric',
            'code_art' => 'required|numeric',
            'lib_art' => 'required|max:15',
            'puht_art' => 'required|numeric',
            'puttc_art' => 'required|numeric',
            'maxremise_art' => 'required|numeric',
            'stockable_art' => 'required',
            'actif_art' => 'required|max:6',
            'depstsk_art' => 'required|numeric',
            'codebarre_art' => 'required',
            'prixcash_art' => 'required|numeric'
        ]);
        $articles = article::create($storeData);

        return redirect('/articles')->with('completed', 'article has been saved!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = article::findOrFail($id);
        return view('articles.edit', compact('articles'));
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
            'IDART' => 'required|numeric',
            'IDTVA' => 'required|numeric',
            'code_art' => 'required|numeric',
            'lib_art' => 'required|max:15',
            'puht_art' => 'required|numeric',
            'puttc_art' => 'required|numeric',
            'maxremise_art' => 'required|numeric',
            'stockable_art' => 'required',
            'actif_art' => 'required|max:6',
            'depstsk_art' => 'required|numeric',
            'codebarre_art' => 'required',
            'prixcash_art' => 'required|numeric'
        ]);
        article::whereId($id)->update($updateData);
        return redirect('/articles')->with('completed', 'Article has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return back()->with('info', 'article deleted');
    }
    //show list
    public function showlist()
    {
        $articles = article::all();
        return view('articles.artlist', compact('articles'));
    }
}
