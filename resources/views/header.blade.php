<html>
    <head>
        <style>
            .navbar-brand span{ font-weight:bold; font-size:25px;}
            .nav-item a:hover{ color:#22ebbb !important;}
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#" style="color:#1bf2ff;"><span>P_LOGO</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}"style="color:#1bf2ff;">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/customer/register')}}"style="color:#1bf2ff">Register</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/customer/view')}}"style="color:#1bf2ff;">Customer</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </body>
</html>