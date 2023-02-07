@include('admin.layout.header')

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a class="text-light" href="index.html">
                    <img class="w-25" src="{{ asset('templates/guest/assets/img/logochichi.svg') }}" alt="">
                    <span class="pl-2 text-dark font-weight-bold">ChiChiFood</span>
                    </a>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img  src="{{ asset('templates/admin/vendors/images/login-img.jpg') }}" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-success">Đăng nhập</h2>
                        </div>
                        <form action="/system_admin/login" method="POST">
                            @csrf
                            <div class="input-group custom">
                                <input name="username" type="text" class="form-control form-control-lg" placeholder="Tên đăng nhập" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input name="password" type="password" class="form-control form-control-lg" placeholder="**********" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password">
                                        <a href="forgot-password.html">Quên mật khẩu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0" >
                                        <button type="submit" class="btn btn-success btn-lg btn-block text-light" href="">Đăng nhập</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.footer')
