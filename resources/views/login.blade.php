<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="p-5 position-absolute top-50 start-50 translate-middle" style="width: 50%">
        <h1 class="text-center mb-4">Create a Profile</h1>
        <br>
        <form action="{{route('login.post')}}" method="POST" >
            @csrf

            <br>
            <!--Email input-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Email Address</span>
                <input type="text" class="form-control"  id="NIM" name="email" value="{{old('email')}}">
            </div>

            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <br>

            <!--Password-->
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                <input type="password" class="form-control"  name="password" value="{{old('password')}}">
            </div>

            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
