<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ url('css/topnav.css') }}">
</head>

<body>
  <?php //dd($bukus); ?>

  <div class="topnav">
    <a class="active" href="/">Home</a>
    <a href="{{ route('buku.index') }}">Buku</a>
    <a href="/contact">Contact</a>
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit">Logout</button>
    </form>
  </div>
  <h2>Daftar Dosen</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Judulnya</th>
        <th>Penulis</th>
        <th>Kategori</th>
        <th>Slug</th>

      </tr>
    </thead>
    <tbody>
      @forelse ($bukus as $buku)

      <tr>
        <td>{{ $buku->title }}</td>
        <td>{{ $buku->author }}</td>
        <td>{{ $buku->category->name }}</td>
        <td>{{ $buku->category->slug }}</td>
      </tr>
      @empty
      Data Belum Tersedia
      @endforelse

    </tbody>

  </table>
</body>

</html>
