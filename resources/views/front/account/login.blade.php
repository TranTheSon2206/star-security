@extends('front.layout.master')
@section('title', 'Login')
@section('body')

<div class="container">
    <div class="forms">
        <div class="form login">
            <span class="title">Login</span>

            <form action="login.php" method="POST">
                <div class="input-field">
                    <input type="text" name="email" placeholder="Enter your email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="password" class="password" placeholder="Enter your password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="logCheck">
                        <label for="logCheck" class="text">Remember me</label>
                    </div>

                    <a href="#" class="text">Forgot password?</a>
                </div>

                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<span class="error-msg">' . $error . '</span>';
                    };
                };
                ?>


                <div class="input-field button">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>


    </div>
</div>

@endsection