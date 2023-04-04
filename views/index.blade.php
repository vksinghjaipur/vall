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
          <h2><u>SQL QUERY IN LARAVEL</u></h2>
          <h3><center>GET ALL DATA NO NEED OF MODEL</center></h3> 

          <table class="table table-bordered">
            <thead class="text-primary">
              <tr>
                <th>Sr. No.</th>
                <th>Particulars</th>
                <th>Topics</th>
                <th>Remarks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>SQL Query</td>
                <td><a href="{{route('salary')}}">GET 2nd Highest Salary</a></td>
                <td><a href="javascript:void(0);">Tested Ok</a></td>
              </tr>
               <tr>
                <td>2</td>
                <td>Image Upload</td>
                <td><a href="{{route('student.index')}}">Image Upload</a></td>
                <td><a href="javascript:void(0);">Tested Ok</a></td>
              </tr>
            </tbody>
          </table>
        </div>


        
       
    </body>
</html>
