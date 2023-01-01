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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ URL::asset('../css/app.css') }}">

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <style>
        body{ background:#77e69661 !important; }
        table{ background-color: #fdf7f742 !important; }
        th{color:#21a3a1;font-weight:700;font-size:25px;}
        td{font-weight:bold;color:#bdb41b;}
        button{ margin:20px 0 !important;margin-left:40% !important;padding:10px 10px !important; 
        font-weight:bold !important; background-color:#6c9b17 !important;border:none !important; }
        .bold{margin:0 !important;margin-left:20px !important; background:#ff4f4f !important;}
        td a span{ padding:10px 20px !important; background:#04b604 !important; }
        td a .inactive{ padding:10px 15px !important; text-decoration:none !important;
        color:white !important; background:red !important; }
        .edit-btn{ background: #2d2de7 !important;margin-left:0 !important; }
        .add-new{ text-align:right !important; display:inline !important; }
        h1{color:#00a133 !important;font-weight:700 !important;
        font-size:56px !important;display:inline !important;margin-left:30% !important;}    
        .add-new{ margin:0 !important; }
        .add-new a{ text-decoration:none !important;}
   </style>
    <title>Customer view page</title>
  </head>
    <body class="vw-100 vh-100 align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>All Customers</h1>
                </div>
                <div class="col-mb-6 add-new">
                    <a href="{{route('customer.register')}}">
                        <button type="button" class="btn btn-info  add-new">Add New Customer</button>
                    </a>
                </div>
            </div>
            <div class="row">
                <table class="table table-dark table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Country</th>
                            <th>Address</th>
                            <th>Date of Birth</th>
                            <th>Status</th>
                            <th>Remove</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>
                                @if($customer->gender=="M")
                                Male
                                @elseif($customer->gender=="F")
                                Female
                                @else
                                Other
                                @endif
                            </td>
                            <td>{{$customer->country}}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->dob}}</td>
                            <td>
                                @if($customer->status=="1")
                                <a href="">
                                <span class="badge badge-seccess">Active</span>
                                </a>
                                @else
                                <a href="">
                                <span class="badge badge-danger inactive">Inactive</span>   
                                </a>  
                                @endif
                            </td>
                            <td><a href="{{route('customer.delete',['id'=>$customer->customer_id])}}">
                                    <button type="button" class="btn btn-danger bold">Delete</button>
                                </a>
                            </td>
                            <td><a href="{{route('customer.edit',['id'=>$customer->customer_id])}}">
                                    <button type="button" class="btn btn-primary bold edit-btn">Edit</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@include('footer')
    </body>
</html>
