@extends('beforelogin.template')
@section('title', 'Login - Gadget Galaxy')
@section('content')

    <body class="login-page">
        <div class="login-wrap">
            <div class="login-html">
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Login</h1>
                    <br>
                    <div class="login-form">
                        <div class="sign-in-htm">

                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" type="text" class="input" name="username">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" type="password" class="input" data-type="password" name="password">
                            </div>
                            <input type="checkbox" onclick="showPassword()"><a class="show-pass">Show Password</a>
                            <div class="pesan">
                                @include('beforelogin.flash-message')
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Login">
                            </div>

                        </div>
                </form>
            </div>
        </div>
        </div>
    </body>
    <script>
        function showPassword() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    </script>
@endsection
