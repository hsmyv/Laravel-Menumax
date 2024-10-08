<x-admin.auth.layout>
<body class="account-page">

<div class="main-wrapper">
<div class="account-content">
<div class="login-wrapper">
<div class="login-content">
<div class="login-userset">
{{-- <div class="login-logo">
<img src="{{asset("admin/assets/img/logo.png")}}" alt="img">
</div> --}}
<div class="login-userheading">
<h3>Sign In</h3>
<h4>Please login to your account</h4>
</div>
<form action="{{route('admin.login')}}" method="POST">
    @csrf
<div class="form-login">
<label>Email</label>
<div class="form-addons">
<input type="text" placeholder="Enter your email address" value="{{old('email')}}" name="email">
<img src="{{asset("admin/assets/img/icons/mail.svg")}}" alt="img">
</div>
</div>

<div class="form-login">
<label>Password</label>
<div class="pass-group">
<input type="password" class="pass-input" placeholder="Enter your password" value="{{old('password')}}" name="password">
<span class="fas toggle-password fa-eye-slash"></span>
</div>
</div>
@error('error')
<span class="text-red-500 text-xs mt-1" role="alert">
    <strong>{{ $message }}</strong>
</span>
  @enderror
<div class="form-login">
<div class="alreadyuser">
{{-- <h4><a href="forgetpassword.html" class="hover-a">Forgot Password?</a></h4> --}}
</div>
</div>
<div class="form-login">
<button class="btn btn-login" type="submit" >Sign In</button>
</div>
</form>
{{-- <div class="signinform text-center">
<h4>Don’t have an account? <a href="signup.html" class="hover-a">Sign Up</a></h4>
</div>
<div class="form-setlogin">
<h4>Or sign up with</h4>
</div> --}}
{{--<div class="form-sociallink">
<ul>
 <li>
<a href="javascript:void(0);">
<img src="assets/img/icons/google.png" class="me-2" alt="google">
Sign Up using Google
</a>
</li>
<li>
<a href="javascript:void(0);">
<img src="assets/img/icons/facebook.png" class="me-2" alt="google">
Sign Up using Facebook
</a>
</li>
</ul>
</div>--}}
</div>
</div>
<div class="login-img">
<img src="{{asset("admin/assets/img/login.jpg")}}" alt="img">
</div>
</div>
</div>
</div>


</x-admin.auth.layout>
