@extends('layouts.admin')
@section('head-title', 'Create | ')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row mb-5">
            <div class="col">
                <h1>
                    Modifica Progetto
                </h1>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-primary">
                    Torna Indietro
                    <i class="fa-solid fa-rotate-left"></i>
                </a>
            </div>
        </div>
        @if ($errors->any())

            <div class="row mb-5">
                <div class="col">
                    <div class="alert alert-danger">
                        <ul class="m-0">
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col">

                <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label  @error('title') text-danger @enderror ">Title <span class="text-danger fw-bold">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" placeholder="Example Title" maxlength="98" value="{{ old('title')?? $project->title }}" required>
                        @error('title')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name_repo" class="form-label  @error('name_repo') text-danger @enderror">Name
                            Repo <span class="text-danger fw-bold">*</span></label>
                        <input type="text" class="form-control @error('name_repo') is-invalid @enderror" id="name_repo"
                            name="name_repo" placeholder="example-name-repo" maxlength="98" value="{{ old('name_repo')?? $project->name_repo  }}" required>
                        @error('name_repo')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="link_repo" class="form-label  @error('link_repo') text-danger @enderror">Link
                            Repo <span class="text-danger fw-bold">*</span></label>
                        <input type="text" class="form-control @error('link_repo') is-invalid @enderror" id="link_repo"
                            name="link_repo" placeholder="https://github.com/Example-link/name-repo" maxlength="255" value="{{ old('link_repo')?? $project->link_repo  }}"
                            required>
                        @error('link_repo')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img_repo" class="form-label  @error('img_repo') text-danger @enderror">Img Repo</label>
                        <input type="text" class="form-control @error('img_repo') is-invalid @enderror" id="img_repo"
                            name="img_repo" placeholder="https://placehold.co/example" maxlength="255" value="{{ old('img_repo')?? $project->img_repo }}">
                        @error('img_repo')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description"
                            class="form-label  @error('description') text-danger @enderror">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            placeholder="Lorem ipsum dolor sit amet ..." rows="3" maxlength="4096"> {{ old('description')?? $project->description  }}</textarea>
                        @error('description')
                            <p class="text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <p>
                            I campi contrassegnati con <span class="text-danger fw-bold">*</span> sono <span class="text-danger fw-bold">obbligatori</span>
                        </p>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success mb-3">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
