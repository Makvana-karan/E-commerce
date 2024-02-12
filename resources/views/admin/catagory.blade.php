<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include('admin.css')

  <style>
    .div_center{
        text-align: center;
        padding-top:40px ;
    }
    .h2_font{
        font-size: 40px;
        padding: bottom 40px;
    }
    .inpu{
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

      
        <!-- partial:partials/_navbar.html -->
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


          <div class="div_center">

            <h1 class="h2_font">add to catagory</h1>
            <form action="{{url('/add_catagory')}}" method="POST">
              @csrf
                <input class="inpu" type="text" name="catagory" placeholder="write catagory">

                <input type="submit" class="btn btn-primary" name="submit" value="add catagory">
            </form>
          </div>

          <table class="center">
            <tr>
              <td>catagory Name</td>
              <td>action</td>
            </tr>

            @foreach($data as $data)
            <tr>
              <td>{{$data->catagory_name}}</td>
              
              <td><a onclick="return confirm('are you sure to delete this')" class="btn btn-danger" href="{{url('delete_catagory',$data->id)}}">delete</a></td>
            </tr> @endforeach

          </table>
         

          </div>
        </div>


        
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>