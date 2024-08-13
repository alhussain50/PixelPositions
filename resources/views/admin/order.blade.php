<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        @include('admin.css')
        <style>
            .title_deg{
                text-align: center;
                font-size: 25px;
                font-weight: bold;
                padding-bottom: 40px;
            }
            .table_deg{
                border: 2px solid white;
                width: 70%;
                margin: auto;
                text-align: center;
            }
            .th_deg{
                background-color: gray;
            }
            .table_row{
                border: 2px solid white;
            }
            .img_size{
                width: 100px;
                height: 100px;
            }
            .table_item{
                border-right: 2px solid white;
            }
        </style>
  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')

        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_deg">All Orders</h1>

                <table class="table_deg">
                    <tr class="th_deg">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
                    </tr>
                    @foreach ($order as $order)
                    <tr class="table_row">
                        <td class="table_item">{{$order->name}}</td>
                        <td class="table_item">{{$order->email}}</td>
                        <td class="table_item">{{$order->address}}</td>
                        <td class="table_item">{{$order->phone}}</td>
                        <td class="table_item">{{$order->product_title}}</td>
                        <td class="table_item">{{$order->quantity}}</td>
                        <td class="table_item">{{$order->price}}</td>
                        <td class="table_item">{{$order->payment_status}}</td>
                        <td class="table_item">{{$order->delivery_status}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$order->image}}">
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>