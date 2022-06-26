<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hero extends Model
{
	use HasFactory;

	protected $guarded = ['id'];


	public function getHeroAttribute($value)
	{
		$avatar = asset('/images/default-avatar.png');
		if ($value)
			$avatar = asset('heros/' . $value);

		return $avatar;
	}
}
