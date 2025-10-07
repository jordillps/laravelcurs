<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Auth\MultiFactor\Email\Contracts\HasEmailAuthentication;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser, HasEmailAuthentication
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'has_email_authentication',
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

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'has_email_authentication' => 'boolean',
        ];
    }

    /**
     * Determine if the user has email authentication enabled.
     *
     * @return bool
     */
    public function hasEmailAuthentication(): bool
    {
        return $this->has_email_authentication;
    }

    /**
     * Toggle the user's email authentication status.
     *
     * @return void
     */
    public function toggleEmailAuthentication(bool $state): void
    {
        $this->has_email_authentication = $state;
        $this->save();
    }

    public function canAccessPanel(Panel $panel): bool
    {
        //solo los usuarios con rol admin pueden acceder al panel entero de Filament
        //return $this->is_admin == 1;
        //Poden acceder al panel entero de Filament todos los usuarios
         // return str_ends_with($this->email, '');
        return true; //Cualquier usuario puede acceder a Filament
    }

    
}
