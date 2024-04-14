<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <style>
    .custom-login{
      height: 500px;
      padding-top: 100px;
    }
    
    img.slider-img {
    height: 400px !important;
    display: block;
    margin: 0 auto; /* Center the image horizontally */
    }

    
    .image-scale{
      height: 200px;
    }

    .slider-text{
      background-color: #35443585 !important;
    }

    .trending-image{
      height: 100px;
      justify-content: center;
    }

    .trending-items-container {
  /* Clear the floats to prevent layout issues */
  overflow: hidden;
}

.trending-item {
  float: left;
  margin-right: 80px; /* Add margin for spacing between items */
}

.cart-list-devider{
  border-bottom: 1px solid #ccc;
  margin-bottom: 20px;
  padding-bottom: 20px;
}
  </style>
</head>
  <body>
    <main>
    {{View::make('header')}}
    @yield('content')
    </main>
    {{View::make('footer')}}
  </body>
</html>

