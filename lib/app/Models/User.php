<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Specialist;
use Diploma;


class User extends Model
{
    //
    protected $table = 'tb_users';

    protected $fillable = [
    	'email',
    	'password',
    	'full_name',
    	'name_slug',
    	'phone_number',
    	'old',
    	'avatar',
    	'user_detail',
    	'level',
    	'user_dipl',
    	'user_spec'

    ];

    protected $guarded = ['id'];

    public function specialist()
    {
    	return $this->belongsTo('App\Models\Specialist', 'user_spec', 'id');
    }

    public function diploma()
    {
    	return $this->belongsTo('App\Models\Diploma', 'user_dipl', 'id');
    }

    public function getSpec($id)
    {
    	$spec = Specialist::where('user_spec', $id)->get();

    	return $spec;
    }
}
