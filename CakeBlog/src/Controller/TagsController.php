<?php
namespace App\Controller;

use Cake\Database\Query;

class TagsController extends AppController
{
    public function initialize() :void
    {
        parent::initialize();
        $this->loadModel('Posts');
    }

    public function index()
    {
        $this->paginate = [
            'limit' => 30,
            'order' => [
                'created' => 'desc'
            ]
        ];

        $tags = $this->paginate($this->Tags->find());

        $this->set(compact('tags'));
    }



    public function view($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => 'Posts'
        ]);

        $this->paginate = [
        'limit' => 10,
        'order' => [
            'Posts.created' => 'desc'
        ],
        'contain' => ['Users', 'Tags']
        ];

        $posts = $this->Posts->find()
            ->matching(
                'Tags', function (Query $q) use ($id) {
                    return $q->where(['Tags.id' => $id]);
                }
            );
        $posts = $this->paginate($posts);

        $this->set(compact('tag', 'posts'));
    }
}
