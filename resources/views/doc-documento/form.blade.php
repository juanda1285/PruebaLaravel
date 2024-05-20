<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="doc_nombre" class="form-label">{{ __('Doc Nombre') }}</label>
            <input type="text" name="doc_nombre" class="form-control @error('doc_nombre') is-invalid @enderror" value="{{ old('doc_nombre', $docDocumento?->doc_nombre) }}" id="doc_nombre" placeholder="Doc Nombre">
            {!! $errors->first('doc_nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="doc_codigo" class="form-label">{{ __('Doc Codigo') }}</label>
            <input type="text" name="doc_codigo" class="form-control @error('doc_codigo') is-invalid @enderror" value="{{ old('doc_codigo', $docDocumento?->doc_codigo) }}" id="doc_codigo" placeholder="Doc Codigo">
            {!! $errors->first('doc_codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="doc_contenido" class="form-label">{{ __('Doc Contenido') }}</label>
            <input type="text" name="doc_contenido" class="form-control @error('doc_contenido') is-invalid @enderror" value="{{ old('doc_contenido', $docDocumento?->doc_contenido) }}" id="doc_contenido" placeholder="Doc Contenido">
            {!! $errors->first('doc_contenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
            <div class="form-group mb-2 mb20">
    <label for="tip_id" class="form-label">{{ __('Tip Id') }}</label>
    <select name="tip_id" class="form-control @error('tip_id') is-invalid @enderror" id="tip_id">
        <option value="" disabled {{ old('tip_id', $docDocumento?->tip_id) == '' ? 'selected' : '' }}>Selecciona una opción</option>
        @foreach($tipos as $tipo)
            <option value="{{ $tipo->id }}" {{ old('tip_id', $docDocumento?->tip_id) == $tipo->id ? 'selected' : '' }}>
                {{ $tipo->id }}
            </option>
        @endforeach
    </select>
    {!! $errors->first('tip_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
</div>
<div class="form-group mb-2 mb20">
            <label for="prod_id" class="form-label">{{ __('Prod Id') }}</label>
            <select name="prod_id" class="form-control @error('prod_id') is-invalid @enderror" id="prod_id">
        <option value="" disabled {{ old('prod_id', $docDocumento?->prod_id) == '' ? 'selected' : '' }}>Selecciona una opción</option>
        @foreach($procesos as $proceso)
            <option value="{{ $proceso->id }}" {{ old('prod_id', $docDocumento?->prod_id) == $proceso->id ? 'selected' : '' }}>
                {{ $proceso->id }}
            </option>
        @endforeach
    </select>
            {!! $errors->first('prod_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>



        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
    </div>
</div>