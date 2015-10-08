<!DOCTYPE html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ajax_request.js"></script>
<script type="text/javascript">
var global_token = "";

function prev(){
	global_token--;
	loaddata(true,global_token);
}

function next(){
	global_token++;
	loaddata(true,global_token);
}

function loaddata(bool,response){
	if(bool){
		global_token = response;
		pagename = "show";
		var data_parameters = "token="+global_token;
		ajax_request(true,pagename,data_parameters,loaddata);
	}else{
		var val1 = $(response).find("estado").text();
		var val2 = $(response).find("numeroAutorizacion").text();
		var val3 = $(response).find("fechaAutorizacion").text();
		var val4 = $(response).find("ambiente").text();
		var val5 = $(response).find("tipoEmision").text();
		var val6 = $(response).find("razonSocial").text();
		var val7 = $(response).find("nombreComercial").text();
		var val8 = $(response).find("ruc").text();
		var val9 = $(response).find("claveAcceso").text();
		var val10 = $(response).find("codDoc").text();
		var val11 = $(response).find("estab").text();
		var val12 = $(response).find("ptoEmi").text();
		var val13 = $(response).find("secuencial").text();
		var val14 = $(response).find("dirMatriz").text();
		
		var str = "";
		
		str += '<tr><td>Estado</td><td>'+val1+'</td></tr>';
		str += '<tr><td>NumeroAutorizacion</td><td>'+val2+'</td></tr>';
		str += '<tr><td>FechaAutorizacion</td><td>'+val3+'</td></tr>';
		str += '<tr><td colspan="2" style="font-weight:bold; text-align:center;">infoTributaria</td></tr>';
		str += '<tr><td>Ambiente</td><td>'+val4+'</td></tr>';
		str += '<tr><td>TipoEmision</td><td>'+val5+'</td></tr>';
		str += '<tr><td>RazonSocial</td><td>'+val6+'</td></tr>';
		str += '<tr><td>NombreComercial</td><td>'+val7+'</td></tr>';
		str += '<tr><td>Ruc</td><td>'+val8+'</td></tr>';
		str += '<tr><td>ClaveAcceso</td><td>'+val9+'</td></tr>';
		str += '<tr><td>CodDoc</td><td>'+val10+'</td></tr>';
		str += '<tr><td>Estab</td><td>'+val11+'</td></tr>';
		str += '<tr><td>PtoEmi</td><td>'+val12+'</td></tr>';
		str += '<tr><td>Secuencial</td><td>'+val13+'</td></tr>';
		str += '<tr><td>DirMatriz</td><td>'+val14+'</td></tr>';
		
		document.getElementById("innerdata").innerHTML = str;
	}
}

</script>
</head>
<body onLoad="loaddata('true','<?php echo $_GET['token'] ?>');">
<div class="" style="margin-top:10px;">
   	<div class="row">
		<div class="col-xs-2" style="margin-top:200px;"><button type="button" class="btn btn-primary" onClick="prev()">Prev</button></div>
			<div class="col-xs-8" style="text-align:justify; word-wrap: break-word;">
            <table class="table table-hover">
            <thead>
              <tr>
                <th>Title</th>
                <th>Value</th>
              </tr>
            </thead>
            <tbody id="innerdata">
            </tbody>
         	</table>
          </div>
		<div class="col-xs-2" style="text-align:right; margin-top:200px;"><button type="button" class="btn btn-primary" onClick="next()">Next</button></div>
	</div>
</div>
</body>
</html>
