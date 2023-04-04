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
          <h2><center><u>IMAGE UPLOAD IN LARAVEL</u></center></h2>
          <h4 class=""><a href="{{route('student.create')}}">Add Student</a></h4>
          <h3><center>Student List</center></h3> 
       

            <div class="col-xl-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="datatable-buttons" class="table table-bordered table-centered mb-0">
                        <thead>
                          <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>Photo</th>
                            <th class="text-center">Action</th>
                          </tr>
                        </thead>
                         @foreach($students as $studentlist)   
                        <tbody>
                          <tr>  
                            <td><a href="">{{$studentlist->first_name}}</a></td>
                            <td><a href="">{{$studentlist->last_name}}</a></td>
                            <td>{{$studentlist->age}}</td>
                            <td>{{$studentlist->city}}</td>  
                            <td><img src="{{asset('uploads/'.$studentlist->photo)}}" class="img-thumbnail" width="100" height="100"></td>
                            <td class="table-action text-center">                              
                              <a class="btn btn-primary" href="{{route('student.edit', $studentlist->id)}}">Edit</a>                            
                              <a class="btn btn-danger" href="{{route('student.edit', $studentlist->id)}}">Delete</a>
                            </td>
                          </tr>
                        </tbody>
                      @endforeach 
                      </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
           
        
       
    </body>
</html>
