<?php

use Kirby\Cms\Pages;
use Kirby\Database\Db;

class CommentsPage extends Kirby\Cms\Page
{
    public function children()
    {
        $comments = [];

        foreach (Db::select('comments') as $comment) {
            $comments[] = [
                'slug'     => $comment->slug(),
                'num'      => 0,
                'template' => 'comment',
                'model'    => 'comment',
                'content'  => [
                    'text'  => $comment->text(),
                    'user'  => $comment->user(),
                ]
            ];
        }

        return Pages::factory($comments, $this);
    }
}
