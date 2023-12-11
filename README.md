**Projeto Fullstack - Casa de Rações Importadas**

# Introdução

Este projeto fullstack foi desenvolvido como objeto de estudo da Faculdade na disciplina de Programação para Web. Utilizou-se PHP e Bootstrap como principais tecnologias de estudo. Uma das características-chave deste projeto é a aplicação do PHP Data Objects (PDO) no backend para interação segura e eficiente com o banco de dados.

# PDO (PHP Data Objects)

O PDO é uma extensão do PHP que fornece uma interface uniforme para acessar diversos bancos de dados, garantindo um código mais seguro e mais fácil de manter. Ele oferece uma camada de abstração para interagir com o banco de dados, permitindo que você altere o sistema de gerenciamento de banco de dados (SGBD) sem alterar drasticamente o código fonte.

No contexto deste projeto, o PDO foi utilizado para realizar operações no banco de dados relacionadas aos produtos disponíveis, informações de login e outros aspectos fundamentais para a funcionalidade do site.

# Arquitetura do Projeto

O projeto adota uma arquitetura modularizada, com diferentes arquivos para o cabeçalho, rodapé, páginas específicas e scripts PHP. O Bootstrap foi empregado para facilitar o design responsivo e a aparência visual do site, garantindo uma experiência de usuário agradável em diferentes dispositivos.

# Funcionalidades Principais

## 1. Página Inicial

A página inicial apresenta um carrossel de produtos destacados e cards informativos sobre rações de marcas específicas. Utiliza-se o Bootstrap Carousel para criar uma experiência visual envolvente.

## 2. Produtos Disponíveis

A página de produtos disponíveis permite que os usuários visualizem e comprem rações importadas. Cada produto é apresentado em um card com imagem, nome, descrição, preço por unidade e opção de adicionar ao carrinho. O número máximo de 4 cards por fileira foi implementado para facilitar a navegação.

## 3. Autenticação e Login

A página de login oferece um formulário estilizado usando Bootstrap para autenticação de usuários. O PDO é empregado para interagir com o banco de dados de forma segura e protegida contra ataques de injeção de SQL.

## 4. Carrinho de Compras

Os usuários podem adicionar produtos ao carrinho de compras, que é indicado no canto superior da tela. Ao clicar no carrinho, uma janela lateral exibe os produtos adicionados e o valor total do carrinho.

# Conclusão

Este projeto proporcionou uma experiência prática valiosa no desenvolvimento fullstack, combinando tecnologias essenciais como PHP e Bootstrap. A aplicação do PDO no backend demonstra o compromisso com boas práticas de segurança e eficiência na interação com o banco de dados. Este projeto foi desenvolvido como parte integrante do aprendizado na disciplina de Programação para Web, contribuindo para o desenvolvimento de habilidades essenciais no campo do desenvolvimento web.
