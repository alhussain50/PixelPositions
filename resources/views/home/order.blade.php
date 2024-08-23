<!DOCTYPE html>
<html>
   <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="home/images/favicon.png" type="">
        <title>Famms - Fashion HTML Template</title>
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
        <!-- font awesome style -->
        <link href="home/css/font-awesome.min.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="home/css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="home/css/responsive.css" rel="stylesheet" />

        <style type="text/css">
            .center{
                margin-left: auto;
                margin-right: auto;
                margin-top: 30px;
                width: 70%;
                padding: 30px;
                text-align: center;
            }
            .table_center{
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }
            table, th, td{
                border: 1px solid black;
            }
            th{
                padding: 20px;
                background-color: gray;
                font-size: 20px;
                font-weight: bold;
            }
            td{
                padding: 10px;
            }
        </style>

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->

         @include('home.header')
         <div class="center">
            <table class="table_center">
                <tr>
                    <th>Product Title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>

                @foreach ($order as $order)
                    <tr>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img height="150px" width="150px" src="product/{{$order->image}}" alt="{{$order->product_title}}">
                        </td>
                        <td>
                            @if($order->delivery_status=='Processing')
                                <a onclick="return confirm('Confirm Cancellation?')" class="btn btn-danger" href="{{url('cancel_order', $order->id)}}">Cancel</a>
                            @else
                                <p style="color: blue">Not Allowed</p>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
         </div>
      </div>
  
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>