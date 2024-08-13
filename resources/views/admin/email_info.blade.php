<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <div class="main-panel">
        <div class="content-wrapper">
            <h1>Send Email to {{$order->email}}</h1>
        </div>
      </div>

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>