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
                        <th style="padding: 10px">Name</th>
                        <th style="padding: 10px">Email</th>
                        <th style="padding: 10px">Address</th>
                        <th style="padding: 10px">Phone</th>
                        <th style="padding: 10px">Product Title</th>
                        <th style="padding: 10px">Quantity</th>
                        <th style="padding: 10px">Price</th>
                        <th style="padding: 10px">Payment Status</th>
                        <th style="padding: 10px">Delivery Status</th>
                        <th style="padding: 10px">Image</th>
                        <th style="padding: 10px">Action</th>
                        <th style="padding: 10px">Print PDF</th>
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
                        <td class="table_item">
                            <img class="img_size" src="/product/{{$order->image}}">
                        </td>
                        <td>
                            @if ($order->delivery_status=="Processing")
                                <a href="{{url('delivered', $order->id)}}" onclick="return confirm('Are you sure this item is delivered?')" class="btn btn-primary">Delivered</a>

                            @else 
                            <p>Delivered</p>

                            @endif
                        </td>
                        <td>
                            <a href="{{url('print_pdf', $order->id)}}" class="btn btn-secondary">Print PDF</a>
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