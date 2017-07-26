<?php
class users {
    function parse_user_info($str_info) {
        preg_match("/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})/", $str_info, $email);
        $str_info = str_replace($email[0], ",", $str_info);
        
        preg_match("/,[A-Za-z\\s]+,\\s*[A-Z]{2}\\s*[0-9]{5}/", $str_info, $citystatezip);
        $str_info = str_replace($citystatezip[0], ",", $str_info);
        
        preg_match("/(,|\\s|\A)[\(\\s]*[0-9]{3}[\)\\s\.-]*[0-9]{3}[\\s\.-]*[0-9]{4}/", $str_info, $phone);
        $str_info = str_replace($phone[0], ",", $str_info);

        preg_match("/(,|\A)\s*[A-Za-z']+\s+[A-Za-z']+\s?[A-Za-z']+\s*(,|\z)/", $str_info, $name);
        $str_info = str_replace($name[0], ",", $str_info);

        preg_match("/(,|\A)[A-Za-z0-9\s-]+(,|\z)/", $str_info, $street);
        return array("email"=>$email[0], "address"=>$street[0].$citystatezip[0], "phone"=>$phone[0], "name"=>$name[0]);
    }
}
?>