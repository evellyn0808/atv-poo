<?php

// Classe base
class Pessoa {
    public $nome;
    public $idade;

    private $cpf; // atributo privado

    public function __construct($nome, $idade, $cpf) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    public function mostrarCpf() {
        return $this->cpf;
    }

    public function falar() {
        echo $this->nome . " está falando.<br>";
    }
}

// Aluno
class Aluno extends Pessoa {
    public $curso;

    public function __construct($nome, $idade, $cpf, $curso) {
        parent::__construct($nome, $idade, $cpf);
        $this->curso = $curso;
    }

    public function falar() {
        echo "Aluno {$this->nome}: Estou estudando {$this->curso}.<br>";
    }
}

// Professor
class Professor extends Pessoa {
    public $materia;

    public function __construct($nome, $idade, $cpf, $materia) {
        parent::__construct($nome, $idade, $cpf);
        $this->materia = $materia;
    }

    public function falar() {
        echo "Professor {$this->nome}: Hoje teremos aula de {$this->materia}.<br>";
    }
}

// Diretor
class Diretor extends Pessoa {
    public $escola;

    public function __construct($nome, $idade, $cpf, $escola) {
        parent::__construct($nome, $idade, $cpf);
        $this->escola = $escola;
    }

    public function falar() {
        echo "Diretor {$this->nome}: Bem-vindos à {$this->escola}.<br>";
    }
}

// Funcionário
class Funcionario extends Pessoa {
    public $funcao;

    public function __construct($nome, $idade, $cpf, $funcao) {
        parent::__construct($nome, $idade, $cpf);
        $this->funcao = $funcao;
    }

    public function falar() {
        echo "Funcionário {$this->nome}: Minha função é {$this->funcao}.<br>";
    }
}

// TESTES

$aluno1 = new Aluno("Lucas", 17, "111.111.111-11", "Informática");
$aluno2 = new Aluno("Maria", 18, "222.222.222-22", "Administração");

$professor1 = new Professor("Carlos", 40, "333.333.333-33", "Matemática");

$diretor1 = new Diretor("Roberto", 50, "444.444.444-44", "Escola Técnica");

$funcionario1 = new Funcionario("João", 30, "555.555.555-55", "Secretário");

// Métodos falar()
$aluno1->falar();
$aluno2->falar();
$professor1->falar();
$diretor1->falar();
$funcionario1->falar();

// Encapsulamento
echo "<br>CPF protegido: ";
echo $aluno1->mostrarCpf();

// Não funciona:
// echo $aluno1->cpf;

?>