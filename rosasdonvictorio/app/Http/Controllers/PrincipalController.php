<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Occasion;
use App\Product;
use App\Data;
use App\Article;
use Session;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Video;
use App\Slider;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //$masVendidos = Product::limit(4)->get();
        $masVendidos = Product::join('best_seller_products','products.id','best_seller_products.product_id')->join('categories', 'categories.id', '=', 'products.category_id')
                ->rightJoin('prices','products.id','prices.product_id')
                ->select('products.*')
                ->where('category_type_id', 1)->groupBy('products.id')->get()->random(4)->all();
       /* $masVendidos = Product::rightJoin('prices','products.id','prices.product_id')
            ->select('products.*')->where('category_id', $producto->category_id)->groupBy('products.id')->get()->random(4)->all();*/

        return View('plantillas.index',compact('categories','masVendidos'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function realizarArreglo()
    {
        $categories = Category::where('category_type_id', 1)->get();
        $ocasiones = Occasion::All();
        $masVendidos = Product::limit(6)->get();
        $sliders = Slider::all();
    


        return View('plantillas.realizarArreglo',compact('categories','masVendidos','ocasiones','sliders'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoriaSeleccionada($id)
    {
        $categories = Category::All();
        $categoria = Category::find($id);
        $ocasiones = Occasion::All();
        return View('plantillas.categoriaSeleccionada',compact('categories','categoria','ocasiones'));

        
       // return View('plantillas.categoriaSeleccionada');
    }
    public function filtro($filtro,$id)
    {
        $categories = Category::where('category_type_id', 1)->get();
        $ocasiones = Occasion::All();
        $sliders = Slider::all();
        $productosRandom = Product::join('categories', 'categories.id', '=', 'products.category_id')
                ->rightJoin('prices','products.id','prices.product_id')
                ->select('products.*')
                ->where('category_type_id', 1)->groupBy('products.id')->get()->random(4)->all(); 
        if($filtro == 'categorias'){
            
            $categoria = Category::find($id);
            $nombre = $categoria->name;
            $products = $categoria->products_with_price();
            

        }else if ($filtro == 'ocasiones'){
            
            $ocasion = Occasion::find($id);
            $products = $ocasion->products_with_price();
            $nombre = $ocasion->ocasion;

        } else if($filtro == 'destacados'){
            $nombre = "Destacados";
            $products = Product::join('popular_products','products.id','popular_products.product_id')->join('categories', 'categories.id', '=', 'products.category_id')
                ->rightJoin('prices','products.id','prices.product_id')
                ->select('products.*')
                ->where('category_type_id', 1)->groupBy('products.id')->get();
        } else if($filtro == 'mas_vendidos'){
            $nombre = "Mas Vendidos";
            $products = Product::join('best_seller_products','products.id','best_seller_products.product_id')->join('categories', 'categories.id', '=', 'products.category_id')
                ->rightJoin('prices','products.id','prices.product_id')
                ->select('products.*')
                ->where('category_type_id', 1)->groupBy('products.id')->get();


        }
        return View('plantillas.categoriaSeleccionada',compact('categories','ocasiones','products','nombre','sliders','productosRandom'));

        
       // return View('plantillas.categoriaSeleccionada');
    } 

    public function dropdown($id){

        $ocasion = Occasion::find($id);
        $products = $ocasion->products;
        return $products;

    }
    public function productos(){

        $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*')->where('category_type_id', 1)->get();
        return $products;

    }

    public function arreglos()
    {
        $categories = Category::where('category_type_id', 1)->get();
        $ocasiones = Occasion::All();
         $productosRandom = Product::join('categories', 'categories.id', '=', 'products.category_id')
                ->rightJoin('prices','products.id','prices.product_id')
                ->select('products.*')
                ->where('category_type_id', 1)->groupBy('products.id')->get()->random(4)->all(); 


        $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->rightJoin('prices','products.id','prices.product_id')
            ->select('products.*')->where('category_type_id', 1)->groupBy('products.id')->get();
        $nombre = "Arreglos";
        $sliders = Slider::all();
            
        return View('plantillas.categoriaSeleccionada',compact('categories','ocasiones','products','nombre','sliders','productosRandom'));

        
       // return View('plantillas.categoriaSeleccionada');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function arregloSeleccionado($id)
    {
        $producto = Product::find($id);
        $categories = Category::where('category_type_id', 2)->get();
        $productosRandom = Product::rightJoin('prices','products.id','prices.product_id')
            ->select('products.*')->where('category_id', $producto->category_id)->groupBy('products.id')->get();
        return View('plantillas.arregloSeleccionado',compact('producto','categories','productosRandom'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        
        return View('plantillas.login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacto()
    {
        $data = Data::first();
        return View('plantillas.contacto',compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function cuentaUsuario()
    {
        
        return View('plantillas.cuentaUsuario');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ayuda()
    {
        $video = Video::where('ruta', 'ayuda')->first();
        return view('plantillas.ayuda',compact('video'));
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function conocenos()
    {
        
        return View('plantillas.conocenos');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function arbolesMemorales()
    {
        
        return View('plantillas.arbolesMemorales');
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function politicas()
    {
        
        return View('plantillas.politicas');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function puntosFloristeria()
    {
        
        return View('plantillas.puntosFloristeria');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resumenCompra()
    {
        $auth = Auth::user();
        $user = User::where('id',$auth->id)->first();
        $cliente =$user->client;
        $carrito = Session::get('cart'); 

        
        return View('plantillas.resumenCompra',compact('cliente','cart'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function finalizarCompra()
    {
        
        return View('plantillas.finalizarCompra');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $articles = Article::All();
        return View('plantillas.blog',compact('articles'));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ventas()
    {
        
        return View('plantillas.ventas');
    }
    public function admin()
    {
        if(Auth::user()){
            $usuario_actual = Auth::user();
            if($usuario_actual->is_admin==0){
                return redirect('/admin/login');
            }else{
                return View('layouts.adminBase');

            }

        }else{
            return redirect('/admin/login');
        }

        
        
    }

    //manejo de sessiones carrito

    public function cartVS (Request $request)
    {
        parse_str(file_get_contents("php://input"), $_POST);
        Session::put('cart',$request->json()->all());
        return (Session::get('cart'));
        

    }
    public function getCartVS ()
    {  
        return (Session::get('cart'));    

    }
    public function dataCart(Request $request)
    {
        parse_str(file_get_contents("php://input"), $_POST);
        Session::put('dataCart',$request->all());
        $dataCart = Session::get('dataCart');
        $dataCart = json_encode($dataCart);
        $dataCart = json_decode($dataCart,true);
        $correo = Auth::user()->email;

         //$dataCart =  Session::get('dataCart');
         //$dataCart = json_encode($dataCart);
         //$dataCart = json_decode($dataCart);
        


        //$cart = Session::get('cart');
        return view('plantillas.finalizarCompra',compact('dataCart','correo'));
        
    }
    public function getDataCart ()
    {  
        return (Session::get('dataCart'));    

    }
    public function guardar(Request $request){
        return $request;

        //parse_str(file_get_contents("php://input"), $_POST);
       // return "que";
      /*  $json = $request->json()->all();
        return $json;*/

    }

}
