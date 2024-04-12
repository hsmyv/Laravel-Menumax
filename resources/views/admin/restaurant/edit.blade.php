
<x-admin.layout>



<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Restaurant Update</h4>
<h6>Update restaurant</h6>
</div>
</div>
@if(session()->has('success'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Success!</strong> {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card">
<div class="card-body">
    <form action="{{route('restaurants.update', $restaurant)}}" method="POST">
        @method('PUT')
        @csrf

<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Restaurant Name</label>
<input type="text" name="name" value="{{old('name', $restaurant->name)}}">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Phone</label>
<input type="text" name="phone" value="{{old('phone', $restaurant->phone)}}">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Address</label>
<input type="text" name="address" value="{{old('address', $restaurant->address)}}">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Delivery fee</label>
<input type="text" name="delivery_fee" value="{{old('delivery_fee', $restaurant->delivery_fee)}}">
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Website</label>
<input type="text" name="website" value="{{old('website', $restaurant->website)}}">
</div>
</div>

<div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
        <label>Status</label>
            <select name="status" class="select">
                <option>Choose Status</option>
                <option value="1" {{ $restaurant->status == 1 ? 'selected' : '' }}>Enable</option>
                <option value="0" {{ $restaurant->status == 0 ? 'selected' : '' }}>Disable</option>
        </select>
    </div>
</div>
<div class="col-lg-12 col-sm-6 col-12">
<div class="form-group">
<label>Map</label>
<input type="text" name="map" value="{{old('map', $restaurant->map)}}">
</div>
</div>


<div class="col-lg-12">
<div class="form-group">
<label>About</label>
<textarea name="about" class="form-control">{{$restaurant->about}}</textarea>
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<label> Product Image</label>
<div class="image-upload">
<input type="file">
<div class="image-uploads">
<img src="{{asset("admin/assets/img/icons/upload.svg")}}" alt="img">
<h4>Drag and drop a file to upload</h4>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
    <button class="btn btn-submit me-2">Submit</button>
</div>
</div>
</form>


</div>
</div>
</div>
</div>



<div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Opening time</h4>
    </div>
    </div>
    @if(session()->has('openingTime'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('openingTime')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card">
    <div class="card-body">
        <form action="{{route('admin.update.openingTime', $restaurant)}}" method="POST">
            @method('PUT')
            @csrf

    <div class="row">
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Monday</label>
        <input type="text" name="monday" value="{{old('monday', $openingTime->monday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Tuesday</label>
        <input type="text" name="tuesday" value="{{old('tuesday', $openingTime->tuesday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Wednesday</label>
        <input type="text" name="wednesday" value="{{old('wednesday', $openingTime->wednesday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Thursday</label>
        <input type="text" name="thursday" value="{{old('thursday', $openingTime->thursday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Friday</label>
        <input type="text" name="friday" value="{{old('friday', $openingTime->friday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Saturday</label>
        <input type="text" name="saturday" value="{{old('saturday', $openingTime->saturday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Sunday</label>
        <input type="text" name="sunday" value="{{old('sunday', $openingTime->sunday)}}">
        </div>
    </div>

    <div class="col-lg-12">
        <button class="btn btn-submit me-2">Update</button>
    </div>
    </div>
    </form>


    </div>
    </div>
    </div>
</div>


<div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Delivery Information</h4>
    </div>
    </div>
    @if(session()->has('deliveryInformation'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('deliveryInformation')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="card">
    <div class="card-body">
        <form action="{{route('admin.update.deliveryInformation', $restaurant)}}" method="POST">
            @method('PUT')
            @csrf

    <div class="row">
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Monday</label>
        <input type="text" name="monday" value="{{old('monday', $deliveryInformation->monday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Tuesday</label>
        <input type="text" name="tuesday" value="{{old('tuesday', $deliveryInformation->tuesday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Wednesday</label>
        <input type="text" name="wednesday" value="{{old('wednesday', $deliveryInformation->wednesday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Thursday</label>
        <input type="text" name="thursday" value="{{old('thursday', $deliveryInformation->thursday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Friday</label>
        <input type="text" name="friday" value="{{old('friday', $deliveryInformation->friday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Saturday</label>
        <input type="text" name="saturday" value="{{old('saturday', $deliveryInformation->saturday)}}">
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="form-group">
        <label>Sunday</label>
        <input type="text" name="sunday" value="{{old('sunday', $deliveryInformation->sunday)}}">
        </div>
    </div>

    <div class="col-lg-12">
        <button class="btn btn-submit me-2">Update</button>
    </div>
    </div>
    </form>


    </div>
    </div>
    </div>
</div>
</x-admin.layout>
