
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
<form class="needs-validation" novalidate action="{{route('products.store', $restaurant)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="form-group">
                <label for="name">Name</label>
                <input  id="price" class="form-control" type="text" name="name" required>
                <div class="invalid-feedback">
                    Please provide a name.
                </div>
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
                <label for="price">Price</label>
                <input id="price" class="form-control" type="number" name="price" required>
                <div class="invalid-feedback">
                    Please provide a price
                </div>
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
                <textarea  name="description"></textarea>
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
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
