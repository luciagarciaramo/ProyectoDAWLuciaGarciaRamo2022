<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('libro') }}
            {{ Form::text('libro', $libro, $libroeditorial->libro, ['class' => 'form-control' . ($errors->has('libro') ? ' is-invalid' : ''), 'placeholder' => 'Libro']) }}
            {!! $errors->first('libro', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('editorial') }}
            {{ Form::text('editorial', $editorial, $libroeditorial->editorial, ['class' => 'form-control' . ($errors->has('editorial') ? ' is-invalid' : ''), 'placeholder' => 'Editorial']) }}
            {!! $errors->first('editorial', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>