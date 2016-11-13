<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Shipper extends Model
{
    protected $table = 'shipper';
	
	protected $fillable = ['name', 'phone', 'email'];

	
	/*
	public function getOldShippers()
	{
		$shippers = $this->latest('id')
			->where('created_at','<=',Carbon::now())
			->get();
		return $shippers;
	}*/
	public function getOldShippers()
	{
		$shippers = $this->latest('id')->sorting()->get();
		return $shippers;
	}
	// Область 
	public function scopeSorting($query)
	{
		$query->where('created_at','<=',Carbon::now());
	}
	public function scopeUnsorting($query)
	{
		$query->where('created_at','>',Carbon::now());
	}
	public function getNewShippers()
	{
		$shippers = $this->latest('id')->unsorting()->get();
		return $shippers;
	}
}
