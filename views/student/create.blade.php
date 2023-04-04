<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <title>Image File Upload in Laravel</title>

    <body>
    
        <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box">
          <div class="page-title-right" style="display: block"> 
            <a href="" class="btn btn-outline-secondary btn-rounded"><span class="uil uil-users-alt"></span> All Students</a> 
          </div>
          <h4 class="page-title">Add Student</h4>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12">
        <div class="card">
          <div class="card-body  pb-5">
            
            <form  method="POST" action="" enctype="multipart/form-data" id="addForm">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >First Name*</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="{{ old('first_name') }}" required>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Last Name*</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" value="{{ old('last_name') }}" required>
                            <span class="error-message"></span>
                        </div>
                    </div>
                </div>    
                
                <div class="row">    
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label >Age</label>
                            <input type="tel" name="age" class="form-control" placeholder="Enter Age" value="{{ old('age') }}">
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label >City</label>
                            <input type="tel" name="city" class="form-control" placeholder="Enter City" value="{{ old('city') }}">
                            <span class="error-message"></span>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <div class="form-group">
                            <label>Profile Picture</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="photo" accept="image/*" class="custom-file-input" id="avtar">
                                    <label class="custom-file-label" for="avtar">Choose picture</label>
                                </div>
                            </div>
                            <span class="error-message"></span>
                        </div>
                    </div>
                </div>
                        
                   <!--  <div class="col-md-8">
                        <div class="form-group">
                            <label for="example-textarea">Short Bio</label>
                            <textarea class="form-control" name="bio" id="example-textarea" rows="2" placeholder="Enter Little Bio" value="{{ old('bio') }}"></textarea>
                            <span class="error-message"></span>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <!-- <div class="col-md-12">
                        <hr class="mt-1">
                    </div>
                    <div class="col-md-4  ms-mt-3">
                        <label>User Status</label>
                        <input type="checkbox" name="status" id="switch2" value="1" checked data-switch="success"/>
                        <label for="switch2" data-on-label="Active" data-off-label="Inactive" class="mb-0 d-block"></label>
                    </div> -->
                    <div class="col-md-8 mb-4">
                        <div class="ml-4"> 
                            <button type="submit" class="btn btn-info ms-mt-2 ms-block">Save</button> 
                        </div>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>


        
       
    </body>
</html>
