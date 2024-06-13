<?php
namespace App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Dashboard\Users\Store;
use App\Http\Requests\Dashboard\Users\Update;
use App\Models\User;
use Illuminate\Support\Str;

class UsersController extends DashboardController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(Store $request)
    {
        $requestArray = $request->all();

        if ($request->hasFile('image')) {
            $requestArray['image'] = $this->uploadImage($request);
        }
        $requestArray['password'] = Hash::make($requestArray['password']);
        User::create($requestArray);
        return redirect()->route('users.index');
    }

    public function update($id, Update $request)
    {
        $row = User::findOrfail($id);
        $requestarray = [
            'name' => $request->name,
            'email' => $request->email
        ];
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
        return redirect()->route('users.index');
    }
    protected function uploadImage($request)
    {
        $file = $request->file('image');

        $fileName = time() . Str::random('10') . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);
        return $fileName;
    }
}
