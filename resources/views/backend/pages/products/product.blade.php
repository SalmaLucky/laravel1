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
                    
                        <form action="{{Route('store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pname">Product Name</label>
                                        <input type="text" name="pname" id="pname" class="form-control"
                                            placeholder="Enter product" value="{{old('pname')}}">
                                            <span class="text-danger">
                                                @error('pname')
                                                   {{$message}} 
                                                @enderror
                                            </span>
                                    </div>




                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea placeholder="enter product description" name="description" id="description" cols="36" rows="4"
                                            class="form-control">{{old('description')}}</textarea>
                                            <span class="text-danger">
                                                @error('description')
                                                   {{$message}} 
                                                @enderror
                                            </span>
                                    </div>

                                    <div class="from-group">
                                        <label for="category">Category</label>
                                        <select  id="category" class="form-control" name="category">
                                            <option value="">-----select category-----</option>

                                            <option value="Man">man</option>
                                            <option value="Women">women</option>
                                            <option value="Children">children</option>
                                        </select>
                                    </div>
                                    <div class="from-group">
                                        <label for="size">Size</label>
                                        <select  id="size" class="form-control" name="size">
                                            <option value="">-----select Size-----</option>

                                            <option value="XL">XL</option>
                                            <option value="M">M</option>
                                            <option value="SM">SM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="costPrice">Cost Price </label>
                                        <input type="text" name="costPrice" id="costPrice" class="form-control"
                                            placeholder="enter product cost price">
                                    </div>
                                    <div class="form-group">
                                        <label for="salePrice">Sale Price </label>
                                        <input type="text" name="salePrice" id="salePrice" class="form-control"
                                            placeholder="enter product sale price">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Quantity</label>
                                        <input type="text" name="quantity" id="quantity" class="form-control"
                                            placeholder="enter product quantity">
                                    </div>
                                    <div class="from-group">
                                        <label for="status">Status</label>
                                        <select  id="status" class="form-control" name="status">
                                            <option value="status">-----select Status-----</option>

                                            <option value="1">Active</option>
                                            <option value="2">Inactive</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="form-control btn btn-info">Add Product</button>
                                    </div>
                                </div>

                            </div>
                        </form>


                  
                </div>
            </div>
        </div>
    </div>
    @endsection
