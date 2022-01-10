<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Titulo') }}
            {{ Form::select('isbn', $libro ,$libroautor->isbn, ['class' => 'form-control' . ($errors->has('isbn') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('isbn', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Autor') }}
            {{ Form::select('autor_id', $autor, $libroautor->autor_id, ['class' => 'form-control' . ($errors->has('autor_id') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('autor_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>