@include('header')

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <style>
        .main{background:#77e69661;padding:200px 0;}
        .zoom {padding: 50px;background: #315935;transition:transform 1s ease;width: 700px;height: 700px;margin: 0 auto;}
        .zoom:hover{transform: scale(1.5);transition:1s ease;background:#7f12d2;}
        .card{ padding:100px 100px;margin-top:30px; background-color:#fdf7f742 !important; }
        .card-header{text-align:center;font-weight:800; font-size: 24px;color:#64ff67;background:#a373734d !important;}
        .card-title{font-weight:700;color:#f7be53;}
        .card-text{ color:#1bf2ff;font-weight:500;}
        .zoom:hover .card-header{ color:#ffffff; }
        .zoom:hover .card-body{ background:#00000080; }
        .zoom:hover .card{ background:#4d2f502b !important; }    
        .zoom:hover .card-title{}
</style>
    <title>Hello, world!</title>
  </head>
  <body>
        <div class="container-fluid main">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                   <div class="zoom">
                    <div class="card">
                        <div class="card-header">
                            Laravel-learning 
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Topics which is cover till now:::</h5>
                            <ul class="card-text">
                                <li>Route</li>
                                <li>Controller</li>
                                <li>Blade</li>
                                <li>Component</li>
                                <li>insert operation</li>
                                <li>View operation</li>
                                <li>redirect route</li>
                                <li>redirect route using buttons</li>
                            </ul>
                        </div>
                    </div>
                   </div>  
                </div>
            </div>
        </div>  






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>



@include('footer')