<?
	class conection{
		var $bd;
		var $usu;
		var $psw;
		function conectar($bd,$usu,$psw){
			$link=mysql_connect("localhost",$usu,$psw);
			mysql_select_db($bd,$link) OR DIE ("Error: No es posible establecer la conexión");
		}
	}
	class producto{
		var $idprod;
		var $nom;
		var $precio;
		var $desc;
		function __construct(){
			$this->idprod="1111";
			$this->nom="1111";
			$this->precio="1111";
			$this->desc="1111";
		}
		function __construct($idprod,$nom,$precio,$desc){
			$this->idprod=$idprod;
			$this->nom=$nom;
			$this->precio=$precio;
			$this->desc=$desc;
		}
	}
	class cliente{
		var $idcliente;
		var $nom;
		var $dir;
		var $car;
		function __construct(){
			$this->idcliente="1111";
			$this->nom="1111";
			$this->dir="1111";
			$this->car="1111";
		}
		function __construct($idcliente,$nom,$dir,$car){
			$this->idcliente=$idcliente;
			$this->nom=$nom;
			$this->dir=$dir;
			$this->car=$car;
		}
	}
	
	class consulta{
		$query;
		$result;
		function cons(){
			$query = 'SELECT * FROM tienda';
			$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());echo "<table>\n";
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
				echo "\t<tr>\n";
				foreach ($line as $col_value) {
					echo "\t\t<td>$col_value</td>\n";
				}
					echo "\t</tr>\n";
				}
			echo "</table>\n";
			mysql_free_result($result);
			mysql_close($link);
		}
	}
	class supr{
		$query;
		$result;
		function supr(){
			$query = "delete from tienda";
			$result = mysql_query($query);
		}
		function suprprd($id){
			$query = "delete from productos where idprod="+id+";";
			$result = mysql_query($query);
		}
		function suprcl($id){
			$query = "delete from clientes where idcliente="+id+";";
			$result = mysql_query($query);
		}
		function suprcar($id){
			$query = "delete from carro where idcarr="+id+";";
			$result = mysql_query($query);
		}
		function suprlncar($id){
			$query = "delete from lncarr where idlncar="+id+";";
			$result = mysql_query($query);
		}
	}
	}
	class lncarr{
		var $idlncar;
		var $car;
		var $prod;
		var $cant;
		var $precio;
		var $subtotal;
		function __construct(){
			$this->idlncarr="1111";
			$this->car="1111";
			$this->prod="1111";
			$this->cant="1111";
			$this->precio="1111";
			$this->subtotal="1111";
		}
		function __construct($idlncarr,$idcar,$prod,$cant,$precio,$subtotal){
			$this->idlncarr=$idlncarr;
			$this->car=$idcar;
			$this->prod=$prod;
			$this->cant=$cant;
			$this->precio=$precio;
			$this->subtotal=$subtotal;
		}
	}
	class carr{
		var $idcarro;
		var $car;
		var $lncarr;
		var $tot;
		function __construct(){
			$this->idcarro="1111";
			$this->cliente="1111";
			$this->lncar="1111";
			$this->tot="1111";
		}
		function __construct($idcarro,$cliente,$lncar,$tot){
			$this->idcarro=$idcarror;
			$this->cliente=$cliente;
			$this->lncar=$lncar;
			$this->tot=$tot;

		}
	}
	class add{
		function addpdt($pd){
			mysqli_query($link, "INSERT INTO productos VALUES ("+pd->idprod+","+pd->nom+","+pd->precio+","+pd->desc+")");
		}
		function addclt($cl){
			mysqli_query($link, "INSERT INTO clientes VALUES ("+cl->idcliente+","+cl->nom+","+cl->dir+","+cl->car+")");
		}
		function addcarro($car){
			mysqli_query($link, "INSERT INTO carro VALUES ("+car->idcarro+","+car->cliente+","+car->lncar+","+car->tot+")");
		}
		function addlncarro($lncar){
			mysqli_query($link, "INSERT INTO lineacarr VALUES ()");
		}
	}
?>