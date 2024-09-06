<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\KategoriProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{

    public function index()
    {
        return view('adminView/project', [
            'tittle' => 'Media',
            'project' => Project::latest()->paginate(5)
        ]);
    }

    public function create()
    {
        return view('adminView/projectCreate', [
            'tittle' => 'Media',
            'kategories' => KategoriProject::all()
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title_project' => 'required|max:255',
            'slug' => 'required',
            'keterangan' => 'required',
            'kategori_id' => 'required',
            'image' => 'required|image|file|max:5120'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/project-image'), $imageName);

        Project::create([
            'title_project' => $request->title_project,
            'slug' => $request->slug,
            'keterangan' => $request->keterangan,
            'kategori_id' => $request->kategori_id,
            'image' => $imageName,
        ]);

        return redirect('/dashboard/project')->with('pesan', 'Foto project berhasil ditambah');
    }


    public function destroy(Project $project)
    {
        if ($project->image) {
            File::delete(public_path('/images/project-image/' . $project->image));
        }

        Project::destroy($project->id);

        return redirect('/dashboard/project')->with('pesan', 'Foto project berhasil di hapus');
    }
}
