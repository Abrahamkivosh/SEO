<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminupdate extends Model
{
    //You can change table name to that in DB
    protected $table = 'users';
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
