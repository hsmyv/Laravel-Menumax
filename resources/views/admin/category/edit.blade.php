


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
        <form action="{{route('categories.update', [$restaurant,$category])}}" method="POST">
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
                            <option>Choose Status</option>
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
            <div class="col-lg-12">
                <div class="form-group">
                    <label> Category Image</label>
                    <div class="image-upload">
                        <input type="file">
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
                        <li class="ps-0">
                            <div class="productviews">
                                <div class="productviewsimg">
                                    <img src="{{asset("admin/assets/img/icons/macbook.svg")}}" alt="img">
                                </div>
                                <div class="productviewscontent">
                                <div class="productviewsname">
                                        <h2>macbookpro.jpg</h2>
                                        <h3>581kb</h3>
                                    </div>
                                    <a href="javascript:void(0);" class="hideset">x</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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
