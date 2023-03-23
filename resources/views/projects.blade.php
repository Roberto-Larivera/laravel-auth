@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col">
                <h1>
                    Tutti i Progetti
                </h1>
            </div>
        </div>
        <div class="row g-4">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{ $project->img_repo }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text text-truncate">{{ $project->description }}</p>
                                <a href="{{ $project->link_repo }}" class="card-link">Guarda su GitHub</a>
                                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
