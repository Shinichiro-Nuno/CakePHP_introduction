<?php
namespace App\Controller;

class PostsController extends AppController
{
    // public function initialize() :void
    // {
    //     parent::initialize();
    //     $this->viewBuilder()->setLayout('test');
    // }

    public $paginate = [
        'limit' => 10,
        'order' => [
            'created' => 'desc'
        ],
        'contain' => ['Users', 'Tags']
    ];

    public function index()
    {
        $posts = $this->paginate($this->Posts->find());

        $this->set(compact('posts'));
    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => ['Users', 'Tags']
        ]);

        $this->set(compact('post'));
    }
}
