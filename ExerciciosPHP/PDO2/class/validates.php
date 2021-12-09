<?php
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
//http://www.devwilliam.com.br/category/php
//http://www.devwilliam.com.br/php/curso-php-com-pdo-videos
//http://www.devwilliam.com.br/php/aprenda-como-validar-dados-com-php
//https://www.youtube.com/watch?v=rg-f9eelFsY


/*Gerando uma senha segura para salvar no banco de dados "sem riscos"

para isso utilizamos a função própria do PHP->password_hash

Ele irá criptografar os dados salvos na variável. a função mais segura é o PASSWORD_DEFAULT

por exemplo:

$senha = 123456;

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, ['cost'=>12]);

Descobrir se a senha é correta -> $senhaCorreta = password_verify('senha', $senha)
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
*/



/*
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
is_array() -> para validar se é um array.

is_string() -> para validar se é uma string.

is_integer() -> para validar se é um integer

FILTER_VALIDATE_EMAIL() -> para validar se é uma email válido ou não.
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
Usando REGEX para validar o email -> 
function isEmailValido($email){
    $conta = "/[a-zA-Z0-9\._-]+@";
    $domino = "[a-zA-Z0-9\._-]+.";
    $extensao = "([a-zA-Z]{2,4})$/";
    $pattern = $conta.$domino.$extensao;

    if (preg_match($pattern, $email))
        return true;
    else
        return false;
}

$valor = 'wllfl@ig.com.br';

if(isEmailValido($valor)):
    echo 'E-mail válido.';
else:
    echo 'E-mail inválido.';
endif; 

// Saída E-mail válido 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
Validar CPF ->
function isCPFValido($valor){

    $valor = str_replace(array('.','-','/'), "", $valor);
    $cpf = str_pad(preg_replace('[^0-9]', '', $valor), 11, '0', STR_PAD_LEFT);
    
    if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999'):
        return false;
    else: 
        for ($t = 9; $t < 11; $t++):
            for ($d = 0, $c = 0; $c < $t; $c++) :
                $d += $cpf{$c} * (($t + 1) - $c);
            endfor;
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d):
                return false;
            endif;
        endfor;
        return true;
    endif;
}

$valor = '34291199287';

if(isCPFValido($valor)):
    echo 'CPF válido.';
else:
    echo 'CPF inválido.';
endif; 

// Saída CPF válido   
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
Validar CNPJ ->
function isCNPJValido($valor){

    $cnpj = str_pad(str_replace(array('.','-','/'),'',$valor),14,'0',STR_PAD_LEFT);
    
    if (strlen($cnpj) != 14):
        return false;
    else:
        for($t = 12; $t < 14; $t++):
            for($d = 0, $p = $t - 7, $c = 0; $c < $t; $c++):
                $d += $cnpj{$c} * $p;
                $p  = ($p < 3) ? 9 : --$p;
            endfor;
            $d = ((10 * $d) % 11) % 10;
            if($cnpj{$c} != $d):
                return false;
            endif;
        endfor;
        return true;
    endif;
}

$valor = '36172186000103';

if(isCNPJValido($valor)):
    echo 'CNPJ válido.';
else:
    echo 'CNPJ inválido.';
endif; 

// Saída CNPJ válido 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
Validar Data -> 
$valor = '25/12/2016';
$arraData = explode('/', $valor);

if(checkdate($arraData[1], $arraData[0], $arraData[2])):
    echo 'Data válida.';
else:
    echo 'Data inválida.';
endif; 

// Saída Data válida  

Validar extensão de arquivo ->
$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
$array_extensoes   = explode('.', $_FILES['foto']['name']);
$extensao = strtolower(end($array_extensoes));

if (array_search($extensao, $extensoes_aceitas) === false):
    echo 'Extensão válida';
else:
    echo 'Extensão inválida';
endif;
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
Validar CEP ->
$valor = '18135-690';

if (preg_match('/[0-9]{5,5}([-]?[0-9]{3})?$/', $valor)):
    echo 'CEP válido';
else:
    echo 'CEP inválido';
endif;

// Saída CEP válido 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
Validar número de telefone ->
$valor = '(99) 99999-9999';

if (preg_match('/^\([0-9]{2}\)?\s?[0-9]{4,5}-[0-9]{4}$/', $valor)):
    echo 'Fone válido';
else:
    echo 'Fone inválido';
endif;

// Saída Fone válido   
///////////////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////////////
switch para verificar em qual banco estamos tentando acessar ->
public static function getInstance() {
    
    if (!isset(self::$pdo)) {
        try {

            $opcoes = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
            switch (SGBD) :
                case 'mysql':
                    self::$pdo = new \PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . ";", USER, PASSWORD, $opcoes);
                    break;
                case 'mssql':{
                    if(SERVER == 'linux'):
                        self::$pdo = new \PDO("dblib:host=" . HOST . "; database=" . DBNAME . ";", USER, PASSWORD, $opcoes);
                    else:
                        self::$pdo = new \PDO("sqlsrv:server=" . HOST . "; database=" . DBNAME . ";", USER, PASSWORD, $opcoes);
                    endif;
                    break;
                }
                case 'postgre':
                    self::$pdo = new \PDO("pgsql:host=" . HOST . "; dbname=" . DBNAME . ";", USER, PASSWORD, $opcoes);
                    break;
            endswitch;
            self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            print "Houve um erro ao tentar conexão com o Banco de Dados!";
        }
    }
    return self::$pdo;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
*/