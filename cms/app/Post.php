<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
    use SoftDeletes;
//    protected $table = 'members';
//    protected $primaryKey = 'tid';
    protected $dates=['deleted_at'];
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    public function user(){

        return $this->belongsTo('App\User');
    }


}
