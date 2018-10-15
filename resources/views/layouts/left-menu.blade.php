<li class="nav-item nav-link">
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Insert
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ url('/authors/add') }}">Author</a>
            <a class="dropdown-item" href="{{ url('/booktypes/add') }}">Book Genre</a>
            <a class="dropdown-item" href="{{ url('/books/add') }}">Book</a>
        </div>
    </div>
</li>

<li class="nav-item nav-link">
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            List
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ url('/authors') }}">Authors</a>
            <a class="dropdown-item" href="{{ url('/booktypes') }}">Book Genres</a>
            <a class="dropdown-item" href="{{ url('/books') }}">Books</a>
        </div>
    </div>
</li>