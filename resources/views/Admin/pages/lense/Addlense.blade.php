@extends('Admin.layout.adminlayout')

@section('content')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

@if (session()->has('massege'))

<div class="alert alert-success">
    <button type="button" class="close" data-dismiss='alert' area-hidden='true'>X</button>
{{session()->get('massege')}}
</div>



@endif
@if($errors->any())
   @foreach ($errors->all() as $error )
   <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss='alert' area-hidden='true'>X</button>
    {{ $error }}
</div>

   @endforeach
@endif


<h2 class="text-center mb-3">
   Add New Product
</h2>
<div class="row d-flex justify-content-center">

    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add product details</h4>
          <p class="card-description">  </p>
          <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('addlense')}}">
            @csrf
            <div class="form-group">
              <label for="exampleInputUsername1">name</label>
              <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Productname" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">description</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Product description" name="description">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Image</label>
                <input type="file" class="form-control" id="exampleInputUsername1" placeholder="Productname" name="image">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">quantity</label>
                <input type="number" min="1" class="form-control" id="exampleInputUsername1" placeholder="quantity" name="quantity">
              </div>
              <div class="form-group">
                <label>catagory</label>
                <select class="js-example-basic-single" name="catagory" style="width:100%">
                 @foreach ($catagories as $cat )
                 <option value="{{$cat->name}}">{{$cat->name}}</option>
                 @endforeach


                </select>
              </div>
              {{-- <div class="form-group " >
                <span class="mb-6" style="margin-bottom: 3rem">Colors</span>
                <div class="d-flex flex-wrap align-items-center mt-2">


                @foreach ($colors as $cat )
                <input type="checkbox" name="checkbox[]" id="{{$cat->name}}" value="{{$cat->id}}">
                <label for="{{$cat->name}}" style="margin-bottom:0; margin-right:3px; ">{{$cat->name}}</label>
                @endforeach
            </div>
            </div> --}}
              <div class="form-group">
                <label for="exampleInputUsername1">Price</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="price" name="price">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">discount_price</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="discount_price" name="discount_price">
              </div>

              <h4>Image gallery</h4>
              <hr>

@for ($i=0;$i<4;$i++)
<div class="form-group">
    <label for="exampleInputUsername1">Image{{$i+1}}</label>
    <input type="file" class="form-control" id="exampleInputUsername1" placeholder="Productname" name="image{{$i+1}}">
  </div>

@endfor


            <button type="submit" class="btn btn-primary mr-2">Submit</button>

          </form>
        </div>
      </div>
    </div>
</div>
</div>
</div>
<!-- main-panel ends -->

@endsection
