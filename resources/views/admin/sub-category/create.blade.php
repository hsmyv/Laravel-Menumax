
<x-admin.layout>


<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Product Add Sub Category</h4>
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
    <form action="{{route('subcategories.store', $restaurant)}}" method="POST">
        @csrf
<div class="row">
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="form-group">
            <label>Parent Category</label>
                <select name="parent_id" class="select">
                    <option>Choose Category</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="name" value="{{old('name')}}">
        </div>
     </div>
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="form-group">
            <label>Category Code</label>
            <input type="text" name="code" value="{{old('code')}}">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control">{{old('description')}}</textarea>
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
