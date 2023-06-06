<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div>
        <label>Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label>Author</label>
        <input type="text" name="penulis">
    </div>
    <div>
        <label>Category</label>
        <input type="text" name="cat_id">
    </div>
    <button type="submit">Save</button>
</form>
