
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
    <form action="{{route('categories.store')}}" method="POST">
<div class="row">
        @csrf
        <div class="col-lg-6 col-sm-6 col-12">
            <div class="form-group">
                <label>Category Name</label>
                    <input type="text" name="name" value="{{old('name')}}">
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
                <textarea name="description" class="form-control">{{old('description')}}</textarea>
            </div>
        </div>
        <div class="col-lg-12">
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
        </div>
        <div class="col-lg-12">
            <button class="btn btn-submit me-2">Submit</button>
            <a href="categorylist.html" class="btn btn-cancel">Cancel</a>
        </div>
</div>
</form>

</div>
</div>

</div>
</div>
</div>


</x-admin.layout>
