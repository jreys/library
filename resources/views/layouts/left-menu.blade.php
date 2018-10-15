<li class="nav-item">
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
