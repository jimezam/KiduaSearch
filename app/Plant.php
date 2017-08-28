<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'scientific_name', 'url',
  ];

  /**
   * The treatments that belong to the plant.
   */
  public function treatments()
  {
      return $this->belongsToMany('App\Treatment');
  }
}
