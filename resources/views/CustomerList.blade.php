<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Table Customer List!</h1>

    <div class="container">
      <a href="{{route('newcustomer')}}"><button class="btn btn-primary my-3">Add New Customer</button></a>
         <table class="table table-primary table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name Customer</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($customers as $customer)
 <tr>
      <td scope="row">{{$customer->id}}</td>
      <td scope="row">{{$customer->Name}}</td>
      <td scope="row">{{$customer->Phone}}</td>
      <td scope="row">{{$customer->Email}}</td>
      <td scope="row">{{$customer->Address}}</td>
      <td><a href="{{ route('customeredit',$customer->id) }}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('customerdestory',$customer->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
      <!-- <th>

      <a class="btn btn-info" href="{{ route('customeredit',$customer->id) }}">Edit</a>    
      <form action="{{ route('customerdestory',$customer->id) }}" method="POST">   
                    
                    <a class="btn btn-primary" href="{{ route('customerdestory',$customer->id) }}">Delete</a>   
                    @csrf
                    @method('DELETE')      
                   <button class="btn btn-danger" type="submit">DElete</button>
                </form>
                </th> -->
    </tr>
      @endforeach
   
   
  </tbody>
</table>
{{$customers->links()}}
    </div>
   
     
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>