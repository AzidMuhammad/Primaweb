<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogCategory;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ElibraryController;
use App\Http\Controllers\BlogGuestController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\KategoriGaleriController;
use App\Http\Controllers\KategoriProjectController;
use App\Http\Controllers\YtLinkController;

// halaman guest
Route::get('/', [MainController::class, 'index']);
Route::get('/tentang', [MainController::class, 'tentang']);

//blog guest
Route::get('/artikel', [BlogGuestController::class, 'index']);
Route::get('/artikel/{blog}', [BlogGuestController::class, 'show']);

// member guest
Route::get('/member/profil', [MainController::class, 'profilMember']);
Route::get('/member/profil/{member}', [MainController::class, 'profilMemberDetail']);

// elibrary
Route::get('/e-library', [MainController::class, 'elibraryIndex']);

// galeri guest
Route::get('/galeri', [MainController::class, 'galeriIndex']);

// project guest
Route::get('/project', [MainController::class, 'projectIndex']);

// partnershipn
Route::get('/partnership', [MainController::class, 'partnerIndex']);

// <-- Bagian Admin -->

// form login dan logout
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->middleware('auth');
Route::get('/blogCreate', [BlogController::class, 'create'])->middleware('auth');
Route::post('/blogCreate', [BlogController::class, 'store']);

// ..............
Route::resource('/dashboard/blog', BlogController::class)->middleware('auth');
Route::get('/blogCategory', [BlogCategory::class, 'index'])->middleware('auth');
Route::post('/blogCategory', [BlogCategory::class, 'store']);

// users
Route::resource('/dashboard/user', User_Controller::class)->middleware('auth');

// member
Route::resource('/dashboard/member', MemberController::class)->middleware('auth');

// galeri
Route::resource('/dashboard/galeri', GaleriController::class)->middleware('auth');
Route::resource('/dashboard/galeri-kategori', KategoriGaleriController::class)->middleware('auth');

// project
Route::resource('/dashboard/project', ProjectController::class)->middleware('auth');
Route::resource('/dashboard/project-kategori', KategoriProjectController::class)->middleware('auth');

// e-library
Route::resource('/dashboard/e-library', ElibraryController::class)->middleware('auth');
Route::resource('/dashboard/e-library/folder', FolderController::class)->middleware('auth');

// partnership
Route::resource('/dashboard/partnership', PartnershipController::class)->middleware('auth');

// yt links
Route::resource('/dashboard/yt', YtLinkController::class)->middleware('auth');
