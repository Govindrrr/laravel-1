<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3>All users data</h3>

                <a href="/newuser" class="btn btn-success btn-sm mb-b"> Add New</a>
                <br>
                <br>
                <table class="table table-bordered table=striped">
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</tg>
                    <th>Phone no</th>
                    <th>view</th>
                    <th>Delete</th>
                    <th>Update</th>

                    </tr>
                    @foreach($data as $id =>$user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td> {{$user->name}} </td>
                        <td> {{$user->email}}</td>
                        <td> {{$user->age}}</td>
                        <td> {{$user->city}}</td>
                        <td> {{$user->phone}}</td>
                        <td> <a href="{{ route('view.user', $user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                        <td> <a href="{{ route('view.delete', $user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td> <a href="{{ route('view.update', $user->id)}}" class="btn btn-secondary btn-sm">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>

    
