@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <h1>Create PPAT Form</h1>
            <a class="btn btn-success float-start" href="{{ route('ppat.index') }}" role="button">Back to PPAT page</a>
        </div>
    </div>


    <div class="card mb-5">
        <form action="{{ route('ppat.store') }}" method="POST">
            @include('ppat.partials.form', ['create' => TRUE])
        </form>
    </div>
@endsection
