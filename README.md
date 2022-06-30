# Installation 
	1. `composer install`
	2. `cp .env.example2 .env`
	3. `php artisan serve`
	
> Make sure you've installed the following schema in your DBMS.

```
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
```

