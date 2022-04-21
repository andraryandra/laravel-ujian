<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Detailsoal extends Model
{
	public function checkJawab()
	{
		return $this->belongsTo('App\Models\Jawab', 'id', 'no_soal_id')->where('id_user', Auth::user()->id);
	}
}
