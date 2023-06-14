<?php
$nomeArquivo = "contador.txt";
# Se não existir, criamo-lo
if (!file_exists($nomeArquivo)) {
    touch($nomeArquivo);
}
# Obtemos o seu conteúdo
$conteudo = trim(file_get_contents($nomeArquivo));
# Se estiver vazia, definimo-la como zero
if ($conteudo === "") {
    $visitas = 0;
} else {
    # Caso contrário, as visitas são as que o ficheiro tiver
    $visitas = (int)$conteudo;
}
# Quer as visitas sejam 0 ou as que já lemos, aumentamo-las.
$visitas++;
# E escrevemos o valor de volta no ficheiro
file_put_contents($nomeArquivo, $visitas);