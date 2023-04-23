<?php
ob_start();

$token = "6267055853:AAGnPfQ11ViPQOBHlN6ZwDAM2fxaiyKjyXU";#الاساسي
$tokens = "t.me/C_5_N";#اجباري الاشتراك
define("API_KEY",$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']."&allowed_updates=".json_encode(["message","chat_member","my_chat_member","chat_memberchat_join_request","pre_checkout_query","poll","poll_answer","chosen_inline_result","callback_query","shipping_query","channel_post","edited_channel_post","inline_query","callback_query","shipping_query","chosen_inline_result","chosen_inline_result","my_chat_member","pre_checkout_query","callback_query","chat_join_request","chat_member"]));
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
     $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$bot = '@'.bot('getme',['bot'])->result->username;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data     = $update->callback_query->data;

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$messageid = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$data = $update->callback_query->data;
$from_id = $update->message->from->id;
$from_id2 = $update->callback_query->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$bi = "@Ng_114bot";
$Df = 5054546767; # ايديك
$kindev = "5054546767";
$sudo = array("$kindev","5054546767");#اضافة ايدي
$admin = $kindev;# ايديك
$idbot = "5751607453";#ايدي بوتك
$userbot = "Ng_114bot";# معرف البوت بدون @
$userbots = "@$userbot";
$buy = "Ng_103";#معرفك بدون @
$chi = "N_G_12";#معرف قناتك بلا @
$chis = "@N_G_12";#قناتك مع @
if(!$ARMOF['sudo']){
$iidsod = $Df;
}elseif($ARMOF['sudo']){
$iidsod = $ARMOF['sudo'];
}
$sttings = json_decode(file_get_contents("ann.json"),true);
$chanelat = json_decode(file_get_contents("Channel.json"),true);
 
require("devs.php");
$mychannel = json_decode(file_get_contents("mychannel.txt"),true)?? Null;
#===۞𝗞𝗜𝗡𝗗𝗜۞===#
require("chis.php");
require("chii.php");
#===۞𝗞𝗜𝗡𝗗𝗜۞===#

if($mychannel != Null ){
$x = $mychannel;
}
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonn = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$statuss = $statjsonn['result']['status'];
$message_id2 = $update->callback_query->message->message_id;
$from_id = $update->message->from->id;
$from_id2 = $update->callback_query->from->id;
$message_id2 = $update->callback_query->message->message_id;
$sttings = json_decode(file_get_contents("SETT.txt"),1);
$rt = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$first_name = $update->message->from->first_name;
$channeladmin = json_decode(file_get_contents("admin.txt"),1);
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
$result = $up['result'];
foreach($result as $key=>$value){
$found = $result[$key]['status'];
if($found == "creator"){
$owner = $result[$key]['user']['id'];
$owner2 = $result[$key]['user']['username'];
}
}
if($text == "/start"){

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• اهلا بك عزيزي 

•في بوت حماية القنوات والمجموعات 
•من التصفية والتفليش قم برفع البوت ادمن 
•في القنوات او المجموعات وتابع الاوامر في الاسفل 
•لحماية القناة اكثر ارسل تفعيل ثم الاوامر $bi 
","reply_markup"=>json_encode([
'inline_keyboard'=>[
[['text'=>"• دعوة البوت للمجموعة",'url'=>"https://telegram.me/$bbbbb?startgroup=start"]],
[["text"=>"• قنواتي ومجموعاتي","callback_data"=>"mychannel"]],
[["text"=>"• اضف قناة او مجموعة ","callback_data"=>"addgroup"]],
[["text"=>"• المساعدة ","callback_data"=>"help"]],
]
])
]);
Unset($sttings["$from_id"]);
Unset($sttings["data"]["$from_id"]);
unset($sttings["data$from_id"]);
file_put_contents("SETT.txt",json_encode($sttings,128|34|256));
}

if($text and $sttings["data$from_id"] == "addgroup"){
 if($status == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم الحفظ ✅",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"~ رجوع","callback_data"=>"back"]]
]
])
]);
$x["$from_id"][] = "$text";
file_put_contents("mychannel.txt",json_encode($x,128|34|256));
unset($sttings["data$from_id"]);
file_put_contents("SETT.txt",json_encode($sttings,128|34|256));
}else{
 bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• اما ان البوت ليس ادمن في القناة او انك لست مالك القناة او المجموعة",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• دعوة البوت للمجموعة",'url'=>"https://telegram.me/$bbbbb?startgroup=start"]],
[["text"=>"~ رجوع","callback_data"=>"back"]]
]
])
]);
unset($sttings["data$from_id"]);
file_put_contents("SETT.txt",json_encode($sttings,128|34|256));
}}
if($data == "addgroup"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
~ يجب رفع البوت اولا في المجموعة
لو القناة قبل ارسال المعرف او الايدي
• ارسل معرف المجموعة @ 
~ او الايدي -100
~ او معرف القناة او الايدي
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• دعوة البوت للمجموعة",'url'=>"https://telegram.me/$bbbbb?startgroup=start"]],
[["text"=>"~ رجوع","callback_data"=>"back"]]
]
])
]);
$sttings["data$from_id2"] = "addgroup";
file_put_contents("SETT.txt",json_encode($sttings,128|34|256));
}
if($data == "help"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اهلا بك البوت يقوم بحفظ قناتك او مجموعتك من التفليش من قبل المشرفين بالازالة .

ملاحظات مهمة يجب ان يتم رفع
 المشرفين في القناة او المجموعة من خلال البوت 
رفع مشرف في القناة من خلا البوت يتم من خاص البوت قسم قنواتي ومجموعاتي قسم اعداد وتقوم بالضغط على رفع مشرف وتقوم بارسال ايدي المشرف تأكد من منح البوت كل الصلاحيات ليعمل بنجاح .

سيقوم البوت بتنزيل اي مشرف يقوم بتنزيل عضو واحد او طرده من مجموعتك او قناتك وسيتم الاشعار في خاصك مع رسالة تحتوي على امكانية اعادة رفع المشرف.

للاستفسار اكثر راسلني : @Ng_103

- البوت امن وموثوق جدا $bi ♡"
,"reply_markup"=>json_encode([
'inline_keyboard'=>[
[['text'=>"• دعوة البوت للمجموعة",'url'=>"https://telegram.me/$bbbbb?startgroup=start"]],
[["text"=>"•رجوع ","callback_data"=>"back"]],
]
])
]);}
if($data == "back"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
• اهلا بك عزيزي 

• في بوت حماية القنوات والمجموعات 
•من التصفية والتفليش قم برفع البوت ادمن 
•في القنوات او المجموعات وتابع الاوامر في الاسفل 
•لحماية القناة اكثر ارسل تفعيل ثم الاوامر $bi
","reply_markup"=>json_encode([
'inline_keyboard'=>[
[['text'=>"• دعوة البوت للمجموعة",'url'=>"https://telegram.me/$bbbbb?startgroup=start"]],
[["text"=>"• قنواتي ومجموعاتي","callback_data"=>"mychannel"]],
[["text"=>"• اضف قناة او مجموعة ","callback_data"=>"addgroup"]],
[["text"=>"• المساعدة ","callback_data"=>"help"]],
]
])
]);
Unset($sttings["$from_id2"]);
Unset($sttings["data"]["$from_id2"]);
unset($sttings["data$from_id2"]);
file_put_contents("SETT.txt",json_encode($sttings,128|34|256));
}


if($data == 'mychannel'){
$mychannel = json_decode(file_get_contents("mychannel.txt"),true)?? Null;

if($mychannel != Null ){
$x = $mychannel;
}
if($x["$from_id2"] != null){
$keyboard["inline_keyboard"]=[];
for($i=0;$i<count($x["$from_id2"]);$i++){
$js = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=".$x["$from_id2"][$i]),1);
$id = $js["result"]["id"];
$na = $js["result"]["title"];

$keyboard["inline_keyboard"][$i] = [['text'=>$x["$from_id2"][$i],'callback_data'=>"."],['text'=>"• اعداد ⚙",'callback_data'=>"getadmin#".$x["$from_id2"][$i]]];
}
$keyboard["inline_keyboard"][] = [['text'=>"• رجوع '🔙،",'callback_data'=>'back']];
$reply_markup = json_encode($keyboard); 
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
#️⃣ ⌯ اهلا بك في قائمه  قنواتك
",
'reply_markup'=>$reply_markup,
]);
}
else
{
bot('editmessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"‼️ ⌯ *لم تقم باضافة قنوات او مجموعات *",'parse_mode'=>"Markdown",
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• رجوع '🔙،",'callback_data'=>'back']],
]])
]);
}
}
$ex = explode("#",$data);

if($ex[0] == "getadmin"){
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$ex[1]),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['first_name'];
	  $owner2 = $result[$key]['user']['id'];}
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."l "."[{$innames}](tg://user?id={$result[$key]['user']['id']}) . ID ~ `{$result[$key]['user']['id']}`";
}
  }
}
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
⚙️ - هذه قائمة المشرفين هنا*
👨🏻‍💻 المالك :- $owner .
ــ ايديه :- `$owner2` .

$msg
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"~ رجوع","callback_data"=>"back"]],
[["text"=>"~ رفع مشرف ","callback_data"=>"x#$ex[1]"],["text"=>"~ تنزيل مشرف","callback_data"=>"y#$ex[1]"]]
]
])
]);
}
if($ex[0] == "x"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
~ اهلا بك عزيزي المالك 
• ارسل ايدي المشرف لرفعه في القناة او المجموعه ~ ⚙*",'parse_mode'=>'markdown','disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"~ رجوع","callback_data"=>"back"]],
]
])
]);
$sttings["$from_id2"]=$ex[1];
$sttings["data"]["$from_id2"]="up";
file_put_contents("SETT.txt",json_encode($sttings,128|34|256));
}
if($ex[0] == "y"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"*
~ اهلا بك عزيزي المالك 
• ارسل ايدي المشرف لتنزيله في القناة او المجموعه ~ ⚙*",'parse_mode'=>'markdown','disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"~ رجوع","callback_data"=>"back"]],
]
])
]);
$sttings["$from_id2"]=$ex[1];
$sttings["data"]["$from_id2"]="down";
file_put_contents("SETT.txt",json_encode($sttings,128|34|256));
}
if($text and $sttings["data"]["$from_id"]=="down"){
$js = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=".$sttings["$from_id"]),1);
$id = $js["result"]["id"];
$na = $js["result"]["title"];
$tc = $js["result"]["type"];
$get = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=".$sttings["$from_id"]."&user_id=5422153027"),true);
$ge = $get["result"]["can_promote_members"];
if($ge == true){

if($tc == "channel"){
bot('promoteChatMember',[
'user_id'=>$text,
'chat_id'=>$sttings["$from_id"],
"can_invite_users"=>false,
"can_change_info"=>false,
"can_promote_members"=>false,
"can_restrict_members"=>false,
"can_manage_voice_chats"=>false,
"can_edit_messages"=>false,
"can_delete_messages"=>false,
"can_manage_chat"=>false,
"is_anonymous"=>false,
"can_post_messages"=>false,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
• تم تنزيله مشرف* $text
•  في [$na](tg://user?id=$id) 
*~ بواسطة* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"~ رجوع","callback_data"=>"back"]],
]
])
]);
Unset($sttings["$from_id"]);
Unset($sttings["data"]["$from_id"]);
file_put_contents("SETT.txt",json_encode($sttings,128|34|256));
}else{
bot('restrictChatMember',[
'user_id'=>$text,
'chat_id'=>$sttings["$from_id"],
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
• تم تنزيله مشرف* $text
•  في [$na](tg://user?id=$id) 
*~ بواسطة* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"~ رجوع","callback_data"=>"back"]],
]
])
]);
Unset($sttings["$from_id"]);
Unset($sttings["data"]["$from_id"]);
file_put_contents("SETT.txt",json_encode($sttings,128|34|256));
}}}
if($text and $sttings["data"]["$from_id"]=="up"){
$js = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=".$sttings["$from_id"]),1);
$id = $js["result"]["id"];
$na = $js["result"]["title"];
$tc = $js["result"]["type"];
$get = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=".$sttings["$from_id"]."&user_id=5422153027"),true);
$ge = $get["result"]["can_promote_members"];
if($ge == true){
if($tc == "channel"){
bot('promoteChatMember',[
 'chat_id'=>$sttings["$from_id"],
'user_id'=>$text,
 "can_invite_users"=>true,
"can_change_info"=>false,
"can_restrict_members"=>true,
'can_promote_members'=>false,
"can_manage_voice_chats"=>false,
"can_edit_messages"=>true,
"can_delete_messages"=>false,
"can_manage_chat"=>true,
"is_anonymous"=>false,
"can_post_messages"=>true,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
• تم رفعه مشرف* $text
•  في [$na](tg://user?id=$id) 
*~ بواسطة* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"~ رجوع","callback_data"=>"back"]],
]
])
]);
Unset($sttings["$from_id"]);
Unset($sttings["data"]["$from_id"]);
file_put_contents("SETT.txt",json_encode($sttings,128|34|256));
}else{
bot('promoteChatMember',[
 'chat_id'=>$sttings["$from_id"],
'user_id'=>$text,
 'can_change_info'=>True,
'can_delete_messages'=>True,
'can_invite_users'=>True,
'can_restrict_members'=>True,
'can_pin_messages'=>True,
'can_promote_members'=>false,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
• تم رفعه مشرف* $text
•  في [$na](tg://user?id=$id) 
*~ بواسطة* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"~ رجوع","callback_data"=>"back"]],
]
])
]);
Unset($sttings["$from_id"]);
Unset($sttings["data"]["$from_id"]);
file_put_contents("SETT.txt",json_encode($sttings,128|34|256));
}}}
if($text and $sttings["data"]["$from_id"]=="up"){
$get = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=".$sttings["$from_id"]."&user_id=5422153027"),true);
$ge = $get["result"]["can_promote_members"];
if($ge != true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
• خطاء البوت لا يمتلك صلاحية رفع مشرفين ❌
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"~ رجوع","callback_data"=>"back"]],
]
])
]);
}}
if($update->chat_member->new_chat_member->status == "kicked" and $statuss != 'creator'){
$how = $update->chat_member->from->id;
$houe = $update->chat_member->from->username;
$hona = $update->chat_member->from->first_name;
$tii = $update->chat_member->chat->title;
$tiid = $update->chat_member->chat->id;
$js = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$tiid"),1);
$id = $js["result"]["id"];
$na = $js["result"]["title"];
$tc = $js["result"]["type"];
if($tc == "channel"){
if(!@$houe){
$user="لايوجد معرف";
}elseif(@$houe){
$user="@$houe";
}
bot('sendmessage',[
'chat_id'=>$tiid,
'text'=>"
*👨🏻‍💻 اهلا عزيزي مالك القناة .
• هناك ادمن قام بطرد عظو من القناة .
• وتم انزاله من الصلاحيات  معلوماته في الخاص .

⌯︙ اسمه :- $hona .
⌯︙ ايديه :- *`$how`*.
⌯︙ معرفه :- $user .

📛 العضو المحظور 
⌯︙ اسمه :_ $ban_name .
⌯︙ ايديه :_ *`$ban_id`*.

⌯︙ ᴄʜɪ:- $tii $tiu*
",'parse_mode'=>'markdown',
]);
bot('promoteChatMember',[
'user_id'=>$how,
'chat_id'=>$tiid,
"can_invite_users"=>false,
"can_change_info"=>false,
"can_promote_members"=>false,
"can_restrict_members"=>false,
"can_manage_voice_chats"=>false,
"can_edit_messages"=>false,
"can_delete_messages"=>false,
"can_manage_chat"=>false,
"is_anonymous"=>false,
"can_post_messages"=>false,
]);
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$tiid),true);
$result = $up['result'];
foreach($result as $key=>$value){
$found = $result[$key]['status'];
if($found == "creator"){
$owner = $result[$key]['user']['id'];
$owner2 = $result[$key]['user']['username'];
}
}
if(!@$houe){
$user="لايوجد معرف";
}elseif(@$houe){
$user="@$houe";
}
bot('sendmessage',[
'chat_id'=>$owner,
'text'=>"
*👨🏻‍💻 اهلا عزيزي مالك القناة .
• هناك ادمن قام بطرد عظو من القناة .
• وتم انزاله من الصلاحيات  معلوماته في الخاص .

⌯︙ اسمه :- $hona .
⌯︙ ايديه :- *`$how`*.
⌯︙ معرفه :- $user .

📛 العضو المحظور 
⌯︙ اسمه :_ $ban_name .
⌯︙ ايديه :_ *`$ban_id`*.

⌯︙ ᴄʜɪ:- $tii $tiu*
",'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• اعادة رفع ~ ⚙","callback_data"=>"reup#$how&$tiid"]]
]
])
]);
}else{
if(!@$houe){
$user="لايوجد معرف";
}elseif(@$houe){
$user="@$houe";
}
bot('sendmessage',[
'chat_id'=>$tiid,
'text'=>"
*👨🏻‍💻 عزيزي مالك المجموعة .
• هناك ادمن قام بطرد عظو من المجموعة .
• وتم انزاله من الصلاحيات  معلوماته في الخاص .

⌯︙ اسمه :- $hona .
⌯︙ ايديه :- *`$how`*.
⌯︙ معرفه :- $user .

📛 العضو المحظور 
⌯︙ اسمه :_ $ban_name .
⌯︙ ايديه :_ *`$ban_id`*.

⌯︙ ɢʀᴏᴜᴘ:-$tii $tiu*
",'parse_mode'=>'markdown',
]);
bot('restrictChatMember',[
'user_id'=>$how,
'chat_id'=>$tiid,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
'can_send_media_messages'=>true,
]);
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$tiid),true);
$result = $up['result'];
foreach($result as $key=>$value){
$found = $result[$key]['status'];
if($found == "creator"){
$owner = $result[$key]['user']['id'];
$owner2 = $result[$key]['user']['username'];
}
}
if(!@$houe){
$user="لايوجد معرف";
}elseif(@$houe){
$user="@$houe";
}
bot('sendmessage',[
'chat_id'=>$owner,
'text'=>"
*👨🏻‍💻 اهلا عزيزي مالك القناة .
• هناك ادمن قام بطرد عظو من القناة .
• وتم انزاله من الصلاحيات  معلوماته في الخاص .

⌯︙ اسمه :- $hona .
⌯︙ ايديه :- *`$how`*.
⌯︙ معرفه :- $user .

📛 العضو المحظور 
⌯︙ اسمه :_ $ban_name .
⌯︙ ايديه :_ *`$ban_id`*.

⌯︙ ᴄʜɪ:- $tii $tiu*
",'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• اعادة رفع ~ ⚙","callback_data"=>"reup#$how&$tiid"]]
]
])
]);
}}
$fx = explode("#",$data);
if($fx[0] == "reup"){
$gx = explode("&",$fx[1]);
bot('promoteChatMember',[
 'chat_id'=>$gx[1],
'user_id'=>$gx[0],
 "can_invite_users"=>true,
"can_change_info"=>true,
"can_promote_members"=>false,
"can_restrict_members"=>true,
"can_manage_voice_chats"=>true,
"can_edit_messages"=>true,
"can_delete_messages"=>true,
"can_manage_chat"=>true,
"is_anonymous"=>false,
"can_post_messages"=>true,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"*$id
•  تم رفعه، مشرف مجددا* $gx[0] 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$update->message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"~ رجوع","callback_data"=>"back"]],
]
])
]);
}
if($rt && $text == "رفع مشرف"){
if($statuss == 'creator') {
$get = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=5422153027"),true);
$ge = $get["result"]["can_promote_members"];
if($ge == true){
bot('promoteChatMember',[
 'chat_id'=>$chat_id,
'user_id'=>$re_id,
 'can_change_info'=>True,
'can_delete_messages'=>True,
'can_invite_users'=>True,
'can_restrict_members'=>True,
'can_pin_messages'=>True,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
• تم رفعه، مشرف * [$re_name](tg://user?id=$re_id)  
*~ بواسطة* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$update->message->message_id,
 ]);
}
}
}
elseif($rt && $text =="تنزيل مشرف"){
if($statuss == 'creator') {
$get = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=5422153027"),true);
$ge = $get["result"]["can_promote_members"];
if($ge == true){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
• تم تنزيله مشرف* [$re_name](tg://user?id=$re_id)  
*~ بواسطة* [$first_name](tg://user?id=$from_id) 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('restrictChatMember',[
'user_id'=>$re_id,
'chat_id'=>$chat_id,
'can_post_messages'=>true,
'can_add_web_page_previews'=>false,
'can_send_other_messages'=>true,
]);
}
}
}
if($rt && $text == "رفع مشرف"){
if($statuss == 'creator'){
$get = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=5422153027"),true);
$ge = $get["result"]["can_promote_members"];
if($ge != true){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
• لا امتلك صلاحية رفع مشرفين 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($update->message->chat->type == 'group'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"•عذرا لا اعمل سوى في المجموعات الخارقة والقنوات 
- sorry i can't work on group just supergroup and channel",'reply_to_meesage_id'=>$message->message_id,
]);
bot('LeaveChat',[
'chat_id'=>$chat_id,
]);
}