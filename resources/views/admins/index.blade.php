@extends('master')
@section('title', 'Espace admin')


@section('content')
    <div class="container pt-3">
        <div class="row">
            <div class="col-6">
                <h2>Ajouter un article</h2>
                <form action="/admin/create-article" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="title" name="title">
                      </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="date" class="form-label">Catégorie</label>
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                      </div>
        
                      <div>
                          <button type="submit" class="btn btn-md btn-primary">Enregistrer</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
@endsection