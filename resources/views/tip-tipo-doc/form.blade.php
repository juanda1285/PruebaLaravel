<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tip_nombre" class="form-label">{{ __('Tip Nombre') }}</label>
            <input type="text" name="tip_nombre" class="form-control @error('tip_nombre') is-invalid @enderror" value="{{ old('tip_nombre', $tipTipoDoc?->tip_nombre) }}" id="tip_nombre" placeholder="Tip Nombre">
            {!! $errors->first('tip_nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tip_prefijo" class="form-label">{{ __('Tip Prefijo') }}</label>
            <input type="text" name="tip_prefijo" class="form-control @error('tip_prefijo') is-invalid @enderror" value="{{ old('tip_prefijo', $tipTipoDoc?->tip_prefijo) }}" id="tip_prefijo" placeholder="Tip Prefijo">
            {!! $errors->first('tip_prefijo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Confirmar') }}</button>
    </div>
</div>