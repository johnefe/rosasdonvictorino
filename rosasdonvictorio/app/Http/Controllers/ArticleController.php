<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

use Session;
use Redirect;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::All();
        return view('article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create($request->all());
        return redirect('/admin/articulos')->with('message','store');
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
        $article = Article::find($id);
        
        return view('article.edit',['article'=>$article]);
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
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();

        Session::flash('message','Articulo Editado correctamente');

        return Redirect::to('/admin/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
                Article::destroy($id);
                Session::flash('message','Articulo eliminado correctamente');
                return Redirect::to('/admin/articulos');

            } catch (\Illuminate\Database\QueryException $e) {
                Session::flash('error','No se puede eliminar ');
                return Redirect::to('/admin/articulos');

            } 
    }
}
