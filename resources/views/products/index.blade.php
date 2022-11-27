@extends('layouts.app')

@section('content')
    <h1>Product CRUD</h1>
    <a href="{{route('products.create')}}" class="btn btn-link float-end">
        Create Product
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <table class="table table-striped table-hover">
        <thead>
        <tr></tr>
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                            Action
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                            <li><a href="{{route('products.show', $product->id)}}" class="dropdown-item">View</a></li>
                            <li><a href="{{route('products.edit', $product->id)}}" class="dropdown-item">Edit</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="{{route('products.destroy', $product->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="dropdown-item" type="submit">Delete</button>
                            </form>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
