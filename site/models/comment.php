<?php

class CommentPage extends Kirby\Cms\Page
{

    public function writeContent(array $data, string $languageCode = null): bool
    {
        unset($data['title']);

        if ($comment = Db::first('comments', '*', ['slug' => $this->slug()])) {
            return Db::update('comments', $data, ['slug' => $this->slug()]);
        } else {
            $data['slug'] = $this->slug();
            return Db::insert('comments', $data);
        }

    }

    public function delete(bool $force = false): bool
    {
        return Db::delete('comments', ['slug' => $this->slug()]);
    }

    public function title(): Kirby\Cms\Field
    {
        return $this->text()->excerpt(100)->or('New comment');
    }

}
