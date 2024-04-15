
<x-admin.layout>



<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Product Edit</h4>
<h6>Update product</h6>
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
<form action="{{route('products.update', [$restaurant, $product])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{old('name',$product->name)}}">
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="form-group">
                <label>Category</label>
                <select class="select" name="category_id">
                    <option value="">Choose Category</option>
                    @foreach ($categories as $category )
                    <option value="{{ $category->id}}" @if($category->id == optional($product->category)->id ?? '') selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        {{-- <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
                <label>Sub Category</label>
                <select class="select">
                    <option>Choose Sub Category</option>
                    <option>Computers</option>
                </select>
            </div>
        </div> --}}
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" value="{{old('price',$product->price)}}">
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="select">
                    <option>Choose Status</option>
                    <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Enable</option>
                    <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Disable</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description">{{old('description', $product->description)}}</textarea>
            </div>
        </div>

        <div class="col-lg-12">
        <div class="form-group">
        <label> Product Image</label>
        <div class="image-upload">
        <input type="file" name="product-image">
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
                    @if ($product->getFirstMediaUrl('product-image'))
                    <li>
                        <div class="productviews">
                            <div class="productviewsimg">
                                <img src="{{ $product->getFirstMediaUrl('product-image')}}" alt="img">
                            </div>
                            <div class="productviewscontent">
                                <div class="productviewsname">
                                    <h2>{{$product->getFirstMedia('product-image')->file_name}}</h2>
                                    <h3>{{$product->getFirstMedia('product-image')->humanReadableSize}}</h3>
                                </div>
                                <a  id="removeProductImageBtn" data-media-id="{{$product->getFirstMedia('product-image')->id}}" href="javascript:void(0);" class="hideset">x</a>
                            </div>
                        </div>
                    </li>
                    @endif

                </ul>
            </div>

        </div>
        <div class="col-lg-12">
        <button class="btn btn-submit me-2">Update</button>
        <a href="{{route('products.index', $restaurant)}}" class="btn btn-cancel">Cancel</a>
        </div>
    <div>
</form>

</div>
</div>

</div>
</div>
</div>

</x-admin.layout>


<script>

    document.addEventListener('DOMContentLoaded', function () {
            $(document).on('click', '#removeProductImageBtn', function() {
                var mediaId = $(this).data('media-id');
                var $button = $(this); // Store a reference to the clicked button

                $.ajax({
                    url: '{{route('product-image.delete')}}',
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
