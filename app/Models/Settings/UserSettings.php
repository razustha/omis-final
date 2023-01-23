<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    use HasFactory;

    protected $table = 'tbl_user_settings';
    protected $primaryKey = 'usersetting_id';
    protected $fillable = [
        'slug','title', 'value', 'is_active','user_id'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function scopeFetch($query, $slug)
    {
        return $query->whereSlug($slug);
    }

    public function scopeActive($query, $type = true)
    {
        return $query->whereIsActive($type);
    }
}
