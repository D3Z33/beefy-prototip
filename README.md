# Beefy - Protótipo de Site

## Descrição Geral do Protótipo
Este protótipo é uma simulação do site da **Beefy Soluções**, uma empresa focada em soluções para gestão empresarial. O site conta com uma página institucional, uma página de produtos, uma landing page para captação de leads e uma página de contato. As cores do site seguem a identidade visual da empresa (amarelo, preto e branco), garantindo uma experiência visual consistente.

---

## Tecnologias Utilizadas
- **HTML5**: Para estruturar as páginas do site.
- **CSS3 (com Bootstrap)**: Para estilizar e garantir responsividade.
- **PHP**: Para processar os dados dos formulários e capturar leads.
- **Git**: Para versionamento e controle do código.
- **XAMPP**: Servidor local utilizado para rodar o site com suporte a PHP.

---

## Como Clonar o Repositório
1. **Clonar o Repositório**:
   Para baixar o projeto na sua máquina local, abra o terminal e execute o comando:
   ```bash
   git clone https://github.com/D3233/beefy-prototip.git
   ````

## Como Instalar e Configurar o XAMPP
Para rodar o projeto localmente, você precisará configurar o XAMPP para rodar o servidor Apache com suporte a PHP.

## Passos Detalhados:
Baixar e Instalar o XAMPP:

## Acesse o site oficial do XAMPP: XAMPP Download.
 Baixe a versão correspondente ao seu sistema operacional (Windows, Mac, Linux).
 Siga as instruções de instalação, garantindo que os componentes principais como Apache e PHP estejam marcados.

## Iniciar o XAMPP:

Após a instalação, abra o painel de controle do XAMPP.
Inicie o servidor Apache clicando no botão "Start" ao lado do Apache.
Colocar o Projeto no Diretório Correto: C:\xampp\htdocs\ cole a pasta completa aqui
Copie a pasta do projeto que você clonou (beefy-prototip) para dentro da pasta htdocs.

## Acessar o Projeto no Navegador:

## Após copiar o projeto, abra o navegador e digite o seguinte URL:
http://localhost/beefy-prototip/landing_page.html

Isso carregará a página inicial da landing page do site Beefy.

## Funcionamento das Páginas

1. Página Inicial (Institucional):
Descrição: Apresenta a empresa Beefy, seus principais produtos e a navegação para outras páginas do site.
Navegação: Contém links para as páginas de produtos e contato.

2. Página de Produtos:
Descrição: Exibe os três principais produtos da Beefy: Beecont, MasterMei e Beecond.
Navegação: Cada produto tem um botão "Saiba Mais" que leva para a página específica do produto (a ser implementada).

3. Landing Page (Captura de Leads):
Descrição: Página focada na conversão de leads, onde o usuário pode preencher um formulário com seus dados para receber mais informações sobre os produtos.
Formulário: Contém campos como nome completo, e-mail, telefone e produto de interesse.
Ação ao Clicar em Enviar: Quando o usuário clica em "Enviar", os dados do formulário são processados por um arquivo PHP (process_form.php) e armazenados em um arquivo .txt (leads.txt). Uma mensagem de agradecimento é exibida na tela.

4. Página de Contato:
Descrição: Oferece um formulário para que os visitantes possam enviar mensagens diretamente para a Beefy, além de exibir informações de contato como telefone e e-mail.
Formulário: Contém campos para nome, e-mail, telefone e uma mensagem personalizada.
Ação ao Clicar em Enviar: Ao enviar o formulário, os dados são processados por um arquivo PHP (process_contact.php) e salvos em um arquivo .txt (mensagens.txt). O usuário vê uma mensagem de agradecimento.

## O que Acontece ao Clicar em Enviar?
## Na Página de Contato:
Quando o usuário preenche o formulário e clica em Enviar, os dados (nome, e-mail, telefone e mensagem) são capturados e salvos no arquivo mensagens.txt na pasta do projeto. O PHP exibe uma mensagem de sucesso e agradecimento ao usuário.

## Na Landing Page (Captura de Leads):
O usuário preenche seus dados no formulário e, ao clicar em Enviar, os dados (nome, e-mail, telefone e produto de interesse) são capturados e armazenados no arquivo leads.txt. Uma mensagem personalizada é exibida, confirmando o recebimento dos dados.
