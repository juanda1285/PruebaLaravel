<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocDocumento
 *
 * @property $id
 * @property $doc_nombre
 * @property $doc_codigo
 * @property $doc_contenido
 * @property $prod_id
 * @property $tip_id
 * @property $created_at
 * @property $updated_at
 *
 * @property TipTipoDoc $tipTipoDoc
 * @property ProProceso $proProceso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DocDocumento extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['doc_nombre', 'doc_codigo', 'doc_contenido', 'prod_id', 'tip_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipTipoDoc()
    {
        return $this->belongsTo(\App\Models\TipTipoDoc::class, 'tip_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proProceso()
    {
        return $this->belongsTo(\App\Models\ProProceso::class, 'prod_id', 'id');
    }
    
}
