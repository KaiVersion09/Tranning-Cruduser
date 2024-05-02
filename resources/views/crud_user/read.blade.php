@extends('dashboard')
@section('content')
<!-- User Detail -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Column for user information -->
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
                            <label for="avatar" class="col-sm-4 col-form-label">Avatar:</label>
                            <div class="col-sm-8">
                                <img src="{{ $user->avatar }}" alt="Avatar" style="max-width: 100px;">
                            </div>
                        </div>

                        <!-- Kiểm tra xem profile có tồn tại không trước khi hiển thị -->
                        @if($profile)

                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-4 col-form-label">Phone:</label>
                            <div class="col-sm-8">
                                <p id="phone">{{ $profile->phone }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="first_name" class="col-sm-4 col-form-label">First Name:</label>
                            <div class="col-sm-8">
                                <p id="first_name">{{ $profile->first_name }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="last_name" class="col-sm-4 col-form-label">Last Name:</label>
                            <div class="col-sm-8">
                                <p id="last_name">{{ $profile->last_name }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="sex" class="col-sm-4 col-form-label">Sex:</label>
                            <div class="col-sm-8">
                                <p id="sex">{{ $profile->sex }}</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-4 col-form-label">Address:</label>
                            <div class="col-sm-8">
                                <p id="address">{{ $profile->address }}</p>
                            </div>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>

        <!-- Column for favorites and posts -->
        <div class="col-md-6">
            <div class="container mt-5">
                <div class="card">
                    <h5 class="card-header text-center">Sở Thích</h5>
                    <div class="card-body">
                        @if(!$favorites->isEmpty())
                        <ul>
                            @foreach($favorites as $favorite)
                            <li>{{ $favorite->favorite_name }}</li>
                            @endforeach
                        </ul>
                        @else
                        <p>Người dùng này chưa có sở thích nào.</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="card">
                    <h5 class="card-header text-center">Bài viết</h5>
                    <div class="card-body">
                        @if(!$posts->isEmpty())
                        <ul>
                            @foreach($posts as $post)
                            <h6>{{ $post->post_name }}</h6>
                            <p>{{ $post->post_description }}</p>
                            @endforeach
                        </ul>
                        @else
                        <p>Người dùng này chưa có bài viết nào.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection