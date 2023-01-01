<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fontawsome cdn link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- bootstrap cdn link -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    </head>
    <body>
        <section>
            <form action="{{url('/')}}/register" method="post">
                @csrf
                
                <div class="container">
                    <x-input type="text" name="name" id="" class="form-control" placeholder="" label="Please enter Your Name" value="{{old('name')}}"/>
                    <x-input type="email" name="email" id="" class="form-control" placeholder="" label="Please enter Your Email-Address" value="{{old('email')}}"/>
                    <x-input type="password" name="password" id="" class="form-control" placeholder="" label="password"/>
                    <x-input type="password" name="confirm_password" id="" class="form-control" placeholder="" label="PLease confirm Your Password" />                
                </div>
                <button class="btn btn-primary"style="display:block;margin:50px auto;">Submit</button>
            </form>
          
        </section>


    </body>
</html>