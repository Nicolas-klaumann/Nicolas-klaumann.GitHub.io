<?php

// Carrega o autoloader do Composer
require_once __DIR__ . '/vendor/autoload.php';

// Cria uma nova instância do mPDF
$mpdf = new \Mpdf\Mpdf();

// Adiciona conteúdo ao PDF
$html = '
    <h1>Meu primeiro PDF com mPDF</h1>
    <p>Este é um exemplo simples de como gerar um PDF usando o mPDF.</p>
';

$mpdf->WriteHTML($html);

// Define o nome do arquivo de saída
$nome_arquivo = 'meu_pdf.pdf';

// Gera o PDF e salva em um arquivo
$mpdf->Output($nome_arquivo, 'D'); // 'D' para forçar o download do PDF

