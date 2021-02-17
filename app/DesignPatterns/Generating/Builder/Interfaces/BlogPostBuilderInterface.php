<?php
namespace  App\DesignPatterns\Generating\Builder\Interfaces;

use App\DesignPatterns\Generating\Builder\Classes\BlogPost;

interface BlogPostBuilderInterface
{
    public function create(): BlogPostBuilderInterface;

    public function setTitle(string $val): BlogPostBuilderInterface;

    public function setBody(string $val): BlogPostBuilderInterface;

    public function setCategory(array $val): BlogPostBuilderInterface;

    public function setTags(array $val): BlogPostBuilderInterface;

    public function getBlogPost(): BlogPost;
}
