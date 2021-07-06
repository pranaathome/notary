@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <h1>Edit PPAT Form</h1>
            <a class="btn btn-success float-start" href="{{ route('ppat.index') }}" role="button">Back to PPAT page</a>
        </div>
    </div>

    <div class="card mb-5">
        <form action="{{ route('ppat.update', $ppat->id) }}" method="post">
            @method('PATCH')
            @include('ppat.partials.form')
        </form>
    </div>
@endsection
