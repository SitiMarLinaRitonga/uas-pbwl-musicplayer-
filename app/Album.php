<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
   protected $table = "tb_album";

   protected $primaryKey= 'artist_id';

   protected $fillable = ['album_id', 'album_name'];
}
