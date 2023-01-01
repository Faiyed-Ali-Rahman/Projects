<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Untitled</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ URL::asset('../css/app.css') }}">
        <style>
               footer{ padding-top:20px; background:black;}
               .icon{font-size:30px; padding-left:4%;} 
               .list-inline a{text-decoration:none; font-weight:bold;color:#1d9e4b;}
               p{ color:#1bf2ff;font-weight:bold; }
               .social a{ color:#1bf2ff;padding-left:20px; }
               
        </style>
    </head>

    <body>
         <footer>
         <div class="container footer-basic">
                <div class="row">
                    <div class="col-md-6">
                    <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" >Home</a></li>
                            <li class="list-inline-item"><a href="#" >Services</a></li>
                            <li class="list-inline-item"><a href="#" >About</a></li>
                            <li class="list-inline-item"><a href="#" >Terms</a></li>
                            <li class="list-inline-item"><a href="#" >Privacy Policy</a></li>
                        </ul>
                       <p class="copyright">Company Name © 2018</p>
                    </div>
                    <div class="col-md-6">
                    <div class="social">
                            <a href="#"><i class="icon ion-social-instagram" ></i></a>
                            <a href="#"><i class="icon ion-social-snapchat" ></i></a>
                            <a href="#"><i class="icon ion-social-twitter" ></i></a>
                            <a href="#"><i class="icon ion-social-facebook"></i></a>
                        </div>
                    </div>                    
                </div>
            </div>
        </footer>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>

</html>