<?php
error_reporting(E_ALL & ~E_WARNING);
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
 
conectar($country_name);

function conectar($nome){
    $pdo = new PDO('mysql:host=localhost;dbname=mapamundi','root','');

    $sql = $pdo -> prepare("SELECT * FROM `cadpais` WHERE pais=? ");
    $sql->execute(array($nome));
    
    //$sql = $pdo -> prepare("SELECT * FROM `cadpais`");
    //$sql->execute(array());

    $dados = $sql ->fetchALL(PDO::FETCH_ASSOC);
    //print_r($dados);   
 
    // Retorna os dados do país em formato JSON
        if ($nome and $dados){
        echo json_encode([
            'pais' => $nome,
            'Continente' => $dados[0]['continente'],
            'Regiao' => $dados[0]['regiao_continente'],
            'evento' => $dados[0]['evento'],
        ]);
        exit;
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


?>