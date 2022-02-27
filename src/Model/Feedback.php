<?php

namespace Alura\Solid\Model;

class Feedback
{
    private int $nota;
    private ?string $depoimento;

    /**
     * @param int $nota
     * @param string|null $depoimento
     */
    public function __construct (int $nota, ?string $depoimento)
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }

        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }

    /**
     * @return int
     */
    public function getNota(): int
    {
        return $this->nota;
    }

    /**
     * @param int $nota
     */
    public function setNota(int $nota): void
    {
        $this->nota = $nota;
    }

    /**
     * @return string|null
     */
    public function getDepoimento(): ?string
    {
        return $this->depoimento;
    }

    /**
     * @param string|null $depoimento
     */
    public function setDepoimento(?string $depoimento): void
    {
        $this->depoimento = $depoimento;
    }

}