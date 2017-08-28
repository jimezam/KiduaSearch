<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name',
  ];

  /**
   * The treatments that belong to the disease.
   */
  public function treatments()
  {
      return $this->belongsToMany('App\Treatment');
  }
}
