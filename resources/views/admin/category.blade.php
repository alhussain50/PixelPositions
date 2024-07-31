<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include('admin.css')
        <style>
            .category-center{
                text-align: center;
                padding-top: 40px;
            }
            .heading-font{
                font-size: 40px;
                padding-bottom: 40px;
            }
            .input-color{
                color: black;
            }
            .center{
                margin: auto;
                width: 50%;
                text-align: center;
                margin-top: 30px;
                border: 3px solid #fff;
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
                    <div class="category-center">
                        <h2 class="heading-font">Add Category</h2>
                        <form action="{{url('/add_category')}}" method="POST">
                            @csrf
                            <input class="input-color" type="text" name="category" placeholder="Write category name">
                            <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                        </form>
                    </div>
                    <table class="center">
                        <tr>
                            <td>Category Name</td>
                            <td>Action</td>
                        </tr>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{$data->category_name}}</td>
                            <td><a onclick="return confirm('Confirm Deletion?')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            
        </div>
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
    </body>
</html>