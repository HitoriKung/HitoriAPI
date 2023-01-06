<?php
  include('hitori.class.php');
  $api = new HitoriAPI();
  $licensekey = ""; //สามารถรับคีย์ได้ที่ https://topup.hitori.buzz/api
  $bankname = "NULL"; //กำหนดชื่อบัญชีผู้รับ เช่น "ด.ช. วงศกร เชื้อเพชร" หากไม่ต้องการใส่ NULL
  $code = ""; //ค่าที่ได้จากการอ่าน QR CODE มาแล้ว
  $result = $api->slipverify($licensekey,$bankname,$code);
    
  if($result['code'] == '200'){  //เมื่อรายการสำเร็จ
    echo "จำนวนการใช้ => ". $result['data']['status_msg'] ."<br>";
    echo "จำนวนเงิน => ". $result['data']['slip']['amount'] ." บาท <br>";
    echo "ชื่อผู้โอน => ". $result['data']['slip']['sender']['name'] ."<br>";
    echo "ธนาคารต้นทาง => ". $result['data']['slip']['sender']['bank']['name'] ."<br>";
    echo "ชื่อผู้รับ => ". $result['data']['slip']['receiver']['name'] ."<br>";
    echo "ธนาคารปลายทาง => ". $result['data']['slip']['receiver']['bank']['name'] ."<br>";
    echo "เวลา => ". $result['data']['date_th'] ."<br>";
  }else{  //เมื่อรายการไม่สำเร็จ
    echo "เกิดข้อผิดผลาด => ". $result['code'] ."<br>";
    echo "ข้อความ => ". $result['msg'] ."<br>";
  }
  
?>
