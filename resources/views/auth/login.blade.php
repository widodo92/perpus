<h2>Login</h2>
<form action="{{ route('login') }}" method="POST">
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
        <label>Username</label>
        <input type="text" name="username" value="{{ old('username') }}">
        @error('username')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password">
    </div>
    
    <button type="submit">Login</button>
</form>
