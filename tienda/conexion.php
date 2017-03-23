<?
	class conection{
		var $bd;
		var $usu;
		var $psw;
		function conectar($bd,$usu,$psw){
			$link=mysqli_connect("localhost",$usu,$psw);
			mysqli_select_db($bd,$link) OR DIE ("Error: No es posible establecer la conexión");
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
		function add(){
			mysqli_query($link, "INSERT INTO productos VALUES ("+idprod+","+nom+","+precio+","+desc+")");
		}
		function supr($id){
			$query = "delete from productos where idprod="+id+";";
			$result = mysqli_query($query);
		}
		function cons(){
			$query = 'SELECT * FROM productos';
			$result = mysqli_query($query) or die('Consulta fallida: ' . mysqli_error());echo "<table>\n";
			while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				echo "\t<tr>\n";
				foreach ($line as $col_value) {
					echo "\t\t<td>$col_value</td>\n";
				}
					echo "\t</tr>\n";
				}
			echo "</table>\n";
			mysqli_free_result($result);
			mysqli_close($link);
			}
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
		function add($cl){
			mysqli_query($link, "INSERT INTO clientes VALUES ("+idcliente+","+nom+","+dir+","+ar+")");
		}
		function supr($id){
			$query = "delete from clientes where idcliente="+id+";";
			$result = mysqli_query($query);
		}
		function cons(){
			$query = 'SELECT * FROM clientes';
			$result = mysqli_query($query) or die('Consulta fallida: ' . mysqli_error());echo "<table>\n";
			while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				echo "\t<tr>\n";
				foreach ($line as $col_value) {
					echo "\t\t<td>$col_value</td>\n";
				}
					echo "\t</tr>\n";
				}
			echo "</table>\n";
			mysqli_free_result($result);
			mysqli_close($link);
		}
	}
	
	class consulta{
		$query;
		$result;
		function cons(){
			$query = 'SELECT * FROM tienda';
			$result = mysqli_query($query) or die('Consulta fallida: ' . mysql_error());echo "<table>\n";
			while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
				echo "\t<tr>\n";
				foreach ($line as $col_value) {
					echo "\t\t<td>$col_value</td>\n";
				}
					echo "\t</tr>\n";
				}
			echo "</table>\n";
			mysqli_free_result($result);
			mysqli_close($link);
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
		function add(){
			mysqli_query($link, "INSERT INTO lineacarr VALUES ("+idlncarr+","+car+","+prod+","+prec+","+cant+","+sbtotal+")");
		}
		function supr($id){
			$query = "delete from lncarr where idlncar="+id+";";
			$result = mysqli_query($query);
		}
		function cons(){
			$query = 'SELECT * FROM lineacarr';
			$result = mysqli_query($query) or die('Consulta fallida: ' . mysqli_error());echo "<table>\n";
			while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				echo "\t<tr>\n";
				foreach ($line as $col_value) {
					echo "\t\t<td>$col_value</td>\n";
				}
					echo "\t</tr>\n";
				}
			echo "</table>\n";
			mysqli_free_result($result);
			mysqli_close($link);
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
		function add(){
			mysqli_query($link, "INSERT INTO carro VALUES ("+idcarro+","+cliente+","+lncar+","+tot+")");
		}
		function supr($id){
			$query = "delete from carro where idcarr="+id+";";
			$result = mysqli_query($query);
		}
		function cons(){
			$query = 'SELECT * FROM carro';
			$result = mysqli_query($query) or die('Consulta fallida: ' . mysqli_error());echo "<table>\n";
			while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				echo "\t<tr>\n";
				foreach ($line as $col_value) {
					echo "\t\t<td>$col_value</td>\n";
				}
					echo "\t</tr>\n";
				}
			echo "</table>\n";
			mysqli_free_result($result);
			mysqli_close($link);
		}
	}
?>