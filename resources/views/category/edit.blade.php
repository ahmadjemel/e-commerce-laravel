@extends("layouts.template")

@section("title","Modifier categorie")

@section("content")

{{-- formualaire d'ajout --}}

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Modifier categorie</h3>
    </div>

    @if($errors->any())
<ul class="alert alert-danger mt-3">
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif

<form action="{{ route('category.update',$category->id/*parametre:($category->id)*/) }}" method="post">
    @csrf
    <!-- ajouter une autre methode put :envoyer deuxieme methode -->
    @method("put")
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
        </div>
    </div>
    <div class="card-footer">
    <button class="btn btn-primary">Modifier</button>
    </div>
</form>

@endsection
