<form action="{{ route('buku.update', ['buku' => $buku->id]) }}" method="POST">
    @csrf
    @method('PUT')    
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
        <input type="text" name="title" value="{{ $buku->title }}">
    </div>
    <div>
        <label>Author</label>
        <input type="text" name="penulis" value="{{ $buku->author }}">
    </div>
    <div>
        <label>Category</label>
        <input type="text" name="cat_id" value="{{ $buku->category_id }}">
    </div>
    <button type="submit">Save</button>
</form>
