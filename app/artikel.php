<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    //
  protected   $fillable=['judul','konten'];
  protected $primarykey='id';
}
