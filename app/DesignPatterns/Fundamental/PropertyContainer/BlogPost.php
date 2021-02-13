<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;


class BlogPost extends PropertyContainer
{
    private $title;

    private $category_id;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        return $this->title = $title;
    }

    public function getCategory()
    {
        return $this->category_id;
    }

    public function seCategory($id)
    {
        return $this->category_id = $id;
    }
}
