@extends('main')

@section('content')

<h4>Create</h4>

{!! Form::open() !!}
    {{ Form::label('name', 'Name:')}}
    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))}}

    {{ Form::label('amount', 'Amount:')}}
    {{ Form::text('amount', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))}}

    {{ Form::submit('Submit',  array('class' => 'btn btn-success btn-block', 'style' => 'margin-top: 20px;'))}}
{!! Form::close() !!}

<script>
$(document).ready(function() {
    $('form').on('submit', function(e){
        e.preventDefault();
        var product = $(this).serialize();
        $.ajax({
            url: 'http://127.0.0.1:9999/api/products',
            type: 'POST',
            data: product,
        }).done(function() {
            window.location.href = '/';
        });
        return false;
    })
});
</script>

@endsection