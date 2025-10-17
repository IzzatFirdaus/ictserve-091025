<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements Auditable
{
    /** @use \Illuminate\Database\Eloquent\Factories\HasFactory<\Database\Factories\UserFactory> */
    use HasFactory,
        HasRoles,
        Notifiable,
        \OwenIt\Auditing\Auditable,
        SoftDeletes;

    /**
     * The UUID for the user.
     *
     * @var string|null
     */
    protected $uuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'uuid',
        'title',
        'name',
        'email',
        'identification_number',
        'identification_type',
        'phone',
        'address',
        'gender',
        'date_of_birth',
        'status',
        'password',
        'is_admin',
        'require_password_change',
        'last_login_at',
        'department_id',
        'position_id',
        'grade_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function headsOfDepartments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(
            Department::class,
            'head_user_id'
        );
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'date_of_birth' => 'date',
            'last_login_at' => 'datetime',
            'password' => 'hashed',
            'is_admin' => 'boolean',
            'require_password_change' => 'boolean',
        ];
    }

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function (User $user) {
            if (! $user->uuid) {
                $user->uuid = (string) Str::uuid();
            }
        });
    }
}
