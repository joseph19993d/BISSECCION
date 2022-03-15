<!DOCTYPE html  >
<!-- INICIO de metodo de BISECCION -->

<head>
    <title>BISECCION</title>
    <link  rel="stylesheet" type="text/css" href="ESTILOS.css">
</head>
<body>
    
<?php
$repetir= true;
while ($repetir){

    $ed= exp(0)*1;
    
?>
<div id=formulario>
<center  >

<form action="BISECCION.php" method="post" >
<label id=titulo> BISECCION</label>
<label for="">  <h2 style="color: white;"> Ingrese su function: </h1> </label>
<input type="text" id= funcion name="funcion" style="color: black;" placeholder="a^2+-7" required/>

<label for="">  <h1 style="color: white;"> Digite lim-inf : </h1> </label>
<input type="text" id= lim_inf name="lim_inf" style="color: black;" placeholder="0" required/>

<label for="">  <h1 style="color: white;"> Digite lim-sup : </h1> </label>
<input type="text" id= lim_sup name="lim_sup" style="color: black;" placeholder="1" required/>

<label for="">  <h1 style="color: white;"> tolerancia : </h1> </label>
<input type="text" id= tolerancia name="tolerancia" style="color: black;" placeholder="0.01" required/>

<p>
 
<input type="submit" name="datos" value="Calcular">
</form>
<center>

<div id=formulario>
    <label> <h1>Salida: </h1></label>
    <div id="salida">
   
    <?php
if( isset($_POST["datos"])){
    $longitud= strlen($_POST["funcion"]);
    $funcion= $_POST["funcion"];
    $a=$_POST["lim_inf"];
    $b=$_POST["lim_sup"];
    $tolerancia= $_POST["tolerancia"];
    $n=1;
    $Iteracion=true;
    if($a<$b){
    echo "PASO 1: APLICAR FORMULA: m:(a+b)/2 <P>" ;
    echo "PASO 2: EVALUAR F(a), F(b), F(m) <P>" ;
    echo "PASO 3: DETERMINAMIENTO  NUEVA ITERACIO: NUEVO INTERVALO <P>" ;
    echo "PASO 4: APLICAR FORMULA: e:(b-a)/2 PARA HAYAR EL ERROR" ;
do{
    ?> <table border="2">
        <thead>
            <td> Iteracion:</td>

            <td> /Limite inferior:</td>
            <td> Remplazo en la funcion x=a:</td>
            <td> Resultado:</td>

            <td> /Limite superior:</td>
            <td> Remplazo en la funcion x=b:</td>
            <td> Resultado:</td>

            <td> /Limite medio:</td>
            <td> Remplazo en la funcion x=m:</td>
            <td> Resultado:</td>

           
            <td> Extremo tomado: </td>
            <td> Nuevo intervalo: </td>

            <td> Error:</td>




        </thead>
        <tbody>
        

    <?php

    echo "<p>ITERACIÓN ".$n; 
    
    $Dato1= $n;
    $n++;
    $m= ($a+$b)/2;
    $Va=0; $Vb=0; $Vm=0;
    
  
   //INICIO DE REMPLAZAR X EN FUNCION PRINCIPAL
    for($i=0;$i<= $longitud; $i++){
    $funcion= str_replace("exp","010",$funcion);
    $funcion2= str_replace("x",$a, $funcion);
    }
    for($i=0;$i<= $longitud; $i++){
        $funcion2= str_replace("010","exp",$funcion2);
    } 
    eval("\$foo = $funcion2;");
    echo "<p>para a=".$a." remplazamos =>";
    $Dato2= $a;

    echo $funcion2;
    $Dato3= $funcion2;

    echo( " = ". $foo);
    $Dato4= $foo;

    $Va=$foo;



    for($i=0;$i<= $longitud; $i++){
    $funcion2= str_replace("x",$b, $funcion);
    }
    for($i=0;$i<= $longitud; $i++){
        $funcion2= str_replace("010","exp",$funcion2);
    } 


    eval("\$foo = $funcion2;");

    echo "<p>para b=".$b." remplazamos =>";

    $Dato5= $b;

    echo $funcion2;
    $Dato6= $funcion2;


    echo( " = ". $foo);
    $Dato7= $foo;


    $Vb=$foo;



    for($i=0;$i<= $longitud; $i++){
    $funcion2= str_replace("x",$m, $funcion);
    }
    for($i=0;$i<= $longitud; $i++){
        $funcion2= str_replace("010","exp",$funcion2);
    } 


    eval("\$foo = $funcion2;");
    echo "<p>para m=".$m." remplazamos =>";

    $Dato8= $m;

    echo $funcion2;
    $Dato9= $funcion2;

    echo( " = ". $foo);
    $Dato10= $foo;

    $Vm=$foo;
    //FIN DE REMPLAZAR X EN FUNCION PRINCIPAL

   //BUSCAMOS EL INTERVALO 
   
    echo "<p> Graficamos a,m,b: <p>";
    if($Va<0){ echo"Izquierda <__-"; $Va=0; }else{ echo"Izquierda <___+"; $Va=1; }
    if($Vm<0){ echo"__-__"; $Vm=0; }else{ echo"__+__"; $Vm=2; }
    if($Vb<0){ echo"-__> Derecha"; $Vb=0; }else{ echo"+__> Derecha"; $Vb=4; }
  echo "<p>";
    $Intervalo= $Va+$Vm+$Vb;
    if($Intervalo==3 || $Intervalo==4 ){ $Intervalo="derecho"; }
    elseif($Intervalo==6 || $Intervalo==1 ){ $Intervalo="izquierdo";}
    elseif($Intervalo==5 || $Intervalo==2 ){ echo  $Dato12= $Intervalo="Doble";$Iteracion=false; }
    elseif($Intervalo==0 ){echo  $Dato12= $Intervalo="Bajo";$Iteracion=false; }
    elseif($Intervalo==7 ){ echo  $Dato12= $Intervalo="Alto";$Iteracion=false; }
    else{ echo "fin"; $Iteracion=false; }

    echo  "<p> <-/".$Intervalo."/->";
    $Dato11= $Intervalo;


    if($Intervalo== "derecho" )
    {
    echo "<p>Nuevo intervalo:[".$m.",".$b."]"; 
    $a=$m;
    $Dato12=  "<p>Nuevo intervalo:[".$m.",".$b."]"; 
    
    }elseif($Intervalo=="izquierdo"){
        echo "<p>Nuevo intervalo:".$a.",".$m;
    $b=$m;
    $Dato12=  "<p>Nuevo intervalo:[".$a.",".$m."]"; 

    }
   

   //FIN DE BUSQUEDA DE INTERVALO

   //INICIO ERROR 
    $e=($b-$a)/2;
   echo ("<p>Error: ".$e);//."<p>Tolerancia:".$tolerancia );
   $Dato13= $e;
  if(($e*100)>($tolerancia*100) && $Iteracion==true){
      $Iteracion=true;
  }else{ $Iteracion=false; }
   //FIN ERROR 

   ?>

    <td> <?=$Dato1?> </td>
    <td> <?=$Dato2?> </td>
    <td> <?=$Dato3?> </td>
    <td> <?=$Dato4?> </td>
    <td> <?=$Dato5?> </td>
    <td> <?=$Dato6?> </td>
    <td> <?=$Dato7?> </td>
    <td> <?=$Dato8?> </td>
    <td> <?=$Dato9?> </td>
    <td> <?=$Dato10?> </td>
    <td> <?=$Dato11?> </td>
    <td> <?=$Dato12?> </td>
    <td> <?=$Dato13?> </td>

   </tbody>
</table> <?php

}while($Iteracion);
}else{
    echo "Ingrese un valor para limite inferior menor a limite superior, vuelva a intentar";
}

   }else{?>
    -----------
    <?=$ed ?>
   <?php } ?>
        
    </div>
</div>
</div>
<?php $repetir=false; } ?>
</body>
<!-- FIN de metodo de BISECCION -->

