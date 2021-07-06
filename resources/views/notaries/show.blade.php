@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
                <h1>Details Page</h1>
                <a class="btn btn-success float-start" href="{{ route('notary.index') }}" role="button">Back to notary page</a>
            </div>
        </div>

    <div class="card">
        <table class="table table-striped">
            <tr>
                <th>Nomor Proyek</th>
                <td>{{ $notary->nomor_proyek }}</td>
            </tr>
            <tr>
                <th>Nama Klien</th>
                <td>{{ $notary->nama_nasabah }}</td>
            </tr>
            <tr>
                <th>Jenis Pekerjaan</th>
                @if (isset($notary->jenis_pekerjaan))
                    <td>{{ $notary->jenis_pekerjaan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Lingkup Pekerjaan</th>
                @if (isset($notary->lingkup_pekerjaan))
                    <td>{{ $notary->lingkup_pekerjaan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Tahap Pekerjaan</th>
                @if (isset($notary->tahap_pekerjaan))
                    <td>{{ $notary->tahap_pekerjaan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Tanggal Mulai</th>
                @if (isset($notary->tanggal_mulai))
                    <td>{{ $notary->tanggal_mulai->format('d-m-Y') }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Tanggal Selesai</th>
                @if (isset($notary->tanggal_selesai))
                    <td>{{ $notary->tanggal_selesai->format('d-m-Y') }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Harga Proyek</th>
                @if (isset($notary->harga_proyek))
                    <td>@currency($notary->harga_proyek)</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Honor Notaris</th>
                <td>@currency($notary->honor_notaris)</td>
            </tr>
            <tr>
                <th>Biaya Pengurusan</th>
                @if (isset($notary->biaya_pengurusan))
                    <td>@currency($notary->biaya_pengurusan)</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>Jumlah Bayar</th>
                @if (isset($notary->jumlah_bayar))
                    <td>@currency($notary->jumlah_bayar)</td>
                @else
                    <td>-</td>
                @endif
            </tr>
            <tr>
                <th>No. Faktur</th>
                <td>{{ $notary->nomor_faktur }}</td>
            </tr>
            <tr>
                <th>Status Pembayaran</th>
                <td>{{ $notary->status_pembayaran }}</td>
            </tr>
            <tr>
                <th>Status Proyek</th>
                <td>{{ $notary->status_proyek }}</td>
            </tr>
            <tr>
                <th>Keterangan</th>
                @if (isset($notary->keterangan))
                    <td>{{ $notary->keterangan }}</td>
                @else
                    <td>-</td>
                @endif
            </tr>
        </table>
    </div>
@endsection
