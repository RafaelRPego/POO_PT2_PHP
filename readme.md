# 📌 Estudos de Programação Orientada a Objetos (POO) em PHP

Este repositório contém estudos e testes relacionados à **Programação Orientada a Objetos (POO)** em PHP. Sendo uma sequência direta do repositório anterior de estudos.O objetivo é entender conceitos como Herança, Polimorfismo e Interfaces.

**https://github.com/RafaelRPego/POO_PHP#**

---

## 📌 Requisitos

Para rodar os exemplos deste repositório, você precisa:

- Ter o **PHP** instalado (`>= 7.4` recomendado);
- Um ambiente de desenvolvimento como **XAMPP**, **Laravel Sail**, **Docker** ou **PHP CLI**;
- Um editor de código, como **VS Code** ou **PHPStorm**.


## 📌 Criando a classe `Endereco`

Dando continuidade aos estudos anteriores viu-se a necesidade de criação de uma classe endereço para criar uma robustez maior ao Titular.

# 📌 Aplicando Hereditariedade para as classes

## 📌 Criando a classe pai `Pessoa`
Visto a necessidade foi criada a classe pai pesso a qual foi extendida pelas classes filhas utilizando o conceito de herença para otimizar o processo, evitando a duplicação necessária e adicionando mais camadas de proteção com modificador de acesso protected e a utilizando do parent no construtor para pegar as propriedades da classe pai. aplicada nas classes `Titular` e `Funcionário`.

## 📌 Aplicando a estrutura de pasta para pasta para melhor organização 


## 📌 Aplicano o conceito de abstração para a classe `Conta` na qual é extendida pelas classes filhas `ContaCorrente` e `ContaPoupanca`
Nesse cenário aplicamos também o conceito de metódos abstratos que devem ser aplicados em todas as classes filhas, como o percentual de taxa de saque.

