<?php

namespace App\Http\Controllers\Tenant;

use App\Project;
use App\Tenant\Manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Store a project.
     *
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        // Project::create([
        //     'name' => $request->name
        // ]);

        // or (after adding macro)
        
        $request->tenant()->projects()->create([
            'name' => $request->name
        ]);

        return back();
    }

    /**
     * Show a project.
     *
     * @param  Project $project [description]
     * @return [type]           [description]
     */
    public function show(Project $project)
    {
        return view('tenant.projects.show', compact('project'));
    }

    /**
     * Update a project.
     *
     * @param  Project $project [description]
     * @return [type]           [description]
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->only('name'));

        return back();
    }
}
