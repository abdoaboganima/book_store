@extends('layout.master')


@section('title', 'About')

@section('body')

<div class="container m-4">
    Made By: <i>Abdulrahman Aboghanima</i> for database project
    under supervision of Dr. Hanafy.
</div>
<div class="container">
<ol>
    What I did:
    <li>Used Frameworks
        <ul>
            <li>Used PHP Laravel Framework for the backend</li>
            <li>Used Bootstrap for Frontend.</li>
        </ul>
    </li>


    <li>
        Made the connection to the database.
        <pre>
            <code>
                DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE=library
                DB_USERNAME=root
                DB_PASSWORD=123456789
            </code>
        </pre>
    </li>
    <li>
        Created the Schema.
        <pre>
                <code>
                    drop database library;    #drops the database
                    create database library;  #create the database
                    use library;
                    create table book
                    (
                    id int not null auto_increment,
                    name varchar(30),
                    publisher varchar(30),
                    pages int,
                    price numeric(7,2),
                    primary key(id)
                    );
                </code>
        </pre>
    </li>
    <li>
        Created the routes.
    </li>
    <li>
        Created the CRUD operations using sql queries.
    </li>
</ol>
</div>

@endsection
