@extends('dashboard')
@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Danh Sách Người Dùng</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                           
                            <th scope="col">Phone</th>
                            <th scope="col">Avatar</th>
                            <th scope="col" class="text-center">Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                       
                            <td><img src="{{ $user->avatar }}" alt="Avatar" style="max-width: 100px; max-height: 100px;"></td>

                            <td class="text-center" style="padding-top: 10px;">

                            <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                                <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-4">
{{ $users->links() }}
</div>
            </div>

        </div>

    </div>
</div>
<!-- Phân trang -->



@endsection