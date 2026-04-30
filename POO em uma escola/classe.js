// Classe base
class Pessoa {
  #cpf; // atributo privado

  constructor(nome, idade, cpf) {
    this.nome = nome;
    this.idade = idade;
    this.#cpf = cpf;
  }

  mostrarCpf() {
    return this.#cpf;
  }

  falar() {
    console.log(`${this.nome} está falando.`);
  }
}

// Aluno
class Aluno extends Pessoa {
  constructor(nome, idade, cpf, curso) {
    super(nome, idade, cpf);
    this.curso = curso;
  }

  falar() {
    console.log(`Aluno ${this.nome}: Estou estudando ${this.curso}.`);
  }
}

// Professor
class Professor extends Pessoa {
  constructor(nome, idade, cpf, materia) {
    super(nome, idade, cpf);
    this.materia = materia;
  }

  falar() {
    console.log(`Professor ${this.nome}: Hoje teremos aula de ${this.materia}.`);
  }
}

// Diretor
class Diretor extends Pessoa {
  constructor(nome, idade, cpf, escola) {
    super(nome, idade, cpf);
    this.escola = escola;
  }

  falar() {
    console.log(`Diretor ${this.nome}: Bem-vindos à ${this.escola}.`);
  }
}

// Funcionário
class Funcionario extends Pessoa {
  constructor(nome, idade, cpf, funcao) {
    super(nome, idade, cpf);
    this.funcao = funcao;
  }

  falar() {
    console.log(`Funcionário ${this.nome}: Minha função é ${this.funcao}.`);
  }
}

// TESTES
const aluno1 = new Aluno("Lucas", 17, "111.111.111-11", "Informática");
const aluno2 = new Aluno("Maria", 18, "222.222.222-22", "Administração");

const professor1 = new Professor("Carlos", 40, "333.333.333-33", "Matemática");

const diretor1 = new Diretor("Roberto", 50, "444.444.444-44", "Escola Técnica");

const funcionario1 = new Funcionario("João", 30, "555.555.555-55", "Secretário");

// Chamando métodos falar()
aluno1.falar();
aluno2.falar();
professor1.falar();
diretor1.falar();
funcionario1.falar();

// Encapsulamento
console.log(aluno1.mostrarCpf());

// Não funciona:
console.log(aluno1.cpf);