@include('layout.header')
    <h3>Buku</h3>

    <form action="{{route('buku.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" name="judul" id="" placeholder="Masukan judul buku">
        </div>
        <div class="form-group">
            <label for="">Pengarang</label>
            <input type="text" name="pengarang" id="" placeholder="Masukan Nama pengarang">
        </div>
        <div class="form-group">
            <label for="">Tahun</label>
            <input type="text" name="tahun_terbit" id="" placeholder="Masukan Tahun terbit buku">
        </div>
        <div class="form-group">
            <label for="">Kategori</label>
            <select name="kategori_id" id="">
                @foreach ($kategori as $k )
                    <option value="{{$k->id}}"> {{$k->nama_kategori}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Penerbit</label>
            <select name="penerbit_id" id="">
                @foreach ($penerbit as $p )
                    <option value="{{$p->id}}"> {{$p->nama_penerbit}} </option>
                @endforeach
            </select>
        </div>
        <button onclick="return confirm('Apakah anda yakin ingin menyimpan data ini?')" type="submit" class="tombol">Simpan</button>

    </form>
@include('layout.footer')