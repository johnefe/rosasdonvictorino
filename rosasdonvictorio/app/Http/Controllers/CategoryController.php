<?php

namespace FloristeriaColors\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CategoryCreateRequest;

use App\Category;
use App\CategoryType;


use Session;
use Redirect;

//sirve para obtener
use Illuminate\Routing\Route;

class CategoryController extends Controller
{

    public function __construct(){
        $this->middleware('authAdmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::All();
        $category_types = CategoryType::pluck('name','id');
        return view('category.index',compact('categories','category_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_types = CategoryType::pluck('name','id');
        return view('category.create',compact('category_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
        Category::create($request->all());
        return redirect('/admin/categorias')->with('message','store');
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
        $category_types = CategoryType::pluck('name','id');
        return view('category.create',compact('category_types'));
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
        $categoria = Category::find($id);
        $categoria->fill($request->all());
        $categoria->save();

        Session::flash('message','Usuario Editado correctamente');

        return Redirect::to('/admin/categorias');
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
                Category::destroy($id);
                Session::flash('message','Usuario eliminado correctamente');
                return Redirect::to('/admin/categorias');

            } catch (\Illuminate\Database\QueryException $e) {
                Session::flash('error','No se puede eliminar por que tiene productos');
                return Redirect::to('/admin/categorias');

            } 
       
        //
    }
}
