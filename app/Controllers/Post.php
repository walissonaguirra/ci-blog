<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\Post as PostModel;

class Post extends BaseController
{
    public function index()
    {
        helper('form');

        $post = new PostModel();

        return view('post/index', [
            'posts' => $post->findAll()
        ]);
    }

    public function store()
    {
        $request = $this->request->getPost([
            'title',
            'content'
        ]);

        $rules = [
            'title'    => [
                'label' => 'Título',
                'rules' => 'required|max_length[128]|min_length[3]',
            ],
            'content'  => [
                'label' => 'Conteúdo',
                'rules' => 'required|max_length[255]|min_length[10]'
            ]
        ];

        $isValid = $this->validateData($request, $rules);

        if(!$isValid) {
            return redirect()->back()->withInput();
        }

        $data = (object) $this->validator->getValidated();

        $post = new PostModel();
        $post->save([
            'title' => $data->title,
            'slug' => mb_strtolower(mb_url_title($data->title)),
            'content' => $data->content
        ]);

        return redirect()->back();
    }

    public function show(string $slug)
    {
        $model = new PostModel();
        $post = $model->where(['slug' => $slug])->first();

        if (!$post) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        return view('post/show', [
            'post' => $post
        ]);
    }
}
