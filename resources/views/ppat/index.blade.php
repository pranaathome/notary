@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="float-start">PPAT Page</h1>
            <a class="btn btn-success float-end" href="{{ route('ppat.create') }}" role="button">Create New Form</a>
        </div>
    </div>

    <form action="{{ route('ppat.index') }}" method="get">
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
                    {{-- <th scope="col">Honor PPAT</th> --}}
                    {{-- <th scope="col">Biaya Pengurusan</th> --}}
                    {{-- <th scope="col">PPn</th> --}}
                    {{-- <th scope="col">PPh</th> --}}
                    {{-- <th scope="col">BPHTB</th> --}}
                    {{-- <th scope="col">Jumlah Bayar</th>
                    <th scope="col">No. Faktur</th> --}}
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col">Status Proyek</th>
                    {{-- <th scope="col">Ket.</th> --}}
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ppats as $ppat)
                    <tr>
                        <th scope="row">{{ $ppat->id }}</th>
                        <td>{{ $ppat->nomor_proyek }}</td>
                        <td>{{ $ppat->nama_nasabah }}</td>
                        {{-- <td>Akta  Hibah Uang, Tanah dan Bangunan dan Warmerking  Surat Hibah Uang</td>
                        <td>-</td>
                        <td>-</td>
                        <td>10/8/20</td>
                        <td>10/9/20</td>
                        <td>Rp.6.500.000</td> --}}
                        {{-- {{-- @foreach ($ppats as $ppat) --}}
                            {{-- <td>@currency($ppat->honor_ppat)</td> --}}
                            {{-- <td>-</td> --}}
                        {{-- @endforeach --}}
                        {{-- <td>-</td> --}}
                        {{-- @foreach ($ppats as $ppat) --}}
                            {{-- <td>@currency($ppat->ppn)</td> --}}
                            {{-- <td>-</td> --}}
                            {{-- <td>@currency($ppat->pph)</td> --}}
                            {{-- <td>-</td> --}}
                            {{-- <td>@currency($ppat->bphtb)</td> --}}
                            {{-- <td>-</td> --}}
                        {{-- @endforeach --}}
                        {{-- <td>Rp.6.500.000</td>
                        <td>81/NOT./7/Inv/X/2020</td> --}}
                        <td>{{ $ppat->status_pembayaran }}</td>
                        <td>{{ $ppat->status_proyek }}</td>
                        {{-- <td>-</td> --}}
                        <td>
                            <a href="{{ route('ppat.show', $ppat->id) }}" class="btn btn-sm btn-primary">Details</a>
                            <a href="{{ route('ppat.edit', $ppat->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('ppat.destroy', $ppat->id) }}" method="post" style="display: inline">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $ppats->links() }}
    </div>
@endsection
