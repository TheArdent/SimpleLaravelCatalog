<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $primaryKey = 'product_id';

	public function category()
	{
		return $this->belongsTo('App\Category','category_id','category_id');
	}

	public function scopeAvailable($query)
	{
		return $query->where('available','1');
	}

	public function getProductBySlug($slug)
	{
		return $this->available()->where('slug',$slug)->firstOrFail();
	}

	public function getAllAvailable()
	{
		return $this->available()->orderBy('weight')->paginate(15);
	}

	public function galery()
	{
		return $this->hasMany('App\Gallery','product_id','product_id');
	}

	public function getGalery()
	{
		return $this->galery()->orderBy('weight')->get();
	}

	public function review()
	{
		return $this->hasMany('App\Review','product_id','product_id');
	}

	public function getReview()
	{
		return $this->review()->get();
	}

	public function getTopRated($count)
	{
		return $this->available()->orderBy('weight')->get()->take($count);
	}
}
