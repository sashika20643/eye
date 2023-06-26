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
   Update Product
</h2>
<div class="row d-flex justify-content-center">

    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add product details</h4>
          <p class="card-description">  </p>
          <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{route('updateframe')}}">
            @csrf
            <div class="form-group" style="display: none">
                <label for="exampleInputUsername1">Id</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Productname" value="{{$product->id}}" name="id">
              </div>

            <div class="form-group">
              <label for="exampleInputUsername1">Name</label>
              <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Productname" value="{{$product->title}}" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Description</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Product description" value="{{$product->description}}" name="description">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1" class="mb-2">Image</label>
                <br>
                <img src="{{asset('product/'.$product->image)}}" alt="{{$product->title}}" class="mt-3 mb-3" style="max-height:150px ;" />

                <input type="file" class="form-control" id="exampleInputUsername1" placeholder="Productname" name="image">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">quantity</label>
                <input type="number" min="1" class="form-control" id="exampleInputUsername1" placeholder="quantity"value="{{$product->quantity}}" name="quantity">
              </div>
              <div class="form-group">
                <label>Catagory</label>
                <select class="js-example-basic-single" name="catagory" style="width:100%">
                 @foreach ($catagories as $cat )
                 @if ($product->catagory==$cat->name)
                 <option value="{{$cat->name}}" selected>{{$cat->name}}</option>

@else
<option value="{{$cat->name}}">{{$cat->name}}</option>


                 @endif
                 @endforeach


                </select>

              </div>

              <div class="form-group " >
                <span class="mb-6" style="margin-bottom: 3rem">Colors</span>
                <div class="d-flex flex-wrap align-items-center mt-2">


                @foreach ($colors as $cat )
                 @php
                     $cls = $product->colors->pluck('id')->toArray();
                 @endphp
                    @if (in_array($cat->id,$cls))
<input type="checkbox" name="checkbox[]" checked id="{{$cat->name}}" value="{{$cat->id}}">
@else
<input type="checkbox" name="checkbox[]" id="{{$cat->name}}" value="{{$cat->id}}">

@endif
<label for="{{$cat->name}}" style="margin-bottom:0; margin-right:3px; ">{{$cat->name}}</label>

                @endforeach
            </div>

              <div class="form-group mt-3">
                <label for="exampleInputUsername1">Price</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="price" value="{{$product->price}}" name="price">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Discount_price</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="discount_price" value="{{$product->discount_price}}" name="discount_price">
              </div>
              <div class="">


                <h4>Image gallery</h4>

                <hr>
<div class="imgrow d-flex justify-content-between">
<div>
    <img src="{{asset('Frame/'.$product->image1)}}" alt="logo" class="mr-1" style="width: 100px;height:100px"/>
    <p>Image1</p>
</div>
<div>
    <img src="{{asset('Frame/'.$product->image2)}}" alt="logo" class="mr-1"  style="width: 100px;height:100px"/>
    <p>Image2</p>
</div>
  <div>  <img src="{{asset('Frame/'.$product->image3)}}" alt="logo" class="mr-1" style="width: 100px;height:100px"/>
    <p>Image3</p>
</div>
 <div>   <img src="{{asset('Frame/'.$product->image4)}}" alt="logo"  style="width: 100px;height:100px"/>
    <p>Image4</p>
</div>
</div>
  @for ($i=0;$i<4;$i++)
  <div class="form-group">
      <label for="exampleInputUsername1">Image{{$i+1}}</label>
      <input type="file" class="form-control" id="exampleInputUsername1" placeholder="Productname" name="image{{$i+1}}">
    </div>

  @endfor

              <button type="submit" class="btn btn-warning mr-2">Cancel</button>
            <button type="submit" class="btn btn-primary mr-2">Update</button>
        </div>
          </form>
        </div>
      </div>
    </div>
</div>
</div>
</div>
<!-- main-panel ends -->

@endsection
