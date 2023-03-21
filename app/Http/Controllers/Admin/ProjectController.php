<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

// Requests
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

// Models
use App\Models\Project;

// Helpers
use Illuminate\Support\Str;


class ProjectController extends Controller
{









    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        // metodo 1
            return view('admin.projects.index',[
                'projects' => $projects
            ]);
        // metodo 2
        //return view('admin.projects.index',compact('projects'));
    }










    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }












    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $existSlug = Project::where('slug', $data['slug'])->first();

        $counter = 1;
        $dataSlug =$data['slug'];

        // Aggiungere la possibilità di rimuovere gli spazzi se ci sono e inserire dei trattini, name-repo
        
        // questa funzione controlla se lo slag esiste già nel database, e in caso esista con questo ciclo while li viene inserito un numero di continuazione 
        while($existSlug){
            if(strlen($data['slug']) >= 95){
                substr($data['slug'], 0, strlen($data['slug']) - 3);
            }
            $data['slug'] = $dataSlug.'-'.$counter;
            $counter++;
            $existSlug = Project::where('slug', $data['slug'])->first();
        }

        $newProject = Project::create($data);
        return redirect()->route('admin.projects.show', $newProject);
    }







    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show',compact('project'));
    }











    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit',compact('project'));
    }











    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $titleOld =  $project->title;
        $name_repoOld =  $project->name_repo;
        $link_repoOld =  $project->link_repo;
        $img_repoOld =  $project->img_repo;
        $descriptionOld =  $project->description;
        
        $data = $request->validated();

        
        if(
            $titleOld ==  $data['title'] &&
            $name_repoOld ==  $data['name_repo'] &&
            $link_repoOld ==  $data['link_repo'] &&
            $img_repoOld ==  $data['img_repo'] &&
            $descriptionOld ==  $data['description']
        ){
            return redirect()->route('admin.projects.edit', $project->id)->with('warning', 'Non hai modificato nessun dato');
        }else{
            if($titleOld != $data['title']){
            
                $data['slug'] = Str::slug($data['title']);
                $existSlug = Project::where('slug', $data['slug'])->first();
                
                $counter = 1;
                $dataSlug =$data['slug'];
                
                // Aggiungere la possibilità di rimuovere gli spazzi se ci sono e inserire dei trattini, name-repo
                
                // questa funzione controlla se lo slag esiste già nel database, e in caso esista con questo ciclo while li viene inserito un numero di continuazione 
                while($existSlug){
                    if(strlen($data['slug']) >= 95){
                        substr($data['slug'], 0, strlen($data['slug']) - 3);
                    }
                    $data['slug'] = $dataSlug.'-'.$counter;
                    $counter++;
                    $existSlug = Project::where('slug', $data['slug'])->first();
                }
                dd($data);
            }
    
            $project->update($data);
            return redirect()->route('admin.projects.show', $project)->with('success', 'Progetto aggiornato con successo');;
            
        }
        
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
