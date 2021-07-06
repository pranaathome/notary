@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="float-start">Hello Admin</h1>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary float-end">Create New User</a>
        </div>
    </div>

    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($users as $user)
                <tbody>
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a class="btn btn-sm btn-success" href="{{ route('admin.users.edit', $user->id) }}" role="button">Edit</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        {{ $users->links() }}
    </div>
@endsection
