<script src="{{ asset('user/js/js2.js') }}"></script>
<link rel="stylesheet" href="{{ asset('user/css/style2.css') }}">

<body id="particles-js"></body>


<div class="animated bounceInDown">
    <div class="container">
        <span class="error animated tada" id="msg"></span>
        <form name="form1" method="post" action="{{ url('/admin/login/login') }}" class="box"
            onsubmit="return checkStuff()">
            @csrf
            <h4>Login<span>Form</span></h4>
            <h5>Sign in to your account.</h5>

            <b id="msg1">{{ isset($msg) ? $msg : '' }}</b>
            <input type="text" name="email" value="{{ isset($email) ? $email : '' }}" placeholder="Email"
                autocomplete="off">
            <i class="typcn typcn-eye" id="eye"></i>
            <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">
            <label>
                <input type="checkbox">
                <span></span>
                <small class="rmb">Remember me</small>
            </label>
            <a href="#" class="forgetpass">Forget Password?</a>
            <input type="submit" value="Sign in" class="btn1">
        </form>
        <a href="{{ url('/register/index') }}" class="dnthave">Don’t have an account? Sign up</a>
    </div>
    <div class="footer">

    </div>
</div>
