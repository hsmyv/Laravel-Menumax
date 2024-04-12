
<x-admin.layout>



    <div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Customer Add</h4>
    <h6>Create new customer</h6>
    </div>
    </div>

    <div class="card">
    <div class="card-body">
        <form action="{{route('admins.store')}}" method="POST">
            @csrf

    <div class="row">
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
    <label>Customer Name</label>
    <input type="text" name="name">
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email">
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
    <label>Username</label>
    <input type="text" name="username">
    </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
    <div class="form-group">
    <label>Password</label>
    <input type="text" name="password">
    </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <label> Customer Image</label>
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
        <button class="btn btn-submit me-2">Add</button>
    </div>
    </div>
    </form>

    </div>
    </div>

    </div>
    </div>
    </div>

    </x-admin.layout>
