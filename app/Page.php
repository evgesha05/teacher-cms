<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    // Mass assigned
    protected $fillable = ['title', 'slug', 'parent_id', 'description',
                           'meta_title', 'meta_description', 'meta_keyword',
                           'published', 'created_by', 'modified_by'];

    // Mutators
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40)
                                  . "-"
                                  . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    // Get children page
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
