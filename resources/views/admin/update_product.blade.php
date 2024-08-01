<!DOCTYPE html>
<html lang="en">
  <head>
    
    <base href="/public">

    @include('admin.css')
    <style>
        .product-center{
            text-align: center;
            padding-top: 40px;
        }
        .product-header{
            font-size: 40px;
            padding-bottom: 40px;
        }
        label{
            display: inline-block;
            width: 200px
        }
        .general-input{
            color: black;
            padding-bottom: 20px;
        }
        .product-attribute{
            padding-bottom: 15px
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
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="product-center">
                <h1 class="product-header">Update Product</h1>
                <form action="{{url('/update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    <div class="product-attribute">
                        <label>Product Title</label>
                        <input class="product-title-text general-input" type="text" name="title" placeholder="Write a title" value="{{$product->title}}" required>
                    </div>
                    <div class="product-attribute">
                        <label>Product Description</label>
                        <input class="product-description-input general-input" type="text" name="description" placeholder="Write a description" value="{{$product->description}}" required>
                    </div>
                    <div class="product-attribute">
                        <label>Product Price</label>
                        <input class="product-price-input general-input" type="number" name="price" placeholder="Enter the Price" value="{{$product->price}}" required>
                    </div>
                    <div class="product-attribute">
                        <label>Discount Price</label>
                        <input class="discount-price-input general-input" type="number" min="0" name="discount_price" placeholder="Discount if Applied" value="{{$product->discount_price}}">
                    </div>
                    <div class="product-attribute">
                        <label>Product Quantity</label>
                        <input class="product-quantity-input general-input" type="number" min="0" name="quantity" placeholder="Number of Products" value="{{$product->quantity}}" required>
                    </div>
                    <div class="product-attribute">
                        <label>Product Category</label>
                        <select class="product-category-dropdown general-input" name="category" required>
                            <option value="{{$product->category}}" selected>{{$product->category}}</option>
                            @foreach ($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="product-attribute">
                        <label>Current Product Image</label>
                        <img style="margin: auto" height="100" width="100" src="/product/{{$product->image}}">
                    </div>
                    <div class="product-attribute">
                        <label>Change Image Here</label>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <input type="submit" value="Update Product" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
      </div>
        <!-- partial -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>