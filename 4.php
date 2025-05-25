<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
    if(isset($_POST["enviando"])){/**comprueba q se ha pulsado el botón de enviar */
        $usuario = $_POST["nombre_usuario"];/**se guarda loq el usuario haya escrito en el cuadro */
        $edad = $_POST["edad_usuario"];//son  las ID en los INPUT

        if($usuario == "Juan"){
            echo "<p class='validado'> Puedes entrar</p>" . "<br>xd";
        }else{
            echo "<p class='no_validado'>No puedes entrar</p>";
        }

    }
?>