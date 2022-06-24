@extends('layout.master')

@section('title', 'insert')

@section('body')

    <div class="container">
        <h2 class="text-center">Book Management | Add</h2>
        <br>
        <form action = "/addbook" method = "get" class="form-group" style="width:70%; margin-left:15%;" >

            <label class="form-group">Book Name:</label>
            <input type="text" class="form-control" placeholder="Book Name" name="name">

            <label>Publisher Name:</label>
            <input type="text" class="form-control" placeholder="Publisher Name" name="p_name">

            <label>Book Price:</label>
            <input type="text" class="form-control" placeholder="Book Price" name="price">

            <label>Book No. Of Pages</label>
            <input type="text" class="form-control" placeholder="No. pages" name="pages"><br>

            <button type="submit"  value = "Add Book" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
