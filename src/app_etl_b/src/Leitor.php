<?php

namespace App;

class Leitor
{
    private $diretorio;
    private $arquivo;

    /**
     * Get the value of diretorio
     */
    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    /**
     * Set the value of diretorio
     *
     * @return  self
     */
    public function setDiretorio(string $diretorio)
    {
        $this->diretorio = $diretorio;

        return $this;
    }

    /**
     * Get the value of arquivo
     */
    public function getArquivo(): string
    {
        return $this->arquivo;
    }

    /**
     * Set the value of arquivo
     *
     * @return  self
     */
    public function setArquivo(string $arquivo)
    {
        $this->arquivo = $arquivo;

        return $this;
    }

    public function lerArquivo(): array
    {

        $caminho = $this->getCaminho();
        $extensao = $this->getExtension($caminho);

        $classe = '\App\extrator\\' . ucfirst($extensao);

        return call_user_func_array(
            [
                new $classe(),
                'lerArquivo'
            ],
            [
                $caminho
            ]
        );
    }

    private function getExtension(string $caminho) : string
    {
        return strtolower(pathinfo($caminho, PATHINFO_EXTENSION));
    }
    private function getCaminho(): string
    {
        return $this->getDiretorio() . "/" . $this->getArquivo();
    }
}
