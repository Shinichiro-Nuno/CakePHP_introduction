<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'title' => '最初の投稿',
                'description' => '最初の投稿の概要',
                'body' => '最初の投稿の内容',
                'published' => 1,
                'created' => '2019-12-02 10:00:00',
                'modified' => '2019-12-02 10:00:00',
            ],
            [
                'title' => '2番目の投稿',
                'description' => '2番目の投稿の概要',
                'body' => '2番目の投稿の内容',
                'published' => 1,
                'created' => '2020-01-03 10:00:00',
                'modified' => '2020-01-03 10:00:00',
            ],
            [
                'title' => '非表示の投稿タイトル',
                'description' => '非表示の投稿の概要',
                'body' => '非表示の投稿の内容',
                'published' => 0,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00',
            ],
            [
                'title' => 'テストタイトル',
                'description' => 'テストタイトル投稿の概要',
                'body' => 'テストタイトル投稿の内容',
                'published' => 1,
                'created' => '2020-05-03 10:00:00',
                'modified' => '2020-05-03 10:00:00',
            ],
            [
                'title' => '5番目の投稿',
                'description' => '5番目の投稿の概要',
                'body' => '5番目の投稿の内容',
                'published' => 1,
                'created' => '2020-05-05 10:00:00',
                'modified' => '2020-05-05 10:00:00',
            ],
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
