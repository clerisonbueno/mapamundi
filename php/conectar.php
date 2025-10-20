<?php
$pais = $_POST[""];



header('Content-Type: application/json');
 
// Garante que a requisição é um POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método não permitido.']);
    exit;
}
 
// Obtém o corpo da requisição JSON (o nome do país)
$json_data = file_get_contents('php://input');
$data = json_decode($json_data, true);
 
// Verifica se o nome do país foi enviado
if (!isset($data['country'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Nome do país não fornecido.']);
    exit;
}
 
$country_name = $data['country'];
 


function conectar($nome){
    $pdo = new PDO('mysql:host=localhost;dbname=mapamundi','root','');

    $sql = $pdo -> prepare("SELECT * FROM `cadpais` WHERE pais=? ");

    $sql->execute(array($nome));

    $dados = $sql ->fetchALL(PDO::FETCH_ASSOC);
    
    if (isset($country_data[$nome])) {
    // Retorna os dados do país em formato JSON
    if ($nome and $dados){
    echo json_encode([
        'pais' => $nome,
        'Continente' => $dados['continente'],
        'Região' => $dados['regiao_continente'],
        'evento' => $dados['evento'],
    ]);
    } else {
    // País não encontrado
    http_response_code(404);
    echo json_encode([
        'countryName' => $nome,
        'capital' => 'N/A',
        'population' => 'N/A',
        'description' => 'Dados do país não encontrados no servidor.'
    ]);
    }
}
}
conectar($country_name);

?>