<form method="POST" action="/booktypes/store">
    {{ csrf_field() }}

    <h1>Add a new Book Type</h1>

    <input type="text" name="title" placeholder="Add a new book genre">
    <button type="submit">Add Book Genre</button>
</form>