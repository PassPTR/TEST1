<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
      <form action=""  method="POST">
    <table class="table">
    {{ csrf_field() }}
  <tbody>
    <tr>
    @foreach($employeehistorys as $employeehistory)
      <td> {{$employeehistory}}</td>
      @endforeach
    </tr>
    
  </tbody>
</table>
</form>

    </body>
</html>