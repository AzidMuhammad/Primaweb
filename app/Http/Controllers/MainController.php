<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Member;
use App\Models\Elibrary;
use App\Models\Folder;
use App\Models\Project;
use App\Models\Galeri;
use App\Models\Partnership;
use App\Models\KategoriGaleri;
use App\Models\KategoriProject;
use App\Models\YtLink;

class MainController extends Controller
{
    public function index()
    {
        return view('/beranda', [
            'tittle' => 'Beranda',
            'posts' => Blog::latest()->paginate(3),
            'galeris' => Galeri::paginate(6),
            'partnership' => Partnership::paginate(6),
            'links' => YtLink::paginate(1),

        ]);
    }

    public function tentang()
    {
        return view('/tentang', [
            'tittle' => 'Tentang Kami',

        ]);
    }

    public function profilMember()
    {
        return view('member/profilMember', [
            'tittle' => "Profil Member",
            'datas' => Member::paginate(6),

        ]);
    }

    public function profilMemberDetail(Member $member)
    {
        return view('member/profilMemberSingle', [
            'tittle' => "profil Member",
            'data' => $member,

        ]);
    }

    // elibrary
    public function elibraryIndex()
    {
        return view('elibrary/elibrary', [
            'tittle' => 'E-Library',
            'libraries' => Elibrary::latest()->filter(request(['search']))->paginate(6),
            'folder' => Folder::all(),

        ]);
    }

    public function galeriIndex()
    {
        return view('galeri/galeriGuest', [
            'tittle' => 'Galeri',
            'galeris' => Galeri::latest()->filter(request(['search']))->paginate(9)->withQueryString(),
            'kategories' => KategoriGaleri::all(),

        ]);
    }

    public function projectIndex()
    {
        return view('project/projectGuest', [
            'tittle' => 'Project',
            'projects' => Project::latest()->filter(request(['search']))->paginate(9)->withQueryString(),
            'kategories' => KategoriProject::all(),

        ]);
    }

    public function partnerIndex()
    {
        return view('partnership/partnership', [
            'tittle' => 'Our Partnership',
            'partnership' => Partnership::all(),

        ]);
    }
}
