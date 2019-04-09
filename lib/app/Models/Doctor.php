<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $table = 'tb_doctors';
    protected $primaryKey = 'doct_id';
    protected $guarded = [];
}
