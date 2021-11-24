<?php


class MyCall {
        /*
        * Name : Spam Call Termux
        * Author : Firzz
        * Channel YT : Firzz Tutorial
        * Date : 21-11-2021
        * Note : Hai Komtol
        * Version : 1.0
        */
        protected static $agent;

        function __construct(){
                self::$agent = "Mozilla/5.0 (Linux; Android 8.1.0; CPH1853) AppleWebKit/537.36 (KHTML, like Gecko) Ch                       >                $this->run();}
                var $logo = "\n   \e[37m╭━╱▔▔▔▔╲━╮\n   \e[37m╰╱╭\e[31m▅\e[37m╮╭\e[31m▅\e[37m╮╲╯\n    ▏╰┈▅▅┈╯▕                               >

        public function run(){
                try {
                        system("clear");                                                                                                                             echo $this->logo;
                        echo " \e[37m[\e[34m*\e[37m] Nomor \e[37m(\e[34m08\e[37m) : \e[33m";
                        $phone = trim(fgets(STDIN));                                                                                                                 if(substr($phone, 0, 2) !== "08") {
                                throw new Exception("\n \e[31mMessage \e[37m: gunakan angka awalan 08\n\n");
                                exit(0);}

                        $url = "https://www.nutriclub.co.id/otp/?phone={$phone}&old_phone={$phone}";
                        for($coli=0;$coli<=0;$coli++) {
                                $ch = curl_init();
                                curl_setopt($ch, CURLOPT_URL, $url);
                                curl_setopt($ch, CURLOPT_POST, 1);
                                curl_setopt($ch, CURLOPT_USERAGENT, "User-agent".self::$agent);
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                $result = curl_exec($ch);
                                if(strpos($result, "Request misscall berhasil")) {
                                        echo "\e[37m\narray(\n       [code] => 00\n       [msisdn] => $phone\n                              >
                                } else {
                                        echo "\e[37m\narray(\n       [code] => 30\n       [msisdn] => $phone\n                              >

                        echo " \e[37m[\e[33m!\e[37m] Gunakan lagi ?\n \e[37m[\e[33my\e[37m/\e[33mn\e[37m]\n \e[33m•\e                       >
                        $call = trim(fgets(STDIN));
                        if($call == "y" or $call == "Y") { $this->run();} else if($call == "n" or $call == "N") { exi                       >

                } catch (Exception $e) {
                        echo $e->getMessage();}}}

new MyCall

?>