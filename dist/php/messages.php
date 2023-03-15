<?php

function mensjCamps(){ # Muestra mensaje de error: Campos vacios
	echo " 
		<div class='alert' id='msg'>
			<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
			<strong>!Campos vacios!</strong>
		</div>";
				
}
function mensj(){ # Muestra mensaje de confirmacion: Usuario registrado 
	echo " 
		<div class='alert-nice' id='msg'> 
           	<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
           	<strong>!Su usuario ha sido registrado!</strong>
        </div>";
}
function mensjSuccesful(){ # Muestra mensaje de Bienvenida
	echo " 
			<div class='alert-nice' id='msg'> 
           			<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
           			<strong>!Bienvenido!</strong>
            </div>";
}
function mensjErrorID(){ # Muestra mensaje de error: Cedula invalida
	echo " 
			<div class='alert' id='msg'> 
            	<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
            	<strong>!Cedula invalidad, ya se encuentra registrada!, intente nuevamente</strong>
            </div>";
}
function mensjErrorEmail(){ # Muestra mensaje de error: Email invalido
	echo " 
			<div class='alert' id='msg'> 
            	<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
            	<strong>!Email invalido, ya se encuentra registrado!, intente nuevamente</strong>
            </div>";
}
function mensjErrorSingup(){ # Muestra mensaje de error: Usuario o contraseña erronea
	echo " 
			<div class='alert' id='msg'> 
            	<span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
            	<strong>!Usuario o contraseña invalido(s)!</strong>
            </div>";
}
