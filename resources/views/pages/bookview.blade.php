@extends('layout.master')

@section('title', 'View Books Records')

@section('body')
    <div class="container">
        <h2 class="text-center">View Book Records</h2>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Book Name</th>
                <th>Publisher Name</th>
                <th>No. Of Pages</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->pages }}</td>
                    <td>{{ $book->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

