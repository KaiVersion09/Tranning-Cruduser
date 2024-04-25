@extends('dashboard')
@section('content')
<!-- Form Cập Nhật Thông Tin -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <h5 class="card-header text-center">Cập Nhật Thông Tin</h5>
        <div class="card-body">
          <form action="{{ route('user.postUpdateUser') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input name="id" type="hidden" value="{{$user->id}}">
            <div class="mb-3 row">
              <label for="name" class="col-sm-4 col-form-label">Tên đăng nhập:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ $user->name }}">
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </div>
            </div>
            <div class="mb-3 row">
              <label for="password" class="col-sm-4 col-form-label">Mật khẩu mới:</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" id="password" placeholder="">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
              </div>
            </div>
            <div class="mb-3 row">
              <label for="password_confirmation" class="col-sm-4 col-form-label">Nhập lại mật khẩu mới:</label>
              <div class="col-sm-8">
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="">
                @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
              </div>
            </div>
            <div class="mb-3 row">
              <label for="email" class="col-sm-4 col-form-label">Email mới:</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{ $user->email }}">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>
            </div>
            <div class="mb-3 row">
              <label for="phone" class="col-sm-4 col-form-label">Số điện thoại mới:</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="" value="{{ $user->phone }}">
                @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
              </div>
            </div>
            <div class="mb-3 row">
              <label for="avatar" class="col-sm-4 col-form-label">Hình ảnh mới:</label>
              <div class="col-sm-8">
                <input type="file" class="form-control-file" name="avatar" id="avatar">
                @if ($errors->has('avatar'))
                <span class="text-danger">{{ $errors->first('avatar') }}</span>
                @endif
              </div>
            </div>

            <div class="mb-3 row">
              <div class="col-sm-8 offset-sm-4 text-end">
                <a href="#">Đã có tài khoản?</a>
                <button type="submit" class="btn btn-primary btn-block">Cập Nhật</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection