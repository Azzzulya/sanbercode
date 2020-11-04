<?php
namespace App\Traits;

use Illuminate\Support\Str;

trait UuidTrait {

  public static function bootUuidTrait(){
    static::creating(function($model){
      if ( !$model->getKey()) {
        $model->{$model->getKeyName()} = (string) Str::uuid();
      }
    });
  }
}

?>

