<div id="menulateral">
<div id="conten_menulateral">
  <div id="menu_seccion1">
<div class="tab_azul">Gesti&oacute;n</div>
<div id="esq_azul1"></div><div id="esq_azul2"></div>
 </div>  
<div id="administrar">
<ul>

<?
$rstPermisoSIS = $permisos->getPermisosSIS($_SESSION['documento']);	
$rstPermisoNoticia = $permisos->getPermisosNoticias($_SESSION['documento']);
$rstPermisoCarne = $permisos->getPermisosCarne($_SESSION['documento']);
$rstPermisoHoras = $permisos->getPermisosHoras($_SESSION['documento']);
$rstPermisoAdmi = $permisos->getPermisosServicios($_SESSION['documento'],'ADMI');
$rstPermisoConv = $permisos->getPermisosServicios($_SESSION['documento'],'CONV');
$rstPermisoRecurs = $permisos->getPermisosServicios($_SESSION['documento'],'RECU');
$rstPermisoBase = $permisos->getPermisosServicios($_SESSION['documento'],'BASE');

$contPermNot=0;
$contPermSIS = 0;
$contPermCarne=0;
$contPermHoras='N';
$contPermAdmi=0;
$contPermConv=0;
$contPermRecurs=0;
$contPermBase=0;

while (($rowPermisoSIS = oci_fetch_array($rstPermisoSIS , OCI_ASSOC))){ $contPermSIS = $contPermSIS+1; }

while (($rowPermisoNoticia = oci_fetch_array($rstPermisoNoticia, OCI_ASSOC))) {
$contPermNot = $contPermNot+1;
}
while (($rowPermisoCarne = oci_fetch_array($rstPermisoCarne, OCI_ASSOC))) {
$contPermCarne = $contPermCarne+1;
}

while (($rowPermisoHoras = oci_fetch_array($rstPermisoHoras, OCI_ASSOC))) {
$contPermHoras = $rowPermisoHoras['URL']; 
}
while (($rowPermisoAdmi = oci_fetch_array($rstPermisoAdmi, OCI_ASSOC))) {
$contPermAdmi = $rowPermisoAdmi['PERM']; 
}
while (($rowPermisoConv = oci_fetch_array($rstPermisoConv, OCI_ASSOC))) {
$contPermConv = $rowPermisoConv['PERM']; 
}
while (($rowPermisoRecurs = oci_fetch_array($rstPermisoRecurs, OCI_ASSOC))) {
$contPermRecurs = $rowPermisoRecurs['PERM']; 
}
while (($rowPermisoBase = oci_fetch_array($rstPermisoBase, OCI_ASSOC))) {
$contPermBase = $rowPermisoBase['PERM']; 
}
if (($contPermNot>0) or ($_SESSION['documento']=='13719705') or ($_SESSION['documento']=='13746343') or ($_SESSION['documento']=='37842006') or ($contPermCarne>0) 
or ($contPermHoras=='Y') 
or ($contPermAdmi>0) or ($contPermConv>0) or ($contPermRecurs>0) or ($contPermBase>0) or ($_SESSION['documento']=='63503486' ) or ($contPermSIS>0)) {
?>
  <li><a href="/gestionContenidos/index.php">Contenidos (Noticias, Horas libres, Admisiones, Carn&eacute;, convenios)</a></li>
<? } ?>
  <li> <a href="/inicio/banner.php">Sistema Banner</a></li>
 <li><a href="http://neftis.unab.edu.co/PROD/twbkwbis.P_WWWLogin" target="_blank">Cosmos</a></li>
 <!--<li><a href="http://apophis.unab.edu.co/prodad/twbkwbis.P_ValLogin" target="_blank">Cosmos</a></li>-->
  <? if ($_SESSION['cambiaclave']=="si") { ?>
  <li><a href="javascript:ingresarCambiaClave('http://correo.unab.edu.co/ingresar.jsp');">Cambio de Clave</a></li>
  <? } ?>	
  <form id="formCambiaClave" name="formCambiaClave" method="post" action="http://correo.unab.edu.co/ingresar.jsp" target="_blank">
		<input type="hidden" name="usuario" value="<? echo $_SESSION['usuario']; ?>">
		<input type="hidden" name="password" value="<? echo $_SESSION['clave']; ?>">
	</form>
  <li><a href="http://saraweb.unab.edu.co:81/saraweb/webcommon/acceso.jspx" target="_blank">Hoja de vida Web</a></li>
</ul>
  </div>
<div id="menu_seccion2">
<div class="tab_amarillo">Servicios</div>
<div id="esq_amarillo1"></div><div id="esq_amarillo2"></div>
 </div>
 <div id="administrar">
<ul>
<li><a href="http://serviciostic.unab.edu.co/" target="_blank">Servicios TIC <span class="nuevo">Nuevo</span></a> </li>
<li><a href="/disponibilidadAulas/disponibilidad.php">Disponibilidad de Aulas</a></li>
  <!--<li><a href="/gestionContenidos/memorandos/">Memorandos</a></li>-->
  <li><a href="/solicitudMultimedios/accesoReservas.php">Reservas de Equipos</a></li>
  

   <? 
    $enlace = "";
    $fecha_actual = strtotime(date("d-m-Y h:i:00",time()));
    $fecha_inicio = strtotime("09-10-2015 22:00:00");
    $fecha_final = strtotime("10-10-2015 12:00:00");


   if ($_SESSION['cantToken'] == 1) {

// Ventana de Mantenimiento de 09/10/2015 10:00pm a 10/10/2015 12:00 md 
    
      if ($fecha_actual > $fecha_inicio && $fecha_actual < $fecha_final){
        $enlace = "http://intranet.unab.edu.co/mantenimiento.html";
      }else{
        $enlace = "http://caronte.unab.edu.co/summary?token=".$_SESSION['token'];  
      }
    
    ?>	  
 <li><a href="<? echo $enlace ?>">Sistema Integrado de Solicitudes</a></li>
  <!--  <li><a href="#">Sistema Integrado de Solicitudes</a></li>	-->	
  <? } else {

      if ($fecha_actual > $fecha_inicio || $fecha_actual < $fecha_final){
        $enlace = "http://intranet.unab.edu.co/mantenimiento.html";
      }else{
        $enlace = "/SIS/ingreso.php";  
      }

    ?>
  <li><a href="<? echo $enlace ?>" target="_blank">Sistema Integrado de Solicitudes</a></li>	
  <? } ?>
  
  <!-- <li><a href="/soporteUsuarios/indexExo.php">Soporte a usuarios - EXO</a></li> -->
  <li><a href="javascript:ingresar('http://tema.unabvirtual.edu.co/login/index.php');">Tema</a> </li>
    <form name="formIngreso" id="formIngreso" method="post" action="" target="_blank">
     <input type="hidden" name="username" id="login_username" value="<? echo $_SESSION['usuario']; ?>" />
     <input type="hidden" name="password" id="login_password" value="<? echo $_SESSION['clave']; ?>" />
    <input type="hidden" name="url" value="^U">
    <input name="user" type="hidden" value="<? echo $_SESSION['usuario']; ?>" />
    <input name="pass" type="hidden" value="<? echo $_SESSION['clave']; ?>" />
  <input name="login" type="hidden" value="<? echo $_SESSION['usuario']; ?>" />
    <input name="password" type="hidden" value="<? echo $_SESSION['clave']; ?>" />
    <input name="cedula" type="hidden" value="<? echo $_SESSION['documento']; ?>" />
  </form>
  <li>
  <a href="javascript:ingresar('http://aure.unab.edu.co/login');">Bases de datos y libros en l&iacute;nea</a> 
  </li>
   <li>
  <a target="_blank" href="http://cupon3.unab.edu.co/">Generar Cup&oacute;n de Consignaci&oacute;n</a></li>
  <li><a target="_blank" href="http://wlserver.unab.edu.co/portal/page/portal/UNAB/cosmos/Inscripciones_intranet">Informaci&oacute;n Estudiantes</a></li> 
  <li><a href="/inicio/grados.php">Grados</a> </li>
  <li><a href="/calidad/guias.php">Gu&iacute;as de C&aacute;tedra Pregrado</a></li>
  <li><a href="/calidad/guiasPosgrados.php">Gu&iacute;as de C&aacute;tedra Posgrado</a></li>
  <li><a href="/gestionContenidos/cronogramasAcademicos/index.php">Cronogramas Acad&eacute;micos</a></li>

  <table >
<tr>
    <td colspan="2"><li><a href="http://hapi.unab.edu.co:8088/wfprod/logon.jsp" target="_blank">Workflow</a></td>
  </tr>  
  <tr>
    <td><li><a href="http://alysa.unab.edu.co/Alfanet/AlfaNetInicio/InicioLogin/LoginIniciar.aspx" target="_blank">Gestión Universitaria de la Información y la Documentación GUIDO-Ardilla</a></td>
    <td></td>
  </tr>
</table>

</ul>
  </div>
  <div id="menu_seccion3">
<div class="tab_verde">Calidad</div>
<div id="esq_verde1"></div><div id="esq_verde2"></div>
 </div>
 <div id="administrar">
<ul>
  <li><a href="/calidad/informacionInstitucional.php">Informaci&oacute;n institucional</a></li>
  <li><a href="/calidad/informacionEntorno.php">Informaci&oacute;n de Entorno</a></li>
 <li><a href="/calidad/acreditacionInstitucional.php">Acreditaci&oacute;n Institucional</a></li>
 <li><a href="/calidad/acreditacionProgramas.php">Acreditaci&oacute;n de Programas</a></li>
 <li><a href="/calidad/registroCalificadoProgramas.php">Registro calificado de Programas</a><span class="nuevo">Nuevo</span></li>
  <!--<li><a href="/calidad/documentosPorProcesos.php">Documentaci&oacute;n procesos</a><span class="nuevo">Nuevo</span></li> 
    TICKET:137551, modificado: Manuel.García.
    -->
  <li><a href="/calidad/documentacionsgc.php">Consulta Documentación SGC</a><span class="nuevo">Nuevo</span></li>
  <li><a href="/calidad/gestiondocumentossgc.php">Gestión de documentos SGC</a></li>
 <li><a href="/calidad/documentosAntiguos.php">Documentaci&oacute;n Unab</a></li>
</ul>
  </div>
 </div>
 </div>