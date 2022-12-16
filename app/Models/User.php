<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Models\Recordatorio;


class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'carrera',
        'semestre',
         'situacion',
         'name',
         'email',
         'password',
         'balance',

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

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getUsername()
    {
        return $this->attributes['username'];
    }
    public function setUsername($username)
    {
        $this->attributes['username'] = $username;
    }
    public function getCarrera()
    {
        return $this->attributes['carrera'];
    }
    public function setCarrera($carrera)
    {
        $this->attributes['carrera'] = $carrera;
    }
    public function getSemestre()
    {
        return $this->attributes['semestre'];
    }
    public function setSemestre($semestre)
    {
        $this->attributes['semestre'] = $semestre;
    }
    public function getSituacion()
    {
        return $this->attributes['situacion'];
    }
    public function setSituacion($situacion)
    {
        $this->attributes['situacion'] = $situacion;
    }
    public function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function getEmail()
    {
        return $this->attributes['email'];
    }
    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }
    public function getPassword()
    {
        return $this->attributes['password'];
    }
    public function setPassword($password)
    {
        $this->attributes['password'] = $password;
    }
    public function getRole()
    {
        return $this->attributes['role'];
    }
    public function setRole($role)
    {
        $this->attributes['role'] = $role;
    }
    public function getBalance()
    {
        return $this->attributes['balance'];
    }
    public function setBalance($balance)
    {
        $this->attributes['balance'] = $balance;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }

    public function recordatorios()
    {
        return $this->hasMany(Recordatorio::class);
    }
    public function getRecordatorios()
    {
        return $this->recordatorios;
    }
    public function setRecordatorios($recordatorios)
    {
        $this->recordatorios = $recordatorios;
    }
}
