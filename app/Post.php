<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// Evita a criação automática de timestamp.
	public $timestamps = false;

  	/**
     * Pertence a um usuário
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
