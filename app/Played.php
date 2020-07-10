<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
protected $table = "tb_played";
protected $primaryKey = 'artist_id';
protected $fillable = ['album_id', 'track_id','played'];


}
