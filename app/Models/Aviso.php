<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Aviso extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'priority',
        'description',
        'carrera',
        'semestre',
        'situacion',
        'image',

    ];
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
            "name" => "required|max:255",
            "priority" => "required|max:50",
            "description" => "required",
            "carrera" => "required|max:255",
            "semestre" => "required|max:255",
            "situacion" => "required|max:255",
            'image' => 'image',
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
    public function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function getPriority()
    {
        return $this->attributes['priority'];
    }
    public function setPriority($priority)
    {
        $this->attributes['priority'] = $priority;
    }
    public function getDescription()
    {
        return $this->attributes['description'];
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
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
    public function getImage()
    {
        return $this->attributes['image'];
    }
    public function setImage($image)
    {
        $this->attributes['image'] = $image;
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

    public function recordatorio()
    {
        return $this->belongsToMany(Recordatorio::class);
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
