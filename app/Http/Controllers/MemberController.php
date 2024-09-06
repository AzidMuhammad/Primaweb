<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        return view('adminView/member', [
            'tittle' => $user->nama,
            'members' => Member::latest()->filter(request(['search', 'posisi']))->paginate(7)->withQueryString()

        ]);
    }


    public function create()
    {
        $user = Auth::user();

        return view('adminView/memberCreate', [
            'tittle' => $user->nama,

        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|unique:members',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email|unique:members',
            'alamat_domisili' => 'required|max:255',
            'posisi' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'riwayat' => 'required',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/member-image'), $imageName);

        Member::create([
            'nama' => $request->nama,
            'slug' => $request->slug,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'alamat_domisili' => $request->alamat_domisili,
            'posisi' => $request->posisi,
            'riwayat' => $request->riwayat,
            'image' => $imageName,
        ]);

        return redirect('/dashboard/member')->with('pesan', 'member berhasil ditambah');
    }

    public function show(Member $member)
    {
        $user = Auth::user();

        return view('adminView/memberDetail', [
            'tittle' => $user->nama,
            // 'jadwal' => JadwalMember::where('member_id', $member->id)->first(),
            'member' => $member
        ]);
    }


    public function edit(Member $member)
    {
        $user = Auth::user();

        return view('adminView/memberEdit', [
            'tittle' => $user->nama,
            'member' => $member
        ]);
    }


    public function update(Request $request, Member $member)
{
    $rules = ([
        'nama' => 'required|max:255',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        'no_hp' => 'required',
        'email' => 'required|email',
        'alamat_domisili' => 'required|max:255',
        'posisi' => 'required|max:255',
        'image' => 'image|file|max:5120',
        'riwayat' => 'required'
    ]);

    if ($request->slug != $member->slug) {
        $rules['slug'] = 'required|unique:members';
    }

    $validatedData = $request->validate($rules);

    $imageName = $member->image;

    if ($request->file('image')) {
        if ($request->oldImage) {
            File::delete(public_path('/images/member-image/' . $member->image));
        }
        $validatedData['image'] =
            $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/member-image'), $imageName);
    }

    $member->update([
        'nama' => $request->nama,
        'slug' => $request->slug,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tanggal_lahir' => $request->tanggal_lahir,
        'no_hp' => $request->no_hp,
        'email' => $request->email,
        'alamat_domisili' => $request->alamat_domisili,
        'posisi' => $request->posisi,
        'riwayat' => $request->riwayat,
        'image' => $imageName,
    ]);

    return redirect('/dashboard/member')->with('pesan', 'member berhasil diupdate');
}



    public function destroy(Member $member)
    {
        if ($member->image) {
            File::delete(public_path('/images/member-image/' . $member->image));
        }

        Member::destroy($member->id);

        return redirect('/dashboard/member')->with('pesan', 'Data member berhasil di hapus');
    }
}
