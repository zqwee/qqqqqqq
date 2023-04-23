<?php
ob_start();
$host=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

$name_admen=$update->chat_member->from->first_name;
$user_admen=$update->chat_member->from->username;
$ban=$update->chat_member->new_chat_member->status;
$chatban=$update->chat_member->chat->id;
$ban_id=$update->chat_member->old_chat_member->user->id; 
$ban_name=$update->chat_member->old_chat_member->user->first_name;
$ban_user=$update->chat_member->old_chat_member->user->username;
$tt= json_decode(file_get_contents('php://input'))->my_chat_member->old_chat_member->can_promote_members; 
$ccc=json_decode(file_get_contents('php://input'))->my_chat_member->chat->id;
$admen=json_decode(file_get_contents('php://input'))->my_chat_member->from->id;
$ba=json_decode(file_get_contents('php://input'))->my_chat_member->new_chat_member->can_promote_members;
$onion = json_encode(['message', 'edited_message', 'channel_post', 'edited_channel_post', 'inline_query', 'chosen_inline_result', 'callback_query', 'shipping_query', 'pre_checkout_query', 'poll', 'poll_answer', 'my_chat_member', 'chat_member']); file_get_contents("https://api.telegram.org/bot$token/setwebhook?max_connections=100&allowed_updates=" . $onion . "&drop_pending_updates=true&url=https://$host");


$chat= $update->channel_post->chat->id;
$text1 = $update->channel_post->text;
$id_admen=$update->chat_member->from->id; 
$name_admen=$update->chat_member->from->first_name;
$user_admen=$update->chat_member->from->username;
$ban=$update->chat_member->new_chat_member->status;
$chatban=$update->chat_member->chat->id;
$ban_id=$update->chat_member->old_chat_member->user->id; 
$ban_name=$update->chat_member->old_chat_member->user->first_name;
$ban_user=$update->chat_member->old_chat_member->user->username;
$tt= json_decode(file_get_contents('php://input'))->my_chat_member->old_chat_member->can_promote_members; 
$ccc=json_decode(file_get_contents('php://input'))->my_chat_member->chat->id;
$admen=json_decode(file_get_contents('php://input'))->my_chat_member->from->id;
$ba=json_decode(file_get_contents('php://input'))->my_chat_member->new_chat_member->can_promote_members;
$onion = json_encode(['message', 'edited_message', 'channel_post', 'edited_channel_post', 'inline_query', 'chosen_inline_result', 'callback_query', 'shipping_query', 'pre_checkout_query', 'poll', 'poll_answer', 'my_chat_member', 'chat_member']); file_get_contents("https://api.telegram.org/bot$token/setwebhook?max_connections=100&allowed_updates=" . $onion . "&drop_pending_updates=true&url=https://$host");

if(!@$user_admen){
$casss = "لايوجد يوزر";
}elseif(@$user_admen){
$casss = "@$user_admen";
}

if(!@$ban_user){
$cass = "لايوجد يوزر";
}elseif(@$ban_user){
$cass = "@$ban_user";
}

#رفع ادمن بالقناه
$admen = str_replace("رفع ادمن ","",$text1);
if($text1 == "رفع ادمن $admen"){
bot('promoteChatMember',[
'user_id'=>"$admen", 
'chat_id'=>$chat, 
"can_change_info"=>true, 
"can_post_messages"=>true, 
"can_edit_messages"=>true, 
"can_delete_messages"=>true, 
"can_invite_users"=>true, 
"can_restrict_members"=>true, 
"can_pin_messages"=>true, 
"can_promote_members"=>false
]); 
bot('sendmessage',[
'chat_id'=>$chat,
'text'=>"- تم رفع ادمن في القناة 
"]); 
} 

