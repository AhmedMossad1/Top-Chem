<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\Dashboard\Messages\Store;
use App\Models\Message;
use App\Mail\ReplayContact;
use Illuminate\Support\Facades\Mail;
class MessagesController extends DashboardController
{
    public function __construct(Message $model)
    {
        parent::__construct($model);
    }
    //replay a message from Dashboard to Mail  => not active now !!
    public function replay($id,Store $request){
    //     $message=$this->model->findOrFail($id);
    //     $replay = $this->model->findOrfail($id);
    //     Mail::to($message->email)->send(new ReplayContact($message,$replay));
    // return redirect()->route('messages.edit',['id'=>$message->id]);
    }
}
