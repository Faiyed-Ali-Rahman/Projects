<html>
    </head>
    @include('header')
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer Form</title>
     <!-- fontawsome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- bootstrap cdn link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .customer-registration{background:#ffffff8c;}
            .form-customer{background:#77e69661;margin:50px 100px;}
            h1{padding:15px 0; color:#ff00cd !important;}
            .gender{display:; color:#1e32aea3;margin-left:0 !important;}
            .gender-label{font-weight:bold;}
            .male{ margin-left:5%; }
            .female{ margin-left:5%; }
            .other{ margin-left:5% ; }
            .active-inactive{margin-left:0 !important;}
            .active{ margin-left:5% ; }
            .inactive{ margin-left:5% ; }
            label{font-weight:bold; color:#ff00cd;margin-bottom:15px}
            .form-group{margin:20px 100px;border:none;}
            .form-control{border-radius:10px;}
            .second-row{margin-top:}
            button{display:block;margin-left:18.5% !important;margin-top:7% !important;background:  #239cae;color:#ffffff;
            padding:10px 15px;border-radius:10px !important;border:none; font-weight:bold;transition: .5s;}
            button:hover{ background:#bd388a;transition: .5s; }
            .red-bold{display:block;font-weight: bold;margin-top:10px;}
            .value-color span{ color:#239cae;font-weight:bold ;}
        </style>
    </head>
    
    <body>
        <section class="customer-registration">
            <div class="container form-customer">
                <div class="row">    
                <h1 class="text-center">{{$title}}</h1>
                    <div class="col-lg-6">
                        <form action="{{$url}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control " placeholder=""
                                value="{{old('name',$customer->name ?? '')}}"/>
                                <span class="text-danger red-bold">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </span>
                                <!-- <small id="helpId" class="text-muted">Help Text </small> -->
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" id="" class="form-control" placeholder=""
                                value="{{old('email',$customer->email ?? '')}}"/>
                                <span class="text-danger red-bold">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </span> 
                               <!-- <small id="helpId" class="text-muted">Help Text </small> -->
                            </div>
                            <div class="form-group value-color">
                                <label for="" class="gender-label">Gender</label>
                                <input type="radio" name="gender" id="male"  value="M" class="form-check-input gender"
                                @if(old('gender',$customer->gender ?? '')=="M") checked @endif>
                                    <span class="male">
                                        Male
                                    </span>
                                <input type="radio" name="gender" id="female"  value="F" class="form-check-input gender"
                                @if(old('gender',$customer->gender ?? '')=="F") checked @endif>
                                    <span class="female">
                                        Female
                                    </span>
                                <input type="radio" name="gender" id="other"  value="O" class="form-check-input gender"
                                @if(old('gender',$customer->gender ?? '')=="O") checked @endif>
                                    <span class="other">
                                        Other
                                    </span>
                                <span class="text-danger red-bold">
                                    @error('gender')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="">Country</label>
                                <input type="text" name="country" id="" class="form-control " placeholder=""
                                value="{{old('country',$customer->country ?? '')}}"/>
                                <span class="text-danger red-bold">
                                    @error('country')
                                        {{$message}}
                                    @enderror
                                </span>
                                <!-- <small id="helpId" class="text-muted">Help Text </small> -->
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" id="" class="form-control" placeholder=""
                                value="{{old('address',$customer->address ?? '')}}"/>
                                <span class="text-danger red-bold">
                                    @error('address')
                                        {{$message}}
                                    @enderror
                                </span>
                                <!-- <small id="helpId" class="text-muted">Help Text </small> -->
                            </div>
                     </div>
                     <div class="col-lg-6 second-row">
                            <div class="form-group">
                                <label for="">Date of Birth</label>
                                <input type="date" name="dob" id="" class="form-control" placeholder=""
                                value="{{old('dob',$customer->dob ?? '')}}"/>
                                <span class="text-danger red-bold">
                                    @error('dob')
                                        {{$message}}
                                    @enderror
                                </span>
                                <!-- <small id="helpId" class="text-muted">Help Text </small> -->
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control " placeholder=""value=""/>
                                <span class="text-danger red-bold">
                                    @error('password')
                                        {{$message}}
                                    @enderror
                                </span>
                                <!-- <small id="helpId" class="text-muted">Help Text </small> -->
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirm_password" id="" class="form-control " placeholder=""value=""/>
                                <span class="text-danger red-bold">
                                    @error('confirm_password')
                                        {{$message}}
                                    @enderror
                                </span> 
                                <!-- <small id="helpId" class="text-muted">Help Text </small> -->
                            </div> 
                            <div class="form-group value-color">
                                <label for="" class="gender-label">status</label>
                                <input type="radio" name="status" id="1"  value="1" class="form-check-input active-inactive"
                                @if(old('status',$customer->status ?? '')=="1") checked @endif>
                                     <span class="active">
                                        active
                                    </span>
                                <input type="radio" name="status" id="0"  value="0" class="form-check-input active-inactive"
                                @if(old('status',$customer->status ?? '')=="0") checked @endif>
                                    <span class="inactive">
                                        inactive
                                    </span>
                                <span class="text-danger red-bold">
                                    @error('status')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <button class="">Submit</button>
                        </form>
                    </div> 
                </div>
            </div>   
        </sectioin>
@include('footer')
    </body>

</html>