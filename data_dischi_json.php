<?php
// Includo il file PHP contenente l'array dei dischi
include __DIR__ . './data_dischi.php';

// Per poter trasmettere i dati a JavaScript:
// 1) uso la funzione header() per specificare che i dati restituiti sono di tipo json
header('Content-Type: application/json');
// 2) uso la funzione json_encode per tradurre i dati dell'array in formato json
echo json_encode($array_dischi);
?>