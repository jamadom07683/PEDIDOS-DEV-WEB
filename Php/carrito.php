<?php
	include_once("productos.php");
	$product = new Product();
	$cart = new Cart();
	if(isset($_GET['action'])){
		switch ($_GET['action']){
			case 'add':
				$cart->add_item($_GET['code'], $_GET['amount']);
			break;
			case 'remove':
				$cart->remove_item($_GET['code']);
			break;
		}
	}
?>

<?php
	class Cart extends Product{
	    public $cart = array();
	    public function __construct(){
	    	parent::__construct();
	    	if(isset($_SESSION['cart'])){
	    		$this->cart = $_SESSION['cart'];
	    	}
	    }

	    public function add_item($code, $amount){
			$search = $this->search_code($code);
			if($search > 0){
				$code = $this->code;
				$product = $this->product;
				$price = $this->price;
				$item = array(
					'code' => $code,
					'product' => $product,
					'price' => $price,
					'amount' => $amount
				);
				if(!empty($this->cart)){
					foreach ($this->cart as $key){
						if($key['code'] == $code){
							$item['amount'] = $key['amount'] + $item['amount'];
						}
					}
				}
				$item['subtotal'] = $item['price'] * $item['amount'];
				$id = md5($code);
				$_SESSION['cart'][$id] = $item;
				$this->update_cart();
			}
		}

		public function remove_item($code){
			$id = md5($code);
			unset($_SESSION['cart'][$id]);
			$this->update_cart();
			return true;
		}

	    public function get_items(){
	    	$html = '';
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
	    			$code = "'".$key['code']."'";
					$html .= '<tr>
								<td>'.$key['code'].'</td>
								<td>'.$key['product'].'</td>
								<td align="right">'.number_format($key['price'], 2).'</td>
								<td align="right">'.$key['amount'].'</td>
								<td align="right">'.number_format($key['subtotal'], 2).'</td>
								<td>
									<button onClick="deleteProduct('.$code.');">
				                    	Eliminar
				                    </button>
								</td>
							  </tr>';
				}
	    	}
	    	return $html;
	    }

	    public function get_total_items(){
	    	$total = 0;
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
					$total += $key['amount'];
				}
	    	}
	    	return $total;
	    }

	    public function get_total_payment(){
	    	$total = 0;
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
					$total += $key['subtotal'];
				}
	    	}
	    	return number_format($total, 2);
	    }

		public function update_cart(){
			self::__construct();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="../Styles/Main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../Iconos/iconos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<body background="Images/Fondo.jpg"></body>
<title>Carrito</title>

</head>

<body class="general">

    <!-- Barra de Navegación - Inicio -->

    <header class="nav_bar fixed-top">

        <div class="menu_bar">
            <p href="#" class="boton_menu"><span class="icon-menu"></span>Menu</p>
        </div>

        <nav class="barra">
            <ul class="items_list">

                <li class="items_nav"><a href="../index.php"><span class="icon-home3"></span>Inicio</a></li>
                <li class="items_nav"><a href="../index.php#AcercaDe"><span class="icon-earth"></span>Acerca De</a></li>
                <li class="items_nav"><a href="../index.php#Productos"><span class="icon-briefcase"></span>Productos</a></li>
                <li class="items_nav"><a href="../index.php#About"><span class="icon-rocket"></span>Equipo de Trabajo</a></li>
                <li class="items_nav"><a href="../index.php#Contacto"><span class="icon-mail"></span>Contactenos</a></li>
                <li class="items_nav"><a href="#"><span class="fas fa-shopping-cart"></span>Carrito <span id="items_count"></span></a></li>
                <li class="items-nav"><a href="../Php/inicioSesion.php"><i class="fas fa-sign-in-alt"></i> Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Barra de Navegación - Fin -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="Carrito" id="Carrito">
        <div class="container">
            <h1 class="text-center text-uppercase text-white mb-4">Completar compra</h1>
            <hr class="star-dark mb-5">
            <div class="row" id="row">
                <table border="1px" cellpagging="5px" width="100%">
                   <thead class="cartHeader" display="off">
                    <tr>
                        <th colspan="6">CARRO DE COMPRA</th>
                    </tr>
                    <tr>
                        <th colspan="3">Total pagar: <?=$cart->get_total_payment();?></th>
                    </tr>
                    </thead>
                    <tbody class="cartBody">
                        <tr>
                            <th>Codigo</th>
                            <th>Producto</th>
                            <th>Precio</th>
                        </tr>
                        <?=$cart-get_items();?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>


    <?php
    $productos=array();
    $precios=array();

    /**
     * [[Muestra las cookies tanto de nombre como precio del producto]]
     */
    function mostrar(){

        setcookie('producto',$_GET['producto']);
        setcookie('precio',$_GET['precio']);

        echo $_COOKIE['producto'];
        echo '<br />';
        echo $_COOKIE['precio'];

        //$pro=$_COOKIE['producto'];
        //$pre=$_COOKIE['precio'];

        //global $productos,$precios;

        //array_push($productos,$_COOKIE['producto']);
        //array_push($precios,$_COOKIE['precio']);

        unset($_COOKIE['producto']);
        unset($_COOKIE['precio']);

        //while($nom=current($productos)){
            //echo key($productos).'<br />';
            //next($productos);
        //}
    }

    ?>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>w
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="../Js/index_js.js" type="text/javascript"></script>

</body>

</html>
