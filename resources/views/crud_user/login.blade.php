@extends('dashboard')
  @section('content')
  <!-- Form Đăng Nhập -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <h5 class="card-header text-center">Đăng Nhập</h5>
          <div class="card-body">
            <form action="{{ route('user.authUser') }}" method="post">
              @csrf
              <div class="mb-3 row">
                <label for="email" class="col-sm-4 col-form-label">Tên đăng nhập:</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control"  name="email" id="email" placeholder="">
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
              </div>
              <div class="mb-3 row">
                <label for="password" class="col-sm-4 col-form-label">Mật khẩu:</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" name="password" id="password" placeholder="">
                  @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Ghi nhớ đăng nhập</label>
                  </div>
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8 text-end"> <!-- Sử dụng class text-end để căn phải -->
                  <a href="#" class="float-start">Quên mật khẩu?</a>
                  <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection