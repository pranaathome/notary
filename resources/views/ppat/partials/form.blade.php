@csrf
<div class="mb-3">
    <label for="nomor_proyek" class="form-label">Nomor Proyek</label>
    <input name="nomor_proyek" type="text" class="form-control @error('nomor_proyek') is-invalid @enderror" id="nomor_proyek" value="{{ old('nomor_proyek', $ppat->nomor_proyek ?? '') }}">
    @error('nomor_proyek')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="nama_nasabah" class="form-label">Nama Nasabah</label>
    <input name="nama_nasabah" type="text" class="form-control @error('nama_nasabah') is-invalid @enderror" id="nama_nasabah" value="{{ old('nama_nasabah', $ppat->nama_nasabah ?? '') }}">
    @error('nama_nasabah')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="jenis_pekerjaan" class="form-label">Jenis Pekerjaan</label>
    <input name="jenis_pekerjaan" type="text" class="form-control @error('jenis_pekerjaan') is-invalid @enderror" id="jenis_pekerjaan" value="{{ old('jenis_pekerjaan', $ppat->jenis_pekerjaan ?? '') }}">
    @error('jenis_pekerjaan')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="lingkup_pekerjaan" class="form-label">Lingkup Pekerjaan</label>
    <input name="lingkup_pekerjaan" type="text" class="form-control @error('lingkup_pekerjaan') is-invalid @enderror" id="lingkup_pekerjaan" value="{{ old('lingkup_pekerjaan', $ppat->lingkup_pekerjaan ?? '') }}">
    @error('lingkup_pekerjaan')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="tahap_pekerjaan" class="form-label">Tahap Pekerjaan</label>
    <input name="tahap_pekerjaan" type="text" class="form-control @error('tahap_pekerjaan') is-invalid @enderror" id="tahap_pekerjaan" value="{{ old('tahap_pekerjaan', $ppat->tahap_pekerjaan ?? '') }}">
    @error('tahap_pekerjaan')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
    <input name="tanggal_mulai" type="text" class="form-control @error('tanggal_mulai') is-invalid @enderror" id="tanggal_mulai" value="@if (isset($ppat->tanggal_mulai)) {{ old('tanggal_mulai', $ppat->tanggal_mulai->format('d-m-Y') ?? '') }} @else {{ old('tanggal_mulai', $ppat->tanggal_mulai ?? '') }} @endif">
    @error('tanggal_mulai')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
    <input name="tanggal_selesai" type="text" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="tanggal_selesai" value="@if (isset($ppat->tanggal_selesai)) {{ old('tanggal_selesai', $ppat->tanggal_selesai->format('d-m-Y') ?? '') }} @else {{ old('tanggal_selesai', $ppat->tanggal_selesai ?? '') }} @endif">
    @error('tanggal_selesai')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="harga_proyek" class="form-label">Harga Proyek</label>
    <input name="harga_proyek" type="text" class="form-control @error('harga_proyek') is-invalid @enderror" id="harga_proyek" value="{{ old('harga_proyek', $ppat->harga_proyek ?? '') }}">
    @error('harga_proyek')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="honor_ppat" class="form-label">Honor PPAT</label>
    <input name="honor_ppat" type="text" class="form-control @error('honor_ppat') is-invalid @enderror" id="honor_ppat" value="{{ old('honor_ppat', $ppat->honor_ppat ?? '') }}">
    @error('honor_ppat')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="biaya_pengurusan" class="form-label">Biaya Pengurusan</label>
    <input name="biaya_pengurusan" type="text" class="form-control @error('biaya_pengurusan') is-invalid @enderror" id="biaya_pengurusan" value="{{ old('biaya_pengurusan', $ppat->biaya_pengurusan ?? '') }}">
    @error('biaya_pengurusan')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="ppn" class="form-label">PPn</label>
    <input name="ppn" type="text" class="form-control @error('ppn') is-invalid @enderror" id="ppn" value="{{ old('ppn', $ppat->ppn ?? '') }}">
    @error('ppn')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="pph" class="form-label">PPh</label>
    <input name="pph" type="text" class="form-control @error('pph') is-invalid @enderror" id="pph" value="{{ old('pph', $ppat->pph ?? '') }}">
    @error('pph')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="bphtb" class="form-label">BPHTB</label>
    <input name="bphtb" type="text" class="form-control @error('bphtb') is-invalid @enderror" id="bphtb" value="{{ old('bphtb', $ppat->bphtb ?? '') }}">
    @error('bphtb')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
    <input name="jumlah_bayar" type="text" class="form-control @error('jumlah_bayar') is-invalid @enderror" id="jumlah_bayar" value="{{ old('jumlah_bayar', $ppat->jumlah_bayar ?? '') }}">
    @error('jumlah_bayar')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="nomor_faktur" class="form-label">No. Faktur</label>
    <input name="nomor_faktur" type="text" class="form-control @error('nomor_faktur') is-invalid @enderror" id="nomor_faktur" value="{{ old('nomor_faktur', $ppat->nomor_faktur ?? '') }}">
    @error('nomor_faktur')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
    <select class="form-select @error('status_pembayaran') is-invalid @enderror" name="status_pembayaran" id="status_pembayaran" place>
        <option>Pilih Status Pembayaran</option>
        <option value="Lunas" {{ old("status_pembayaran", $ppat->status_pembayaran ?? '') == "Lunas" ? "selected" : "" }}>Lunas</option>
        <option value="Belum lunas" {{ old("status_pembayaran", $ppat->status_pembayaran ?? '') == "Belum lunas" ? "selected" : "" }}>Belum lunas</option>
    </select>
    @error('status_pembayaran')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="status_proyek" class="form-label">Status Proyek</label>
    <select class="form-select @error('status_proyek') is-invalid @enderror" name="status_proyek" id="status_proyek">
        <option>Pilih Status Proyek</option>
        <option value="Selesai" {{ old("status_proyek", $ppat->status_proyek ?? '') == "Selesai" ? "selected" : "" }}>Selesai</option>
        <option value="Belum selesai" {{ old("status_proyek", $ppat->status_proyek ?? '') == "Belum selesai" ? "selected" : "" }}>Belum selesai</option>
    </select>
    @error('status_proyek')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="mb-3">
    <label for="keterangan" class="form-label">Ket.</label>
    <input name="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" value="{{ old('keterangan', $ppat->keterangan ?? '') }}">
    @error('keterangan')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>

@if (isset($create))
    <button type="submit" class="btn btn-primary">Create</button>
@else
    <button type="submit" class="btn btn-primary">Edit</button>
@endif
