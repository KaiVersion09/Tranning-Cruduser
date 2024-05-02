@extends('dashboard')
@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Danh Sách Sở Thích</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên sở thích</th>
                            <th scope="col">Ghi chú sở thích</th>
                            <!--<th scope="col" class="text-center">Thao Tác</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($favorites as $favorites)
                        <tr>
                            <td>{{ $favorites->favorite_id }}</td>
                            <td>{{ $favorites->favorite_name }}</td>
                            <td>{{ $favorites->favorite_description }}</td>
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
<!-- Phân trang -->



@endsection