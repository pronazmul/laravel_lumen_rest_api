<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{

    Protected $table = 'user';
	Protected $primaryKey = 'id';
	Protected $keyType = 'int';
	Public $incrementing = true;
	Public $timestamps = false;
}
