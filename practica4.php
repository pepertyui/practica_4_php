<!DOCTYPE html>
<html>
  <head>
     <title>Tienda</title>
  </head>   
  <body>
       <h1>productos</h1>
      <div>
         <form action="calcular.php"method="post">
          <table border="1" style="width:100%">
           <tr>
              
              <td><label for="cantidad"> Cantidad</label></td>     
              <td><label for="producto"> Producto</label></td>
              <td><label for="precio"> precio</label></td>
           </tr>
           <tr>
              <td><input type="text" maxlength="10" name="cantidad1" id="cantidad1"></td>
              <td><input type="text" maxlength="10" name="producto1" id="producto1"></td>
              <td><input type="text" maxlength="10" name="precio1" id="precio1"></td>
           </tr>  
           <tr>
              <td><input type="text" maxlength="10" name="cantidad2" id="cantidad2"></td>
              <td><input type="text" maxlength="10" name="producto2" id="producto2"></td>
              <td><input type="text" maxlength="10" name="precio2" id="precio2"></td>
           </tr> 
           <tr>
              <td><input type="text" maxlength="10" name="cantidad3" id="cantidad3"></td>
              <td><input type="text" maxlength="10" name="producto3" id="producto3"></td>
              <td><input type="text" maxlength="10" name="precio3" id="precio3"></td>
           </tr> 
           </table>
           </br>
           </br>
            
           <input type="submit" name="enviar" Value="enviarlos"> 
         </form>
      </div>
  </body>  

</html>