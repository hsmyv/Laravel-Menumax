<x-admin.layout>

<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Profile</h4>
<h6>User Profile</h6>
</div>
</div>
@if(session()->has('success'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Success!</strong> {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Warning!</strong> {{session('error')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card">
<div class="card-body">
<div class="profile-set">
<div class="profile-head">
</div>
<div class="profile-top">
<div class="profile-content">
<div class="profile-contentimg">

<img src="{{ $admin->getFirstMediaUrl('admin-image') ?: asset('admin/assets/img/customer/customer5.png') }}" alt="img" id="blah">
<form action="{{route('admin.profileUpdate', $admin)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="profileupload">
<input type="file" id="imgInp" name="admin-image">
<a href="javascript:void(0);"><img src="{{asset("admin/assets/img/icons/edit-set.svg")}}" alt="img"></a>
</div>
</div>
<div class="profile-contentname">
<h2>{{$admin->name}}</h2>
<h4>Updates Your Photo and Personal Details.</h4>
</div>
</div>
{{-- <div class="ms-auto">
<a href="javascript:void(0);" class="btn btn-submit me-2">Save</a>
<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
</div> --}}
</div>
</div>

<div class="row">
<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" placeholder="William" value="{{old('name', $admin->name)}}">
</div>
</div>
<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Username</label>
<input type="text"  name="username" placeholder="Castilo" value="{{old('username', $admin->username)}}">
</div>
</div>
<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Email</label>
<input type="text" name="email" placeholder="william@example.com" value="{{old('email', $admin->email)}}">
</div>
</div>
<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Password</label>
<div class="pass-group">
<input type="password" class=" pass-input" name="password">
<span class="fas toggle-password fa-eye-slash"></span>
</div>
</div>
</div>
<div>
    <input type="hidden" value="{{$admin->id}}" name="admin_id">
</div>
<div class="col-12">
<button class="btn btn-submit me-2">Save</button>
</div>
</div>
</form>
</div>
</div>

</div>
</div>
</div>


</x-admin.layout>

