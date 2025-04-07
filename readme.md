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

## 📌 Visto a necessidade abstraimos a classe `funcionário` para aplicar o contexto de cargos
Uma vez que ao realizar a contratação de um funcionário não contratamos um individuo para a vaga funcionário e sim para um cargo especifico, foi abastraida a classe funcionário e criado os cargos correspondentes.

 # 📌  Polimorfismo 
O conceito de polimorfismo, estipula que uma referência pode ter vários tipos e se comportar de formas diferentes, desde de que existindo semelhanças o suficiente de modo a atender a alguns requisitos. A palavra vem do grego e significa “muitas formas”. Em termos de código, significa que um mesmo método pode ter comportamentos diferentes dependendo do objeto que o invoca.
Este 4º princípio está diretamente ligado ao 3º (herança), pois através da herança conseguimos alcançar o polimorfismo.

# 📌  Interface no PHP
Como o PHP não permite a aplicação de herenças multiplas um dos meios de implementação para burlar essa restrição.
A interface é como um contrato onde quem assina se responsabiliza por implementar esses métodos (cumprir o contrato), todas as classes que decidirem implementar uma interface precisam implementar todos os métodos nela definidos.


# 📌  Final Class no PHP
Uma final class é uma classe que não pode ser estendida. Ou seja, nenhuma outra classe pode herdar de uma classe marcada como final.
Quando se quiser garantir que uma classe não poderá ser sobrescrita ou modificada por herança se utiliza o prefixo final. Isso é útil para manter regras de negócio, segurança ou evitar mau uso do código.

# 📌  Traits no PHP

Traits são um mecanismo de reutilização de código horizontal. Elas permitem compartilhar métodos entre várias classes sem precisar usar herança.Ideal quando várias classes diferentes precisam de um mesmo comportamento e você não quer (ou não pode) usar herança múltipla.
📌 Conclusão

Este repositório aprofunda os estudos sobre Programação Orientada a Objetos com PHP, abordando conceitos avançados como herança, polimorfismo, abstração, interfaces e boas práticas modernas como organização por responsabilidade e uso de traits.

🚀 Em constante evolução!
