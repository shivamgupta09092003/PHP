<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
function is_mobile_device($user_agent){
    $mobile_key = array('Android', 'iPhone', 'iPad', 'Windows Phone', 'BlackBerry', 'Mobile', 'Opera Mini');
    foreach($mobile_key as $key){
        if(strpos($user_agent, $key) !== false){
            return true;
        }
    }
    return false;
}
if(is_mobile_device($user_agent)){
    echo "This is a Mobile device";
}else{
    echo "This is not a Mobile device";
}
?>