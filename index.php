<?php

$pg = isset($_GET['pg']);

if ($pg) {

    //PAGINA INDEX DO SITE PRINCIPAL

    switch ($_GET['pg']) {

        case 'landingPageMayra':
            include_once 'paginas/include/header.php';
            include_once 'paginas/inicial.php';
            include_once 'paginas/topicos/nosEscolher.php';
            include_once 'paginas/topicos/respostasFacil.php';
            include_once 'paginas/topicos/servicos.php';
            include_once 'paginas/topicos/contato.php';
            include_once 'paginas/include/footer.php';
            break;

    
        
            // FIM PAGINA INDEX DO SITE PRINCIPAL

        default:
            include_once 'paginas/include/header.php';
            include_once 'paginas/inicial.php';
            include_once 'paginas/topicos/nosEscolher.php';
            include_once 'paginas/topicos/respostasFacil.php';
            include_once 'paginas/topicos/servicos.php';
            include_once 'paginas/topicos/contato.php';
            include_once 'paginas/include/footer.php';
            break;
    }
} else {
    //não existe   
    include_once 'paginas/include/header.php';
    include_once 'paginas/topicos/inicial.php';
    include_once 'paginas/topicos/nosEscolher.php';
    include_once 'paginas/topicos/respostasFacil.php';
    include_once 'paginas/topicos/servicos.php';
    include_once 'paginas/topicos/contato.php';
    include_once 'paginas/include/footer.php';
}
