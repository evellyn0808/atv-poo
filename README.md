Sistema Escolar em POO (JavaScript e PHP)


Este projeto tem como objetivo demonstrar, de forma prática, a aplicação dos principais conceitos da Programação Orientada a Objetos (POO) em um sistema simples de uma escola.

A aplicação simula diferentes tipos de pessoas dentro de uma instituição escolar, como:

Alunos
Professores
Diretores
Funcionários

Cada tipo possui comportamentos específicos, mas todos compartilham características em comum através de uma classe base.

Objetivos do Projeto
Aplicar conceitos fundamentais de POO
Demonstrar herança entre classes
Utilizar polimorfismo com métodos sobrescritos
Implementar encapsulamento para proteção de dados
Criar exemplos práticos em JavaScript e PHP
Conceitos de POO Utilizados



🔹 1. Herança

A herança permite que uma classe reutilize atributos e métodos de outra classe.

No projeto:

A classe Pessoa é a classe base
As classes Aluno, Professor, Diretor e Funcionario herdam de Pessoa

Isso evita repetição de código e melhora a organização.



🔹 2. Polimorfismo

O polimorfismo permite que métodos com o mesmo nome tenham comportamentos diferentes.

Exemplo:

falar()


Cada classe implementa esse método de forma diferente:

Aluno → fala como estudante
Professor → fala como docente
Diretor → fala como gestor
Funcionário → fala como colaborador


🔹 3. Encapsulamento


Encapsulamento protege dados sensíveis dentro da classe.

No projeto:

O atributo cpf é privado
Só pode ser acessado através do método getCpf()

Isso impede acesso direto e aumenta a segurança.
