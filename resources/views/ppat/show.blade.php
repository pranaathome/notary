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
                <th>Nomor Proyek</th>
                <td>{{ $ppat->nomor_proyek }}</td>
            </tr>
            <tr>
                <th>Nama Klien</th>
                <td>{{ $ppat->nama_nasabah }}</td>
            </tr>
            <tr>
                <th>Jenis Pekerjaan</th>
                @if (isset($ppat->jenis_pekerjaan))
                    <td>{{ $ppat->jenis_pekerjaan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Lingkup Pekerjaan</th>
                @if (isset($ppat->lingkup_pekerjaan))
                    <td>{{ $ppat->lingkup_pekerjaan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Tahap Pekerjaan</th>
                @if (isset($ppat->tahap_pekerjaan))
                    <td>{{ $ppat->tahap_pekerjaan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Tanggal Mulai</th>
                @if (isset($ppat->tanggal_mulai))
                    <td>{{ $ppat->tanggal_mulai->format('d-m-Y') }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Tanggal Selesai</th>
                @if (isset($ppat->tanggal_selesai))
                    <td>{{ $ppat->tanggal_selesai->format('d-m-Y') }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Harga Proyek</th>
                @if (isset($ppat->harga_proyek))
                    <td>@currency($ppat->harga_proyek)</td>
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
                @if (isset($ppat->biaya_pengurusan))
                    <td>@currency($ppat->biaya_pengurusan)</td>
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
                @if (isset($ppat->jumlah_bayar))
                    <td>@currency($ppat->jumlah_bayar)</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>No. Faktur</th>
                <td>{{ $ppat->nomor_faktur }}</td>
            </tr>
            <tr>
                <th>Status Pembayaran</th>
                <td>{{ $ppat->status_pembayaran }}</td>
            </tr>
            <tr>
                <th>Status Proyek</th>
                <td>{{ $ppat->status_proyek }}</td>
            </tr>
            <tr>
                <th>Keterangan</th>
                @if (isset($ppat->keterangan))
                    <td>{{ $ppat->keterangan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
        </table>
    </div>
@endsection
