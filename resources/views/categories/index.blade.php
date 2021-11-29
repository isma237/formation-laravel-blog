 @extends('master')
@section('content')
    <div class="container pt-3">
        <h3>Liste des catégories</h3>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->description}}</td>
                        <td><a href="{{route('show-categorie', $category->id)}}">Voir les articles associés</a></td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection