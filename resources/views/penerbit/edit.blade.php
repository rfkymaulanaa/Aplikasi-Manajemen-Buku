@include('layout.header')
    <h3>Edit Penerbit</h3>
    <form action="{{route('penerbit.update', $penerbit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nama Penerbit</label>
            <input type="text" name="nama_penerbit" id="" value="{{$penerbit->nama_penerbit}}">
        </div>
        <button onclick="return confirm('Apakah anda yakin ingin mengupdate data ini?')" type="submit" class="tombol">Update</button>

    </form>
@include('layout.footer')