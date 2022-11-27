@extends('layouts.app')
@section('content')
    <h1>Products Create</h1>
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

    <form action="{{route('products.store')}}" method="post">
        @csrf
        @method('post')
        <input type="text" class="form-control mb-3" name="name" placeholder="Product Name"  />
        <input type="number" class="form-control mb-3" name="price" placeholder="Price $$" />
        <textarea name="description" rows="4" class="form-control mb-3"></textarea>
        <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
    </form>

@endsection
