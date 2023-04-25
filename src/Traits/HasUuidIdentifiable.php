<?php

namespace Atin\LaravelUuidIdentifiable\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuidIdentifiable
{
    public static function bootHasUuidIdentifiable(): void
    {
        static::creating(static function (Model $model) {
            if (is_null($model->uuid)) {
                $model->uuid = Str::uuid();
            }
        });
    }
}