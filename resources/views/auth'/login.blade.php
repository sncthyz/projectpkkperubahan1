@extends('components.layouts')

@section('content')
    <div class="login-container">
        <div class="left-section">
            <img src="luna hok.jpg" alt="Login Illustration">
        </div>
        <div class="right-section">
            <h1>Welcome to Mind Loop</h1>
            <p>Platform diskusi yang dirancang untuk mempermudah berbagi dan bertukar pikiran.</p>

            <form>
                <input type="email" placeholder="Email" value="anonymus@gmail.com">
                <input type="password" placeholder="Password" value="anonymus@gmail.com">
                <a href="#" class="forgot">Forgot Password?</a>

                <div class="remember">
                    <label>Ingat detail masuk</label>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>

                <button class="login-btn">Log In</button>


        </div>
        </form>
    </div>
@endsection
