<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <title>SQL Query in Laravel</title>

    <body>
    
        <div class="container mt-3">
           <a class="btn btn-primary" href="{{URL('/')}}">HOME</a>
          <h2><u>SQL QUERY IN LARAVEL</u></h2>
          <h3><center>GET ALL DATA NO NEED OF MODEL</center></h3> 

          <table class="table table-bordered">
            <thead class="text-primary">
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Post</th>
                <th>Salary</th>
              </tr>
            </thead>
            @foreach($emp_detail as $empdata)  
            <tbody>
              <tr>
                <td>{{$empdata->id}}</td>
                <td>{{$empdata->name}}</td>
                <td>{{$empdata->post}}</td>
                <td>{{$empdata->salary}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>


        <div class="container mt-3">
          <h3><center>GET 2nd Highest Salary</center></h3> 

          <table class="table table-bordered">
            <thead class="text-primary">
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Post</th>
                <th>Salary</th>
              </tr>
            </thead>
            @foreach($salary as $salarydata)  
            <tbody>
              <tr>
                <td>{{$salarydata->id}}</td>
                <td>{{$salarydata->name}}</td>
                <td>{{$salarydata->post}}</td>
                <td>{{$salarydata->salary}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>


        <div class="container mt-4">
          <h3><center>GET 2nd last inserted name row</center></h3> 

          <table class="table table-bordered">
            <thead class="text-primary">
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Post</th>
                <th>Salary</th>
              </tr>
            </thead>
            @foreach($name as $namedata)  
            <tbody>
              <tr>
                <td>{{$namedata->id}}</td>
                <td>{{$namedata->name}}</td>
                <td>{{$namedata->post}}</td>
                <td>{{$namedata->salary}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
       
    </body>
</html>
