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

  /**
   * Scope a query to only include diseases by name.
   *
   * @param \Illuminate\Database\Eloquent\Builder $query
   * @return \Illuminate\Database\Eloquent\Builder
   */
  public function scopeByName($query, $keywords)
  {
      return $query
                -> where('name', 'LIKE', "%{$keywords}%")
                -> orWhere('scientific_name', 'LIKE', "%{$keywords}%")
                -> orWhere('id', '=', intval($keywords));
  }
}
