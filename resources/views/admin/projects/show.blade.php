@extends('layouts.admin')
@section('head-title', ' Project | ')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row row-cols-1 mb-5">
            <div class="col">
                <h1>
                    {{ $project->id }} - {{ $project->title }}
                </h1>
            </div>
            <div class="col">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Indietro</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $project->img_repo }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body d-flex flex-column justify-content-between h-100">
                                <div>
                                    <h5 class="card-title">Titolo: {{ $project->title }}</h5>
                                    <p class="card-text">Slug: {{ $project->slug }}</p>
                                    <p class="card-text">Nome Repo: {{ $project->name_repo }}</p>
                                    <p class="card-text">Link Repo: {{ $project->link_repo }}</p>
                                    <p class="card-text">Descrizione: {{ $project->description }}</p>
                                </div>
                                <div>
                                    <a href="{{ route('admin.projects.show', $project->id) }}"
                                        class="btn btn-outline-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-outline-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    {{-- @include('admin.projects.partials.delete') --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
