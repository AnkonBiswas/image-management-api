<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagelist extends Model
{
	  protected $primaryKey = "id";
    //public $timestamps = false;
    //

	   const CREATED_AT = 'date_added';
    const UPDATED_AT = 'date_modified';
}
