@extends('layouts.admin')
@section('head-title','Create  | ')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row mb-5">
            <div class="col">
                <h1>
                    Tutti i Projects
                </h1>
                <a href="#" class="btn btn-outline-primary">
                    Torna Indietro
                    <i class="fa-solid fa-rotate-left"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
               
                <form action="">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        id="title" 
                        name="title" 
                        placeholder="Example Title">
                      </div>
                    <div class="mb-3">
                        <label for="name_repo" class="form-label">Name Repo</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        id="name_repo" 
                        name="name_repo" 
                        placeholder="example-name-repo">
                      </div>
                    <div class="mb-3">
                        <label for="link_repo" class="form-label">Link Repo</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        id="link_repo" 
                        name="link_repo" 
                        placeholder="https://github.com/Example-link/name-repo">
                      </div>
                    <div class="mb-3">
                        <label for="img_repo" class="form-label">Img Repo</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        id="img_repo" 
                        name="img_repo" 
                        placeholder="https://placehold.co/example">
                      </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea 
                        class="form-control" 
                        id="description" 
                        name="description"
                        placeholder="Lorem ipsum dolor sit amet ..."
                        rows="3"></textarea>
                      </div>
                      <div>
                        <button type="submit" class="btn btn-success mb-3">Confirm</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
@endsection
