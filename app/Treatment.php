<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'procedure',
  ];

  /**
   * The plants that belong to the treatment.
   */
  public function plants()
  {
      return $this->belongsToMany('App\Plant');
  }

  /**
   * The diseases that belong to the treatment.
   */
  public function diseases()
  {
      return $this->belongsToMany('App\Disease');
  }
}
