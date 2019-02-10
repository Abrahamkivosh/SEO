<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Post extends Model
{
    //You can change table name to that in DB
    protected $table = 'posts';
    //primary '' => , like that in database
    public $primarykey = 'id';
    //timestamps

    public $timestamps = true;

    //creating relationship
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
