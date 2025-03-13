@include('layout.header')
    <h3>Kategori</h3>
    <form action="{{route('kategori.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="" placeholder="Masukan Nama Kategori">
        </div>
        <button onclick="return confirm('Apakah anda yakin ingin menyimpan data ini?')" type="submit" class="tombol">Simpan</button>

    </form>
@include('layout.footer')