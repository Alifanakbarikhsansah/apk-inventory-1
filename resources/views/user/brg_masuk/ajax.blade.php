@foreach($ajax_barang as $d)

<!-- <input type="hidden" readonly="" name="jml_brg_masuk" class="form-control" value="{{$d->jml_brg_masuk}}" required>
<input type="hidden" readonly="" name="nama_barang" class="form-control" value="{{$d->nama_barang}}" required> -->


<div class="form-group">
    <label>Kategori</label>
        <input type="text" class="form-control" id="kategori" value="{{ $d->nama_kategori }}" readonly required>
</div>
@endforeach