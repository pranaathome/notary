@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="float-start">Notary Page</h1>
            <a class="btn btn-success float-end" href="{{ route('notary.create') }}" role="button">Create New Form</a>
        </div>
    </div>

    <form action="{{ route('notary.index') }}" method="get">
        <div class="input-group mb-3">
            <input type="search" name="term" class="form-control" placeholder="Search for notary" value="{{ request('term') }}">
            <button class="btn btn-success" type="submit">Search</button>
        </div>
    </form>

    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor Proyek</th>
                    <th scope="col">Nama Klien</th>
                    {{-- <th scope="col">Jenis Pekerjaan</th>
                    <th scope="col">Lingkup Pekerjaan</th>
                    <th scope="col">Tahap Pekerjaan</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Selesai</th>
                    <th scope="col">Harga Proyek</th> --}}
                    <th scope="col">Honor Notaris</th>
                    {{-- <th scope="col">Biaya Pengurusan</th>
                    <th scope="col">Jumlah Bayar</th>
                    <th scope="col">No. Faktur</th> --}}
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col">Status Proyek</th>
                    {{-- <th scope="col">Ket.</th> --}}
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($forms as $form)
                    <tr>
                        <th scope="row">{{ $form->id }}</th>
                        <td>{{ $form->nomor_proyek }}</td>
                        <td>{{ $form->nama_nasabah }}</td> --}}
                        {{-- <td>Akta  Hibah Uang, Tanah dan Bangunan dan Warmerking  Surat Hibah Uang</td>
                        <td>-</td>
                        <td>-</td>
                        <td>10/8/20</td>
                        <td>10/9/20</td>
                        <td>Rp.6.500.000</td> --}}
                        {{-- <td>@currency($notary->honor_notaris)</td> --}}
                        {{-- <td>-</td>
                        <td>Rp.6.500.000</td>
                        <td>81/NOT./7/Inv/X/2020</td> --}}
                        {{-- <td>{{ $form->status_pembayaran }}</td>
                        <td>{{ $form->status_proyek }}</td> --}}
                        {{-- <td>-</td> --}}
                        {{-- <td>
                            <a href="{{ route('notary.edit', $notary->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('notary.destroy', $notary->id) }}" method="post" style="display: inline">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td> --}}
                    {{-- </tr> --}}
                {{-- @endforeach --}}
                @foreach ($notaries as $notary)
                    <tr>
                        <th scope="row">{{ $notary->id }}</th>
                        <td>{{ $notary->nomor_proyek }}</td>
                        <td>{{ $notary->nama_nasabah }}</td>
                        {{-- <td>Akta  Hibah Uang, Tanah dan Bangunan dan Warmerking  Surat Hibah Uang</td>
                        <td>-</td>
                        <td>-</td>
                        <td>10/8/20</td>
                        <td>10/9/20</td>
                        <td>Rp.6.500.000</td> --}}
                        <td>@currency($notary->honor_notaris)</td>
                        {{-- <td>-</td>
                        <td>Rp.6.500.000</td>
                        <td>81/NOT./7/Inv/X/2020</td> --}}
                        <td>{{ $notary->status_pembayaran }}</td>
                        <td>{{ $notary->status_proyek }}</td>
                        {{-- <td>-</td> --}}
                        <td>
                            <a href="{{ route('notary.show', $notary->id) }}" class="btn btn-sm btn-primary">Details</a>
                            <a href="{{ route('notary.edit', $notary->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('notary.destroy', $notary->id) }}" method="post" style="display: inline">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- {{ $forms->links() }} --}}
        {{ $notaries->links() }}
    </div>
@endsection
