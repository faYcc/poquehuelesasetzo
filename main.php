<?php


include __DIR__."/config/config.php";
include __DIR__."/config/variables.php";
include __DIR__."/functions/bot.php";
include __DIR__."/functions/functions.php";
include __DIR__."/functions/db.php";


date_default_timezone_set($config['timeZone']);


////Modules
include __DIR__."/modules/admin.php";
include __DIR__."/modules/skcheck.php";
include __DIR__."/modules/binlookup.php";
include __DIR__."/modules/iban.php";
include __DIR__."/modules/stats.php";
include __DIR__."/modules/me.php";
include __DIR__."/modules/apikey.php";


include __DIR__."/modules/checker/ss.php";
include __DIR__."/modules/checker/schk.php";
include __DIR__."/modules/checker/sm.php";



//////////////===[START]===//////////////

if(strpos($message, "/start") === 0){
if(!isBanned($userId) && !isMuted($userId)){

  if($userId == $config['adminID']){
    $messagesec = "<b> /admin para saber admin comandos</b>";
  }

    addUser($userId);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"<b>Hola @$username,

Escribe /cmds Para saber mis comandos!</b>

$messagesec",
	'parse_mode'=>'html',
	'reply_to_message_id'=> $message_id,
    'reply_markup'=>json_encode(['inline_keyboard' => [
        [
          ['text' => "💠 Soporte 💠", 'url' => "t.me/SetzoLand"]
        ],
        [
          ['text' => "💎 Prueba 💎", 'url' => "t.me/SetzoLand"]
        ],
      ], 'resize_keyboard' => true])
        
    ]);
  }
}

//////////////===[CMDS]===//////////////

if(strpos($message, "/cmds") === 0 || strpos($message, "!cmds") === 0){

  if(!isBanned($userId) && !isMuted($userId)){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<b>Que comandos quieres saber?</b>",
    'parse_mode'=>'html',
    'reply_to_message_id'=> $message_id,
    'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>"💳 Gates?",'callback_data'=>"GatesCHK"]],[['text'=>"Otros Cmds?",'callback_data'=>"OtherCMD"]],
    ],'resize_keyboard'=>true])
    ]);
  }
  
  }
  
  if($data == "back"){
    bot('editMessageText',[
    'chat_id'=>$callbackchatid,
    'message_id'=>$callbackmessageid,
    'text'=>"<b>Que comandos quieres saber?</b>",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>"💳 Gates?",'callback_data'=>"GatesCHK"]],[['text'=>"Otros cmds?",'callback_data'=>"OtherCMD"]],
    ],'resize_keyboard'=>true])
    ]);
  }
  
  if($data == "GatesCHK"){
    bot('editMessageText',[
    'chat_id'=>$callbackchatid,
    'message_id'=>$callbackmessageid,
    'text'=>"<b>↓Gates↑</b>
  
<b>☼ /ss ☼ | !sa - Stripe [Auth]</b>
<b>► /sm ◄ | !st - Stripe [Merchant]</b>

<b>ϟ Soporte <a href='t.me/SetzoLand'>SetzoLand</a></b>",
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>"Regresar",'callback_data'=>"back"]]
  ],'resize_keyboard'=>true])
  ]);
  }
  
  
  if($data == "OtherCMD"){
    bot('editMessageText',[
    'chat_id'=>$callbackchatid,
    'message_id'=>$callbackmessageid,
    'text'=>"<b>↨Otros Comandos↨</b>
  
<b>/info | !info</b> - Tu Info
<b>/bin | !bin</b> - Bin Lookup
<b>/iban | !iban</b> - IBAN Checker
  
  ",
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>"Regresar",'callback_data'=>"back"]]
  ],'resize_keyboard'=>true])
  ]);
  }

?>