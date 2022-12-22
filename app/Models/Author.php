<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    public function books() : HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function awards() : HasMany
    {
        return $this->hasMany(AuthorAward::class);
    }
}
