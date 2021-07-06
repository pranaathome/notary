@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
                <h1>Details Page</h1>
                <a class="btn btn-success float-start" href="{{ route('ppat.index') }}" role="button">Back to PPAT page</a>
            </div>
        </div>

    <div class="card">
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <td>{{ $ppat->id }}</td>
            </tr>
            <tr>
                <th>Nomor Proyek</th>
                <td>{{ $ppat->form->nomor_proyek }}</td>
            </tr>
            <tr>
                <th>Nama Klien</th>
                <td>{{ $ppat->form->nama_nasabah }}</td>
            </tr>
            <tr>
                <th>Jenis Pekerjaan</th>
                @if (isset($ppat->form->jenis_pekerjaan))
                    <td>{{ $ppat->form->jenis_pekerjaan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Lingkup Pekerjaan</th>
                @if (isset($ppat->form->lingkup_pekerjaan))
                    <td>{{ $ppat->form->lingkup_pekerjaan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Tahap Pekerjaan</th>
                @if (isset($ppat->form->tahap_pekerjaan))
                    <td>{{ $ppat->form->tahap_pekerjaan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Tanggal Mulai</th>
                @if (isset($ppat->form->tanggal_mulai))
                    <td>{{ $ppat->form->tanggal_mulai->format('d-m-Y') }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Tanggal Selesai</th>
                @if (isset($ppat->form->tanggal_selesai))
                    <td>{{ $ppat->form->tanggal_selesai->format('d-m-Y') }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Harga Proyek</th>
                @if (isset($ppat->form->harga_proyek))
                    <td>@currency($ppat->form->harga_proyek)</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Honor PPAT</th>
                <td>@currency($ppat->honor_ppat)</td>
            </tr>
            <tr>
                <th>Biaya Pengurusan</th>
                @if (isset($ppat->form->biaya_pengurusan))
                    <td>@currency($ppat->form->biaya_pengurusan)</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>PPn</th>
                @if (isset($ppat->ppn))
                    <td>@currency($ppat->ppn)</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>PPh</th>
                @if (isset($ppat->pph))
                    <td>@currency($ppat->pph)</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>BPHTB</th>
                @if (isset($ppat->bphtb))
                    <td>@currency($ppat->bphtb)</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Jumlah Bayar</th>
                @if (isset($ppat->form->jumlah_bayar))
                    <td>@currency($ppat->form->jumlah_bayar)</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>No. Faktur</th>
                <td>{{ $ppat->form->nomor_faktur }}</td>
            </tr>
            <tr>
                <th>Status Pembayaran</th>
                <td>{{ $ppat->form->status_pembayaran }}</td>
            </tr>
            <tr>
                <th>Status Proyek</th>
                <td>{{ $ppat->form->status_proyek }}</td>
            </tr>
            <tr>
                <th>Keterangan</th>
                @if (isset($ppat->form->keterangan))
                    <td>{{ $ppat->form->keterangan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
        </table>
    </div>
@endsection
