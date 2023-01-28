<?php

class Employee
{
    private string $name;
    private string $surname;
    public object $post;

    public function __construct(string $name, string $surname, Post $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function changePost(Post $post): void
    {
        $this->post = $post;
    }
}