<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Grade extends Model implements Auditable
{
    /** @use \Illuminate\Database\Eloquent\Factories\HasFactory<\Database\Factories\GradeFactory> */
    use HasFactory, \OwenIt\Auditing\Auditable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'code',
        'description',
        'scheme',
        'salary_min',
        'salary_max',
        'is_active',
    ];

    /**
     * Get the users with this grade.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<User, Grade>
     */
    public function users(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'salary_min' => 'integer',
            'salary_max' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}
