@extends('templates.main')

@section('content')
<h1>Create New User</h1>

<div class="card mb-5">
    <form action="{{ route('admin.users.store') }}" method="post">
        @include('admin.users.partials.form', ['create' => true])
    </form>
</div>
@endsection
