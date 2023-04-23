<?php
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$step=file_get_contents("data/$fadmin/name.txt");
$update = json_decode(file_get_contents('php://input'));
$channel = $update->channel_post;
$channel_text = $channel->text;
$channel_mid = $channel->message_id;
$channel_id = $channel->chat->id;
$channel_user = $channel->chat->username;
$chanel_doc = $channel->document;
$chanel_video = $channel->video;
$channel_Title = $channel->chat->title;
$channel_audio = $channel->audio;
$channel_audioTitle = $channel_audio->title;
$message_ch = $update->channel_post;
$message_ch_photo = $message_ch->photo;
$channel_id = $channel->chat->id;
$channel_poto = $channel->photo;
$name = $message ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
    $message = $update->message;
    $text = $message->text;
    $chat_id = $message->chat->id;
    $from_id = $message->from->id;
    $message_id = $message->message_id;
    $first_name = $message->from->first_name;
    $username = $message->from->username;
    $chid           = $update->channel_post->chat->id;
    $chtext         = $update->channel_post->text;
    $messageid      = $update->channel_post->message_id;
    $document       = $update->channel_post->document;
    $sticker        = $update->channel_post->sticker;
    $photo          = $update->channel_post->photo;
    $video          = $update->channel_post->video;
    $forward        = $update->channel_post->forward_from_chat;
    $contact        = $update->channel_post->contact;
    $audio          = $update->channel_post->audio;
$bi = "@Ng_114bot";
$documents = "المتحركة";
$stickers = "الملصقات";
$photos = "الصور";
$videos = "الفيديوهات";
$forwards = "التوجيه";
$contacts = "المواقع";
$audios = "الصوت";
$links = "الروابط";
$voicasds = "حقوق الصوت";
$usernames = "المعرفات";
$chid  = $update->channel_post->chat->id;
$chid2  = $update->callback_query->message->chat->id;
$chtext = $update->channel_post->text;
$messageid2 = $update->callback_query->message_id;
$data = $update->callback_query->data;
$channel = "@Ng_114bot";
$ARMOFX = json_decode(file_get_contents("data/$chid.json"),true);
$from_id2 = $update->callback_query->from->id;
$from_id = $update->channel_post->from->id;
$statjsond = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chid2&user_id=".$from_id2),1);
$statusd = $statjsond['result']['status'];
$ARMOFX = json_decode(file_get_contents("data/$chid.json"), true);
$statjson = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chid&user_id=".$from_id),1);
$status = $statjson['result']['status'];
if($ARMOFX["administrator"]=="❎"){
$administrato = ❎;
}else{$administrato = $status;
}
if(!$ARMOFX['text']){
$ARMOFX = json_decode(file_get_contents("data/$chid.json"), true);
$ARMOFX["text"]="✅";
$ARMOFX["photo"]="✅";
$ARMOFX["video"]="✅";
$ARMOFX["sticker"]="✅";
$ARMOFX["document"]="✅";
$ARMOFX["forward"]="✅";
$ARMOFX["audio"]="✅";
$ARMOFX["contact"]="✅";
$ARMOFX["link"]="✅";
$ARMOFX["username"]="✅";
$ARMOFX["voicasd"]="✅";
$ARMOFX["forward"]="✅";
$ARMOFX["eidtmidia"]="✅";
$ARMOFX["administrator"]="✅";
file_put_contents("data/$chid.json", json_encode($ARMOFX,128|32|256));
}
elseif($chtext == "الوضع" or $chtext == "/admin" or $chtext == "مساعده" or $chtext == "/sttings" or $chtext == "/setting" or $chtext == "الاعدادات"){
if($status = 'creator' or $status == $administrato){
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"*📮: هلا بك عزيزي الوضع الان في القناة 
————————
TEXTS: ".$ARMOFX["text"]." 
⌯⁞ (قفل فتح الرسائل). 
LINKS: ".$ARMOFX["link"]." 
⌯⁞ (قفل فتح الروابط). 
PHOTOS: ".$ARMOFX["photo"]." 
⌯⁞ (قفل فتح الصور). 
VIDEOS: ".$ARMOFX["video"]." 
⌯⁞ (قفل فتح الفيديو). 
AUDIOS: ".$ARMOFX["audio"]." 
⌯⁞ (قفل فتح الاغاني). 
RIGHT: ".$ARMOFX["eidtmidia"]." 
⌯⁞ (قفل فتح الحقوق). 
STICKERS: ".$ARMOFX["sticker"]." 
⌯⁞ (قفل فتح الملصقات). 
FORWARDS: ".$ARMOFX["forward"]." 
⌯⁞ (قفل فتح التوجيه). 
LOCATIONS: ".$ARMOFX["contact"]." 
⌯⁞ (قفل فتح المواقع). 
USERNAME: ".$ARMOFX["username"]." 
⌯⁞ (قفل فتح المعرفات). 
ANIMATION: ".$ARMOFX["document"]." 
⌯⁞ (قفل فتح الملفات). 
RIGHT OF SOUND: ".$ARMOFX["voicasd"]."
⌯⁞ (قفل فتح حقوق الصوت). 
ADMINISTRATOR: ".$ARMOFX["administrator"]."
⌯⁞ (قفل فتح تحكم المشرفين). 
‌‏━ ━ ‏━‏ ━‏ ━‏ ━‏ ━‏ ━‏*",'parse_mode'=>'markdown','message_id'=>$message_ch_mid,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>'• احمي قناتك ⚙' ,'url'=>"t.me/n45bot"]],
]
])
]);
}}

if($chtext == "الاوامر" or $chtext == "/admin" or $chtext == "مساعده" or $chtext == "/sttings" or $chtext == "/setting" or $chtext == "الاعدادات"){
if($status = 'creator' or $status == $administrato){
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"*⚙ ⁞ مرحبا بك عزيزي المدير في .
⌯︙لائحة الاوامر للبوت .
⌯︙الاوامر المقفولة بـ ❎.
⌯︙المفتوحة بـ ✅.
 ┉ • ┉ • ┉ • ┉*",'parse_mode'=>'markdown','message_id'=>$message_ch_mid,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• الصور','callback_data'=>"💭"],['text'=>$ARMOFX["photo"],'callback_data'=>"1#photo"]],
[['text'=>'• الفيديوهات','callback_data'=>"💭"],['text'=>$ARMOFX["video"],'callback_data'=>"1#video"]],
[['text'=>'• الموسيقى','callback_data'=>"💭"],['text'=>$ARMOFX["audio"],'callback_data'=>"1#audio"]],
[['text'=>'• الملفات','callback_data'=>"💭"],['text'=>$ARMOFX["document"],'callback_data'=>"1#document"]],
[['text'=>'• الحقوق','callback_data'=>"💭"],['text'=>$ARMOFX["eidtmidia"],'callback_data'=>"1#eidtmidia"]],
[['text'=>'• التوجيه','callback_data'=>"💭"],['text'=>$ARMOFX["forward"],'callback_data'=>"1#forward"]],
[['text'=>'• الرسائل','callback_data'=>"💭"],['text'=>$ARMOFX["text"],'callback_data'=>"1#text"]],
[['text'=>'• المواقع','callback_data'=>"💭"],['text'=>$ARMOFX["contact"],'callback_data'=>"1#contact"]],
[['text'=>'• الملصقات','callback_data'=>"💭"],['text'=>$ARMOFX["sticker"],'callback_data'=>"1#sticker"]],
[['text'=>'• الروابط','callback_data'=>"💭"],['text'=>$ARMOFX["link"],'callback_data'=>"1#link"]],
[['text'=>'• المعرفات','callback_data'=>"💭"],['text'=>$ARMOFX["username"],'callback_data'=>"1#username"]],
[['text'=>'• حقوق الاغاني','callback_data'=>"💭"],['text'=>$ARMOFX["voicasd"],'callback_data'=>"1#voicasd"]],
[['text'=>'•  تحكم المشرفين','callback_data'=>"myadmins"],['text'=>$ARMOFX["administrator"],'callback_data'=>"myadmins"]],
[['text'=>'.🔜 الكل •','callback_data'=>"⚙"],['text'=>"⚙",'callback_data'=>"2#"]],
[['text'=>'• استخدم البوت في قناتك ⚙','url'=>"t.me/Ng_114bot"]],
] 
])
]);
}
}
$max = explode("#",$data);
if($max[0] == "1"){
$ARMOFX = json_decode(file_get_contents("data/$chid2.json"), true);
if($ARMOFX["administrator"]=="❎"){
$administrator = ❎;
}else{$administrator = $statusd;}
if($statusd == 'creator' or $statusd == $administrator){
$ARMOFX = json_decode(file_get_contents("data/$chid2.json"), true);
if($ARMOFX[$max[1]]!=="✅"){
$iu = "✅";
}else{
$iu = "❎";
}
$ARMOFX[$max[1]] = $iu;
file_put_contents("data/$chid2.json",json_encode($ARMOFX,128|32|256));
bot('editMessageReplyMarkup',[
'chat_id'=>$chid2,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• الصور','callback_data'=>"💭"],['text'=>$ARMOFX["photo"],'callback_data'=>"1#photo"]],
[['text'=>'• الفيديوهات','callback_data'=>"💭"],['text'=>$ARMOFX["video"],'callback_data'=>"1#video"]],
[['text'=>'• الموسيقى','callback_data'=>"💭"],['text'=>$ARMOFX["audio"],'callback_data'=>"1#audio"]],
[['text'=>'• الملفات','callback_data'=>"💭"],['text'=>$ARMOFX["document"],'callback_data'=>"1#document"]],
[['text'=>'• الحقوق','callback_data'=>"💭"],['text'=>$ARMOFX["eidtmidia"],'callback_data'=>"1#eidtmidia"]],
[['text'=>'• التوجيه','callback_data'=>"💭"],['text'=>$ARMOFX["forward"],'callback_data'=>"1#forward"]],
[['text'=>'• الرسائل','callback_data'=>"💭"],['text'=>$ARMOFX["text"],'callback_data'=>"1#text"]],
[['text'=>'• المواقع','callback_data'=>"💭"],['text'=>$ARMOFX["contact"],'callback_data'=>"1#contact"]],
[['text'=>'• الملصقات','callback_data'=>"💭"],['text'=>$ARMOFX["sticker"],'callback_data'=>"1#sticker"]],
[['text'=>'• الروابط','callback_data'=>"💭"],['text'=>$ARMOFX["link"],'callback_data'=>"1#link"]],
[['text'=>'• المعرفات','callback_data'=>"💭"],['text'=>$ARMOFX["username"],'callback_data'=>"1#username"]],
[['text'=>'• حقوق الاغاني','callback_data'=>"💭"],['text'=>$ARMOFX["voicasd"],'callback_data'=>"1#voicasd"]],
[['text'=>'•  تحكم المشرفين','callback_data'=>"myadmins"],['text'=>$ARMOFX["administrator"],'callback_data'=>"myadmins"]],
[['text'=>'.🔜 الكل •','callback_data'=>"⚙"],['text'=>"⚙",'callback_data'=>"2#"]],
[['text'=>'• استخدم البوت في قناتك ⚙','url'=>"t.me/n45bot"]],
]])]);
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"🤷‍♂️ هذا الامر ليس لك @Ng_114bot", 
'show_alert'=>true 
 ]); 
}}
$max = explode("#",$data);
if($max[0] == "2"){
$ARMOFX = json_decode(file_get_contents("data/$chid2.json"), true);
if($ARMOFX["administrator"]=="❎"){
$administrator = ❎;
}else{$administrator = $statusd;}
if($statusd == 'creator' or $statusd == $administrator){
$ARMOFX = json_decode(file_get_contents("data/$chid2.json"), true);
if($ARMOFX["photo"]!=="✅"){
$iu = "✅";
}else{
$iu = "❎";
}
$ARMOFX["photo"] = $iu;
$ARMOFX["video"] = $iu;
$ARMOFX["text"] = $iu;
$ARMOFX["document"] = $iu;
$ARMOFX["sticker"] = $iu;
$ARMOFX["audio"] = $iu;
$ARMOFX["username"] = $iu;
$ARMOFX["link"] = $iu;
$ARMOFX["contact"] = $iu;
$ARMOFX["forward"] = $iu;
$ARMOFX["voicasd"] = $iu;
file_put_contents("data/$chid2.json",json_encode($ARMOFX,128|32|256));
bot('editMessageReplyMarkup',[
'chat_id'=>$chid2,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• الصور','callback_data'=>"💭"],['text'=>$ARMOFX["photo"],'callback_data'=>"1#photo"]],
[['text'=>'• الفيديوهات','callback_data'=>"💭"],['text'=>$ARMOFX["video"],'callback_data'=>"1#video"]],
[['text'=>'• الموسيقى','callback_data'=>"💭"],['text'=>$ARMOFX["audio"],'callback_data'=>"1#audio"]],
[['text'=>'• الملفات','callback_data'=>"💭"],['text'=>$ARMOFX["document"],'callback_data'=>"1#document"]],
[['text'=>'• الحقوق','callback_data'=>"💭"],['text'=>$ARMOFX["eidtmidia"],'callback_data'=>"1#eidtmidia"]],
[['text'=>'• التوجيه','callback_data'=>"💭"],['text'=>$ARMOFX["forward"],'callback_data'=>"1#forward"]],
[['text'=>'• الرسائل','callback_data'=>"💭"],['text'=>$ARMOFX["text"],'callback_data'=>"1#text"]],
[['text'=>'• المواقع','callback_data'=>"💭"],['text'=>$ARMOFX["contact"],'callback_data'=>"1#contact"]],
[['text'=>'• الملصقات','callback_data'=>"💭"],['text'=>$ARMOFX["sticker"],'callback_data'=>"1#sticker"]],
[['text'=>'• الروابط','callback_data'=>"💭"],['text'=>$ARMOFX["link"],'callback_data'=>"1#link"]],
[['text'=>'• المعرفات','callback_data'=>"💭"],['text'=>$ARMOFX["username"],'callback_data'=>"1#username"]],
[['text'=>'• حقوق الاغاني','callback_data'=>"💭"],['text'=>$ARMOFX["voicasd"],'callback_data'=>"1#voicasd"]],
[['text'=>'•  تحكم المشرفين','callback_data'=>"myadmins"],['text'=>$ARMOFX["administrator"],'callback_data'=>"myadmins"]],
[['text'=>'.🔜 الكل •','callback_data'=>"⚙"],['text'=>"⚙",'callback_data'=>"2#"]],
[['text'=>'• استخدم البوت في قناتك ⚙','url'=>"t.me/Ng_114bot"]],
]])]);
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"🤷‍♂️ هذا الامر ليس لك @Ng_114bot", 
'show_alert'=>true 
 ]); 
}}
if($data == "myadmins"){
if($statusd == 'creator' or $statusd == $administrato){
$ARMOFX = json_decode(file_get_contents("data/$chid2.json"), true);
if($ARMOFX["administrator"]!=="✅"){
$iu = "✅";
}else{
$iu = "❎";
}
$ARMOFX["administrator"] = $iu;
file_put_contents("data/$chid2.json",json_encode($ARMOFX,128|32|256));
bot('editMessageReplyMarkup',[
'chat_id'=>$chid2,
'message_id'=>$update->callback_query->message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• الصور','callback_data'=>"💭"],['text'=>$ARMOFX["photo"],'callback_data'=>"1#photo"]],
[['text'=>'• الفيديوهات','callback_data'=>"💭"],['text'=>$ARMOFX["video"],'callback_data'=>"1#video"]],
[['text'=>'• الموسيقى','callback_data'=>"💭"],['text'=>$ARMOFX["audio"],'callback_data'=>"1#audio"]],
[['text'=>'• الملفات','callback_data'=>"💭"],['text'=>$ARMOFX["document"],'callback_data'=>"1#document"]],
[['text'=>'• الحقوق','callback_data'=>"💭"],['text'=>$ARMOFX["eidtmidia"],'callback_data'=>"1#eidtmidia"]],
[['text'=>'• التوجيه','callback_data'=>"💭"],['text'=>$ARMOFX["forward"],'callback_data'=>"1#forward"]],
[['text'=>'• الرسائل','callback_data'=>"💭"],['text'=>$ARMOFX["text"],'callback_data'=>"1#text"]],
[['text'=>'• المواقع','callback_data'=>"💭"],['text'=>$ARMOFX["contact"],'callback_data'=>"1#contact"]],
[['text'=>'• الملصقات','callback_data'=>"💭"],['text'=>$ARMOFX["sticker"],'callback_data'=>"1#sticker"]],
[['text'=>'• الروابط','callback_data'=>"💭"],['text'=>$ARMOFX["link"],'callback_data'=>"1#link"]],
[['text'=>'• المعرفات','callback_data'=>"💭"],['text'=>$ARMOFX["username"],'callback_data'=>"1#username"]],
[['text'=>'• حقوق الاغاني','callback_data'=>"💭"],['text'=>$ARMOFX["voicasd"],'callback_data'=>"1#voicasd"]],
[['text'=>'•  تحكم المشرفين','callback_data'=>"myadmins"],['text'=>$ARMOFX["administrator"],'callback_data'=>"myadmins"]],
[['text'=>'.🔜 الكل •','callback_data'=>"⚙"],['text'=>"⚙",'callback_data'=>"2#"]],
[['text'=>'• استخدم البوت في قناتك ⚙','url'=>"t.me/Ng_114bot"]],
]])]);
}
else
{
bot('answerCallbackQuery',[ 
'callback_query_id'=>$update->callback_query->id, 
'text'=>"⚠️ الامر للمالك فقط @Ng_114bot", 
'show_alert'=>true 
 ]); 
}}
if($ARMOFX["document"] == "❎"){
if(isset($document)){  
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);}}
if($ARMOFX["sticker"] == "❎"){
if(isset($sticker)){  
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);}}
if($ARMOFX["photo"] == "❎"){
if(isset($photo)){  
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);}}
if($ARMOFX["video"] == "❎"){
if(isset($video)){  
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);}}
if($ARMOFX["text"] == "❎"){
if(isset($chtext)){ 
if($chtext !== "فتح الرسائل"){ 
if($chtext !== "فتح الكل"){ 
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);}}}}
$forw = $update->channel_post->forward_from;
$forww = $update->channel_post->forward_from_chat;
if($ARMOFX["forward"] == "❎"){
if(isset($forw) or isset($forww)){  
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);}}
if($ARMOFX["contact"] == "❎"){
if(isset($contact)){  
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);}}
elseif($ARMOFX["audio"] == "❎"){
if(isset($audio)){  
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);}}
if($ARMOFX["audio"] == "❎"){
if(isset($voice)){  
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);}}
if($ARMOFX["link"] == "❎"){
if (strstr($chtext ,"t.me") == true or strstr($text ,"telegram.me") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me" ) == true or strstr($text ,"T.me") == true or strstr($text ,"T.Me") == true or strstr($caption,"T.ME") == true or strstr($caption,"Telegram.me" )== true or strstr($text ,"://") == true or strstr($text ,".com") == true or strstr($caption,"www.") == true or strstr($caption,".org" ) == true or strstr($text ,".online") == true or strstr($text ,".net") == true or strstr($caption,".ml") == true or strstr($caption,".cf" )) {   
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);}}
elseif($ARMOFX["username"] == "❎"){
if(strstr($chtext ,"@") == true or strstr($caption,"@") == true) {
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);}}if(isset($audio)){
if($ARMOFX["voicasd"]=="❎"){
$channel = $update->channel_post;
$channel_user = $channel->chat->username;
$chname = $channel->chat->first_name;
$texxx = $channel->caption;
$a = explode('@',$texxx);
$f = str_replace($a[1],'',$texxx);
$d = str_replace('@','',$f);
$armof = $channel_mid+1;
$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$update->channel_post->audio->file_id])->result->file_path;
file_put_contents("$chid.mp3",file_get_contents($file));
$filee = "https://t.me/$channel_user";
$a = file_get_contents("$filee");
$b = explode('<meta property="og:image" content="',$a);
$d = explode('">',$b[1]);
$c = strip_tags($d[0]);
file_put_contents("$chid.jpg",file_get_contents($c));
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid,
]);
bot('sendaudio',[
'chat_id'=>$chid,
'audio'=>new CURLFile("$chid.mp3"),
'performer'=>"@$channel_user",
'title'=>$update->channel_post->audio->title,
'thumb'=>new CURLFile("$chid.jpg"),
'caption'=>"
• 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 : @$channel_user",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⇱ 𝑺𝒉𝒂𝒓𝒆", "url"=>"https://t.me/share/url?url=https://t.me/$channel_user/$armof"]],
]])
]);
unlink("$chid.mp3");
unlink("$chid.jpg");}}
$ch = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$text")->result);
if($ARMOFX["eidtmidia"]  == "❎" and $chanel_video){
$export = bot('exportChatInviteLink',[
'chat_id'=>$channel_id,
]);
$a = $export->result;
bot('editMessageCaption',[
'chat_id'=>$channel_id,
'caption'=>"
• 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 : @$channel_user
",
'message_id'=>$channel_mid,
'parse_mode'=> 'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"⇱ 𝑺𝒉𝒂𝒓𝒆", "url"=>"https://t.me/share/url?url=https://t.me/$channel_user/$channel_mid"]], 
]])
]);}
if($ARMOFX["eidtmidia"]  == "❎" and $channel_text){
$export = bot('exportChatInviteLink',[
'chat_id'=>$channel_id,
]);
$a = $export->result;
bot('editMessageCaption',[
'chat_id'=>$channel_id,
'caption'=>"
• 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 : @$channel_user
",
'message_id'=>$channel_mid,
'parse_mode'=> 'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"⇱ 𝑺𝒉𝒂𝒓𝒆", "url"=>"https://t.me/share/url?url=https://t.me/$channel_user/$channel_mid"]], 
]])
]);}
if($ARMOFX["eidtmidia"]  == "❎" and $channel_audio){
$export = bot('exportChatInviteLink',[
'chat_id'=>$channel_id,
]);
$a = $export->result;
bot('editMessageCaption',[
'chat_id'=>$channel_id,
'caption'=>"
• 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 : @$channel_user
",
'message_id'=>$channel_mid,
'parse_mode'=> 'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"⇱ 𝑺𝒉𝒂𝒓𝒆", "url"=>"https://t.me/share/url?url=https://t.me/$channel_user/$channel_mid"]], 
]])
]);}
if($ARMOFX["eidtmidia"]  == "❎" and $channel_poto){
$export = bot('exportChatInviteLink',[
'chat_id'=>$channel_id,
]);
$a = $export->result;
bot('editMessageCaption',[
'chat_id'=>$channel_id,
'caption'=>"
• 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 : @$channel_user
",
'message_id'=>$channel_mid,
'parse_mode'=> 'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"⇱ 𝑺𝒉𝒂𝒓𝒆", "url"=>"https://t.me/share/url?url=https://t.me/$channel_user/$channel_mid"]], 
]])
]);}
if($ARMOFX["eidtmidia"]  == "❎" and $chanel_doc){
$export = bot('exportChatInviteLink',[
'chat_id'=>$channel_id,
]);
$a = $export->result;
bot('editMessageCaption',[
'chat_id'=>$channel_id,
'caption'=>"
• 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 : @$channel_user
",
'message_id'=>$channel_mid,
'parse_mode'=> 'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"⇱ 𝑺𝒉𝒂𝒓𝒆", "url"=>"https://t.me/share/url?url=https://t.me/$channel_user/$channel_mid"]], 
]])
]);
}

if($chtext == "تفعيل"){
if($ARMOFX['text']==null){
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"*
❎ : DONE BOT ACTIVISION 
⚙ : CHANNEL ID .
---------------------*
",'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"• 𝗦𝗘𝗧𝗧𝗜𝗡𝗚𝗦 ⚙",'callback_data'=>"1#"]],[['text'=>'• احمي قناتك  ⚙' ,'url'=>"t.me/n45bot"]],
]
])
]);
$ARMOFX = json_decode(file_get_contents("data/$chid.json"), true);
$ARMOFX["text"]="✅";
$ARMOFX["photo"]="✅";
$ARMOFX["video"]="✅";
$ARMOFX["sticker"]="✅";
$ARMOFX["document"]="✅";
$ARMOFX["forward"]="✅";
$ARMOFX["audio"]="✅";
$ARMOFX["contact"]="✅";
$ARMOFX["link"]="✅";
$ARMOFX["username"]="✅";
$ARMOFX["voicasd"]="✅";
$ARMOFX["forward"]="✅";
$ARMOFX["eidtmidia"]="✅";
file_put_contents("data/$chid.json", json_encode($ARMOFX,128|32|256));
$myadmin = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$channel_id"))->result;
$lnbg = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$channel_id"))->result;
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
تمت اضافة  البوت في القناة التاليه : 
Name : $myadmin->title
ID : $myadmin->id
User : @$myadmin->username
Bio : $myadmin->description
link : $lnbg->invite_link",
'parse_mode'=>"MarkDown",
]);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"*
📊 : DONE BOT ACTIVISION .
⚙ : IN THIS CHANNEL ❎ .
---------------------*
",'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"• 𝗦𝗘𝗧𝗧𝗜𝗡𝗚𝗦 ⚙",'callback_data'=>"1#"]],[['text'=>'• احمي قناتك ⚙' ,'url'=>"t.me/Ng_114bot"]],
]
])
]);
}}
if($chtext == "الايدي" or $chtext == "ايدي"){  
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"*
🔖︙ ايدي القناة* `$chid`
",'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}

if(preg_match('/^(مسح)(.*)/', $chtext, $delete)){
for($m=$messageid; $m>=$messageid-$delete[2]; $m--){
bot('deletemessage',[
'chat_id' => $chid,
'message_id' =>$m,]);
}
bot('sendmessage',[
'chat_id' => $chid,
'text' =>"⌯︙ تم *$chtext* من رسائل المنشورات",'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}

if($chtext =="قفل الصور" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["photo"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل $photos بنجاح
⌯︙ معرف البوت༿ $channel
",'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext =="فتح الصور" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["photo"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح $photos بنجاح
⌯︙ معرف البوت༿ $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext =="قفل الفيديو" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["video"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل $videos بنجاح
⌯︙ معرف البوت $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext =="فتح الفيديو" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["video"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح $videos بنجاح
⌯︙ معرف البوت $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

if($chtext =="قفل الملصقات" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["sticker"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل $stickers بنجاح
⌯︙ معرف البوت $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="فتح الملصقات" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["sticker"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح $stickers بنجاح
⌯︙ معرف البوت༿ $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"CHANNEL",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="قفل المتحركة" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["document"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل $documents بنجاح
⌯︙ معرف البوت༿ $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="فتح المتحركة" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["document"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح $documents بنجاح
⌯︙ معرف البوت༿ $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="قفل التوجيه" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["forward"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل $forwards بنجاح
⌯︙ معرف البوت༿ $channel
",
  'reply_to_message_id'=>$messageid,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="فتح التوجيه" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["forward"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح $forwards بنجاح
⌯︙ معرف البوت༿ $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="قفل الصوت" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["audio"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل $audios بنجاح
⌯︙ معرف البوت༿ $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="فتح الصوت" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["audio"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح $audios بنجاح
⌯︙ معرف البوت༿ $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext == "قفل المواقع" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["contact"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"⌯︙ تم قفل $contacts بنجاح
⌯︙ معرف البوت༿ $channel
",
'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext == "فتح المواقع" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["contact"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"⌯︙ تم فتح $contacts بنجاح
⌯︙ معرف البوت $channel༿
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext =="قفل الرسائل" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["text"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل الرسائل بنجاح
⌯︙ معرف البوت༿ $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="فتح الرسائل" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["text"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح الرسائل بنجاح
⌯︙ معرف البوت༿ $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="قفل الروابط" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["link"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل الروابط بنجاح
⌯︙ معرف البوت༿ $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="فتح الروابط" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["link"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح الروابط بنجاح
⌯︙ معرف البوت  $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="قفل المعرفات" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["username"] = "❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل $usernames بنجاح
⌯︙ معرف البوت $channel
",
  'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}

elseif($chtext =="فتح المعرفات" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["username"] = "✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح $usernames بنجاح
⌯︙ معرف البوت༿ $channel
",'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext =="فتح الكل"){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["text"]="✅";
$ARMOFX["photo"]="✅";
$ARMOFX["video"]="✅";
$ARMOFX["sticker"]="✅";
$ARMOFX["document"]="✅";
$ARMOFX["forward"]="✅";
$ARMOFX["audio"]="✅";
$ARMOFX["contact"]="✅";
$ARMOFX["link"]="✅";
$ARMOFX["username"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"⌯︙ تم فتح الكل بنجاح
⌯︙ معرف البوت  $channel
",'reply_to_message_id'=>$messageid,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext == "قفل الكل" ){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["text"]="❎";
$ARMOFX["photo"]="❎";
$ARMOFX["video"]="❎";
$ARMOFX["sticker"]="❎";
$ARMOFX["document"]="❎";
$ARMOFX["forward"]="❎";
$ARMOFX["audio"]="❎";
$ARMOFX["contact"]="❎";
$ARMOFX["link"]="❎";
$ARMOFX["username"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"⌯︙ تم قفل الكل بنجاح
⌯︙ معرف البوت༿ $channel
",'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}


$linkex = json_decode(file_get_contents("https://api.telegram.org/bot".security."/exportChatInviteLink?chat_id=$chid"));
$linkchannel = $linkex->result;
if($chtext == "الرابط"){
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"   
⌯︙ CHANNEL LINK :⤵️

⌯︙ https://t.me/$channel_user
",'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"⇱ 𝑺𝒉𝒂𝒓𝒆","url"=>"https://t.me/share/url?url=https://t.me/$channel_user/$channel_mid"]], 
]])
]);
}
elseif($chtext == "قفل الحقوق"){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["eidtmidia"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل اضافة الحقوق بنجاح
⌯︙ معرف البوت༿ $channel
",'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext == "فتح الحقوق"){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["eidtmidia"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح اضافة الحقوق بنجاح
⌯︙ معرف البوت༿ $channel
",'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext =="قفل حقوق الصوت"){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["voicasd"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل $voicasds بنجاح 
⌯︙ معرف البوت༿ $channel
",'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
# @php_aba @armof#
elseif($chtext =="فتح حقوق الصوت"){
if($status = 'creator' or $administrato == 'administrator'){
$ARMOFX["voicasd"]="✅";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح $voicasds بنجاح 
⌯︙ معرف البوت༿ $channel
",'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext == "فتح تحكم المشرفين"){
if($status = 'creator' ){
$ARMOFX["administrator"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم فتح تحكم المشرفين بنجاح
⌯︙ معرف البوت༿ $channel
",'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext =="قفل تحكم المشرفين"){
if($status = 'creator' ){
$ARMOFX["administrator"]="❎";
$ARMOFX = json_encode($ARMOFX,128|32|256);
file_put_contents("data/$chid.json",$ARMOFX);
 bot('sendmessage',[
 'chat_id'=>$chid,
 'text'=>"⌯︙ تم قفل تحكم المشرفين بنجاح
⌯︙ معرف البوت༿ $channel
",'reply_to_message_id'=>$messageid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- CHANNEL.",'url'=>"t.me/$chi"]],
]])]);}
}
elseif($chtext =="غادر"){
 bot('LeaveChat',[
 'chat_id'=>$chid,
 ]);
}
$message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;
$message_ch_author = $message_ch->author_signature;
$message_ch_mid = $message_ch->message_id;
$message_ch_chid = $message_ch->chat->id;
$message_ch_user = $message_ch->chat->username;
$audio_ch = $message_ch->audio;
$texxx = $message_ch->caption;
$message_ch_voice = $message_ch->voice;
if($ARMOFX["eidtmidia"] == "❎"){
if(isset($message_ch_voice)){
$export = bot('exportChatInviteLink',[
'chat_id'=>$message_ch_chid,]);
$a = $export->result; bot('editMessageCaption',[
'chat_id'=>$message_ch_chid,
'caption'=>"[$texxx] 
• 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 : [@$channel_user] 
",'message_id'=>$message_ch_mid,
'parse_mode'=> 'Markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"⇱ 𝑺𝒉𝒂𝒓𝒆","url"=>"https://t.me/share/url?url=https://t.me/$channel_user/$channel_mid"]],
]])
]);
}}

?>
