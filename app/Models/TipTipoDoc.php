<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipTipoDoc
 *
 * @property $id
 * @property $tip_nombre
 * @property $tip_prefijo
 * @property $created_at
 * @property $updated_at
 *
 * @property DocDocumento[] $docDocumentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipTipoDoc extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['tip_nombre', 'tip_prefijo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docDocumentos()
    {
        return $this->hasMany(\App\Models\DocDocumento::class, 'id', 'tip_id');
    }
    
}
