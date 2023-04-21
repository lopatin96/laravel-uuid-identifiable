<?php

namespace Atin\LaravelUuidIdentifiable\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuidIdentifiable
{
    public static function bootUuidIdentifiable(): void
    {
        static::creating(static function (Model $model) {
            $model->uuid = Str::uuid();
        });
    }
}