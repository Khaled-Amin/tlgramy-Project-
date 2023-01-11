<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sites extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'sites';
    protected $fillable = [
        'site_name',
        'href',
        'category_id',
        'title',
        'description',
        'subcategories',
        'countries_id',
        'keyword',
        // 'tags',
        'facebook',
        'twitter',
        'instagram',
        'snapchat',
        'youtube',
        'telegram',
        'android',
        'ios',
        'confirmed'

    ];
    /**
     * Get the user that owns the Sites
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class , 'category_id');
    }
    public function country(){
        return $this->belongsTo(Countries::class , 'countries_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }




}
