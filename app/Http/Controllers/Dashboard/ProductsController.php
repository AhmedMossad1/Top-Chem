<?php
namespace App\Http\Controllers\Dashboard;
use App\Models\Category;
use App\Http\Requests\Dashboard\Products\Store;
use App\Http\Requests\Dashboard\Products\Update;
use App\Models\User;
use App\Models\Product;
use App\Notifications\AddVideo;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
class ProductsController extends DashboardController
{

    public function __construct(Product $model){
        parent::__construct($model);
    }
    protected function with(){
        return['cat','user'];
    }
    protected function append(){
        $array= [
            'categories' => Category::get(),
        ];
        return $array;
    }
    public function store(Store $request)
    {
        $fileName = $this->uploadImage($request);
        $requestArray = $request->all();
        $requestarray =  [ 'image' => $fileName] + $requestArray;
        $row = $this->model::create($requestarray);

        return redirect()->route('products.index');
    }

    public function update($id, Update $request)
    {
        $row = $this->model->findOrFail($id);
        $requestarray = $request->all();
        if ($request->hasFile('image')) {

            $fileName = $this->uploadImage($request);
            $requestarray['image'] = $fileName;

            if ($row->image) {
                $oldImagePath = public_path('uploads/' . $row->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        }
        $row->update($requestarray);
        return redirect()->route('products.index');
    }

    protected function uploadImage($request){
        $file = $request->file('image');

        $fileName = time().Str::random('10').'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads') , $fileName);
        return $fileName;
    }

}
