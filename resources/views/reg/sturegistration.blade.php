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
                <h3> Student Registration</h3>
                <div class="container-sm">
                    <div class="col-md-6 offset-md-3" style="margin-top:10px;">
                            <form action="{{route('stu_registration')}}" method="post">
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div class="alert alert-warning">{{Session::get('fail')}}</div>
                                @endif
                                @csrf

                                <div class="row">
                                <label for="InputFullname"class="font-weight-bold">Full Name</label>
                                    <div class="col">
                                    <input name="Inputfirstname" type="text" class="form-control" placeholder="First name" value="{{old('Inputfirstname')}}">
                                    </div>
                                    <div class="col">
                                    <input name="Inputlastname" type="text" class="form-control" placeholder="Last name" value="{{old('Inputlastname')}}">
                                    </div>
                                    <span class="text-danger">@error('Inputfirstname,Inputlastname') {{$message}} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">Email</label>
                                    <input name="InputEmail" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email"  value="{{old('InputEmail')}}">
                                    <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
                                    <span class="text-danger">@error('InputEmail') {{$message}} @enderror</span>

                                </div>
                                <div class="form-group">
                                    <label for="inputTelephoneNo">Telephone No</label>
                                    <input name="inputTelephoneNo" type="tel" class="form-control" id="inputTelephoneNo" placeholder="Your TelephoneNo" value="{{old('inputTelephoneNo')}}">
                                     <span class="text-danger">@error('inputTelephoneNo') {{$message}} @enderror</span>

                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input name="inputAddress" type="text" class="form-control" id="inputAddress" placeholder="Your address here" value="{{old('inputAddress')}}">
                                    <span class="text-danger">@error('inputAddress') {{$message}} @enderror</span>

                                </div>
                                <div class="form-group">
                                    <label for="InputPassword">Password</label>
                                    <input name="InputPassword" type="password" class="form-control" id="InputPassword" placeholder="Enter Password" >
                                    <span class="text-danger">@error('InputPassword') {{$message}} @enderror</span>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="InputConPassword">ConfirmPassword</label>
                                    <input name="InputConPassword" type="password" class="form-control" id="InputConPassword" placeholder="Enter Confirm Password">
                                    <span class="text-danger">@error('InputConPassword') {{$message}} @enderror</span>

                                </div>
                                <br>
                                <!-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="Check">
                                    <label class="form-check-label" for="Check">Check me out</label>
                                </div> -->
                                <button type="submit" class="btn btn-primary">Register</button>
                                <p class="text-muted">if you are Already Registered!<a href="login"> Login here.</a></p>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>