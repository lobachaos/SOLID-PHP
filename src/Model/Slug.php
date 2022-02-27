<?php

namespace Alura\Solid\Model;

class Slug
{
    private string $slug;

    /**
     * @param string $conteudo
     */
    public function __construct(string $conteudo)
    {
        $this->slug = str_replace(' ', '-', strtolower($conteudo));
    }

    public function __toString(): string
    {
        return $this->slug;
    }
}