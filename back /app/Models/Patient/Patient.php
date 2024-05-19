<?php

namespace App\Models\Patient;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
   

    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'surname',
        'DNI',
        'movil',
        'fecha_nac',
        'gender',
        'antedent',
        'diagnostico',
        'address',
        'avatar'
    ];

    public function setCreatedAtAttribute($value)
    {
    	date_default_timezone_set('Europe/Madrid');
        $this->attributes["created_at"]= Carbon::now();
    }

    public function setUpdatedAtAttribute($value)
    {
    	date_default_timezone_set("Europe/Madrid");
        $this->attributes["updated_at"]= Carbon::now();
        
}
}