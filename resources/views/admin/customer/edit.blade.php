
<x-admin.layout>



    <div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Customer Edit</h4>
    <h6>Update customer</h6>
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
        <form action="{{route('admins.update', $admin)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

    <div class="row">
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
    <label>Customer Name</label>
    <input type="text" name="name" value="{{old('name', $admin->name)}}">
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" value="{{old('email', $admin->email)}}">
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" value="{{old('username', $admin->username)}}">
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
    <label>Password</label>
    <input type="text" name="password">
    </div>
    </div>
    <div>
        <input type="hidden" value="{{$admin->id}}" name="admin_id">
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label> Customer Image</label>
            <div class="image-upload">
                <input type="file" name="admin-image">
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
                @if ($admin->getFirstMediaUrl('admin-image'))
                <li>
                    <div class="productviews">
                        <div class="productviewsimg">
                            <img src="{{ $admin->getFirstMediaUrl('admin-image')}}" alt="img">
                        </div>
                        <div class="productviewscontent">
                            <div class="productviewsname">
                                <h2>{{$admin->getFirstMedia('admin-image')->file_name}}</h2>
                                <h3>{{$admin->getFirstMedia('admin-image')->humanReadableSize}}</h3>
                            </div>
                            <a  id="removeAdminImageBtn" data-media-id="{{$admin->getFirstMedia('admin-image')->id}}" href="javascript:void(0);" class="hideset">x</a>
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
    </div>

    </x-admin.layout>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
                $(document).on('click', '#removeAdminImageBtn', function() {
                    var mediaId = $(this).data('media-id');
                    var $button = $(this); // Store a reference to the clicked button

                    $.ajax({
                        url: '{{route('admin-image.delete')}}',
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
