<?php

/* $name = 'Bilol';
$age = 18;
$height = 1.73;
$findWork = true;
// These variables describe person's name, age, height and status if he searches work 
The code below with function [echo] outputs NAME and AGE
echo $name, $age;
var_dump($findWork);
echo gettype($age); */

/* echo is_string(4) . '<br>';
echo is_int(5) . '<br>';

$a = 5;
if (!is_bool(false)) {
    echo "ok";
}
const DATABASE_NAME = 'my_shop';
const PI = M_PI;
echo PI; */

/*
$firstName = ' bIlOl  ';
$correctedFirstName = ucfirst(strtolower(trim($firstName)));
echo $correctedFirstName;

echo '<br>';
$name = 'John';
$lastName = 'Doe';
$login = strtolower($name . '-' . $lastName);
$login .= '_2026';
echo $login; */

/* $profileUrl = "https://steamcommunity.com/id/skysern?lang=ru";
$idStr = 'id/';
$idPos = strpos($profileUrl, $idStr);
$startPos = $idPos + strlen($idStr);
$endPos = strpos($profileUrl, '?');
$difference = $endPos - $startPos;
$substr = substr($profileUrl, $startPos, $difference);
$replaced = strtoupper(str_replace("_", "-", $substr));
$strlen = strlen($replaced);
echo "STEAM ID: {$replaced}. Symbols: {$strlen}"; */

/* $userAge = 18;
$userBalance = 20000;
$isStudent = true;
$requiredBalanceStudent = 40000;
$requiredBalanceStandart = 60000;

$addedBalance = 35000;
$userBalance += $addedBalance;

if ($isStudent && $userBalance >= $requiredBalanceStudent) {
    echo "Student subscription is confirmed";
}
elseif (!$isStudent && >= $requiredBalanceStandart) {
    echo "Standart subscription is confirmed";
}
else {
    echo "insufficient funds";
} */

/* $deviceTemp = 85;
$coolingSystem = $deviceTemp >= 80 ? 'Fan is ON' : 'Fan is OFF' ; 
echo $coolingSystem; */

/* $roleCode = 1;

switch ($roleCode) {
    case 1: 
        $role = "Adm";
        break;
    case 2:
        $role = "User";
        break;
    default:
        $role = 'Guest';
}
echo $role;  */

/* $status = "3002";
$statusCheck = match($status) 
{
"200" => 1,
'300' => 221,
default => 'def'

};
echo $statusCheck; */

/* $a = null;
$b = 4;

$answer = $a ?? $b;
echo $answer; */

/* $nickname = null;

$check = $nickname ?? 'Guest';

print ($check); */

/* $nickname = 0;
$nickname ??= 6;
echo $nickname; */

/* $basePrice = 35000;
$months = 3;
$promoDiscount = null;

$promoDiscount ??= 5000;
++$months;
$totalPrice = $months * $basePrice - $promoDiscount;
$userStatus = $totalPrice > 100000 ? 'VIP' : 'Regular';

echo 'Total to pay: ' . $totalPrice . ' UZS. Account status: ' . $userStatus; */

/* $roleLevel = '2';
const GPA = 3.4;
const IS_PAID = true;

$roleName = match($roleLevel) 
{
  '1' => 'Applicant',
  '2' => 'Freshman',
  '3' => 'Senior',
  default => 'Unknown'  
};

if ($roleName === 'Freshman' && IS_PAID && GPA >= 3) 
{
    echo 'Access granted to internal materials.';
}
elseif ($roleName === 'Applicant' || !IS_PAID) 
{
    echo 'Access denied. Check your payment status.';
}
else
{
    echo 'Limited access.'; */

    /* const SERVER_NAME = "Survival_Tashkent";
    $rawLog = "   [warning] player_agentuszern_tried_to_join_but_failed   ";

    $trimLog = trim($rawLog);

    $wordStart = 'player_';
    $wordEnd = '_tried';

    $posStart = strpos($trimLog, $wordStart);
    $posStartLen = $posStart + strlen($wordStart);

    $posEnd = strpos($trimLog, $wordEnd);
    $posFinal = $posEnd - $posStartLen;

    $finalLog = ucfirst(substr($trimLog, $posStartLen, $posFinal));
    echo "Alert on " . SERVER_NAME . " User $finalLog has connection issues."; */
    
    
/* $hp = 100;

while ($hp > 0) 
{
    echo "Damaged. Your HP: $hp <br>";
    $hp-=20;
}
echo "Player died"; */

/* for ($i=1; $i <= 10; $i++) 
{
    if ($i === 4 || $i === 7) 
    {
        echo "User $i is banned. Skipping\n";
        continue;
    }
    echo "Gift sent to user $i\n";
} */

/* $attempts = 1;
$maxAttempts = 5;
while ($attempts <= $maxAttempts) {
    echo "Attempt $attempts to connect... \n";
    if ($attempts === 3) {
        echo "Success! Connected on attempt $attempts \n";
        break;
    }
    $attempts++;
} */

/* $balance = 0;
$months = 1;
const SUB_PRICE = 40000;
const PERCENT = 15;
const CASHBACK = (SUB_PRICE * PERCENT/100);

while ($balance < SUB_PRICE)
{
    $months++;
    $balance += CASHBACK;
    echo "Month $months: Accumulated $balance points <br>";
}

echo "Target reached! Free month unlocked after $months months."; */

/* $limit = 20;

for($i = 1; $i <= $limit; $i++) 
{
    if($i === 7 || $i === 14) {
        echo "Connection ID $i rejected: User is banned <br>";
        continue;
    }
    if($i === 17) {
        echo "CRITICAL: DDoS attack detected from ID $i. Shutting down server!";
        break;
    }
    echo "Player with connection ID $i joined the game. <br>";
} */

/* $clientBalance = 12000;
$priceStart = 4000;
$pricePerKm = 1500;
$km = 0;

$clientBalance -= $priceStart;

while ($clientBalance >= $pricePerKm) 
{
    $clientBalance -= $pricePerKm;
    $km++;
    echo "Kilometer $km: $pricePerKm UZS charged. Remaining budget: $clientBalance UZS <br>";
}
echo "Ride finished! Total distance: $km km. Unspent money: $clientBalance UZS. <br>";

//2
echo '<br>';

for($i = 1; $i <= 10; $i++) 
{
    if ($i === 3 || $i === 5 || $i === 9 ) 
    {
        echo "Resume $i rejected: PHP knowledge required. <br>";
        continue;
    }
    if ($i === 7) 
    {
        echo "Resume $i accepted! Senior developer found. Stopping search. <br>";
        break;
    }
    echo "Resume $i moved to the next stage <br>";
} */

/* $bannedToken = 7;   
do 
{
    $token = rand(1, 10);
    echo "Trying to generate token: $token <br>";
} 
while ($token === $bannedToken); 

echo "Secure token acquired: $token <br>"; */

/* $languages = ['PHP', 'Python', 'Java'];
foreach ($languages as $language) {
    echo "Supported language: $language <br>";
} */

/* $cartTotal = 50000;
const WINTER20_PROMO = 20000;
const SPRING15_PROMO = 15000;
$promoCodes = ['  WINTER20 ', 'banned_user', '  SPRING15', 'STOP_SYSTEM', 'SUMMER10'];

foreach ($promoCodes as $promo) 
{
    $trimmed = trim($promo);
    if ($trimmed === 'banned_user') 
    {
        echo "Alert: Banned code used! <br>";
        continue;
    }
    if ($trimmed === 'STOP_SYSTEM') 
    {
        echo "CRITICAL: System stop triggered <br>";
        break;
    }
    if ($trimmed === 'WINTER20') 
    {
        $cartTotal -= WINTER20_PROMO;
    }
    elseif ($trimmed === 'SPRING15') 
    {
        $cartTotal -= SPRING15_PROMO;
    }
    if ($cartTotal < 0) 
    {
        $cartTotal = 0;
    }
    echo "Promo $trimmed applied. Current total: $cartTotal UZS <br>";
}
echo "Final price to pay: $cartTotal UZS. <br>"; */

/* const SENDER = 'agentuszern';
$wallet = 10000; 
const GAME = 'SOS OPS!'; 
$price = 2000; 
$receivers = ['  pro_gamer ', 'bot_spam', '  neo_matrix', 'stalker_99', 'admin'];
$giftSent = 0;

foreach ($receivers as $r) 
{
    $receiver = trim($r);
    if ($receiver === 'bot_spam') 
    {
        echo "Warning: Cannot send gift to a bot. Skipping... <br>";
        continue;
    }
    if ($receiver === 'admin') 
    {
        echo "CRITICAL ERROR: Attempt to gift to system admin! Stopping process. <br>";
        break;
    }
    if ($wallet < $price) 
    {
        echo "Out of funds! Cannot send game to $receiver. <br>";
        break;
    }
    $wallet -= $price;
    $giftSent++;
    echo "Gift " . GAME . " sent to $receiver by " . SENDER . " Remaining wallet: $wallet <br>";
}

echo "Operation finished. Total gifts sent: $giftSent. Final wallet balance: $wallet UZS."; */

/* $employees = [
[
    'name' => 'Bilol',
    'position' => 'Admin',
],
[
    'name' => 'Ali',
    'position' => 'Support',
]
];

var_dump($employees); */

/* $serverConfig = [
    'host' => 'localhost',
    'port' => 8080,
    'status' => 'offline'
];

echo "Current status: {$serverConfig['status']}" . PHP_EOL;
$serverConfig['status'] = 'running';
$serverConfig['is_secure'] = true;
unset($serverConfig['port']);
var_dump($serverConfig);
echo count($serverConfig); */

/* $arr = [
    'name' => 'Bilol',
    'position' => 'Admin'
];
array_push($arr, 'value'); */
/* $arr = [
    'name' => 'Bilol',
    'position' => 'Admin'
];
array_push($arr, 44, 'value', true,);

array_unshift($arr, 'value', 52);
print_r($arr); */

/* $roadmap = ['git', 'sql'];
array_unshift($roadmap, 'php');
$roadmap[] = 'laravel';
$counted = count($roadmap);
echo "Total topics: {$counted} " . PHP_EOL;
var_dump($roadmap); */

/* $allowedRoles = ['admin', 'moderator'];
$userRole = 'guest';
$checkArray = in_array($userRole, $allowedRoles, true);
if ($checkArray) {
    echo "Access granted" . PHP_EOL;
} else {
    echo "Access denied" . PHP_EOL;
} */  

/* $config = [
    'theme' => 'dark',
    'version' => 2
];
$arrayKeyExists = array_key_exists('timezone', $config);

if ($arrayKeyExists) {
    echo "Timezone exists";
} else {
    echo "Timezone missing";
} */

/* $session = [
    'user_id' => 105,
    'api_token' => null
];
$checkIsset = isset($session['api_token']);
if ($checkIsset) {
    echo "Token is active" . PHP_EOL;
} else {
    echo "Token is missing or null" . PHP_EOL;
} */
/*$student = [
    'name' => 'Bilol',
    'debt_amount' => 0,
    'benefits' => []
];
$isEmptyDebt = empty($student['debt_amount']);
$isEmptyBenefits = empty($student['benefits']);

if ($isEmptyDebt) {
    echo 'No debts' . PHP_EOL;
    //Using empty() to check debt_amounts is a logic mistake as even it is 0 the system returns true, we can prevent it using isset() with a string comparasion === 0.
}
if ($isEmptyBenefits) {
    echo 'No benefits'; */

/* $transactions = [
    [
        'transaction_id' => 1001,
        'user_name' => '   john doe',
        'status' => 'completed',
        'amount' => 150.50,
        'currency' => 'USD',
        'tags' => ['subscription', 'premium']
    ],
    [
        'transaction_id' => 1002,
        'user_name' => 'jane smith ',
        'status' => 'pending',
        'amount' => 50.00,
        'currency' => 'EUR',
        'tags' => []
    ],
    [
        'transaction_id' => 1003,
        'user_name' => 'ALICE WONDER',
        'status' => 'completed',
        'amount' => '200.00',
        'currency' => 'USD',
        'tags' => ['shop']
    ],
    [
        'transaction_id' => 1004,
        'user_name' => 'bOb',
        'status' => 'completed',
        'amount' => 0.00,
        'currency' => 'USD',
        'tags' => ['gift']
    ]
];

const COMPLETED = 'completed';
const USD = 'USD';

foreach ($transactions as $transaction) {
    if ($transaction['status'] !== COMPLETED || !is_float($transaction['amount']) && !is_int($transaction['amount']) || $transaction['amount'] <=0 || $transaction['currency'] !== USD || empty($transaction['tags'])) {
        continue;
    } 
    $correctedUserName = ucfirst(strtolower(trim($transaction['user_name'])));
    $countedTags = count($transaction['tags']);
    echo "Transaction {$transaction['transaction_id']}: {$correctedUserName} paid {$transaction['amount']} {$transaction['currency']}. Tags count: $countedTags " . PHP_EOL;
    
} */

// 1
/* $a = 10; 
$b = 3;
$remainder = $a % $b;
$a++;
echo $remainder . '<br>' . $a; */

//2
/* $age = 20;
$role = 'admin'; 
if ($age >= 18 && $role === 'admin') {
    echo "Xush kelibsiz, Admin!";
} else {
    echo "Kirish taqiqlangan!";
}

$roleCheck = match($role) {
    'admin' => "Boshqaruvchi",
    'user' => "Foydalanuvchi",
    default => "Noma'lum"
};
echo $roleCheck; */

//3
/* $user_status = null;

$user_status ??= 'active';
$message = $user_status === 'active' ? "Tizimda" : "Tizimda emas";

echo $message; */

/* 

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 === 0) {
        echo $i . '<br>';
    }
}



$sum = 0; 
$counter = 1;
while ($counter <= 10) {
    $sum += $counter;
    $counter++;
}

echo $sum . '<br>';

$number = 5;
do {
    echo $number . '<br>';
    $number--;
} while ($number > 0);

echo $number . '<br>';



$ages = [15, 22, 18, 12, 30];
foreach ($ages as $age) {
    $msg = $age >= 18 ? "Katta" : "Kichik";
    echo "Yoshi $age: $msg <br>";
}


$users = [
    'Ali' => 'admin', 
    'Vali' => 'user', 
    'Sami' => null
];

foreach ($users as $name => $role) {
    $role ??= 'guest';
    $roleCheck = match($role) {
        'admin' => "Ali - Boshqaruvchi",
        'user' => "Vali - Foydalanuvchi",
        'guest' => "Sami - Mehmon",
    };
    echo $roleCheck . '<br>';
} */

/* $array = [
    'Ali' => 'admin', 
    'Vali' => 'user', 
    'Sami' => null
];  

print_r(array_values($array)); */

/* $admission = [
    'student' => 'Bilol',
    'faculty' => 'SOCIE',
    'year' => 2026
];

$keys = array_keys($admission);
var_dump($keys);

unset($admission['faculty']);
var_dump($admission);

$values = array_values($admission);
var_dump($values); */

/* $teamA = ['Bilol', 'Ali', 'Umar'];
$teamB = ['Zafar', 'Ali', 'Jasur'];

$uniqueParticipants = array_unique(array_merge($teamA, $teamB));
$finalists = array_slice($uniqueParticipants, 0, 3);

var_dump($finalists); */

/*  $teamA = [
    'student' => 'Bilol',
    'faculty' => 'SOCIE',
    'year' => 2026
];

ksort($teamA);e
print_r($teamA); */

/* $ieltsScores = [
    'Zafar' => 5.5, 
    'Bilol' => 7.0, 
    'Ali' => 6.5
    ];

asort($ieltsScores);
var_dump($ieltsScores);

ksort($ieltsScores);
var_dump($ieltsScores); */

/* $dbRecord = "apple,banana,orange";

$fruits = explode(',', $dbRecord);
print_r($fruits);

$str = implode (' ', $fruits);
print_r($str); */

/* $rawInput = "laravel, php, oop, git";

$tags = explode(', ', $rawInput);
sort($tags);
$cleanOutput = implode(' -> ', $tags);

echo $cleanOutput , PHP_EOL; */

/* $candidates = [
    [
        'id' => 105,
        'name' => '  ali ',
        'skills' => 'php, git, sql, php',
        'experience' => 2
    ],
    [
        'id' => 102,
        'name' => 'umar',
        'skills' => 'python, django',
        'experience' => 1
    ],
    [
        'id' => 108,
        'name' => 'ZAFAR ',
        'skills' => 'sql, laravel, php, oop',
        'experience' => 3
    ],
    [
        'id' => null,
        'name' => 'broken_record',
        'skills' => 'html, css',
        'experience' => 5
    ]
   
];

const PHP_WORD = 'php';
$approvedCandidates = [];

 foreach ($candidates as $candidate) {
    if (!isset($candidate['id']) || $candidate['id'] <= 0) {
        continue;
    } 
    $cleanedName = ucfirst(strtolower(trim($candidate['name'])));
    $editedSkills = explode(', ', $candidate['skills']);
    if (!in_array(PHP_WORD, $editedSkills, true)) {
        continue;
    }
    $unique = array_unique($editedSkills);
    sort($unique);
    $imploded = implode(' | ', $unique);
    $approvedCandidates[$candidate['id']] = "{$cleanedName} (Skills: {$imploded})";
}

ksort($approvedCandidates);

var_dump($approvedCandidates); */

/* $rawCarts = [
    [
        'order_id' => 'ORD-1045',
        'customer' => ' bilol karimov ',
        'items' => 'php book, clean code, php book, keyboard',
        'total' => 145.50,
        'status' => 'paid'
    ],
    [
        'order_id' => 'ORD-1021',
        'customer' => 'ALI',
        'items' => 'mouse, monitor',
        'total' => '300.00', // Ошибка на фронтенде: прислали строку вместо числа
        'status' => 'paid'
    ],
    [
        'order_id' => 'ORD-1033',
        'customer' => 'zafar',
        'items' => 'hdmi cable',
        'total' => 15.50,
        'status' => 'failed'
    ],
    [
        'order_id' => 'ORD-1088',
        'customer' => '   ', // Пользователь отправил пустые пробелы
        'items' => 'webcam, mic',
        'total' => 120.00,
        'status' => 'paid'
    ],
    [
        'order_id' => 'ORD-1002',
        'customer' => 'Umar',
        'items' => 'laptop, case',
        'total' => 0.00, // Подозрительно: сумма ноль
        'status' => 'paid'
    ]
];

$validOrders = [];
const PAID_WORD = 'paid';

foreach ($rawCarts as $cart) {
    if ($cart['status'] !== PAID_WORD ||
    (!is_int($cart['total']) && !is_float($cart['total'])) || 
    $cart['total'] <= 0)  {
        continue;
    }

    $trimmed = trim($cart['customer']);
    if (empty($trimmed)) {
        continue;
    }

    $correctedName = ucfirst(strtolower($trimmed));

    $items = explode(', ', $cart['items']);
    $itemsUnique = array_unique($items);
    sort($itemsUnique);
    $sliced = array_slice($itemsUnique, 0, 2);
    $itemsFinal = implode(' + ', $sliced);

    $validOrders[$cart['order_id']] = "{$correctedName} bought preview: {$itemsFinal} (Total: \${$cart['total']}) .";

}

ksort($validOrders);

var_dump($validOrders); */ 

/*
$tradeLogs = [
    [
        'trade_id' => 2050,
        'player' => '  agentuszern ',
        'offer' => 'diamond, gold, iron, diamond, emerald',
        'status' => 'completed',
        'server' => 'aternos_main'
    ],
    [
        'trade_id' => 2045,
        'player' => 'CreeperBoy',
        'offer' => 'dirt, cobblestone, dirt',
        'status' => 'completed',
        'server' => 'aternos_main'
    ],
    [
        'trade_id' => 2088,
        'player' => '  STEVE  ',
        'offer' => 'obsidian, diamond, flint',
        'status' => 'completed',
        'server' => 'aternos_test' // Внимание, тестовый сервер!
    ],
    [
        'trade_id' => null, // Ошибка логгера
        'player' => 'Herobrine',
        'offer' => 'gold, gold, gold',
        'status' => 'completed',
        'server' => 'aternos_main'
    ],
    [
        'trade_id' => 2010,
        'player' => 'notch',
        'offer' => 'apple, wood, string',
        'status' => 'cancelled',
        'server' => 'aternos_main'
    ]
];   

$processedTrades =[];

const COMPLETED_STATUS = 'completed';
const ATERNOS_SERVER = 'aternos_main';

foreach ($tradeLogs as $tradeLog) {
    if ((!isset($tradeLog['trade_id']) || !is_int($tradeLog['trade_id'])) ||
        $tradeLog['status'] !== COMPLETED_STATUS || 
        $tradeLog['server'] !== ATERNOS_SERVER) {
            continue;
        } 

    $correctedPlayer = ucfirst(strtolower(trim($tradeLog['player'])));

    $offerEdited = explode(', ', $tradeLog['offer']);

    if (in_array('dirt', $offerEdited, true)) {
        continue;
    }
    
    $offerUnique = array_unique($offerEdited);
    sort($offerUnique);
    $offerFinal = implode(' | ', $offerUnique);

    $processedTrades[$tradeLog['trade_id']] = "Player {$correctedPlayer} succesfully traded: {$offerFinal}.";
}

krsort($processedTrades);

var_dump($processedTrades); */