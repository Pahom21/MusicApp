<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
  protected $table ="songs";
  protected $primaryKey = 'song_id';
  protected $guarded =[];

}
