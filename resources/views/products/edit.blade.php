@extends('layouts.app')
@section('content')
    <h1>Products Update</h1>
    <hr/>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('products.update', $product->id)}}" method="post">
        @csrf
        @method('put')
        <input type="text" class="form-control mb-3" name="name" placeholder="Product Name" value="{{$product->name}}" />
        <input type="number" class="form-control mb-3" name="price" placeholder="Price $$" value="{{$product->price}}" />
        <textarea name="description" rows="4" class="form-control mb-3">{{$product->description}}</textarea>
        <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
    </form>

@endsection
