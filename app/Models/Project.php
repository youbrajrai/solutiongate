<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
	use HasFactory;

	protected $guarded = ['id'];


	public function getImageAttribute($value)
	{
		$avatar = asset('/images/default-avatar.png');
		if ($value)
			$avatar = asset('projects/' . $value);

		return $avatar;
	}
}
