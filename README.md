# 📚 Biblioteca Virtual

Este é um projeto desenvolvido para a disciplina **Web 2** com o objetivo de criar uma biblioteca virtual usando **Laravel**, **MySQL** e **Blade**. O sistema permite a gestão de livros, autores e editoras, além de controlar o acesso de usuários com diferentes perfis (roles).

## 🚀 Funcionalidades

- **Gestão de Livros**: Adicionar, editar, excluir e visualizar livros.
- **Gestão de Autores e Editoras**: Adicionar, editar e excluir autores e editoras.
- **Upload de Imagens**: Adicionar imagens de capa dos livros.
- **Controle de Acesso**: Três tipos de usuários com diferentes permissões:
  - **Admin**: Acesso total ao sistema, incluindo a gestão de usuários e promoção de outros a administradores.
  - **Bibliotecário**: Gerencia apenas livros, autores e editoras.
  - **Usuário Normal**: Apenas visualiza livros, autores e editoras.

---

## 🛠️ Tecnologias Utilizadas

- **Laravel** 10.x
- **MySQL** 
- **Blade** (Motor de templates do Laravel)

---

## 📂 Estrutura do Projeto

```plaintext
.
├── app
├── config
├── database
│   ├── migrations
│   ├── seeders
├── public
│   └── images
├── resources
│   └── views
├── routes
│   └── web.php
└── .env
```

---

## ⚙️ Pré-requisitos

- **PHP** >= 8.1
- **Composer**
- **MySQL**
- **Laravel** (instalado via Composer)

---

## 📥 Instalação e Configuração

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/seu_usuario/seu_projeto.git
   cd seu_projeto
   ```

2. **Instale as dependências:**

   ```bash
   composer install
   ```

3. **Configure o arquivo `.env`:**  
   Duplique o arquivo `.env.example` e renomeie para `.env`. Em seguida, edite as seguintes variáveis de acordo com o seu ambiente:

   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sua_base_de_dados
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha
   ```

4. **Gere a chave da aplicação:**

   ```bash
   php artisan key:generate
   ```

---

## 📊 Banco de Dados

1. **Execute as migrations e seeders:**

   ```bash
   php artisan migrate --seed
   ```

   - As migrations criam as tabelas necessárias no banco de dados.
   - Os seeders inserem dados iniciais, incluindo usuários e perfis (roles).

---

## ▶️ Como Executar

1. **Inicie o servidor local do Laravel:**

   ```bash
   php artisan serve
   ```

2. **Acesse a aplicação:**  
   Abra o navegador e vá para `http://localhost:8000`.

---

## 🔑 Credenciais de Acesso

- **Admin:**  
  - **E-mail:** admin@example.com  
  - **Senha:** admin123

- **Bibliotecário:**  
  - **E-mail:** bibliotecario@example.com  
  - **Senha:** bibliotecario123

- **Usuário Normal:**  
  - **E-mail:** usuario@example.com  
  - **Senha:** usuario123

> **Nota:** As credenciais podem ser alteradas nos seeders ou diretamente no banco de dados após a execução.

---

## 📝 Licença

Este projeto foi desenvolvido para fins acadêmicos e não possui licença específica.

---
