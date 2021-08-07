<?php
require_once 'helpers/util.php';
require_once 'models/Pedido.php';

class PedidoController {

    public function payment() {

        if (isset($_SESSION['identificar']) && $_SESSION['carrito'] != []) {
            require_once "views/payment.php";
        } else {
            $_SESSION['error'] = "No estas auntenticado o el carrito esta vacio";
            header("location:".base_url."Carrito/index");
        }
    }


    // detail payment 
    public function detailOrder() {
        $id = $_GET['id'];
        $detalle = new Pedido();
        $detalle -> setPedidoId($id);
        $detalles = $detalle -> getDetalle();
        require_once "views/detail_pedido.php";
    }

    // guardar pedido
    public function savePayment() {
        Utils:: usuario();
        $carrito = Utils:: statuscarrito();
        $usuario = $_SESSION['identificar'] -> id;
        $pedido = new Pedido();

        $pedido -> setUsuarioid($usuario);
        $pedido -> setPais($_POST['pais']);
        $pedido -> setProvincia($_POST['provincia']);
        $pedido -> setDireccion($_POST['direccion']);
        $pedido -> setCuenta($_POST['cuenta']);
        $pedido -> setCvc($_POST['cvc']);
        $pedido -> setFechatarjeta($_POST['fecha_tarjeta']);
        $pedido -> setTotalcompra($carrito['total']);
        //guardar el pedido
        $save = $pedido -> save();
        $save_linea = $pedido -> save_linea();


        if ($save && $save_linea) {
            $_SESSION['correcto'] = "El pedido se ha realizado correctamente";
            header("location:".base_url."User/index");

            // enviar correo
            $pedido = new Pedido();
            $pedidos = $pedido -> ultPedido();

            $para = 'joeltoribiopolanco@gmail.com';
            $titulo = 'Notificacion de nuevo pedido';

            $mensaje = `
            <html>
         <head>
            <title>Notificacion de nuevo pedido</title>
        </head>
        <body>
        <p>¡ $pedido->nombre correo: $pedido->email solicito un pedido!</p>
        <table>
         <tr>
            <th>Pais</th>
            <th>Provincia</th>
            <th>Direccion</th>
            <th>total_compra</th>
            <th>fecha_pedido</th>
        </tr>
    <tr>
      <td>$pedido->pais</td>
      <td>$pedido->provincia</td>
      <td>$pedido->direccion</td>
      <td>$pedido->total_compra</td>
      <td>$pedido->fecha_pedido</td>
    </tr>
  </table>
</body>
</html>
`;
mail($para, $título, $mensaje);
}
    else {
            $_SESSION['error'] = "Error al solicitar el pedido";
            header("location:".base_url."Pedido/payment");
        }

    }

}

?>