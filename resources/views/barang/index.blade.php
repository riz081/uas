<br><br><br>
@include('layout.nav')
<table class="table table-light">
    <thead>
      <tr >
        <th scope="col">Kode barang</th>
        <th scope="col">Nama barang</th>
        <th scope="col">Harga barang</th>
        <th scope="col">Deskripsi barang</th>
        <th scope="col">Satuan barang</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($barang as $barang)
        <tr>
        <td>{{ $barang->id }}</td>
        <td>{{ $barang->nama }}</td>
        <td>{{ $barang->harga }}</td>
        <td>{{ $barang->deskripsi }}</td>
        <td>{{ $barang->satuan->nama }}</td>
        <td>

            {{-- ACTIONS SECTION --}}
            @include('barang/action')
        </td>
        </tr>
        @endforeach
    </tbody>

  </table>
@include('layout.footer')
