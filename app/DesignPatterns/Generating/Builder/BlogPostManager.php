<?php
namespace  App\DesignPatterns\Generating\Builder;

use App\DesignPatterns\Generating\Builder\Interfaces\BlogPostBuilderInterface;

class BlogPostManager
{
    private $builder;

    public function setBuilder(BlogPostBuilderInterface $builder)
    {
        $this->builder = $builder;

        return $this;
    }

    public function createCleanPost()
    {
        $blogPost = $this->builder->getBlogPost();

        return $blogPost;
    }

    public function createNewPostIt()
    {
        $blogPost = $this->builder
            ->setTitle('New IT post')
            ->setBody('New IT post about ..')
            ->setCategory([
                'it_category'
            ])
            ->srtTags([
                'tag_it',
                'tag_programming',
            ])
            ->getBlogPost();
        return $blogPost;
    }

    public function createNewPostCats()
    {
        $blogPost = $this->builder
            ->setTitle('New post about cats')
            ->setCategory([
                'cats_category',
                'pets_category',
            ])
            ->srtTags([
                'tag_cats',
                'tag_pets',
            ])
            ->getBlogPost();
        return $blogPost;
    }
}
