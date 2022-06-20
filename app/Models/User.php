<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function get(string $search = '')
    {
        //        $users = $this->model('name', 'LIKE', "%{$request->search}%")->get();

        $users = $this->where(function ($query) use ($search) {
            if ($search) {
                $query->where('email', $search); // email = palavra pesquisada
                $query->orWhere('name', 'LIKE', "%{$search}%"); // ou o nome contenha a plavra pesquisada
            }
        })->get();

        return $users;
    }

    // criar o relacionamento entre as tabelas
    public function comments()
    {
//        return $this->hasMany(Comment::class, 'user_id', 'id');
        return $this->hasMany(Comment::class); //por default os dados acima sao setados.
    }
}
