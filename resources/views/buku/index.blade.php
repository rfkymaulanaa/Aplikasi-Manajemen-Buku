@include('layout.header')
        <h3>Buku</h3>
        <a href="{{ route('buku.create') }}" class="tombol">Tambah </a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun</th>
                    <th>Kategori</th>
                    <th>Penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($allBukus as $key => $r )
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $r->judul }}</td>
                        <td>{{ $r->pengarang }}</td>
                        <td>{{ $r->tahun_terbit }}</td>
                        <td>{{ $r->kategori_id == null ? '-' : $r->kategori->nama_kategori}}</td>
                        <td>{{ $r->penerbit_id == null ? '-' : $r->penerbit->nama_penerbit}}</td>
                        <td>
                            <form action="{{ route ('buku.destroy', $r->id) }}" method="POST">
                                <a href="{{route('buku.show', $r->id) }}" class="tombol">Detail</a>
                                <a href="{{route('buku.edit', $r->id) }}" class="tombol">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" type="submit" class="tombol">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
             </tbody>
        </table>
    </div>
@include('layout.footer')