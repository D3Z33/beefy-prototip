<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $produto = $_POST['produto'];

    // Valida os dados
    if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($produto)) {
        // Formata os dados para serem salvos no arquivo
        $dados = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nProduto: $produto\n\n";

        // Define o caminho do arquivo onde os dados serão salvos
        $arquivo = 'leads.txt';

        // Abre o arquivo para escrita. O modo 'a' adiciona ao final do arquivo
        $arquivo_aberto = fopen($arquivo, 'a');

        // Escreve os dados no arquivo
        fwrite($arquivo_aberto, $dados);

        // Fecha o arquivo
        fclose($arquivo_aberto);

        // Exibe uma mensagem de agradecimento
        echo "<h1>Obrigado pelo seu interesse, $nome!</h1>";
        echo "<p>Seus dados foram armazenados com sucesso. Entraremos em contato em breve!</p>";
    } else {
        echo "<p>Por favor, preencha todos os campos corretamente.</p>";
    }
}
?>