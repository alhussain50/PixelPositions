<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
      .center{
        margin: auto;
        width: 50%;
        border: 2px solid #fff;
        text-align: center;
        margin-top: 40px;
      }
      .product-show-header{
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
      }
      .product-image{
        width: 150px;
        height: 150px;
      }
      .product-table-header{
        background-color: gray;
      }
      .product-header-column{
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <h2 class="product-show-header">All Products</h2>
                <table class="center">
                    <tr class="product-table-header">
                        <th class="product-header-column">Product title</th>
                        <th class="product-header-column">Description</th>
                        <th class="product-header-column">Quantity</th>
                        <th class="product-header-column">Category</th>
                        <th class="product-header-column">Price</th>
                        <th class="product-header-column">Discount Price</th>
                        <th class="product-header-column">Product Image</th>
                        <th class="product-header-column">Delete</th>
                        <th class="product-header-column">Edit</th>
                    </tr>

                    @foreach ($product as $product)
                      <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                          <img class="product-image" src="/product/{{$product->image}}">
                        </td>
                        <td>
                          <a class="btn btn-danger" onclick="return confirm('Confirm Deletion?')" href="{{url('delete_product', $product->id)}}">Delete</a>
                        </td>
                        <td>
                          <a class="btn btn-success" href="">Edit</a>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>