<?php
// ไม่จำเป็นไม่ต้องแก้ใด ๆ ทั้งสิ้น ╰(*°▽°*)╯
class HitoriAPI{
    public $api_slip = 'https://topup.hitori.buzz/api/v1/slip'; //api slip verify
    public $api_angpao = 'https://topup.hitori.buzz/api/v1/angpao'; //api truewallet angpao
    
    function slipverify($licensekey,$bankname,$code){
        $url = $this->api_slip.'/'.$licensekey.'/'.$bankname.'/'.$code;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $this->response = curl_exec($ch);
        $this->data = json_decode($this->response, true);
        $this->error = curl_error($ch);
        curl_close($ch);
        return $this->data;
    }
    
    function angpao($licensekey,$gift){
        $url = $this->api_angpao.'/'.$licensekey.'/'.$gift;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $this->response = curl_exec($ch);
        $this->data = json_decode($this->response, true);
        $this->error = curl_error($ch);
        curl_close($ch);
        return $this->data;
    }
}

?>