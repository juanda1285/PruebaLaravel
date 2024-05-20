<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="pro_prefijo" class="form-label">{{ __('Pro Prefijo') }}</label>
            <input type="text" name="pro_prefijo" class="form-control @error('pro_prefijo') is-invalid @enderror" value="{{ old('pro_prefijo', $proProceso?->pro_prefijo) }}" id="pro_prefijo" placeholder="Pro Prefijo">
            {!! $errors->first('pro_prefijo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pro_nombre" class="form-label">{{ __('Pro Nombre') }}</label>
            <input type="text" name="pro_nombre" class="form-control @error('pro_nombre') is-invalid @enderror" value="{{ old('pro_nombre', $proProceso?->pro_nombre) }}" id="pro_nombre" placeholder="Pro Nombre">
            {!! $errors->first('pro_nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
    </div>
</div>