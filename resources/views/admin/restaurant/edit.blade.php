
<x-admin.layout>



<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Restaurant Update</h4>
<h6>Update restaurant</h6>
</div>
</div>
<h1>{{$restaurant->name}}</h1>
<br>
@if(session()->has('success'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Success!</strong> {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card">
<div class="card-body">
    <form action="{{route('restaurants.update', $restaurant)}}" method="POST" enctype="multipart/form-data">
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


<div class="col-12">
    <div class="product-list">
        <ul class="row">
            @if ($restaurant->getFirstMediaUrl('restaurant-main-image'))
            <li>
                <div class="productviews">
                    <div class="productviewsimg">
                        <img src="{{ $restaurant->getFirstMediaUrl('restaurant-main-image')}}" alt="img">
                    </div>
                    <div class="productviewscontent">
                        <div class="productviewsname">
                            <h2>{{$restaurant->getFirstMedia('restaurant-main-image')->file_name}}</h2>
                            <h3>{{$restaurant->getFirstMedia('restaurant-main-image')->humanReadableSize}}</h3>
                        </div>
                        <a  id="removeRestaurantMainImageBtn" data-media-id="{{$restaurant->getFirstMedia('restaurant-main-image')->id}}" href="javascript:void(0);" class="hideset">x</a>
                    </div>
                </div>
            </li>
            @endif
            @if ($restaurant->getFirstMediaUrl('restaurant-main-video'))
            <li>
                <div class="productviews">
                    <div class="productviewsimg">
                        <video src="{{ $restaurant->getFirstMediaUrl('restaurant-main-video') }}" width="100" height="100" autoplay muted loop></video>
                    </div>
                    <div class="productviewscontent">
                        <div class="productviewsname">
                            <h2>{{$restaurant->getFirstMedia('restaurant-main-video')->file_name}}</h2>
                            <h3>{{$restaurant->getFirstMedia('restaurant-main-video')->humanReadableSize}}</h3>
                        </div>
                        <a  id="removeRestaurantMainImageBtn" data-media-id="{{$restaurant->getFirstMedia('restaurant-main-video')->id}}" href="javascript:void(0);" class="hideset">x</a>
                    </div>
                </div>
            </li>
            @endif
        </ul>
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

<div class="page-wrapper">
    <div class="content">

    <div class="col-lg-12">
        <form action="{{route('restaurants.destroy', $restaurant)}}" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-submit me-2">DELETE</button>
        </form>
    </div>
    </div>
</div>
</x-admin.layout>

<script>

document.addEventListener('DOMContentLoaded', function () {
        $(document).on('click', '#removeRestaurantMainImageBtn', function() {
            var mediaId = $(this).data('media-id');
            var $button = $(this); // Store a reference to the clicked button

            $.ajax({
                url: '{{route('restaurant-main-image.delete')}}',
                method: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: { mediaId: mediaId },
                success: function(response) {
                    $button.closest('.img-single').remove();
                },
                error: function(error) {
                    // Handle errors, if any
                }
            });
        });
    });
</script>
