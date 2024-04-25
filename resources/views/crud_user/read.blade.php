@extends('dashboard')
@section('content')
<!-- User Detail -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header text-center">Chi Tiết Người Dùng</h5>
                <div class="card-body">
                    <form>
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-4 col-form-label">Name:</label>
                            <div class="col-sm-8">
                                <p id="name">{{ $user->name }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label">Email:</label>
                            <div class="col-sm-8">
                                <p id="email">{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-4 col-form-label">Phone:</label>
                            <div class="col-sm-8">
                                <p id="phone">{{ $user->phone }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="avatar" class="col-sm-4 col-form-label">Avatar:</label>
                            <div class="col-sm-8">
                                <img src="{{ $user->avatar}}" alt="Avatar" style="max-width: 100px;">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8 text-end">
                                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn btn-primary">Edit</a> |
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection