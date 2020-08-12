<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    //
	protected $fillable = ['id','name','certificateid','location','coursecode','courseid','coursename'];
}
