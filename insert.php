<?php


$sql="INSERT INTO barcode.zte_mbc_barcode_imei (LAST_UPDATE_DATE,CREATION_DATE,LAST_UPDATE_LOGIN,IMEI,BARCODE,MSN,WIP_ENTITY_NAME,
LINENUM,CLASSNUM,PRODADDRESS,SOFTVERSION,HARDVERSION,TYPE,BARCODE_TIME,IMEI_WRITER,IMEI_TIME,MOBCLASS,SYN_FLAG,SYN_DATE,MEMO,ENABLED_FLAG,BACKUP,VERSION_NO,
BLUE_MAC,PLAN_NUMBER)

 VALUES ('".$info['creation_date']."','".$info['creation_date']."',".$info['creation_date'].",'".$info['IMEI1']."','".$info['barcode']."',
 '".$info['MSN']."','".$info['PlanNum']."','".$info['Linenum']."','".$info['Classnum']."','".$info['ProdAddress']."','".$info['SoftVersion']."',
 '".$info['HardVersion']."','".$info['PhoneType']."','".$info['creation_date']."',SIN INFORMACION,'".$info['creation_date']."','".$info['PhoneClass']."','".N."',
 '".CURRENT_TIMESTAMP."','".Y."','".Ñ."','".$info['backup']."',V3, '".$info['BT']."',
 '".$info['PlanNum']."')";

 ?>
