<!DOCTYPE html>
<html lang="en">

@include('guest.layout.head')

<body>
    <div style="margin: 0 25%">
        <h1 style="text-align: center;">Lấy lại mật khẩu ChiChiFood</h1>
        <h2>Xin chào!</h2>
        <p style="font-size: 18px">{!! $body !!}</p>
        <br>
        <div style="text-align: center">
            <button style="background-color: rgb(65, 99, 236); padding:10px; border:none; border-radius:10px;">
                <a style="color: #ffff; text-decoration: none;" href="{{ $action_link }}">Reset Password</a></button>
        </div>
        <p style="font-size: 18px">Nếu bạn không yêu cầu lấy lại mật khẩu vui lòng bỏ qua email này.</p>
        <h3>Trân trọng,</h3>
        <h2>ChiChiFood</h2>
        <hr>
        <p>Nếu bạn gặp phải sự cố khi nhán vào nút "Reset Password". Hãy mở link sau bằng trình duyệt của bạn: {{ $action_link }} </p>
        <script src="/templates/guest/assets/js/vendor/jquery-3.6.0.min.js"></script>
    </div>

<script src="{{ asset('templates/guest/assets/js/app.min.js') }}"></script>
<script src="{{ asset('templates/guest/assets/js/main.js') }}"></script>
<script src="/templates/guest/assets/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.16/dist/sweetalert2.all.min.js"></script>
</body>

</html>
