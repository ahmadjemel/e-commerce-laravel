@extends("layouts.template")

@section("title","Ajouter un nouveau produit")

@section("content")
{{-- formualaire d'ajout --}}

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ajouter produit</h3>
    </div>

    @if($errors->any())
    <ul class="alert alert-danger mt-3">
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    @endif

<form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input  type="file" class="form-control" name="photo" id="photo">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" name="price" id="price">
        </div>

        <div class="form-group">
            <label for="category_id">Categorie</label>
            <select class="form-control" name="category_id" id="category_id">
                <option value="">--- choisir une categorie ---</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>


    </div>
    <div class="card-footer">
    <button class="btn btn-primary">Ajouter</button>
    </div>
</form>

@endsection
