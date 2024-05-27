<?php
error_reporting(0);
$host=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$token = "7007835721:AAGnV4H9mPFWIKVmquNueDaYKVZcuiPp5to"; #توكنك
define('API_KEY',$token);
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
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;
$message_id = $update->message->message_id;
$first_name = $message->from->first_name;
$username = $message->from->username;
//\\
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$chat= $update->channel_post->chat->id;
$name = $message->from->first_name;
$name_admen = $update->name_admen; 
$text1 = $update->channel_post->text;
$from_id = $update->channel_post->from->id;
$id_admen = $update->chat_member->from->id; 
$name_admen = $update->chat_member->from->first_name;
$user_admen = $update->chat_member->from->username;
$ban = $update->chat_member->new_chat_member->status;
$chatban = $update->chat_member->chat->id;
$ban_id = $update->chat_member->old_chat_member->user->id; 
$ban_name = $update->chat_member->old_chat_member->user->first_name;
$ban_user = $update->chat_member->old_chat_member->user->username;
$tt = json_decode(file_get_contents('php://input'))->my_chat_member->old_chat_member->can_promote_members; 
$ccc = json_decode(file_get_contents('php://input'))->my_chat_member->chat->id;
$admen = json_decode(file_get_contents('php://input'))->my_chat_member->from->id;
$ba = json_decode(file_get_contents('php://input'))->my_chat_member->new_chat_member->can_promote_members;
$viruss = json_encode(['message', 'edited_message', 'channel_post', 'edited_channel_post', 'inline_query', 'chosen_inline_result', 'callback_query', 'shipping_query', 'pre_checkout_query', 'poll', 'poll_answer', 'my_chat_member', 'chat_member']); file_get_contents("https://api.telegram.org/bot$token/setwebhook?max_connections=100&allowed_updates=" . $viruss . "&drop_pending_updates=true&url=https://$host");
//\\
$update->channel_post;
$chid = $update->channel_post->chat->id;
$chtext = $update->channel_post->text;
$messageid= $update->channel_post->message_id;
$document = $update->channel_post->document;
$sticker= $update->channel_post->sticker;
$photo= $update->channel_post->photo;
$video= $update->channel_post->video;
$forward= $update->channel_post->forward_from_chat;
$contact= $update->channel_post->contact;
$audio= $update->channel_post->audio;
//\\
$documents = "المتحركة";
$stickers = "الملصقات";
$photos = "الصور";
$videos = "الفيديو";
$forwards = "التوجيه";
$contacts = "المواقع";
$audios = "الصوت";
$links = "الروابط";
$usernames = "المعرفات";
//\\
mkdir ("data");
//\\

if($text == '/start'){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://2.top4top.net/p_1280fxflb1.jpg",
'caption'=>"
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
🎤╖ أهلآ بك عزيزي أنا بوت حماية القنوات الخاص بي شخرميت
⚙️╢ وظيفتي حماية القنوات
✅╢ أضِف البوت إلى قناتك
🔘╢ ارفعهُ » مشرف
⚡️╢ ثم ارسل » تفعيل
⬆️╜ البوت لا يعمل بدون صلاحيه اضافه مشرفين
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- الاوامر .' ,'callback_data'=>"cmd"],['text'=>'- حول .' ,'callback_data'=>"info"]],
[['text'=>"- قناة السورس .",'url'=>"t.me/Z6Z4Z"],['text'=>"- المطور .",'url'=>"t.me/Z_R_2"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/zzz6zbot?startchannel"]],
]])]);}
if($data == "back" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://2.top4top.net/p_1280fxflb1.jpg",
'caption'=>'
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
🎤╖ أهلآ بك عزيزي أنا بوت حماية القنوات الخاص بي `شخرميت`
⚙️╢ وظيفتي حماية القنوات
✅╢ أضِف البوت إلى قناتك
🔘╢ ارفعهُ » مشرف
⚡️╢ ثم ارسل » تفعيل
⬆️╜ البوت لا يعمل بدون صلاحيه اضافه مشرفين
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'- الاوامر .' ,'callback_data'=>"cmd"],['text'=>'- حول .' ,'callback_data'=>"info"]],
[['text'=>"- قناة السورس .",'url'=>"t.me/Z6Z4Z"],['text'=>"- المطور .",'url'=>"t.me/Z_R_2"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/zzz6zbot?startchannel"]],
]])]);}
if($data == "info" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://2.top4top.net/p_1280fxflb1.jpg",
'caption'=>'
╭──── • ◈ • ────╮
么 [𝗦𝗢𝗨𝗥𝗖𝗘](https://t.me/Z6Z4Z)
么 [SHHRAM](https://t.me/Z_R_2)
╰──── • ◈ • ────╯
⍟ 𝚃𝙷𝙴 𝙱𝙴𝚂𝚃 𝚂𝙾𝚄𝚁𝙲𝙴 𝙾𝙽 𝚃𝙴𝙻𝙴𝙶𝚁𝙰𝙼
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- رجوع .",'callback_data'=>"back"]],
]])]);}
if($data == "cmd" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://2.top4top.net/p_1280fxflb1.jpg",
'caption'=>'
⚙️╖⁩ ❬ م1 ❭ اوامر حماية القناه ⇊
💫╜ ❬ م2 ❭ اوامر الحمايه من التفليش ⇊
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"⨳ م1",'callback_data'=>"m1"],['text'=>"⨳ م2",'callback_data'=>"m2"]],
[['text'=>"- رجوع .",'callback_data'=>"back"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/zzz6zbot?startchannel"]],
]])]);}
if($data == "m1" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://2.top4top.net/p_1280fxflb1.jpg",
'caption'=>'
⚙️⁩ ❬ م1 ❭ اوامر حماية القناه ⇊
════════ ××× ════════ٴ
🔐 ╢ قفل «» فتح + الامر 
════════ ××× ════════ٴ
📮╖ المتحركه
📜╢ الملصقات
📸╢ الصور
📽️╢ الفيديوهات
🎟╢ التوجيه
📂╢ المواقع
🎥╢ الصوت
⏏️╢ الروابط
🔊╜ المعرفات
════════ ××× ════════ٴ
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- رجوع .",'callback_data'=>"cmd"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/zzz6zbot?startchannel"]],
]])]);}
if($data == "m2" ){
bot('EditMessageCaption',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'photo' =>"https://2.top4top.net/p_1280fxflb1.jpg",
'caption'=>'
⚙️⁩ ❬ م2 ❭ اوامر حماية القناه من التفليش ⇊
════════ ××× ════════ٴ
🔐 ╖ ارسل /admin ثم ايدي العضو
🧾 ╢ مثال /admin 5541009328
⏏️ ╜ تنزيل الادمنيه
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- رجوع .",'callback_data'=>"cmd"]],
[['text'=>"- اضف البوت لقناتك .",'url'=>"https://t.me/zzz6zbot?startchannel"]],
]])]);}

if($ccc and $tt){
bot('sendmessage',[
'chat_id'=>$ccc,
'text'=>"- ارفع البوت بصلاحيه اضافه مشرفين ثم اضفني مره اخره ."]); 
bot('leaveChat',[
'chat_id'=>$ccc
]);
}
if($ccc and $ba){
} else{ 
if($ccc){
bot('sendmessage',[
'chat_id'=>$ccc,
'text'=>"- ارفع البوت بصلاحيه اضافه مشرفين ثم اضفني مره اخره ."]); 
bot('leaveChat',[
'chat_id'=>$ccc
]);
}} 
if($ban=="kicked"){
bot('sendmessage',[
'chat_id'=>$chatban, 
'text'=>"
تم حظر عضو بواسطه @$user_admen 
اسم المشرف $name_admen 
ايدي المشرف $id_admen 
العضو المحظور 😔 
يوزر @$ban_user 
الاسم $ban_name 
الايدي $ban_id
تم حذف @$user_admen من الادمنيه
"
]);
bot('promoteChatMember',[
'user_id'=>$id_admen,
'chat_id'=>$chatban, 
"can_change_info"=>false, 
"can_post_messages"=>false, 
"can_edit_messages"=>false, 
"can_delete_messages"=>false, 
"can_invite_users"=>false, 
"can_restrict_members"=>false, 
"can_pin_messages"=>false, 
"can_manage_video_chats"=>false, 
"can_promote_members"=>false
]); 
bot('sendmessage',[
'chat_id'=>$chatban, 
'text'=>"
- عزيزي المالك .
- لقد قام احد الادمنيه بطرد عضو .
- وقمت بتنزيله من الادمنيه للأمان
لن يقوم احد بي تفليش القناه وانا موجود 😠 .
"
]);
}
$admen = str_replace("/admin ","",$text1);
if($text1 == "/admin $admen"){
bot('promoteChatMember',[
'user_id'=>"$admen", 
'chat_id'=>$chat, 
"can_change_info"=>false, 
"can_post_messages"=>true, 
"can_edit_messages"=>false, 
"can_delete_messages"=>false, 
"can_invite_users"=>true, 
"can_restrict_members"=>false, 
"can_pin_messages"=>true, 
"can_manage_video_chats"=>true, 
"can_promote_members"=>false
]); 
bot('sendmessage',[
'chat_id'=>$chat,
'text'=>"- تم رفعه ادمن ."
]); 
}
if($text1 == "تنزيل الكل"){
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=$chat"),true);
$result = $up["result"];
foreach($result as $key=>$value){
$found = $result[$key]["status"];
if($found == "creator"){
$owner = $result[$key]["user"]["id"];
$owner2 = $result[$key]["user"]["id"];
}
if($found == "administrator"){
if($result[$key]["user"]["first_name"] == true){
$innames = str_replace(['[',']'],'',$result[$key]["user"]["id"]);
$msg = $msg.""."virus"."$innames";
}
}
}
$virus = explode("virus","$msg");
foreach($virus as $i){
bot('promoteChatMember',[
'user_id'=>$i, 
'chat_id'=>$chat, 
"can_change_info"=>false, 
"can_post_messages"=>false, 
"can_edit_messages"=>false, 
"can_delete_messages"=>false, 
"can_invite_users"=>false, 
"can_restrict_members"=>false, 
"can_pin_messages"=>false, 
"can_promote_members"=>false
]); 
}
bot('sendmessage',[
'chat_id'=>$chat,
'text'=>"- تم تنزيل جميع الادمنيه المرفوعين عبر البوت ."
]); 
}
#تم ازاله الميزه لعيون طه وللأمان والثقه
$json_security_channels = json_decode(file_get_contents("data/$chid.json"),true);
if($json_security_channels["lock"]["document"] == "close"){
if(isset($document )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["sticker"] == "close"){
if(isset($sticker )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["photo"] == "close"){
if(isset($photo )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["video"] == "close"){
if(isset($video )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["forward"] == "close"){
if(isset($forward )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["contact"] == "close"){
if(isset($contact )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["audio"] == "close"){
if(isset($audio )){
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["link"] == "close"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$update->channel_post->text)){
bot('deleteMessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($json_security_channels["lock"]["username"] == "close"){
if (strstr($text ,"@") == true or strstr($caption,"@") == true) {
bot('deletemessage',[
'chat_id'=>$chid,
'message_id'=>$messageid
]);
}
}
if($chtext == "تفعيل" ){
$json_security_channels = '{"lock": {"document": "open" "username": "open" "photo": "open" "link": "open" "video": "open" "forward": "open" "contact": "open" "audio": "open" "sticker": "open"},}';
$json_security_channels = json_decode($json_security_channels,true);
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"
☑️ ¦ تم تفعيل البوت في القناة
📡 ¦ ايدي القناة `$chid`
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الصور" ){
$json_security_channels["lock"]["photo"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔐 ¦ تم قفل $photos بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الصور" ){
$json_security_channels["lock"]["photo"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔓 ¦ تم فتح $photos بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الفيديو" ){
$json_security_channels["lock"]["video"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔐 ¦ تم قفل $videos بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الفيديو" ){
$json_security_channels["lock"]["video"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔓 ¦ تم فتح $videos بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الملصقات" ){
$json_security_channels["lock"]["sticker"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔐 ¦ تم قفل $stickers بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الملصقات" ){
$json_security_channels["lock"]["sticker"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔓 ¦ تم فتح $stickers بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل المتحركة" ){
$json_security_channels["lock"]["document"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔐 ¦ تم قفل $documents بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح المتحركة" ){
$json_security_channels["lock"]["document"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔓 ¦ تم فتح $documents بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل التوجيه" ){
$json_security_channels["lock"]["forward"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔐 ¦ تم قفل $forwards بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح التوجيه" ){
$json_security_channels["lock"]["forward"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔓 ¦ تم فتح $forwards بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الصوت" ){
$json_security_channels["lock"]["audio"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔐 ¦ تم قفل $audios بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الصوت" ){
$json_security_channels["lock"]["audio"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔓 ¦ تم فتح $audios بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الموقع" ){
$json_security_channels["lock"]["contact"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔐 ¦ تم قفل $contacts بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الموقع" ){
$json_security_channels["lock"]["contact"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔓 ¦ تم فتح $contacts بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل الروابط" ){
$json_security_channels["lock"]["link"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔐 ¦ تم قفل $links بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح الروابط" ){
$json_security_channels["lock"]["link"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔓 ¦ تم فتح $links بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="قفل المعرفات" ){
$json_security_channels["lock"]["username"]="close";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔐 ¦ تم قفل $usernames بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}
if($chtext =="فتح المعرفات" ){
$json_security_channels["lock"]["username"]="open";
$json_security_channels = json_encode($json_security_channels,true);
file_put_contents("data/$chid.json",$json_security_channels);
bot('sendmessage',[
'chat_id'=>$chid,
'text'=>"🔓 ¦ تم فتح $usernames بنجاح √",
'reply_to_message_id'=>$messageid,
]);
}