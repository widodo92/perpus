<h1>Category Detail</h1>
{{ $category->name }}

<table class="table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Penulis</th>        
      </tr>
    </thead>
    <tbody>
      @forelse ($category->buku as $buku)

      <tr>
        <td>{{ $buku->title }}</td>
        <td>{{ $buku->author }}</td>        
      </tr>
      @empty
      Data Belum Tersedia
      @endforelse

    </tbody>

  </table>