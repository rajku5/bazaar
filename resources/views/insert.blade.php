@extends('base')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <form action="{{route('insert')}}" enctype="multipart/form-data" method="POST"></form>
                            @csrf
                            <div class="mb-3">
                                <label for="title">product Title <span  class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control shadow-none @error('title') is-invaild @enderror">
                                @error('title')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="brand">Brand <span  class="text-danger">*</span></label>
                                <input type="text" name="brand" class="form-control shadow-none @error('brand') is-invaild @enderror">
                                @error('brand')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category">category <span  class="text-danger">*</span></label>
                                <input type="text" name="category" class="form-control shadow-none @error('category') is-invaild @enderror">
                                @error('category')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price">price<span  class="text-danger">*</span></label>
                                <input type="text" name="price" class="form-control shadow-none @error('price') is-invaild @enderror">
                                @error('price')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="discount_price">Discount price<span  class="text-danger">*</span></label>
                                <input type="text" name="discount_price" class="form-control shadow-none @error('discount_price') is-invaild @enderror">
                                @error('discount_price')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image">image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="description">description<span  class="text-danger">*</span></label>
                                <input type="text" name="description" class="form-control shadow-none @error('description') is-invaild @enderror">
                                @error('description')
                                    <p class="small text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Add product" class="btn btn-dark float-end btn-sm">
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection