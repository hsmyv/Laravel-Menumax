
<x-admin.layout>



<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Restaurant Add</h4>
<h6>Create new restaurant</h6>
</div>
</div>

<div class="card">
<div class="card-body">
    <form action="{{route('restaurants.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Restaurant Name</label>
<input type="text" name="name">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Phone</label>
<input type="text" name="phone">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Address</label>
<input type="text" name="address">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Delivery fee</label>
<input type="text" name="delivery_fee">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Website</label>
<input type="text" name="website">
</div>
</div>
<div class="col-lg-9 col-sm-6 col-12">
<div class="form-group">
<label>Map</label>
<input type="text" name="map">
</div>
</div>


<div class="col-lg-12">
<div class="form-group">
<label>About</label>
<textarea name="about" class="form-control"></textarea>
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label> Restaurant Image</label>
<div class="image-upload">
<input type="file" name="restaurant-main-image">
<div class="image-uploads">
<img src="{{asset("admin/assets/img/icons/upload.svg")}}" alt="img">
<h4>Drag and drop a file to upload</h4>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
    <div class="form-group">
    <label>Restaurant Video</label>
    <div class="image-upload">
    <input type="file" name="restaurant-main-video" accept="video/mp4">
    <div class="image-uploads">
    <img src="{{asset("admin/assets/img/icons/upload.svg")}}" alt="img">
    <h4>Drag and drop a file to upload</h4>
    </div>
    </div>
    </div>
</div>
<div class="col-lg-12">
    <button class="btn btn-submit me-2">Add</button>
    <a href="productlist.html" class="btn btn-cancel">Cancel</a>
</div>
</div>
</form>

</div>
</div>

</div>
</div>
</div>

</x-admin.layout>
