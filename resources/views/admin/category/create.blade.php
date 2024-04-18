
<x-admin.layout>


<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Product Add Category</h4>
<h6>Create new product Category</h6>
</div>
</div>

<div class="card">
<div class="card-body">
    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> {{session('error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form class="needs-validation" action="{{route('categories.store', $restaurant)}}" method="POST" novalidate>
    <div class="row">
        @csrf
        <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
                <label for="name">Category Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{old('name')}}" required>
                    <div class="invalid-feedback">
                        Please provide a name
                    </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
                <label>Category Code</label>
                    <input type="text" name="code" {{old('code')}}>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
            <label>Description</label>
                <textarea name="description">{{old('description')}}</textarea>
            </div>
        </div>
        {{-- <div class="col-lg-12">
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
        </div> --}}
        <div class="col-lg-12">
            <button class="btn btn-submit me-2">Submit</button>
            <a href="{{route('categories.index', $restaurant)}}" class="btn btn-cancel">Cancel</a>
        </div>
</div>
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
