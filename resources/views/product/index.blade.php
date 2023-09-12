@extends('layouts.template')

@section("title","Liste des produits")

@section("content")
@if (Session::has("success"))

<div class="alert alert-success"> {{Session::get("success")}}</div>
@endif

<table class="table table-bordred table-striped table-dark">

    <thead>
        <tr>
            <th>Photo</th>
            <th>Nom</th>
            <th>Categorie</th>
            <th>prix</th>
            <th>description</th>
            <th>status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
@forelse($products as $product)
        <tr>
            <td><img src="{{ asset('images/products/'.$product->photo)}}" width="80"></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->status }}</td>
            <td>
<a href="{{ route('product.edit',$product->id) }}"><button class="btn btn-success">Modifier</button></a>
<form method="post" class="d-inline" action="{{ route('product.destroy',$product->id) }}">
    @csrf
    @method('delete')
    <button class="btn btn-danger" onclick="return confirm('etes vous sure de supprimer?')">Supprimer</button>
</form>
            </td>
        </tr>
        @empty
        <tr>
            <th colspan="7">pas de produit</th>
        </tr>
@endforelse
    </tbody>
</table>
@endsection
