<!DOCTYPE html>
<html>
<?php
     
    $cantidad = $_POST['cantidad1'];
     if(true){
      echo $cantidad;
}

$productos = array(
     array(
      'cantidad' => $_POST['cantidad1'],
      'producto' =>$_POST['producto1'],
      'precio' => $_POST['precio1']
      
    ),
     array(
      'cantidad' =>$_POST['cantidad2'],
      'producto' =>$_POST['producto2'],
      'precio' => $_POST['precio2'],
    ),
     array(
      'cantidad' => $_POST['cantidad3'],
      'producto' => $_POST['producto3'],
      'precio' => $_POST['precio3']
    )
);
 echo '<label>'.$productos[2]['cantidad1'].'</label>';
 echo '<label>'.$productos[0]['cantidad']*$productos[0]['precio'].'</label>';
   $total = ($productos[o]['cantidad']*$productos[0]['precio']);
  echo '<label>'.$total.'</label>';

?>
  <body>
    <table border="1" style="width:100%">
        <tr>
           <td>cantidad</td>
           <td>total</td>
           
        </tr>
        <tr>
           <td><?php echo $productos[0]['producto']; ?></td>
           <td><?php echo $productos [0]['precio']*$productos[0]['cantidad']?></td>
        </tr>
        <tr>
           <td><?php echo $productos[1]['producto']; ?></td>
           <td><?php echo$productos[1]['precio']*$productos[1]['cantidad']?></td>
           
        </tr>
        <tr>
            <td><?php echo $productos[2]['producto']; ?></td>
            <td><?php echo $productos[2]['cantidad']*$productos[2]['precio']?></td>
        </tr>
    </table> 
   
  </body>
</html>