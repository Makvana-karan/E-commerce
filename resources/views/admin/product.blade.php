<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include('admin.css')
  <style>
    .center{
        text-align:center;
        padding-top:40px;
    }
    .product{
        font-size:40px;
        padding-bottom:40px;
    }
  </style>
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->

      
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="center">
    <h1 class="product">add product</h1>
    <label for="">product title</label>
    <input type="text" name="title" placeholder="write a title">
            </div>
</div>
</div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>