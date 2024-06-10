<?php
namespace App\Http\Controllers;
use App\Http\Requests\FrontEnd\Messages\Store;
use App\Models\Category;
use App\Models\Message;
use App\Models\Product;

class HomeController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth')->only([
    //         'commentUpdate' , 'commentStore'
    //     ]);
    // }
    public function index()
    {
        $product = Product::published()->orderBy('id' , 'desc');
        if(request()->has('search') && request()->get('search') != ''){
            $product = $product->where('name' , 'like' , "%".request()->get('search')."%");
        }
        $product = $product->paginate(30);
        return view('home' , compact('product'));
    }
    public function category($id){
        $cat = Category::findOrFail($id);
        $product = Product::published()->where('cat_id' , $id)->orderBy('id' , 'desc')->paginate(30);
        return view('front-end.category.index' , compact('product' , 'cat'));
    }
    public function product($id){
        $product = Product::published()->findOrFail($id);
        return view('front-end.product.index' , compact('product'));
    }

    public function messageStore(Store $request){
        Message ::create($request->all());
        return redirect()->route('frontend.landing')->with('success', 'Your message has been sent successfully!');
    }
    public function welcome(){
        $categories = Category::with('products')->get();
        $product = Product::published()->orderBy('id' , 'desc')->paginate(9);
        $product_count = Product::published()->count();
        return view('welcome' , compact('product' , 'product_count','categories'));
    }
    public function aboutUS(){
        return view('front-end.about-Us.about' );
    }
    public function contactUS(){
        return view('front-end.contact-us.contact-us' );
    }





}
