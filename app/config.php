<?php

    /*
    * Arquivo de Configuração de Banco de Dados e do projeto
    * Files of config Project and Data Base
    */

    const DB = [
        'HOST'        => '',
        'DB_USER'     => '',
        'DB_PASSWORD' => '',
        'DATABASE'    => '',
        'DOOR'        => ''
    ];

    // __FILE__ - Constante Mágica. Retorna o caminho completo e o nome do arquivo
    // dirname - Retorna o caminho/path do diretório pai

    //define e const - Define uma constante. As constantes não podem ser alteradas depois de declaradas.
    define ('APP', dirname(__FILE__));

    define ('URL', 'https://nft-sousa.sousainf.net.br/');

    define ('APP_NAME', 'Sousainf NFT');

    define ('APP_DESC', 'Controle de NFTs que participo');

    const APP_VERSION = '1.0';