@extends('templates.main')

@section('content')
<h1>Edit User</h1>

<div class="card mb-5">
    <form action="{{ route('admin.users.update', $user->id) }}" method="post">
        @method('PATCH')
        @include('admin.users.partials.form')
    </form>
</div>
@endsection
