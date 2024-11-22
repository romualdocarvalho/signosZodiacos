# Projeto de Consulta de Signo

## Descrição
Este projeto consiste em uma aplicação web que permite aos usuários descobrir seu signo zodiacal com base na data de nascimento inserida em um formulário. A aplicação utiliza PHP para manipular um arquivo XML que contém informações sobre os signos.

## Objetivos
- Criar uma página front-end com um formulário para inserção da data de nascimento.
- Desenvolver uma página para exibir o signo zodiacal do usuário.
- Implementar a lógica para consultar um arquivo XML com informações dos signos.
- Estilizar as páginas usando Bootstrap.

## Estrutura do Projeto
A estrutura do projeto é a seguinte:
```
Project/ 
│
├── assets/ 
│ ├── css/ 
│ │ └── style.css 
│ ├── imgs/ 
│ └── js/ 
├── layouts/ 
│ └── header.php 
├── index.php 
├── show_zodiac_sign.php 
└── signos.xml
```


## Requisitos
- **Software:** Visual Studio Code
- **Servidor:** XAMPP (instalado e em execução)

## Instruções de Instalação
1. Instale o [XAMPP](https://www.apachefriends.org/download.html) no seu computador.
2. Crie uma pasta chamada `Project` dentro do diretório `xampp\htdocs`.
3. Abra o Visual Studio Code e selecione a pasta `Project`.
4. Crie os arquivos e pastas conforme a estrutura do projeto mencionada acima.
5. Monte o arquivo `signos.xml` com as informações dos signos zodiacais.

## Funcionamento
1. Acesse o arquivo `index.php` pelo navegador.
2. Insira a sua data de nascimento no formulário e clique no botão para descobrir seu signo.
3. O resultado será exibido na página `show_zodiac_sign.php`.

## Testes
Verifique se a aplicação funciona corretamente testando diferentes datas de nascimento.

## Resultado
O projeto gera uma pasta com a estrutura correta, incluindo três arquivos PHP, um arquivo CSS e um arquivo XML contendo as informações dos signos.

## Contribuição
Sinta-se à vontade para contribuir com melhorias ou correções neste projeto.

