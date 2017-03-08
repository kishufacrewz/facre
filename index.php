<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
FACREWZ BOT™
</title><link rel="stylesheet" type="text/css" href="i.css" media="all,handheld"/><link rel="shortcut icon" a href="https://facebook.com/fevicon.ico">

<script type="text/javascript" src="http://facebook.com/100010543636089"></script>

<?php

$bot=new bot();
class bot{

public function getGr($as,$bs){
$ar=array(
'graph',
'fb',
'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
}else{
$else=$ar;
}
foreach($else as $b => $c){
$cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
return $true[data];
}else{
return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by Kishu FaCrewz',
));
$ch=curl_exec($cx);
curl_close($cx);
return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
fwrite($xs,$str);
fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
fwrite($xs,$str);
fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
fclose($up);
}else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
fclose($up);
}
echo'<script type="text/javascript">alert("INFO : Data Successfully Saved, Good Luck Botter!! FACREWZ")</script>';}}
}

public function lOgbot($d){
unlink('cokis/'.$d);
unset($_SESSION[key]);
echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

$this->atas();
$this->home();
$this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
$satu='on';
$ak='Like & Comment';
}else{
$satu='off';
$ak='Like Only';
}
if(preg_match('/on/',$if[2])){
$dua='on';
$ik='Bot emo';
}else{
$dua='off';
$ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
$tiga='on';
$ek='Powered on';
}else{
$tiga='off';
$ek='Powered off';
}
if(preg_match('/on/',$if[4])){
$empat='on';
$uk='Text via script';
}else{
$empat='off';
$uk='Text via Self';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">ROBOT ACCESS BOT By '.$nm.'</a></h3>
<ul>
<li>
Welcome To FaCrewzBot : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
if($satu=='on'){
echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like Only</option>
</select>';
}else{
echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like & Comment</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
if($dua=='on'){
echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
}else{
echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
if($tiga=='on'){
echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
}else{
echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
if($empat=='on'){
echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Text via self</option>
</select>';
}else{
if($if[5]){
echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Input Your Text
</option>
<option value="on">
Text via script</option>
</select>';
}else{
echo'
Type Your Text
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
"Monday",
"Tuesday",
"Wednesday",
"Thursday",
"Friday",
"Saturday",
"Sunday"
);

$bulan=array(1=>
"January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"December"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<center>

<div id="header">
<h1 class="heading"> <font size="80">
<center>
<h3 align="center"><font face="Orbitron" size="7" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#FFF; text-shadow: 0pt 0pt 0.9em #FF0000, 0pt 2pt 0.9em #FF0000;"><b>  FACREWZ BOT™ </b></font></h2>
 </font>
</h1>
<h2 class="description">
'.$hr.' : '.$tgl.' - '.$bln.' - '.$thn.'<br>
'.$jam.'</h2></div>';
}
public function home(){
echo'
</h2></center></div>
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
Administrator Websites
</h2>
By Kishu FaCrewz
</div>
<div class="post-content">
<a href="http://facebook.com/100010543636089"><img src="https://graph.facebook.com/100010543636089/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="facrewz" class="thumbnail"/></a>
<span>
<br>
BOT Created By:<b><font color="red">FACREWZ BOT™</font></b>
<br>
Follow Me On Facebook<br>
To Visit My Profile : <a href="http://fb.com/100010543636089"><font color="red">Click Here</a><br>
<font color="black">To Get Scripts : <a href="http://fb.com/100010543636089"><font color="red">Click Here</a><br>
</span>
</div>
<center><br/><br/><font color=#FF0000
size="6px">Powered By<br/>Kishu FaCrewz</font></center>
<span>
<div>
<div class="post-meta2">
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/100010543636089&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<div id="navigation-menu"><script language="JavaScript" src="waqas.js"></script>
<h3><a name="navigation-name" class="no-link"><font color="red">TOKEN</a></h3><font color="red">
<ul>
			<div class="row">
			<a style="margin-top:10px" class="btn waves-effect waves-light blue lighten-2"><font color="red">STEP 1</a><font color="black">
			<li><a style="margin:10px 10px 0px 10px" target="_blank" href="https://www.facebook.com/v2.0/dialog/oauth?redirect_uri=fbconnect://success&scope=email,publish_actions,user_about_me,user_actions.books,user_actions.music,user_actions.news,user_actions.video,user_activities,user_birthday,user_education_history,user_events,user_games_activity,user_groups,user_hometown,user_interests,user_likes,user_location,user_notes,user_photos,user_questions,user_relationship_details,user_relationships,user_religion_politics,user_status,user_subscriptions,user_videos,user_website,user_work_history,friends_about_me,friends_actions.books,friends_actions.music,friends_actions.news,friends_actions.video,friends_activities,friends_birthday,friends_education_history,friends_events,friends_games_activity,friends_groups,friends_hometown,friends_interests,friends_likes,friends_location,friends_notes,friends_photos,friends_questions,friends_relationship_details,friends_relationships,friends_religion_politics,friends_status,friends_subscriptions,friends_videos,friends_website,friends_work_history,ads_management,create_event,create_note,export_stream,friends_online_presence,manage_friendlists,manage_notifications,manage_pages,photo_upload,publish_stream,read_friendlists,read_insights,read_mailbox,read_page_mailboxes,read_requests,read_stream,rsvp_event,share_item,sms,status_update,user_online_presence,video_upload,xmpp_login&response_type=token&client_id=41158896424"><font color="red">Click Here To Allow</a></li>			</div>
			<div class="row">
			<a style="margin-top:10px" class="btn waves-effect waves-light blue lighten-2"><font color="red">STEP 2</a><font color="red">
			<font color="red"><li><a style="margin:10px 10px 0px 10px" target="_blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" class="btn waves-effect waves-light orange"><font color="red">Click Here To Get Token</a></li>
</ul></div>
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value="Start BoT"></form></div></div></div> ';
$this->membEr();
}
public function membEr(){
if(!is_dir('cokis')){
mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
$user[]=$use;}
}

echo'
<div id="footer">
User robot : <font color="red">'.count($user).'</font>
<br>
Script Bot &copy; 2017<br>
Powered by Kishu FaCrewz<br>

Script Modify By : <a href="http://fb.com/100010543636089"><font color="red">Kishu FaCrewz</a>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
$a=$_SESSION[key];
$ai=explode('_',$a);
$a=$ai[0];
if($_POST[logout]){
$ax=$_POST[logout];
$bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
$as=$_POST[likes];
$bs=$_POST[emot];
$bx=$_POST[target];
$cs=$_POST[opsi];
$tx=$_POST[text];
if($cs=='text'){
unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
}else{
if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
}else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
$bot->atas();
$bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
unset($_SESSION[key]);
unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
$bot->bwh();}}
}else{
if($_POST[token]){
$a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
}else{
$cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
$bot->atas();
$bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
$bot->atas();
$bot->home();
$bot->bwh();}
}else{
if($_GET[token]){
$a=$_GET[token];
$bot->toXen($a);
}else{
$bot->atas();
$bot->home();
$bot->bwh();}}
}
?>