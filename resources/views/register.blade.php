@extends('mastar')
@section("content")
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 75vh;            
        }

        .form-container {
            align-items: center;
            width: 100%; /* Adjust the width as needed */
            max-width: 400px; /* Set a maximum width if desired */
            padding: 20px;
            background-color: #fff; /* Set background color as needed */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow for a nice effect */
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="form-container">
            <form action="register" method="POST">
                @csrf        
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Sign Up</button>
            </form>


            </div>
        </div>
    </div>

@endsection("footer")