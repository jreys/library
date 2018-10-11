<form method="POST" action="/authors/store">
    {{ csrf_field() }}

    <h1>Add a new Author</h1>

    <input type="text" name="name" placeholder="Author's Name">
    <button type="submit">Add Author</button>
</form>