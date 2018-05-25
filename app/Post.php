<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['asnumber','peeringrs','peeringdb','asset','contact','user_id'];
     public function User(){
      return $this->hasmany('App\User');
     }
}
