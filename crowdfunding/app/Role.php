<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Role extends Model
{
  protected static function boot() {
    parent::boot();
    static::creating(function ($model) {
        if ( ! $model->getKey()) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        }
    });

    // UuidTrait::bootUuidTrait();
  }

  /**
     * Get the value indicating whether the IDs are incrementing.
     *
     * @return bool
     */
    public function getIncrementing()
    {
        return false;
    }

    /**
     * Get the auto-incrementing key type.
     *
     * @return string
     */
    public function getKeyType()
    {
        return 'string';
    }

    public function users()
    {
      return $this->hasMany('App\User');
    }
}
