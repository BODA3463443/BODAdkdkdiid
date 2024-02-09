<?php
// @FrrFrFF | @FrrFrFF
error_reporting(0);
ob_start();
header("Content-Type: application/json; charset=UTF-8");
ob_start();
date_default_timezone_set('Asia/Baghdad');
$API_KEY = "توكنك" ;
define('API_KEY',$API_KEY);
define("IDBot", explode(":", $API_KEY)[0]);


function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $options = [
        'http' => [
            'method'  => 'POST',
            'content' => http_build_query($datas),
            'header'  => 'Content-Type: application/x-www-form-urlencoded\r\n',
        ],
    ];
    $context  = stream_context_create($options);
    $res = file_get_contents($url, false, $context);

    if ($res === FALSE) {
        return json_encode(['error' => 'Request failed']);
    } else {
        return json_decode($res);
    }
}

class OctaHox
{
    private $baseUrl;

    public function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function encrypt($data)
    {
        if (!empty($data)) {
            $data = urlencode($data);
            return $this->sendRequest('encrypt', $data);
        }
    }

    public function decode($data)
    {
        if (!empty($data)) {
            $data = urlencode($data);
            return $this->sendRequest('decode', $data);
        }
    }

    private function sendRequest($action, $input)
    {
        $url = sprintf(
            'https://%s/FileS/index.php?action=%s&Service=%s&input=%s',
            $this->baseUrl,
            'start',
            $action,
            $input
        );

        return file_get_contents($url);
    }
}

// Examples
$OctaHox = new OctaHox('dev-octahox.pantheonsite.io');




$update = json_decode(file_get_contents('php://input'));
$FileName = "Octa-Hox" ;
$h = json_decode(file_get_contents($FileName), 1);
if ($update->message) {
    $message = $update->message;
    $message_id = $message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = isset($message->chat->title) ? $message->chat->title : '';
    $text = isset($message->text) ? $message->text : '';
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

if ($update->callback_query) {
    $callback_query = $update->callback_query;
    $data = $callback_query->data;
    $message = $callback_query->message;
    $chat_id = $message->chat->id;
    $title = isset($message->chat->title) ? $message->chat->title : '';
    $message_id = $message->message_id;
    $name = $message->chat->first_name;
    $user = $message->chat->username;
    $from_id = $callback_query->from->id;
}


function X($data, $filename) {
    $jsonString = json_encode($data, JSON_PRETTY_PRINT);
    if (file_put_contents($filename, $jsonString) !== false) {
        return true; 
    } else {
        return false; 
    }
}

if($text == '/start'){
    bot('sendmessage',[
        'chat_id' => $chat_id,
        'text' => '
"Welcome to OctaHox Encryption Services! 🌐🔐

At OctaHox, we redefine security through cutting-edge encryption solutions. Your datas protection is our top priority. Join us on the forefront of digital security and experience the peace of mind that comes with robust encryption.
        
"مرحبًا بكم في خدمات التشفير OctaHox! 🌐🔐

 في OctaHox، نقوم بإعادة تعريف الأمان من خلال حلول التشفير المتطورة.  حماية البيانات الخاصة بك هي أولويتنا القصوى.  انضم إلينا في طليعة الأمن الرقمي واستمتع براحة البال التي تأتي مع التشفير القوي.
        
 🛡️ لماذا أوكتاهوكس؟
        
 أحدث خوارزميات التشفير
 مكرسة لحماية المعلومات الخاصة بك
 التكامل السلس مع أنظمتك الحالية
 موثوق به من قبل الشركات والأفراد على حد سواء
 استكشف خدماتنا ودع OctaHox يكون درعك في العالم الرقمي.  أمنك هو مهمتنا!"
         "،
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => "🔒 تشفير"، 'callback_data' => "enc"]، ['text' => "🔓 فك التشفير"، 'callback_data' => "dec"]]،
                 [['text' => "🔄 تحديث الشهادات", 'callback_data' => "تحديث"]],
                 [['text' => "📚 من نحن", 'callback_data' => "about"]],
            ]
        ])
    ]);
    unset($h["mode"]);
X($h, $FileName);
die();
}

if($data == 'bback'){
    bot('editmessagetext',[
        'chat_id' => $chat_id,
        'message_id'=>$message_id,
        'text' => '
"مرحبًا بكم في خدمات التشفير OctaHox! 🌐🔐

 في OctaHox، نقوم بإعادة تعريف الأمان من خلال حلول التشفير المتطورة.  حماية البيانات الخاصة بك هي أولويتنا القصوى.  انضم إلينا في طليعة الأمن الرقمي واستمتع براحة البال التي تأتي مع التشفير القوي.
        
 🛡️ لماذا أوكتاهوكس؟
        
 أحدث خوارزميات التشفير
 مكرسة لحماية المعلومات الخاصة بك
 التكامل السلس مع أنظمتك الحالية
 موثوق به من قبل الشركات والأفراد على حد سواء
 استكشف خدماتنا ودع OctaHox يكون درعك في العالم الرقمي.  أمنك هو مهمتنا!"
         "،
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => "🔒 تشفير"، 'callback_data' => "enc"]، ['text' => "🔓 فك التشفير"، 'callback_data' => "dec"]]،
                 [['text' => "🔄 تحديث الشهادات", 'callback_data' => "تحديث"]],
                 [['text' => "📚 من نحن", 'callback_data' => "about"]],
            ]
        ])
    ]);
    unset($h["mode"]);
X($h, $FileName);
die();
}

if($data == 'about'){
    bot('editmessagetext',[
        'chat_id' => $chat_id,
        'message_id'=>$message_id,
        'text' => '
🔐 رؤى التشفير!  🌐🔍

 هل كنت تعلم؟  التشفير يشبه القلعة الرقمية، حيث يحمي معلوماتك من أعين المتطفلين.  فهو يحول البيانات إلى تنسيق غير قابل للقراءة، مما يضمن السرية والأمان.  🔒✨
        
 دلائل الميزات:
 1. 🛡️ أمان قوي: يستخدم التشفير لدينا خوارزميات متقدمة لتوفير أقصى قدر من الحماية.
 2. 🔑 إدارة المفاتيح: التعامل الآمن والفعال مع مفاتيح التشفير.
 3. 🌐 التكامل العالمي: دمج التشفير بسلاسة في نظامك البيئي الرقمي.
        
 أطلق العنان لقوة التشفير باستخدام OctaHox!  بياناتك، حصنك.  💪🚀
        
 #OctaHox #تشفير #مسائل أمنية

 موقعنا الرسمي!  🏰 : https://@FrrFrFF
        
        ',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "🔙 Back", 'callback_data' => "bback"]],
            ]
        ])
    ]);
    unset($h["mode"]);
X($h, $FileName);
die();
}

if($data == 'refresh'){
    bot('editmessagetext',[
        'chat_id' => $chat_id,
        'message_id'=>$message_id,
        'text' => '
🔄 جاري تحديث المكتبة!  📚🛡️

 نحن نعمل على تعزيز مكتبتنا بأحدث التقنيات الأمنية والتشفير.  حمايتك هي أولويتنا!  🌐🔒
        
 هناك ميزات وتطورات جديدة ومثيرة في طريقها لتعزيز تجربتك الرقمية.  ترقبوا OctaHox أكثر أمانا!
        

 OctaHox - تعزيز الأمن، وتمكينك!  💪🚀
        
        ',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "🔙 Back", 'callback_data' => "bback"]],
            ]
        ])
    ]);
    unset($h["mode"]);
X($h, $FileName);
die();
}

if($data == 'dec'){
    bot('editmessagetext',[
        'chat_id' => $chat_id,
        'message_id'=>$message_id,
        'text' => '
🔓 فك تشفير رسالتك باستخدام OctaHox!  🔑

 أدخل النص المشفر أدناه وافتح الأسرار المشفرة بشكل آمن بداخله.  🌐🔐
        
 أدخل النص المشفر:
        
 OctaHox - حيث يلتقي الأمان بالبساطة!  🛡️🔍
        
        
        ',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "🔙 Back", 'callback_data' => "bback"]],
            ]
        ])
    ]);
    $h["mode"] = $data;
X($h, $FileName);
}


if($text and $h["mode"] == 'dec'){
    $decode = $OctaHox->decode($text);
    if($decode == null or $decode == false){
        bot('sendmessage',[
            'chat_id' => $chat_id,
            'text' => '
❌ خطأ: لم يتم العثور على التشفير!  🚫

 لم نتمكن من تحديد أي رسالة مشفرة في قاعدة البيانات الخاصة بنا.  يرجى التحقق جيدًا من النص المقدم أو المحاولة مرة أخرى لاحقًا.  🤔🔍
            
 إذا استمرت المشكلة، فلا تتردد في الاتصال بفريق الدعم لدينا للحصول على المساعدة.
            
 OctaHox - ضمان أمان بياناتك!  🔒🌐
            ',
            'parse_mode'=>'markdown',
        ]);
        unset($h["mode"]);
        X($h, $FileName);
        die();
    }
    bot('sendmessage',[
        'chat_id' => $chat_id,
        'text' => '
❌ خطأ: لم يتم العثور على التشفير!  🚫

  لم أتمكن من تحديد أي رسالة مشفرة في قاعدة البيانات الخاصة بنا.  يرجى التأكد من صحة النص مقدمًا أو محاولة القيام بذلك مرة أخرى لاحقًا.  🤔🔍
            
  إذا كانت المشكلة، فلا تتردد في الاتصال بفريق الدعم لدينا للحصول على المساعدة.
            
  OctaHox - ضمان بيانات أمانك!  🔒🌐
        
رسالة مفككة:
`'.$decode.'`
        
كن مطمئنًا إلى أن معلوماتك أصبحت الآن محررة وآمنة.  OctaHox - تمكين حصنك الرقمي!  💪🚀
            
        ',
        'parse_mode'=>'markdown',
    ]);
    unset($h["mode"]);
    X($h, $FileName);
    die();
}

if($data == 'enc'){
    bot('editmessagetext',[
        'chat_id' => $chat_id,
        'message_id'=>$message_id,
        'text' => '
🔐 قم بتأمين رسالتك باستخدام خدمات التشفير OctaHox!  🔒

 أدخل النص الخاص بك أدناه ودعنا نقوم بتحصينه بأحدث التشفير.  مهمتنا هي حماية معلوماتك وضمان الأمن الرقمي.  سواء كانت رسائل سرية أو بيانات حساسة، ثق في OctaHox للحفاظ عليها آمنة.
        
 📝 أدخل النص الخاص بك للتشفير:
 [منطقة إدخال النص]
        
 OctaHox - حيث تلتقي بياناتك بالحماية الصارمة!  🌐🛡️
        
        ',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "🔙 Back", 'callback_data' => "bback"]],
            ]
        ])
    ]);
    $h["mode"] = $data;
X($h, $FileName);
}

if($text and $h["mode"] == 'enc'){
    $encode = $OctaHox->encrypt($text);
    bot('sendmessage',[
        'chat_id' => $chat_id,
        'text' => '
✨ تم التشفير بنجاح!  ✨

 لقد تم تشفير النص الخاص بك بنجاح لتحقيق أقصى قدر من الأمان.  🌐🔒
        
النص المشفر:
`'.$encode.'`
        
كن مطمئنًا عندما تعلم أن معلوماتك محمية الآن بتقنيات التشفير المتطورة.  تلتزم OctaHox بتوفير حماية قوية لبياناتك.
        
 لمزيد من المساعدة أو الاستفسارات، لا تتردد في التواصل مع فريق الدعم لدينا.
        
 OctaHox - شريكك في الأمن الرقمي!  🛡️🚀
        
        ',
        'parse_mode'=>'markdown',
    ]);
    unset($h["mode"]);
    X($h, $FileName);
}