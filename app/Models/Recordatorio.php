<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Aviso;


class Recordatorio extends Model
{
    /**
     * aviso ATTRIBUTES
     * $this->attributes['id'] - int - contains the aviso primary key (id)
     * $this->attributes['name'] - string - contains the aviso name
     * $this->attributes['description'] - string - contains the aviso description
     * $this->attributes['image'] - string - contains the aviso image
     * $this->attributes['priority'] - int - contains the aviso priority
     * $this->attributes['created_at'] - timestamp - contains the aviso creation date
     * $this->attributes['updated_at'] - timestamp - contains the aviso update date
     */

    public static function validate($request)
    {
        $request->validate([
            "user_id" => "required|exists:users,id",
            "aviso_id" => "required|exists:avisos,id",
        ]);
    }

    //    public static function sumPricesByQuantities($avisos, $avisosInSession)
    //{
    //$total = 0;
    //foreach ($avisos as $aviso) {
    //$total = $total + ($aviso->getPrice()*$avisosInSession[$aviso->getId()]);
    //}
    //return $total;
    //}

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getUserId()
    {
        return $this->attributes['user_id'];
    }
    public function setUserId($userId)
    {
        $this->attributes['user_id'] = $userId;
    }
    public function getAvisoId()
    {
        return $this->attributes['aviso_id'];
    }
    public function setAvisoId($avisoId)
    {
        $this->attributes['aviso_id'] = $avisoId;
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }

    public function aviso()
    {
        return $this->hasMany(Aviso::class);
    }
    public function getAvisos()
    {
        return $this->avisos;
    }
    public function setAvisos($avisos)
    {
        $this->avisos = $avisos;
    }


}
