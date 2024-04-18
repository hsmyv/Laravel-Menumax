
<x-admin.layout>


    <div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Edit Social Network</h4>
    <h6>Update Social Network</h6>
    </div>
    </div>

    <div class="card">
    <div class="card-body">
        @if(session()->has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form class="needs-validation" action="{{route('social-networks.update', [$restaurant, $socialNetwork])}}" method="POST" novalidate>
        <div class="row">
            @csrf
            @method('PUT')
            <div class="col-lg-8 col-sm-6 col-12">
                <div class="form-group">
                    <label for="url">URL</label>
                        <input id="url" class="form-control" type="text" name="url" value="{{old('url', $socialNetwork->url)}}" required>
                        <div class="invalid-feedback">
                            Please provide a valid url!
                        </div>
                        <p style="color: red">{{$errors->first('url')}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="select">
                        <option value="1" {{ $socialNetwork->status == 1 ? 'selected' : '' }}>Enable</option>
                        <option value="0" {{ $socialNetwork->status == 0 ? 'selected' : '' }}>Disable</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-12">
                <button class="btn btn-submit me-2">Update</button>
                <a href="{{route('social-networks.index', $restaurant)}}" class="btn btn-cancel">Cancel</a>
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
