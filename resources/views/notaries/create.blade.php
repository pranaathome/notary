@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <h1>Create Notary Form</h1>
            <a class="btn btn-success float-start" href="{{ route('notary.index') }}" role="button">Back to notary page</a>
        </div>
    </div>

    <div class="card mb-5">
        <form action="{{ route('notary.store') }}" method="POST">
            @include('notaries.partials.form', ['create' => TRUE])
        </form>
    </div>
@endsection
