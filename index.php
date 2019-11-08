
	<?php
                    sendJsontoServer();

                    //Lay IP cua User
                    function getUserIP() {
                        $ipaddress = '';
                        if (getenv('HTTP_CLIENT_IP')) {
                            $ipaddress = getenv('HTTP_CLIENT_IP');
                        } else if (getenv('HTTP_X_FORWARDED_FOR')) {
                            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
                        } else if (getenv('HTTP_X_FORWARDED')) {
                            $ipaddress = getenv('HTTP_X_FORWARDED');
                        } else if (getenv('HTTP_FORWARDED_FOR')) {
                            $ipaddress = getenv('HTTP_FORWARDED_FOR');
                        } else if (getenv('HTTP_FORWARDED')) {
                            $ipaddress = getenv('HTTP_FORWARDED');
                        } else if (getenv('REMOTE_ADDR')) {
                            $ipaddress = getenv('REMOTE_ADDR');
                        } else {
                            $ipaddress = 'UNKNOWN';
                        }
                        return $ipaddress;
                    }

                    //Lay chuoi Json tu server
                    function sendJsontoServer() {
                        $userIP = getUserIP();
                        $access_key = "?access_key=db9969084026f5d3b2c7e30ce2797e5a";
                        $array_json = "http://api.ipstack.com/" . $userIP . $access_key;

                        $json = file_get_contents($array_json);
                        $obj = json_decode($json);
					}
					//In thong tin
					function xuatthongtin() {
						print "$json";
						print "$obj";
					}
    ?>
	
