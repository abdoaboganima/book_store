<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Book Library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('view-records')}}">View Records</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('insert')}}">Insert</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('delete')}}">Delete</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('update')}}">Update</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0 " action="/searchbook" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search", name="name">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
