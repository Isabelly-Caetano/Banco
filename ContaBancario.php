ContaBancario
<?php 

class ContaBancaria
{
   public $banco;
   public $nomeTitular = 'Isa';
   public $numeroAgencia = '9856';
   public $numeroConta;
   private $saldo;

  
   public function __construct($banco,$nomeTitular, $numeroAgencia, $numeroConta, $saldo)
  {
     echo $nomeTitular; 
     $this -> banco = $banco
     $this -> nomeTitular = $nomeTitular
     $this -> numeroAgencia = $numeroAgencia
     $this -> numeroConta = $numeroConta
     $this -> saldo = $saldo
  }
   
  public function obterSaldo()
   {
       return 'saldo atual é'$this -> saldo;
   
    }

    public function depositar($valor)
    {

    $this -> saldo += $valor;
    return 'deposito de' $valor 'realizado!';
    }

}


$conta = new  ContaBancaria  (
    'Banco EUW'//banco
    'Isa'// nomeTitular
    '6895'// numeroAgencia
    '98567-85'// numeroConta
    '5200.00' // saldo 


); 
{
echo $conta -> obterSaldo(); 

$conta -> depositar(100.00);

echo PHP_EOL;

echo "<br>";
echo $conta -> obterSaldo();

var_dump($conta);

    }
?>
