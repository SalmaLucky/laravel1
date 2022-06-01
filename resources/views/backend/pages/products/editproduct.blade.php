@extends('backend.mastertemplate.template')

@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Dashboard</h4>
            <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>

    </div>
    <div class="br-pagrbody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <div class="card shadow-base p-3">
                    
                        <form action="{{ Route('update', $product->id)}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pname">Product Name</label>
                                        <input type="text" name="pname" id="pname" class="form-control"
                                            placeholder="Enter product" value="{{$product->name}}">
                                           
                                    </div>




                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea placeholder="enter product description" name="description" id="description" cols="30" rows="4"
                                            class="form-control">{{$product->description}}</textarea>
                                           
                                    </div>

                                    <div class="from-group">
                                        <label for="category">Category</label>
                                        <select  id="category" class="form-control" name="category">
                                            <option value="">-----select category-----</option>

                                            <option value="Man" @if ($product->category=="man") selected
                                                @endif>man</option>
                                            <option value="Women" @if ($product->category=="women") selected
                                                @endif>women</option>
                                            <option value="Children" @if ($product->category=="children") selected
                                                @endif>children</option>
                                        </select>
                                    </div>
                                    <div class="from-group">
                                        <label for="size">Size</label>
                                        <select  id="size" class="form-control" name="size">
                                            <option value="">-----select Size-----</option>

                                            <option value="XL" @if ($product->size=="XL") selected
                                                @endif>XL</option>
                                            <option value="M" @if ($product->size=="M") selected
                                                @endif>M</option>
                                            <option value="SM" @if ($product->size=="SM") selected
                                                @endif>SM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="costPrice">Cost Price </label>
                                        <input type="text" name="costPrice" id="costPrice" class="form-control" value="{{$product->costPrice}}"
                                            placeholder="enter product cost price">
                                    </div>
                                    <div class="form-group">
                                        <label for="salePrice">Sale Price </label>
                                        <input type="text" name="salePrice" id="salePrice" class="form-control" value="{{$product->saletPrice}}"
                                            placeholder="enter product sale price">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Quantity</label>
                                        <input type="text" name="quantity" id="quantity" class="form-control"
                                            placeholder="enter product quantity" value="{{$product->quantity}}">
                                    </div>
                                    <div class="from-group">
                                        <label for="status">Status</label>
                                        <select  id="status" class="form-control" name="status">
                                            <option value="status">-----select Status-----</option>

                                            <option value="1"  @if ($product->status==1) selected
                                                @endif>Active</option>
                                            <option value="2"  @if ($product->status==2) selected
                                                @endif>Inactive</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="form-control btn btn-info">Update Product</button>
                                    </div>
                                </div>

                            </div>
                        </form>


                  
                </div>
            </div>
        </div>
    </div>
    @endsection
