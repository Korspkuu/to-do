<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <title>Title</title>
</head>
<body>


<div class="form-container">
    <div class="img-logo">
        <img src="{{ asset('img/to-do-logo.png') }}" alt="">
    </div>
    <div class="form-header">
        <h1>Login</h1>
    </div>
    <form action="/login" method="POST" class="login-form">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>

    <div class="under_text"><h3><a href="#">Forgot your password?</a></h3></div>
    <div class="agreement_footnote"><h3>By logging in to your Google, Apple or email account you accept Terms of serviceand Privacy PolicyTodoist.</h3></div>
    <div class="registration-message">
        <div class="line"></div>
        <h2>You don't have an account yet? <a href="/register">Register</a></h2>
    </div>
</div>





</body>
</html>
