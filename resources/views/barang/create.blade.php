<br><br><br>
@include('layout.nav')
<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger
    alert-dismissible fade show">
    {{ $error }}
    <button type="button" class="btn-close"
    data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endforeach
    @endif
<div class="row mx-5 mt-2">
    <div class="mb-3 text-center">
        <i class="bi-person-circle fs-1"></i>
        <h4>Pengajuan Service</h4>
        </div>
        <hr>
        <div class="col-md-6 mb-3">
            <label for="nama"class="form-label">Nama</label>
            <input class="form-control" type="text" name="nama" id="nama" value="" placeholder="Masukan Nama">
        </div>
        <div class="col-md-6 mb-3">
            <label for="nohp" class="form-label">No. HP</label>
            <input class="form-control" type="number" name="nohp" id="nohp" value="" placeholder="Masukan no HP">
        </div>
        <div class="col-md-6 mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input class="form-control" type="text" name="alamat" id="alamat" value="" placeholder="Masukan Alamat">
        </div>
        <div class="col-md-6 mb-3">
            <label for="position" class="form-label">Service</label>
            <select name="position" id="position" class="form-select">
                @foreach ($position as $position)
                <option value="{{ $position->id }}" {{ old('position') == $position->id ? 'selected' : '' }}>{{ $position->namaBarang }}</option>
                @endforeach
            </select>
            @error('position')
            <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 d-grid">
                <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
            </div>
            <div class="col-md-6 d-grid">
                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
            </div>
        </div>
    </div>
</form>

@include('layout.footer')
