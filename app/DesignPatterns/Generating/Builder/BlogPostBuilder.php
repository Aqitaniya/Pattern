<?php
namespace  App\DesignPatterns\Generating\Builder;

use App\DesignPatterns\Generating\Builder\Interfaces\BlogPostBuilderInterface;
use App\DesignPatterns\Generating\Builder\Classes\BlogPost;

class BlogPostBuilder implements BlogPostBuilderInterface
{
    private $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilderInterface
    {
        $this->blogPost = new BlogPost();

        return $this;
    }

    public function setTitle(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->title = $val;

        return $this;
    }

    public function setBody(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->body = $val;

        return $this;
    }

    public function setCategory(array $val): BlogPostBuilderInterface
    {
        $this->blogPost->categories = $val;

        return $this;
    }

    public function setTags(array $val): BlogPostBuilderInterface
    {
        $this->blogPost->tegs = $val;

        return $this;
    }

    public function getBlogPost(): BlogPost
    {
        $result = $this->blogPost;
        $this->create();

        return $result;
    }
}
