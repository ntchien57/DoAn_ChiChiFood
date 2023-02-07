@include('guest.layout.header')
<div class="breadcumb-wrapper background-image p-3"
style="background-image: url(&quot;assets/img/breadcumb/breadcumb-bg.jpg&quot;);">
<div class="container z-index-common">
    <div class="breadcumb-content">
        <ul class="breadcumb-menu m-0">
            <li><a href="{{ route('home') }}">Trang Chủ</a></li>
            <li>Quên mật khẩu</li>
        </ul>
    </div>
</div>
</div>

<div id="login-form" class="modal-dialog" role="document">
    <div class="modal-content bdr-25">
        <div class="modal-header">
            <h5 class="modal-title login-title ml-auto" id="exampleModalLabel"><i style="padding-right: 5px;"
                    class="far fa-lock"></i>Quên mật
                khẩu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ route('forgot.password.link') }}" method="POST" autocomplete="off">
            @csrf
            @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            @if (Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            <div class="modal-body ">
                <label for="">Vui lòng nhập email để khôi phục mật khẩu của bạn<span
                        class="icon-required">*</span></label>
                <input type="email" class="forgot-email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                <span class="text-danger">@error('email')
                    {{ $message }}
                @enderror</span>
            </div>
            <div class="text-center mb-3 ml-3 mr-3">
                <button type="submit" class="btn btn-primary btn-login bdr-25 w-100">Yêu cầu mật khẩu mới</button>
            </div>
        </form>
    </div>
</div>
@include('guest.layout.footer')


