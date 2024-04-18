


<x-admin.layout>


    <div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Product Edit Category</h4>
    <h6>Edit a product Category</h6>
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
        <form action="{{route('categories.update', [$restaurant,$category])}}" method="POST" enctype="multipart/form-data">
    <div class="row">
            @csrf
            @method('PUT')
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Category Name</label>
                        <input type="text" name="name" value="{{old('name',$category->name)}}">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Category Code</label>
                        <input type="text" name="code" value="{{old('code', $category->code)}}">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <label>Status</label>
                        <select name="status" class="select">
                            <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Enable</option>
                            <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Disable</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                <label>Description</label>
                    <textarea name="description" class="form-control">{{old('description', $category->description)}}</textarea>
                </div>
            </div>
            {{-- <div class="col-lg-12">
                <div class="form-group">
                    <label> Category Image</label>
                    <div class="image-upload">
                        <input type="file" name="category-image">
                        <div class="image-uploads">
                            <img src="{{asset("admin/assets/img/icons/upload.svg")}}" alt="img">
                            <h4>Drag and drop a file to upload</h4>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-12">
                <div class="product-list">
                    <ul class="row">
                        @if ($category->getFirstMediaUrl('category-image'))
                        <li>
                            <div class="productviews">
                                <div class="productviewsimg">
                                    <img src="{{ $category->getFirstMediaUrl('category-image')}}" alt="img">
                                </div>
                                <div class="productviewscontent">
                                    <div class="productviewsname">
                                        <h2>{{$category->getFirstMedia('category-image')->file_name}}</h2>
                                        <h3>{{$category->getFirstMedia('category-image')->humanReadableSize}}</h3>
                                    </div>
                                    <a  id="removeCategoryImageBtn" data-media-id="{{$category->getFirstMedia('category-image')->id}}" href="javascript:void(0);" class="hideset">x</a>
                                </div>
                            </div>
                        </li>
                        @endif

                    </ul>
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

        document.addEventListener('DOMContentLoaded', function () {
                $(document).on('click', '#removeCategoryImageBtn', function() {
                    var mediaId = $(this).data('media-id');
                    var $button = $(this); // Store a reference to the clicked button

                    $.ajax({
                        url: '{{route('category-image.delete')}}',
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
