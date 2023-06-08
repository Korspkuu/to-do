<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">
    <title>Document</title>
</head>
<body>

<div class="form-container">
    <div class="img-logo">
        <img src="{{ asset('img/to-do-logo.png') }}" alt="">
    </div>
    <div class="form-header">
        <h1>Create your account</h1>
    </div>
    <form action="/login" method="POST" class="login-form">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <div class="agreement_footnote"><h3>By logging in to your Google, Apple or email account you accept Terms of serviceand Privacy PolicyTodoist.</h3></div>
    <div class="registration-message">
        <div class="line"></div>
        <h2>Do you already have an account? <a href="/login">Log in</a></h2>
    </div>
</div>

</body>
</html>
