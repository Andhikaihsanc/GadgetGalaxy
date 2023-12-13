@extends('beforelogin.template')
@section('title', 'Register - Gadget Galaxy')
@section('content')

    <body class="register-page">
        <div class="register-wrap">
            <div class="register-html">
                <form class="register-form" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="register-form">
                        <div class="sign-up-htm">
                            <h1>Register</h1>
                            <br>
                            <div class="notif">
                                @include('beforelogin.flash-message')
                            </div>
                            <div class="group">
                                <label for="name" class="label">Name</label>
                                <input id="name" type="text" value="{{ old('name') }}" name="name" class="input ">
                                @error('name')
                                    <div class="pesan"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="email" class="label">Email</label>
                                <input id="email" type="email" value="{{ old('email') }}" class="input" name="email">
                                @error('email')
                                    <div class="pesan"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="user" type="text" class="input" name="username">
                                @error('username')
                                    <div class="pesan"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="nohp" class="label">Phone Number</label>
                                <input id="nohp" type="number" value="{{ old('noHP') }}"
                                    class="input @error('noHP') is-invalid @enderror" name="noHP">
                                @error('noHP')
                                    <div class="pesan"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="pass" type="password" class="input @error('password') is-invalid @enderror"
                                    data-type="password" name="password">
                                @error('password')
                                    <div class="pesan"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            <input type="checkbox" onclick="showPassword()"><a class="show-pass">Show Password</a>
                            <br>
                            <div class="group">
                                <input type="submit" class="button" value="Register">
                            </div>
                        </div>
                    </div>
            </div>
            </form>
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
