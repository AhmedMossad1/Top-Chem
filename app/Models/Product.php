<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function cat(){
        return $this->belongsTo(Category::class,'cat_id');
    }
    public function scopePublished(){
        return $this->where('published' , 1);
    }
}
