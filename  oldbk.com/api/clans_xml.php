<?php
$klan_name=htmlspecialchars(isset($_GET['clan']) ? $_GET['clan'] : '');
	$rooms = array ("��������� �������","������� ��� ��������","������� ��� �������� 2","������� ��� �������� 3","������� ��� �������� 4","��� ������ 1","��� ������ 2","��� ������ 3","�������� ���",
	"��������� ���","����� �������-�����","���������� ���","����� �����","���������� �����","�������� ���","��� ���������","����� ������ ��������","��� ����","������� ����","������",
	"����������� �������","����������� �����","�������","��������� ����������","���������� ����","������������ �������","�������� �����","�����","������������ ������","����","���",
	"����� ������","���������� �����","�������� �����","��������� �������","������� '�������'","��� ������","���������� ����� - ��������","���������� ����� - �������","���������� ����� - ���������� ����",
	"���������� ����� - ����������","���������� ����� - ������� ������","������� ���������","������� �������","������� �44","���� � �������� �����","��������� �����","�������� �����","�������� �����","���� ������ ������","�������� �������",
	"������� ��������","������� ��������","��������� ��������","��� �����","������� �����","������� ������","��� �������� ����","������� �58","������� �59","����� �����","������� �61","������� �62","������� �63","������� �64","������� �65","66"=>'�������� �����',
"200"=> "���������","401"=> "����� ���",

49 => "���� �������",
//�������
"70" => "�������",
"71" => "�������",
"72" => "�������",
"75" => "�������",
//
"80" => "�������",
"90" => "����� ����� �����������",
"91" => "�������", // � 91 � �� 97 ������ �� ������ � 191 �� ����� ��������
"92" => "�������",
"93" => "����������� ����� � ���������",
"94" => "���������� �������� � �������",
"95" => "���������� ��������",
"96" => "����� �����������",
"191" => "����� ��������",

//�������
"197"=>"��������� �������",
"198"=>"��������� �������",
"199"=>"��������� �������",

"270"=>"���� � ��������� ��������",
"271"=> "��������� ��������[1]",
"272"=> "��������� ��������[2]",
"273"=> "��������� ��������[3]",
"274"=> "��������� ��������[4]",
"275"=> "��������� ��������[5]",
"276"=> "��������� ��������[6]",
"277"=> "��������� ��������[7]",
"278"=> "��������� ��������[8]",
"279"=> "��������� ��������[9]",
"280"=> "��������� ��������[10]",
"281"=> "��������� ��������[11]",
"282"=> "��������� ��������[12]",
// ��������� ��������
"240"=>"���� � ��������� ��������",
"241"=> "��������� ��������[1]",
"242"=> "��������� ��������[2]",
"243"=> "��������� ��������[3]",
"244"=> "��������� ��������[4]",
"245"=> "��������� ��������[5]",
"246"=> "��������� ��������[6]",
"247"=> "��������� ��������[7]",
"248"=> "��������� ��������[8]",
"249"=> "��������� ��������[9]",
"250"=> "��������� ��������[10]",
"251"=> "��������� ��������[11]",
"252"=> "��������� ��������[12]",
"253"=> "��������� ��������[13]",
//�������� �������
"210"=>"���� � �������� �������",
"211"=> "�������� �������[1]",
"212"=> "�������� �������[2]",
"213"=> "�������� �������[3]",
"214"=> "�������� �������[4]",
"215"=> "�������� �������[5]",
"216"=> "�������� �������[6]",
"217"=> "�������� �������[7]",
"218"=> "�������� �������[8]",
"219"=> "�������� �������[9]",
"220"=> "�������� �������[10]",
"221"=> "�������� �������[11]",
"222"=> "�������� �������[12]",
"223"=> "�������� �������[13]",

// ��
"501" => "��������� �����",
"502" => "�������",
"503" => "����� 3",
"504" => "����� 2",
"505" => "�������� ����� 2",
"506" => "����� 4",
"507" => "����� 1",
"508" => "��������� �������",
"509" => "��� ������ 2",
"510" => "�������� ����� 1",
"511" => "����� �� �����",
"512" => "��� ������ 2",
"513" => "����",
"514" => "��������� �������",
"515" => "��� ������ 1",
"516" => "������ ��� 2",
"517" => "������ ��� 1",
"518" => "������� ��� 3",
"519" => "��� ������ 1",
"520" => "��� ������ 3",
"521" => "��������� 3",
"522" => "��� ��������",
"523" => "���������",
"524" => "������� ���-����",
"525" => "������� ���",
"526" => "���������",
"527" => "��������� 1",
"528" => "���������� ����",
"529" => "�����.����-����",
"530" => "������ �������",
"531" => "��������� ��� 1",
"532" => "������� ��� 2",
"533" => "���������� 1",
"534" => "��������� 2",
"535" => "������ �����. �����",
"536" => "������� � �������",
"537" => "���������� 3",
"538" => "����� �� ����.����",
"539" => "������� ���-�������",
"540" => "�������� � ������ 1",
"541" => "����� �����. ����",
"542" => "��������� 4",
"543" => "��������� ��� 3",
"544" => "��������� ��� 2",
"545" => "��������� ������� 1",
"546" => "�������� � ������ 2",
"547" => "������ �����. ����� 2",
"548" => "�����.����-�����",
"549" => "���������� 2",
"550" => "��������� ������� 3",
"551" => "��������� ������� 2",
"552" => "�������� � ������ 3",
"553" => "�������",
"554" => "���������",
"555" => "��� ��������",
"556" => "�������� � ������ 4",
"557" => "������ �������",
"558" => "������ ������",
"559" => "������� � �������",
"560" => "������" ,
"600" => "�������",

"10000" => "����� ������",
"999" => "���� � �����",
"61000" => "������",
"72001" => "�������� �������",
);




if ( ($klan_name!='') and ($klan_name!='radminion') and ($klan_name!='Adminion') )
{

$filename='/www/oldbk.com/api/data_clans_cache/'.$klan_name.'.xml';
$file_ok=file_exists($filename);
$cache_time=120; //120 ������

if ($file_ok)
    {
    $file_stat=stat($filename);
    $file_mk_time=$file_stat[9];
    }

if ( ($file_ok) and ($file_mk_time+$cache_time)>=time())
{
//���� ���� � ����������
// ������ ��� � ���
header ("content-type: text/xml");
print file_get_contents($filename);
} else 
{
//����� ���� ��� �� ����������� ������ ����� 
//1 ���� ������
   include "/www/oldbk.com/connect.php";
   
   $data=mysql_query("select id, login, align, level , klan, status , odate, ldate, hidden , id_city, lab, ruines, in_tower,room, battle  from oldbk.users where klan='".mysql_real_escape_string($klan_name)."' and id_city=0 
   UNION select id, login, align, level , klan, status , odate, ldate, hidden , id_city, lab, ruines, in_tower,room, battle  from avalon.users where klan='".mysql_real_escape_string($klan_name)."' and id_city=1 order by login;");

   if (mysql_num_rows($data)>0)
   {
   $to_out="<?xml version=\"1.0\" encoding=\"windows-1251\"?>\n";
   $to_out.="<clans_users refresh=\"".time()."\" clan=\"".$klan_name."\">\n";
    	while($row=mysql_fetch_array($data))
	   {
	   $to_out.="<user id=\"{$row[id]}\">\n";
	   $to_out.="<login>".htmlspecialchars(strip_tags($row[login]))."</login>\n";
	   $to_out.="<level>".$row[level]."</level>\n";
	   $to_out.="<align>".$row[align]."</align>\n";
	   if ($row[status]!='') $to_out.="<status>".htmlspecialchars(strip_tags($row[status]))."</status>\n";	   
	   
	   if ($row[id_city]==0)
	   	{
		   $to_out.="<city>capitalcity</city>\n";
		 }
		 else
		 {
		   $to_out.="<city>avaloncity</city>\n";
		  }
	   
	   $odate=$row['odate'];
	   if ($odate==0) $row['ldate'];
	   
	   
	   if (($odate < (time()-120) )OR($row[hidden]>0))  
	   	 {
 		 $to_out.="<ingame>offline</ingame>\n";
		 if ($odate>0) 
		 				{ 
		 				if ($row[hidden]>0)
			 				{
						 	$odate-=60;
						 	}
		 				
		 				$to_out.="<lasttime>".out_time_print($odate)."</lasttime>\n";  
		 				
		 				}
	   	 } 
	   	 else 
	   	 {
		 $to_out.="<ingame>online</ingame>\n";
		 		
		 		if ($row['lab'] > 0 )
				{
					$rrm = '�������� �����';
				}
				else if ($row['ruines'] > 0 )
				{
					$rrm = '�����';
				}
				else if ($row['in_tower'] ==10 )
				{
					$rrm = '����� ������';
				}
				else if ($row['in_tower'] ==3 )
				{
					$rrm = '�������:�������� �������';
				}				
				else if ($user['room'] >= 49998 && $user['room'] <= 60000)
				{
				 	$rrm = '�������';
				} 
				else
				{
				$rrm = $rooms[$row['room']];
				}
		 $to_out.="<room>".$rrm."</room>\n";
		 
	   	 }
	   if (($row[battle]>0)and($row[hidden]==0))	   
	   		{
  				 $to_out.="<battle>".$row[battle]."</battle>\n";
	   		}
	   		else
	   		{
  				 $to_out.="<battle>0</battle>\n";
	   		}
	   $to_out.=" </user>\n";
	   }
   
	   
	   
    $to_out.="</clans_users>";	   
   }
   else
   {

   $cap_err='���������� �� �������!';
   }
   /*
   */
   
   
   
   
   
   if (!($cap_err))
   {
   //������ � ���������
   header ("content-type: text/xml");
   print $to_out;

	$fp = fopen ($filename,"w"); //��������
	flock ($fp,LOCK_EX);
	fputs($fp,$to_out);
	fflush ($fp);
	flock ($fp,LOCK_UN);
	fclose ($fp);
   }
   else echo "false";

}

}
else
{
echo "false";
}

function out_time_print($eff)
		{
	$tt=time();
	$time_still=$tt-$eff;

	$tmp = floor($time_still/2592000);
	$id=0; // ������� �������� ����������
	if ($tmp > 0) {
		$id++;
		if ($id<3) {$out .= $tmp." ���. ";}
		$time_still = $time_still-$tmp*2592000;
	}
	$tmp = floor($time_still/604800);
	if ($tmp > 0) {
		$id++;
		if ($id<3) {$out .= $tmp." ���. ";}
		$time_still = $time_still-$tmp*604800;
	}
	$tmp = floor($time_still/86400);
	if ($tmp > 0) {
		$id++;
		if ($id<3) {$out .= $tmp." ��. ";}
		$time_still = $time_still-$tmp*86400;
	}
	$tmp = floor($time_still/3600);
	if ($tmp > 0) {
		$id++;
		if ($id<3) {$out .= $tmp." �. ";}
		$time_still = $time_still-$tmp*3600;
	}
	$tmp = floor($time_still/60);
	if ($tmp > 0) {
		$id++;
		if ($id<3) {$out .= $tmp." ���. ";}
	}
	if ($out=='')  {$out='������ ������';}
	return $out;
}

?>