<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\Dashboard\Categories\Store;
use App\Models\Category;
class CategoriesController extends DashboardController

{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
    public function store(Store $request){
        $this->model::create($request->all());
        return redirect()->route('categories.index');
    }
    public function update($id,Store $request){
            $row=Category::findOrfail($id);
            $row->update($request->all());
            return redirect()->route('categories.index');
        }


}
