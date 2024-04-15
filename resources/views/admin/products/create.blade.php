
<x-admin.layout>



<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Product Add</h4>
<h6>Create new product</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<form action="{{route('products.store', $restaurant)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name">
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
                <label>Category</label>
                <select class="select" name="category_id">
                    <option value="">Choose Category</option>
                    @foreach ($categories as $category )
                        <option value="{{$category->id}}">{{$category->name}}</option>
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
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price">
            </div>
        </div>
        {{-- <div class="col-lg-3 col-sm-6 col-12">
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="select">
                    <option>Choose Status</option>
                    <option>Enable</option>
                    <option>False</option>
                </select>
            </div>
        </div> --}}
        <div class="col-lg-12">
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description"></textarea>
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
        <div class="col-lg-12">
        <button class="btn btn-submit me-2">Add</button>
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
