<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Folder;
use App\Models\PostCategory;
use Illuminate\Database\Seeder;
use App\Models\KategoriGaleri;
use App\Models\KategoriProject;
use App\Models\YtLink;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // Dev User
        User::create([
            'nama' => 'Cha Eun Woo',
            'role' => '1',
            'email' => 'mahkotonagano@gmail.com',
            'username' => 'kusuka',
            'image' => '1676100893.jpg',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'nama' => 'Tri Rislan Febrika',
            'role' => '1',
            'email' => 'admin@gov.id',
            'username' => 'rislan',
            'image' => '',
            'password' => bcrypt('admin')
        ]);

        // folder
        Folder::create([
            'nama_folder' => 'Buku Pembelajaran'
        ]);

        // gallery Categories
        KategoriGaleri::create([
            'galeri_kategori' => 'Workshop',
        ]);
        KategoriGaleri::create([
            'galeri_kategori' => 'Webinar',
        ]);

        // Project Categories
        KategoriProject::create([
            'project_kategori' => 'Web Project'
        ]);
        KategoriProject::create([
            'project_kategori' => 'Mobile Project'
        ]);

        // kategori post
        PostCategory::create([
            'kategori' => 'Info Teknologi',
            'slug' => 'info-teknologi'
        ]);
        PostCategory::create([
            'kategori' => 'Tips Teknologi',
            'slug' => 'tips-teknologi'
        ]);
        PostCategory::create([
            'kategori' => 'Hot News',
            'slug' => 'hot-news'
        ]);

        YtLink::create([
            'title' => 'GIT & GITHUB',
            'embed_link' => 'https://www.youtube.com/embed/CYlu6yoUsLI',
        ]);
    }
}
