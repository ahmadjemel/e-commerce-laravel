@extends('layouts.template')

@section("title","Liste des categories")

@section("content")

<table class="table table-bordred table-striped table-dark">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
@forelse($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <a href="{{ route('category.edit',$category->id) }}"><button class="btn btn-success">Modifier</button></a>
<form method="post" class="d-inline" action="{{ route('category.destroy',$category->id) }}">
    @csrf
    @method('delete')
    <button class="btn btn-danger" onclick="return confirm('etes vous sure de supprimer?')">Supprimer</button>
</form>
            </td>
        </tr>
        @empty
        <tr>
            <th colspan="2">pas de categorie</th>
        </tr>
@endforelse
    </tbody>
</table>
@endsection
