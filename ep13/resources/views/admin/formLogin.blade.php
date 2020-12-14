<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Laravel Tips - Login</title>
</head>
<body>

<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }
    .form-signin .checkbox {
        font-weight: 400;
    }
    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>

<form class="form-signin" name="formLogin">
    @csrf
    <img class="mb-4" src="https://upinside.com.br/themes/upinside_new/_img/logo.png " alt="" width="300">
    <div class="alert alert-danger d-none messageBox" role="alert"></div>
    <input type="text" class="form-control" id="email" name="email" placeholder="Seu email" value="otavio@gmail.com">
    <input type="password" class="form-control" id="password" name="password" placeholder="Senha" value="12345678">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

<script>
        $(function () {
            $('form[name="formLogin"]').submit(function (e) {
                e.preventDefault()

                $.ajax({
                    url: "{{ route('admin.login.do') }}",
                    type: 'post',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function (response) {
                        if (response.success === true) {
                            window.location.href = "{{ route('admin ') }}"
                        } else {
                            $('.messageBox').removeClass("d-none").html(response.message)
                        }
                    }
                })
            })
        })
</script>
</body>
</html>
