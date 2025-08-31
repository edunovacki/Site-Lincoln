<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Permite requisições do seu domínio

// Função para classificar o IMC
function classificarIMC($imc) {
    if ($imc < 18.5) return [
        'classificacao' => 'Abaixo do peso',
        'dica' => 'Sugiro um plano de ganho de massa muscular'
    ];
    elseif ($imc < 25) return [
        'classificacao' => 'Peso normal', 
        'dica' => 'Mantenha seus hábitos saudáveis!'
    ];
    elseif ($imc < 30) return [
        'classificacao' => 'Sobrepeso',
        'dica' => 'Vamos criar um plano de exercícios personalizado'
    ];
    else return [
        'classificacao' => 'Obesidade',
        'dica' => 'Recomendo uma avaliação presencial'
    ];
}

// Recebe os dados do POST
$data = json_decode(file_get_contents('php://input'), true);

// Validação
if (!isset($data['peso']) || !isset($data['altura'])) {
    http_response_code(400);
    echo json_encode(['erro' => 'Dados incompletos']);
    exit;
}

// Cálculo
$imc = $data['peso'] / (($data['altura']/100) ** 2);
$resultado = classificarIMC($imc);

// Resposta
echo json_encode([
    'imc' => round($imc, 1),
    'classificacao' => $resultado['classificacao'],
    'dica' => $resultado['dica'],
    'contato' => 'WhatsApp: (44) 99768-6749'
]);
?>