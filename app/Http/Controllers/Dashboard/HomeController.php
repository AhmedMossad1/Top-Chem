<?php
namespace App\Http\Controllers\Dashboard;
use App\Models\Comments;
use App\Models\User;
class HomeController extends DashboardController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
    public function index(){
       // $comments = Comments::with('user' , 'video')->orderby('id' , 'desc')->paginate(50);
        return view('Dashboard.home');
    }

}
