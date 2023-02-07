// modal login, register, forgot
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(".back-login").click(function() {
    $("#login-form").removeClass('display-none');
    $("#register-form").addClass('display-none');
    $("#forgot-form").addClass('display-none');
});

$(".link-register").click(function() {
    $("#login-form").addClass('display-none');
    $("#register-form").removeClass('display-none');
});

$(".link-forgot").click(function() {
    $("#login-form").addClass('display-none');
    $("#forgot-form").removeClass('display-none');
});



// register

function validationUsername() {

    var usernameRegex = /^[a-zA-Z0-9]+$/;

    const username = $('.username').val();

    if (!username.match(usernameRegex)) {
        document.getElementById("small-user-register").innerHTML = "Tên đăng nhập không hợp lệ";
    } else {
        document.getElementById("small-user-register").innerHTML = "";
    }
}

function validationEmail() {

    var patternEmail = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    const email = $('.email').val();

    if (!email.match(patternEmail)) {
        document.getElementById("small-email-register").innerHTML = "Email không hợp lệ";
    } else {
        document.getElementById("small-email-register").innerHTML = "";
    }
}

function validationPassword() {

    const password = $('.password').val();

    if (password.length != 6) {
        document.getElementById("small-password-register").innerHTML = "Mật khẩu tối thiểu 6 kí tự";
    } else {
        document.getElementById("small-password-register").innerHTML = "";
    }
}

function validationRePassword() {
    const password = $('.password').val();
    const re_password = $('.re-password').val();

    if (password != re_password) {
        document.getElementById("small-repassword-register").innerHTML = "Mật khẩu nhập lại không đúng";
    } else {
        document.getElementById("small-repassword-register").innerHTML = "";
    }

}

function register() {
    const username = $('.username').val();
    const email = $('.email').val();
    const password = $('.password').val();
    const rePassword = $('.re-password').val();

    if (username == '') {
        document.getElementById("small-user-register").innerHTML = "Vui lòng điền tên đăng nhập ";
    }

    if (email == '') {
        document.getElementById("small-email-register").innerHTML = "Vui lòng điền email";
    }

    if (password == '') {
        document.getElementById("small-password-register").innerHTML = "Vui lòng điền mật khẩu ";
    }

    $.ajax({
        url: '/register',
        type: 'POST',
        dataType: 'JSON',
        data: {
            username: username,
            email: email,
            password: password
        },

        success: function(response) {
            if (response['register'] == 'error-email') {
                document.getElementById("small-email-register").innerHTML = "Email đã tồn tại";
            } else if (response['register'] == 'error-username') {
                document.getElementById("small-user-register").innerHTML = "Tên đăng nhập đã tồn tại";
            } else {
                Swal.fire({
                    title: 'Đăng kí thành công!',
                    icon: 'success',
                }).then((result) => {
                    $("#login-form").removeClass('display-none');
                    $("#register-form").addClass('display-none');
                })
            }
        }
    })
}


//  login

function login() {
    const username = $('.login-username').val();
    const password = $('.login-password').val();

    if (username == '' && password == '') {
        document.getElementById("small-username-login").innerHTML = "Vui lòng điền tên đăng nhập ";
        document.getElementById("small-password-login").innerHTML = "Vui lòng điền mật khẩu ";
    } else if (username != '' && password == '') {
        document.getElementById("small-username-login").innerHTML = "";
        document.getElementById("small-password-login").innerHTML = "Vui lòng điền mật khẩu ";
    } else if (username == '' && password != '') {
        document.getElementById("small-username-login").innerHTML = "Vui lòng điền tên đăng nhập ";
        document.getElementById("small-password-login").innerHTML = "";
    } else {
        $.ajax({
            url: '/login',
            type: 'POST',
            dataType: 'JSON',
            data: {
                username: username,
                password: password,
                role: 1
            },

            success: function(response) {
                if (response['login'] == 'error') {
                    Swal.fire({
                        title: 'Tài khoản hoặc mật khẩu không chính xác!',
                        icon: 'error',
                    })
                } else {
                    toastr.success('Đăng nhập thành công');
                    window.setTimeout(function() {
                        window.location.reload();
                    }, 1200);
                }
            }
        })
    }

}

// changePassword
function changPassword() {
    const email = $('.changeEmail').val();
    const currentPassword = $('.current-password').val();
    const newPassword = $('.new-password').val();

    if (currentPassword == newPassword) {
        Swal.fire({
            title: 'Mật khẩu mới phải khác mật khẩu cũ!',
            icon: 'error',
        })
        return;
    }

    if (email == '' && currentPassword == '' && newPassword == '') {
        $("#small-changeEmail").removeClass('display-none');
        $("#small-currentPassword").removeClass('display-none');
        $("#small-newPassword").removeClass('display-none');
    } else if (email != '' && currentPassword == '' && newPassword == '') {
        $("#small-changeEmail").addClass('display-none');
        $("#small-currentPassword").removeClass('display-none');
        $("#small-newPassword").removeClass('display-none');
    } else if (email != '' && currentPassword != '' && newPassword == '') {
        $("#small-changeEmail").addClass('display-none');
        $("#small-currentPassword").addClass('display-none');
        $("#small-newPassword").removeClass('display-none');
    } else if (email != '' && currentPassword == '' && newPassword != '') {
        $("#small-changeEmail").addClass('display-none');
        $("#small-currentPassword").removeClass('display-none');
        $("#small-newPassword").addClass('display-none');
    } else if (email == '' && currentPassword != '' && newPassword != '') {
        $("#small-changeEmail").removeClass('display-none');
        $("#small-currentPassword").addClass('display-none');
        $("#small-newPassword").addClass('display-none');
    } else if (email == '' && currentPassword == '' && newPassword != '') {
        $("#small-changeEmail").removeClass('display-none');
        $("#small-currentPassword").removeClass('display-none');
        $("#small-newPassword").addClass('display-none');
    } else {
        $.ajax({
            url: '/changePassword',
            type: 'POST',
            dataType: 'JSON',
            data: {
                email: email,
                currentPassword: currentPassword,
                newPassword: newPassword
            },

            success: function(response) {
                if (response['changePassword'] == 'error') {
                    Swal.fire({
                        title: 'Email hoặc mật khẩu không chính xác!',
                        icon: 'error',
                    })
                } else {
                    Swal.fire({
                        title: 'Đổi mật khẩu thành công!',
                        icon: 'success',
                    }).then((result) => {
                        window.location.reload();
                    })
                }
            }
        })
    }

}

//upload image