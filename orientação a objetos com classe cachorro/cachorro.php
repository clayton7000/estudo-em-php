<?php

class Cachorro {
    private string $raca;
    private string $nome;
    private int $idade;

    public function __construct(string $raca, string $nome, int $idade) {
        $this->setRaca($raca);
        $this->setNome($nome);
        $this->setIdade($idade);
    }

    // GETTERS
    public function getRaca(): string {
        return $this->raca;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    // SETTERS
    public function setRaca(string $raca): void {
        $this->raca = $raca;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void {
        if ($idade < 0) {
            throw new InvalidArgumentException("Idade não pode ser negativa");
        }
        $this->idade = $idade;
    }

    // MÉTODO
    public function latir(): string {
        return "Au au!";
    }
}
