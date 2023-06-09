<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
	protected $table = "transaksi";

	protected $guarded = ["id"];

	public function kategori()
	{
		return $this->belongsTo('App\Kategori');
	}
}
