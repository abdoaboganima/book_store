@extends('layout.master')

@section('title', 'Delete')

@section('body')

    <div class="container">
        <h2 class="text-center">Book Management | Delete</h2>
        <br>
        <form action = "/deletebook" method = "get" class="form-group" style="width:70%; margin-left:15%;" >

            <label class="form-group">Book ID:</label>
            <input type="text" class="form-control" placeholder="Book ID" name="bookid">

            <label class="form-group">Book Name:</label>
            <input type="text" class="form-control" placeholder="Book Name" name="name">

            <button type="submit"  value = "Delete Book" class="btn btn-primary">Submit</button>

        </form>
    </div>
@endsection
