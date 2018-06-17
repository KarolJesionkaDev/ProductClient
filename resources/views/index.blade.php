@extends('main')

@section('content')

<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Amount</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['amount'] }}</td>
                    <td>
                        <a href="{{ route('product.edit', $item['id']) }}" class="btn btn-default btn-primary btn-sm">Edit</a>
                        <a data-id="{{ $item['id'] }}" class="btn btn-default btn-danger btn-sm delete-button">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
</table>

<a href="{{ route('product.create') }}" class="btn btn-success btn-block">Add</a>

<script>
    $(document).ready(function() {
        $('.delete-button').on('click', function() {
            var id = $(this).attr('data-id');
            $.ajax({
                url: 'http://127.0.0.1:9999/api/products/'+id,
                type: 'DELETE'
            }).done(function() {
                window.location.href = '/';
            });
            return false;
        })
    });
</script>

@endsection
