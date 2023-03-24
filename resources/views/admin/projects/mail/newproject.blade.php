<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>
        Prova Email
    </h1>
    {{-- @if (isset($project->featured_image)) --}}
    
    <div>
        <div >
            <h5>Titolo: {{ $project->title }}</h5>
            <p>Slug: {{ $project->slug }}</p>
            <p>Nome Repo: {{ $project->name_repo }}</p>
            <p>Link Repo: {{ $project->link_repo }}</p>
            <p>Descrizione: {{ $project->description }}</p>
        </div>
        {{-- @endif --}}
    </div>
</body>

</html>
