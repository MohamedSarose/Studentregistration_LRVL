<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container-lg">
        <div class="row">
            <div class="row justify-content-md-center" style="margin-top:40px;">
                <h3> Student Login</h3>
                <div class="container-sm">
                    <div class="col-md-6 offset-md-3" style="margin-top:40px;">
                    <form action="{{route('login')}}" method="post">
                                
                             
                                <div class="form-group">
                                    <label for="InputEmail">Email</label>
                                    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter your email">
                                    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
                                    <span class="text-danger">@error('InputEmail') {{$message}} @enderror</span>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="InputPassword">Password</label>
                                    <input type="password" class="form-control" id="InputPassword" placeholder="Enter your Password">
                                    <span class="text-danger">@error('InputPassword') {{$message}} @enderror</span>

                                </div>
                                    <br>
                                <button type="submit" class="btn btn-success">Submit</button>
                                <br>
                                <p class="text-warning">if you are New User!<a href="registration"> Register here.</a></p>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>