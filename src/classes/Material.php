<?php
class Material {
    private $id;
    private $nome;
    private $descricao;
    private $quantidadeEmEstoque;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getQuantidadeEmEstoque() {
        return $this->quantidadeEmEstoque;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setQuantidadeEmEstoque($quantidade) {
        $this->quantidadeEmEstoque = $quantidade;
    }
}
?>
