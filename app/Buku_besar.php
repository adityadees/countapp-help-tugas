<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku_besar extends Model
{
	protected $table = 'buku_besars';
	protected $primaryKey = 'bb_referensi';
	public $incrementing = false;
}
