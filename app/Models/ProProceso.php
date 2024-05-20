<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProProceso
 *
 * @property $id
 * @property $pro_prefijo
 * @property $pro_nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property DocDocumento[] $docDocumentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ProProceso extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['pro_prefijo', 'pro_nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docDocumentos()
    {
        return $this->hasMany(\App\Models\DocDocumento::class, 'id', 'prod_id');
    }
    
}
