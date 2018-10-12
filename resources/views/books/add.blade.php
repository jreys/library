<form method="POST" action="/books/store">
    {{ csrf_field() }}

    <h1>Add a new Book</h1>

    <label for="title">Book's title</label>
    <input id="title" type="text" name="title">

    <br>

    <label for="description">Book's description</label>
    <textarea name="description"></textarea>

    <br>
    <label for="author">Author</label>
    <select id="author" name="author">
    @foreach($item->authors() as $author)
        <option value="{{ $author->id }}">{{ $author->name }}</option>
    @endforeach
    </select>

    <br>

    <label for="book_type">Genre</label>
    <select id="book_type" name="book_type">
        @foreach($item->types() as $book_type)
            <option value="{{ $book_type->id }}">{{ $book_type->title }}</option>
        @endforeach
    </select>

    <br>

    <label for="pages">Pages</label>
    <input id="pages" name="pages" type="number" min="0" value="0">



    <label for="quantity">Current stock</label>
    <input id="quantity" name="quantity" type="number" min="0" value="0">

    <br>

    <button type="submit">Add Book</button>
</form>