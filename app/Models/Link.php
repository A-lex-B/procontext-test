<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'url'
    ];

    protected $appends = [
        'short_url'
    ];

    protected function shortUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => url('/' . $this->code)
        );
    }

    protected static function booted(): void
    {
        static::creating(function(Link $model) {

            do {
                $code = Str::lower(Str::random(6));
            } while (Link::where('code', $code)->exists());
            
            $model->code = $code;

            $model->clicks = 0;
        });
    }
}
