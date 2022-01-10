<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('isbn') }}
            {{ Form::text('isbn', $libro->isbn, ['class' => 'form-control' . ($errors->has('isbn') ? ' is-invalid' : ''), 'placeholder' => 'Isbn']) }}
            {!! $errors->first('isbn', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $libro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paginas') }}
            {{ Form::text('paginas', $libro->paginas, ['class' => 'form-control' . ($errors->has('paginas') ? ' is-invalid' : ''), 'placeholder' => 'Paginas']) }}
            {!! $errors->first('paginas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero_id', $genero, $libro->genero_id, ['class' => 'form-control' . ($errors->has('genero_id') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>