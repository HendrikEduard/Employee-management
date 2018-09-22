<?php

function redirect_to($destination) {
  if (!headers_sent()){
    header('Location: '.$destination);
    exit();
  } else {
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.$destination.'";';
    echo '</script>';
    echo '<noscript>';
    echo '<meta http-equiv="refresh" content="0;url='.$destination.'" />';
    echo '</noscript>'; exit;
  }
} 

function clean($data) {
  $data = strip_tags($data);
  $data = htmlentities($data, ENT_QUOTES, 'UTF-8');
  $data = trim($data);
  return $data;
}

// Function to get the client ip address
function get_client_ip_env() {
  $ipaddress = '';
  if (getenv('HTTP_CLIENT_IP'))
      $ipaddress = getenv('HTTP_CLIENT_IP');
  else if(getenv('HTTP_X_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
  else if(getenv('HTTP_X_FORWARDED'))
      $ipaddress = getenv('HTTP_X_FORWARDED');
  else if(getenv('HTTP_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_FORWARDED_FOR');
  else if(getenv('HTTP_FORWARDED'))
      $ipaddress = getenv('HTTP_FORWARDED');
  else if(getenv('REMOTE_ADDR'))
      $ipaddress = getenv('REMOTE_ADDR');
  else
      $ipaddress = 'UNKNOWN';

  return $ipaddress;
} // Usage
// $user_ip = get_client_ip_env();
// echo $user_ip;