<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
  protected $guarded = ['id'];

   public static function persist()
   {
       $instance = (new static)->fill([
           'firstname'=> request()->firstname,
           'lastname'=> request()->lastname,
           'guestno'=> request()->guestno,
           'origin'=> request()->origin,
           'email'=> request()->email,
           'note'=> request()->note,
		        'cantmakeit'=> request()->cantmakeit,
       ]);

       $instance->save();

       return $instance;

    }

    public function test()
   {

   }
}
