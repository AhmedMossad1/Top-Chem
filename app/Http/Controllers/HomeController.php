<?php
namespace App\Http\Controllers;
use App\Http\Requests\FrontEnd\Messages\Store;
use App\Models\Category;
use App\Models\Message;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{

    public function index()
    {
        $product = Product::published()->orderBy('id' , 'desc');
        if(request()->has('search') && request()->get('search') != ''){
            $product = $product->where('name' , 'like' , "%".request()->get('search')."%");
        }
        $product = $product->paginate(10);
        return view('home' , compact('product'));
    }
    public function category($id){
        $cat = Category::findOrFail($id);
        $products = Product::published()->where('cat_id' , $id)->orderBy('id' , 'desc')->paginate(3);
        return view('front-end.category.index' , compact('products' , 'cat'));
    }
    public function product($id) {
        $product = Product::published()->findOrFail($id);

        // Check if the product ID is already in the session
        $visitedProducts = Session::get('visited_products', []);

        if (!in_array($id, $visitedProducts)) {
            // If not, increment the visit count and store the product ID in the session
            $product->increment('visit_count');
            Session::push('visited_products', $id);
        }

        // Get all products with visit counts
        $products = Product::select('id', 'name', 'visit_count')->get();

        return view('front-end.product.index', compact('product', 'visitedProducts', 'products'));
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
        $users = User::where('group', 'user')
        ->where('show', true)
        ->select('name', 'image', 'job_title')
        ->get();
        return view('front-end.about-Us.about', compact('users'));
    }
    public function contactUS(){
        return view('front-end.contact-us.contact-us' );
    }
    public function profile(){
        $users = User::where('group', 'user')
        ->where('show', true)
        ->select('name', 'image', 'job_title')
        ->get();
        return view('front-end.about-Us.about', compact('users'));
    }





}
