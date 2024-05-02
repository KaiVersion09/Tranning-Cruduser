@extends('dashboard')

@section('content')

<div class="container mt-5">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif


    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Danh Sách Bài Viết</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên Bài Viết</th>
                            <th scope="col">Ghi chú Bài Viết</th>
                            <!--<th scope="col" class="text-center">Thao Tác</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($post as $post)
                        <tr>
                            <td>{{ $post->post_id }}</td>
                            <td>{{ $post->post_name }}</td>
                            <td>{{ $post->post_description }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-4">
                </div>
            </div>

        </div>

    </div>
</div>
@endsection