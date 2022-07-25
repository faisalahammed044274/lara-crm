<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    use SoftDeletes;
    // protected $table = 'posts';
    // protected $primaryKey = 'post_id';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'content',
    ];
    //-----------------------
    //  inverse one to one
    //-----------------------

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}