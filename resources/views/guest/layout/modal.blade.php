<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
{{-- modal login --}}
<div id="login-form" class="modal-dialog" role="document">
    <div class="modal-content bdr-25">
        <div class="modal-header ">
            <h5 class="modal-title login-title ml-auto" id="exampleModalLabel"><i style="padding-right: 5px;"
                    class="far fa-user"></i> Đăng nhập
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body ">
            <form action="#" method="POST">
                <label for="">Tên đăng nhập<span class="icon-required">*</span></label>
                <input name="username" class="login-username" type="text">
                <small id="small-username-login" style="color: #eb0029"></small><br>
                <label for="">Mật khẩu<span class="icon-required">*</span></label>
                <input name="password" class="login-password" type="password">
                <small id="small-password-login" style="color: #eb0029"></small><br>
                <p class="pt-2 text-right text-black"><a href="{{ route('forgot.password.form') }}">Quên mật
                        khẩu?</a></p>
                <p>Bạn chưa có tài khoản? Vui lòng đăng kí <a type="button" data-toggle="modal"
                        data-target=".bd-example-modal-lg" class="link-register" href="#"> tại đây</a>
                </p>
                @csrf
            </form>
        </div>
        <div class="text-center mb-3 ">
            <button onclick="login()" type="button" class="btn btn-primary btn-login bdr-25">Đăng
                nhập</button>
        </div>
        <div class="">
            <p class="text-center">Or sign up with</p>
            <div class="flex text-center mb-3">
                <a href=""><img class="icon-fb" src="{{ asset('templates/guest/assets/img/icon/icon_fb.png') }}"
                        alt=""></a>
                <a href=""><img class="icon-gg" src="{{ asset('templates/guest/assets/img/icon/icon_gg.jpg') }}"
                        alt=""></a>
            </div>
        </div>
    </div>
</div>
{{-- modal register --}}
<div id="register-form" class="modal-dialog display-none" role="document">
    <div class="modal-content bdr-25">
        <div class="modal-header ">
            <h5 class="modal-title login-title ml-auto" id="exampleModalLabel"><i style="padding-right: 5px;"
                    class="far fa-user"></i>Đăng kí
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="" method="POST" id="formRegister">
            <div class="modal-body">
                <label for="">Tên đăng nhập<span class="icon-required">*</span></label>
                <input name="username" class="username" type="text" onblur="validationUsername()">
                <small id="small-user-register" style="color: #eb0029"></small><br>
                <label for="">Email<span class="icon-required">*</span></label>
                <input name="email" class="email" type="email" onblur="validationEmail()">
                <small id="small-email-register" style="color: #eb0029"></small><br>
                <label for="">Mật khẩu<span class="icon-required">*</span></label>
                <input name="password" class="password" type="password" onblur="validationPassword()">
                <small id="small-password-register" style="color: #eb0029"></small><br>
                <label for="">Nhập lại mật khẩu<span class="icon-required">*</span></label>
                <input name="re-password" class="re-password" type="password" onblur="validationRePassword()">
                <small id="small-repassword-register" style="color: #eb0029"></small><br>
            </div>
            @csrf
        </form>
        <div class="text-center mb-3 ">
            <button onclick="register()" type="submit" class="btn btn-primary btn-login bdr-25">Đăng
                Kí</button>
        </div>

        <div class="">
            <a class="back-login" href="#">
                <p class="text-center">Quay lại đăng nhập</p>
            </a>
        </div>
    </div>
</div>

</div>

{{-- change password --}}

<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
        <div id="changePassword-form" class="modal-dialog" role="document">
            <div class="modal-content bdr-25">
                <div class="modal-header ">
                    <h5 class="modal-title login-title ml-auto" id="#"><i style="padding-right: 5px;"
                            class="far fa-user"></i>Đổi mật khẩu
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" id="formChangePass">
                    <div class="modal-body">
                        <label for="">Email<span class="icon-required">*</span></label>
                        <input name="email" class="changeEmail" type="email">
                        <small id="small-changeEmail" class="display-none" style="color: #eb0029">Vui lòng nhập email </small><br>
                        <label for="">Mật khẩu cũ<span class="icon-required">*</span></label>
                        <input name="curent-password" class="current-password" type="password">
                        <small id="small-currentPassword" class="display-none" style="color: #eb0029">Vui lòng nhập mật khẩu cũ</small><br>
                        <label for="">Mật khẩu mới<span class="icon-required">*</span></label>
                        <input name="new-password" class="new-password" type="password">
                        <small id="small-newPassword" class="display-none" style="color: #eb0029">Vui lòng nhập mật khẩu mới</small><br>
                    </div>
                    @csrf
                </form>
                <div class="text-center mb-5 mt-3 ">
                    <button onclick="changPassword()" type="submit" class="btn btn-primary btn-login bdr-25">Đổi mật khẩu</button>
                </div>
            </div>
        </div>
</div>
