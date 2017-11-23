<style media="screen">
table, th, td {
 border: 1px solid black;
}
</style>
<?php
require_once ("claseConexion.php");


#se crea instancia a clase
$db = new database();
$db->conectar();
#Se realiza consulta
 $rs = $db->consulta( "SELECT TestTime as creation_date,
                      barcode,IMEI1,UnlockCode1,IMEI2,UnlockCode2,BT,Wifi,MSN,Netcode,CalFTMark,HardVersion,SoftVersion,PhoneType,PhoneClass,
                      Entitynum,Linenum,Classnum,ProdAddress,Operator,TestItem,PlanNum
                      FROM TestRecord " );

  #Se imprimen los datos
  echo " Consulta: <br/>";
  echo '
  <table>
    <thead>
      <th>TestTime</th>
      <th>Barcode</th>
      <th>IMEI1</th>
      <th>UnlockCode1</th>
      <th>IMEI2</th>
      <th>UnlockCode2</th>
      <th>BT</th>
      <th>Wifi</th>
      <th>MSN</th>
      <th>Netcode</th>
      <th>CalFTMark</th>
      <th>HardVersion</th>
      <th>SoftVersion</th>
      <th>PhoneType</th>
      <th>PhoneClass</th>
      <th>Entitynum</th>
      <th>Linenum</th>
      <th>Classnum</th>
      <th>ProdAddress</th>
      <th>Operator</th>
      <th>TestItem</th>
     <th>PlanNum</th>
    </thead>
    <tbody>
    ';

  while ($info = odbc_fetch_array($rs) ){
    // var_dump($info);
    echo '<tr>';
    echo '<td>'.$info['creation_date'].'</td>';
    echo '<td>'.$info['barcode'].'</td>';
    echo '<td>'.$info['IMEI1'].'</td>';
    echo '<td>'.$info['UnlockCode1'].'</td>';
    echo '<td>'.$info['IMEI2'].'</td>';
    echo '<td>'.$info['UnlockCode2'].'</td>';
    echo '<td>'.$info['BT'].'</td>';
    echo '<td>'.$info['Wifi'].'</td>';
    echo '<td>'.$info['MSN'].'</td>';
    echo '<td>'.$info['Netcode'].'</td>';
    echo '<td>'.$info['CalFTMark'].'</td>';
    echo '<td>'.$info['HardVersion'].'</td>';
    echo '<td>'.$info['SoftVersion'].'</td>';
    echo '<td>'.$info['PhoneType'].'</td>';
    echo '<td>'.$info['PhoneClass'].'</td>';
    echo '<td>'.$info['Entitynum'].'</td>';
    echo '<td>'.$info['Linenum'].'</td>';
    echo '<td>'.$info['Classnum'].'</td>';
    echo '<td>'.$info['ProdAddress'].'</td>';
    echo '<td>'.$info['Operator'].'</td>';
    echo '<td>'.$info['TestItem'].'</td>';
    echo '<td>'.$info['PlanNum'].'</td>';
    echo '</tr>';
  }
  echo '
  </tbody>
</table>';
  #Se agrega un nuevo registro
echo '<br/>';

$sql="INSERT INTO barcode.zte_mbc_barcode_imei (LAST_UPDATE_DATE,CREATION_DATE,LAST_UPDATE_LOGIN,IMEI,BARCODE,MSN,WIP_ENTITY_NAME,
LINENUM,CLASSNUM,PRODADDRESS,SOFTVERSION,HARDVERSION,TYPE,BARCODE_TIME,IMEI_WRITER,IMEI_TIME,MOBCLASS,SYN_FLAG,SYN_DATE,MEMO,ENABLED_FLAG,BACKUP,VERSION_NO,
BLUE_MAC,PLAN_NUMBER)
 VALUES ('".$info['creation_date']."','".$info['creation_date']."',".$info['creation_date'].",'".$info['IMEI1']."','".$info['barcode']."',
 '".$info['MSN']."','".$info['PlanNum']."','".$info['Linenum']."','".$info['Classnum']."','".$info['ProdAddress']."',
 '".$info['SoftVersion']."','".$info['HardVersion']."','".$info['PhoneType']."','".$info['creation_date']."',
 SIN INFORMACION,'".$info['creation_date']."','".$info['PhoneClass']."','".N."',
 '".CURRENT_TIMESTAMP."',Y,Ñ,'".$info['backup']."',V3, '".$info['BT']."','".$info['PlanNum']."')";


$db->desconectar();


 ?>
