
# 📄 Atendimento ao Contribuinte 
Este desafio prático consiste na criação de um sistema de atendimento ao Contribuinte da sessão de protocolo de uma prefeitura. O sistema deve permitir que atendentes registrem protocolos com as seguintes informações: descrição, data, prazo e o contribuinte que faz referência a uma pessoa também previamente cadastra no sistema. As pessoas cadastradas possuem as seguintes informações: id, nome, data de nascimento, cpf, sexo, cidade, bairro, rua, número e complemento. 

👩‍💻 Neste exercício, decidi me aventurar por muitas coisas novas, segue as tecnologias...

## Pré-visualização:
![image](https://github.com/tainna-andryelli/atendimento-contribuinte/assets/76691875/2aa66722-b3e1-4b11-bc4a-517d77a3619b)


## 💻 Tecnologias Utilizadas:
- PHP
- Laravel
- Tailwind CSS
- HTML
- CSS
- JavaScript
- MySQL

## 🔍 Referências e Documentação: 
- [Curso MySQL do canal Curso em Vídeo](https://www.youtube.com/watch?v=Ofktsne-utM&t=9s)
- [CRUD com PHP e MySQL do Professor Eliel Cruz](https://www.youtube.com/watch?v=BSqtIw_hW8M&t=403s)
- [Crud com Laravel do Canal 'Webdesign em Foco'](https://youtube.com/playlist?list=PLbnAsJ6zlidsbjXqTWQhbnKibzl69LQar&si=fNBB9_GKrzQIkNv_)
- [Laravel Oficial](https://laravel.com/)

## 🛠 Pré-requisitos
- [PHP](https://www.php.net/) 
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) e [npm](https://www.npmjs.com/)
- [XAMPP](https://www.apachefriends.org/) (opcional, mas interessante para não precisar instalar o Apache manualmente)
- [Tailwind CSS](https://tailwindcss.com/docs/installation)

## 🎲 Configuração do Banco de Dados

- Crie um banco de dados MySQL chamado 'contribuinte'.
- Copie o arquivo **.env.example** para **.env** e configure as variáveis de ambiente relacionadas ao banco de dados:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contribuinte
DB_USERNAME=root
DB_PASSWORD=
```
- Para criar as tabelas do banco, execute no cmd:
```
php artisan migrate
```

- Para Node.js NPM e estilos Tailwind no cmd:
```
npm install

npm run dev
```
## 🖱️  Executando o Projeto:
```
php artisan serve
```
Acesse o projeto em http://localhost:8000.
