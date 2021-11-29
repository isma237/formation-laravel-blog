@extends('master')

@section('title', 'Liste des articles')



@section('content')
<div class="container">
    <div class="row pt-5">
        @foreach ($articles as $item)
          <div class="col-12">
            <div class="card mb-3"">
              <div class="row g-0">
                <div class="col-md-4">
                  <img 
                      src="https://orgaphenix.com/wp-content/uploads/2020/01/secrets-photo-profil-linkedin-1024x576.jpeg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <p class="card-text"><small class="text-muted">{{ $item->category->title }}</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection