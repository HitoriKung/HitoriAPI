<?php
  include('class/hitori.class.php');
  $api = new HitoriAPI();
  $licensekey = "XbC4M97bYCMIiKNFVHkZ3fRHuOU7wQoVlVg2PgFy8U1OebjWh5uV9D6ZyBNvXbML"; //สามารถรับคีย์ได้ที่ https://topup.hitori.buzz/api
  $gift = "nmx7DfFy6Pa2fb4kik"; //ซองของขวัญแบบตัดแล้ว เช่น zhndV7bkXkdTsxggco
  $result = $api->angpao($licensekey,$gift);
    
  if($result['code'] == 'HTW-200'){  //เมื่อรายการสำเร็จ
    echo "ระบบ => ". $result['code'] ."<br>";
    echo "ข้อความ => ". $result['msg'] ."<br>";
    echo "จำนวนเงิน => ". $result['data']['redeemed_amount_baht'] ." บาท<br>";
  }else{  //เมื่อรายการไม่สำเร็จ
    echo "เกิดข้อผิดผลาด => ". $result['code'] ."<br>";
    echo "ข้อความ => ". $result['msg'] ."<br>";
  }
  
?>