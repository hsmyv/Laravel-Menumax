


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
        <form action="{{route('subcategories.update', [$restaurant,$subcategory])}}" method="POST">
            @csrf
            @method('PUT')

    <div class="row">
            <div class="col-lg-3 col-sm-3 col-12">
                <div class="form-group">
                    <label>Category Name</label>
                        <input type="text" name="name" value="{{old('name',$subcategory->name)}}">
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-12">
                <div class="form-group">
                    <label>Category Code</label>
                        <input type="text" name="code" value="{{old('code', $subcategory->code)}}">
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-12">
                <div class="form-group">
                    <label>Status</label>
                        <select name="status" class="select">
                            <option>Choose Status</option>
                            <option value="1" {{ $subcategory->status == 1 ? 'selected' : '' }}>Enable</option>
                            <option value="0" {{ $subcategory->status == 0 ? 'selected' : '' }}>Disable</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-12">
                <div class="form-group">
                    <label>Parent Category</label>
                        <select name="parent_id" class="select">
                            <option>Choose Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if($category->id == $subcategory->parent->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                <label>Description</label>
                    <textarea name="description" class="form-control">{{old('description', $subcategory->description)}}</textarea>
                </div>
            </div>

            <div class="col-lg-12">
                <button class="btn btn-submit me-2">Submit</button>
                <a href="{{route('subcategories.index', $restaurant)}}" class="btn btn-cancel">Cancel</a>
            </div>
    </div>
</form>
    </div>
    </div>

    </div>
    </div>
    </div>


    </x-admin.layout>
