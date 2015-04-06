<?php
session_start();
					$arreglo=$_SESSION['carrito'];
					$total=0;
					$numero=0;
					$conteo=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_POST['Id']){
							$numero=$i;
						}
					}
					$arreglo[$numero]['Cantidad']=$_POST['Cantidad'];
					for($i=0;$i<count($arreglo);$i++){
						$conteo=$arreglo[$i]['Cantidad']+$conteo;
						$total=($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])+$total;
						$_SESSION['encarro']=$conteo;
					}
					$_SESSION['carrito']=$arreglo;
					$total_arreglado= number_format( $total , 2 , "," ,"." );
					echo "Bs.".$total_arreglado;

?>