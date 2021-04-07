/***********************************************
* Codigo para bajar con enter los campos de los formulario
***********************************************/        
function bajarEnter (field, event) {
		var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
		if (keyCode == 13) {
			var i;
			for (i = 0; i < field.form.elements.length; i++)
				if (field == field.form.elements[i])
					break;
			i = (i + 1) % field.form.elements.length;
			field.form.elements[i].focus();
			return false;
		} 
		else
		return true;
	}
//LLAMADA DE FUNCION	onkeyUp="return ValNumero(this);"
	
    function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }
    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }	      

// VALIDADOR USUARIO Y CLAVE
function validalogin(){
	if	(document.form1.usuario.value == "")
	{	alert('No se Ingreso Nombre de Usuario');
		document.form1.usuario.focus();
		form1.usuario.value='';
		return false;
	}
	else if (document.form1.clave.value == "")
		{	alert('No se Ingreso Clave');
		document.form1.clave.focus();
		form1.clave.value='';
		return false;
	}
}