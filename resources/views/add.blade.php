<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add user form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New User</h1>
                <form action="{{route('addUser')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Full Name:</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="name">
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                      
                      <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                      </div>
                      <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age">
                      </div>
                      <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>