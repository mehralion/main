<?
//��������� ��� ����� 
$MAXFOTO=28;

//��������� ����� ������� ������ 0 - ������� 10
// mob id - kol


$mob[0]= array(
		"31" => 1);
$mob[1]= array(
		"30" => 1);
$mob[2]= array(
		"30" => 2,
		"31" => 1);
$mob[3]= array(
		"31" => 2,
		"31" => 1);
$mob[4]= array(
		"31" => 1,
		"30" => 1,		
		"32" => 1);
$mob[5]= array(
		"32" => 2,
		"35" => 2,		
		"33" => 1);
$mob[6]= array(
		"33" => 2,
		"35" => 1,		
		"34" => 1);
		
$mob[7]= array(
		"34" => 2,
		"35" => 3		
		);
		
$mob[8]= array(
		"33" => 2,
		"36" => 2,		
		"34" => 1);
		
$mob[9]= array(
		"33" => 2,
		"37" => 2,		
		"34" => 1);

$mob[10]= array(
		"36" => 2,
		"37" => 3);

$mob[11]= array(
		"38" => 1,
		"36" => 1,
		"37"=> 3);

$mob[12]= array(
		"33" => 4,
		"36" => 1,
		"38" => 1);

$mob[13]= array(
		"37" => 3,
		"36" => 1,		
		"31" => 3);


$mob[14]= array(
		"37" => 3,
		"35" => 2,		
		"32" => 3);

$mob[15]= array(
		"39" => 1,
		"35" => 2,
		"37" => 1,		
		"36" => 2);

$mob[16]= array(
		"38" => 1,
		"35" => 1,
		"37" => 2,		
		"36" => 2);
$mob[17]= array(
		"38" => 2,
		"36" => 2,
		"37" => 2);

$mob[18]= array(

		"39" => 2,
		"37" => 2,
		"36" => 3);
	
$mob[19]= array(
		"41" => 1,
		"38" => 2,
		"36" => 1,
		"37" => 1);

$mob[20]= array(
		"40" => 1,
		"41" => 1,
		"36" => 2,
		"35" => 2,		
		"37" => 2);


/////////////////////////////////////////////////	
// ��������� ����� �� �����
// $mdrop[id-����] =  "���� %" => ���� �� �� ����
// ��� ����� � ���� ����������� � ����!
//4000 - �������
//3001 -������
//3002 - �����
//3003 - �����
//3004 - ����
//3005 - ����
//3006- ������ ������
//3007 - ����� ���������� �������
//3008 -������� ������ 
//3009 -������
//3010 -�������
//3011 -�������
//3012 - �����
$mdrop[30]=array(
		"3003" => 20,  //����� 
		"3002" => 7, //������
		"3001" => 10, // ������
		"3004" => 12, 
		"3005" => 20, 
		"3006" => 1, //��� ���
		"4000" => 10, //�������
		"0" => 80 // �����
		); 

$mdrop[31]=array(
		"3007" => 20, // +
		"3004" => 10, //+
		"3006" => 5, //+
		"3008" => 5, //+
		"4000" => 1, //�������
//		"2969" => 1, //2969 -��������� �����
		"0" => 80 //60% �����
		); 		

$mdrop[32]=array(
		"3005" => 10,  //����
		"3004" => 5, //����
		"4000" => 2, //�������
		"3003" => 2,  //������
		"3011" => 2,  //�����
		"0" => 80 //15 ������
		); 

//������ ���� ����� ��������
$mdrop[33]=array(
		"3001" => 5,  //+
		"3002" => 8,  //+
		"3003" => 10,  //+
		"3004" => 10, //����+
		"3005" => 10, //����+
		"3006" => 10, //��� ���+
		"3007" => 10,  //+
		"3008" => 10,  //+
//		"3009" => 10,  //������
//		"3011" => 10,  //�����
//		"3010" => 10, //��������
		"3012" => 10, //�����
//		"5000" => 2, //����
//		"2972" =>2, //2972- ��������� ���
		"0" => 80 // �����
		);

//������ ���� ����� ��������
$mdrop[34]=array(
		"3003" => 10,  //�����
		"3011" => 10,  //�����
		"3010" => 10, //��������
		"3012" => 10, //�����
		"3004" => 10, //����+
		"3005" => 10, //����+
		"3006" => 5, //��� ���+
//		"3103"=>1, //20 KR		
//		"5000" => 1, //����
//		"2967" =>1, //��������� �����
		"0" => 60 // �����
		);

$mdrop[35]=array(
		"3008" => 10,  //����� 
		"3002" => 10, //������
		"3001" => 15, // ������
		"3004" => 10, //����
		"3005" => 10, //����
		"3007" => 10, //����
		//"3012" => 5, //�����
//		"2971" =>2, //2971-��������� ����
		"3006" => 5, //��� ���
		"4000" => 5, //�������
		"0" => 45 // �����
		);


$mdrop[36]=array(
		"3004" => 15, //����+
		"3005" => 15, //����+
		"3008" => 15,  //����� 
		"3002" => 15, //������
		"3003" => 2,  //�����111
		"3011" => 2,  //�����
//		"2974" => 1, //2974-��������� ������
		"0" => 45 // �����
		);


$mdrop[37]=array(
		"3004" => 10, //����+
		"3005" => 10, //����+
		"3008" => 10,  //����� 
		"3002" => 10, //������
		"0" => 40 // �����
		);

$mdrop[38]=array(
		"3003" => 10,  //���������
		"3004" => 10, //����+
		"3004" => 10, //����+
		"3008" => 10,  //����� 
		"5000" => 1, //����	
		"3002" => 10, //������
//		"2970" => 2, //2970 - ��������� ��������
		"0" => 30 // �����
		);

$mdrop[39]=array(
		"3003" => 10,  //�������
		"3011" => 10,  //�����
		"3010" => 10, //��������
		"3012" => 10, //�����
		"0" => 30 // �����
		);

$mdrop[40]=array(
		"3009" => 15,  //������
		"3011" => 10,  //�����
		"3012" => 10, //�����
		"3102"=>10, //10 KR	
		"5000" => 1, //����			
		"2968" =>2, //2968 - ��������� ������				
		"3006" => 10, //��� ���+
		"0" => 40 // �����
		);

$mdrop[41]=array(
		"3009" => 10,  //������
		"3011" => 10,  //�����
		"3101" => 10,//5 kr	
		"5000" => 1, //����				
		"3012" => 10, //�����		
		"3006" => 10, //��� ���+
		"0" => 1 // �����
		);

		

/////////////////////////////////////////////////	
//��������� �������  ������� 0 - ������� - 10
// ���� ���� � ����������  � �����
$lov[0]=array(
// magic - time min
		"timer_trap" => "2" // ���� �� 2 ���
		);

$lov[1]=array(
// magic - time min
		"poison_trap" => "2" // �� �� 2 ���
		);

$lov[2]=array(
// magic - time min
		"timer_trap" => "4" //���� �� 4 ���
		);

$lov[3]=array(
// magic - time min
		"poison_trap" => "4" // �� �� 4 ���
		);


$lov[4]=array(
// magic - time min
		"timer_trap" => "8" //���� �� 8 ���
		);

$lov[5]=array(
// magic - time min
		"poison_trap" => "8" // �� �� 8 ���
		);

$lov[6]=array(
// magic - time min
		"timer_trap" => "9" //���� �� 9 ���
		);

$lov[7]=array(
// magic - time min
		"poison_trap" => "9" // �� �� 9 ���
		);
///////////////////////////////////////////////
//��������� �����
// ���� ���� � ����������  � �����
$hils[0]=array(
		"H" => 10 // 10%
		);

$hils[1]=array(
		"H" => 20 // 20%
		);

$hils[2]=array(
		"H" => 30 // 30%
		);

$hils[4]=array(
		"H" => 40 // 40%
		);

$hils[5]=array(
		"H" => 50 // 50%
		);

$hils[6]=array(
		"H" => 50 // 50%
		);

$hils[6]=array(
		"H" => 60 // 60%
		);

$hils[7]=array(
		"H" => 75 // 75%
		);

$hils[8]=array(
		"H" => 80 // 80%
		);

$hils[9]=array(
		"H" => 90 // 90%
		);

$hils[10]=array(
		"H" => 99 // 99%
		);

/////////////////////////////////////////////////
// ��������� BOX-��
//��� ��� � �������� ����� �������� �� ����
//����� ���������� ������� � ������!

$pbox[0]=array(
///�������� ��� ������� �� ������, �.�. ����� ���������� �� ���� ���� � ���������, �� ��������� ��
		"gold" => 3003
		);
$pbox[1]=array(
		"granit" => 3001 //��������� ��� - � ���������� �� �� ���������
		); 
$pbox[2]=array(
		"timer_trap" => "16" 
		);
$pbox[3]=array(
		"glina" => 3003 // ��������� ��� - � ���������� �� �� ���������
		); 
$pbox[4]=array(
		"gold" => 3009
		);
$pbox[5]=array(
		"silver" => 3011,
		"granit" => 3001 
		);
$pbox[6]=array(
		"vostanovlenie_HP" => 100
		);
$pbox[7]=array(
		"timer_trap" => "15" //���� �� 8 ���		
		);
$pbox[8]=array(
		"items" => 3010, 
		"antidot" => 4000
		);
$pbox[9]=array(
		"items" => 3002 // ��������� ��� - � ���������� �� �� ���������
	      ); 
$pbox[10]=array(
		"buter" => 105, 
		"gold" => 3003 
		);
$pbox[11]=array(
		"poison_trap" => "8" // �� �� 8 ���
		);

$pbox[12]=array(
		"almaz" => 3012
		);
$pbox[13]=array(
		"timer_trap" => "18" //���� �� 8 ���
		);
$pbox[14]=array(
		"gold" => 3009
		);
$pbox[15]=array(
		"silver" => 3011,
		"antidot" => 4000
		);
$pbox[16]=array(
		"vostanovlenie_HP" => 100
		);
$pbox[17]=array(
		"timer_trap" => "15" //���� �� 8 ���		
		);
$pbox[18]=array(
		"items" => 3012, 
		"antidot" => 4000
		);
$pbox[19]=array(
		"granit" => 3001, 
		"gold" => 3009 
		);
$pbox[20]=array(
		"gold" => 3009,
		"items" => 3012
		);



/////////////////////////////////////////////////
	
//��������� ����� �� �������� ������� 0 - ����� - 10
// labonly - ���������� ������ �� ����

$sund[0]=array(
//������ 1 ���� � ����������� � ������ - ��������� ��������� �������� �� ���������������� ��������
		 "shop" => "eshop",
		 "labonly" => "1",
		 "maxdur" => "5",
		 "present"=> "��������",
		 "id" => "3"
			);
$sund[2]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3001"
			);

$sund[3]=array(
		 "shop" => "eshop",
		 "labonly" => "1",
		 "maxdur" => "2",
 		 "present"=> "��������",
		 "id" => "5202"
			);


$sund[4]=array(
		 "shop" => "eshop",
		 "labonly" => "1",
		 "maxdur" => "1",
		 "present"=> "��������",
		 "id" => "105"
			);

	/*$sund[5]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3001"
			); */
$sund[5]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
		 "present"=> "",
		 "id" => "199199"
			);			


$sund[6]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
		 "present"=> "",
		 "id" => "200200"
			);



$sund[7]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
		 "present"=> "",
		 "id" => "210210"
			);


$sund[8]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
		 "present"=> "",
		 "id" => "209209"
			);


$sund[9]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "",
		 "id" => "4000"
			);

$sund[10]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3010"
			);

$sund[11]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
		 "present"=> "",
		 "id" => "206206"
			);


$sund[12]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3012"
			);

$sund[13]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3011"
			);

$sund[14]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
 		 "present"=> "",
		 "id" => "204204"
			);


$sund[15]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
 		 "present"=> "",
		 "id" => "201201"
			);
			
$sund[16]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3012"
			);


$sund[17]=array(
		 "shop" => "shop",
		 "labonly" => "1",
		 "maxdur" => "3",
 		 "present"=> "",
		 "id" => "198198"
			);
$sund[18]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3009"
			);

$sund[19]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3010"
			);

$sund[20]=array(
		 "shop" => "eshop",
		 "labonly" => "0",
		 "maxdur" => "1",
 		 "present"=> "��������",
		 "id" => "3011"
			);
			
////��������� ��� ���������� �����
// [id] - ����� � ����� ��������
/// ���� ����� � ������� ��� �� ��������������
$reitem[199199]=1;
$reitem[200200]=1;
$reitem[210210]=1;
$reitem[209209]=1;
$reitem[206206]=1;
$reitem[204204]=1;
$reitem[201201]=1; //������
$reitem[198198]=1;


?>