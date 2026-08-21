<?php


/* function calculateTotal($price, $tax = 12) 
{
    $finalPrice = $price + ($price * $tax/100);
    return $finalPrice;
}

$order1 = calculateTotal(100); 
echo $order1 . PHP_EOL;

$order2 = calculateTotal(100, 5);
echo $order2 . PHP_EOL; */

/* function getStudentInfo(int $id, float $gpa, ?string $faculty = null): string 
{
    $facultyCheck = $faculty === null ? 'Unknown' : $faculty;
    return "Student ID: {$id}, GPA: {$gpa}, Faculty: {$facultyCheck}";
}

$student1 = getStudentInfo(105, 4.5, 'SOCIE');
$student2 = getStudentInfo(108, 3.2);

echo $student1 . '<br>';
echo $student2 . '<br>'; */

/* declare(strict_types=1);

define('DISCOUNT', 15);

function orderStats(int|float $price, bool $delay, ?int $clientAssessment = null): string
{  
    if ($price <= 0 ||
       ($clientAssessment < 0 || $clientAssessment > 5)) {
       return "[System] Error: Invalid order data.";
        
    }

    if ($delay) {
        $price -= $price * DISCOUNT/100;
    }

    if ($clientAssessment === 5) {
        $price += 15000;
    }

    if ($clientAssessment === 1) {
        $price -= 30000;
    }

    static $orderQuantity = 0;
    $orderQuantity++;

    static $totalEarnings = 0;
    $totalEarnings += (float) $price;
    
    return  "Order closed. Earned: {$price} UZS. Shift stats: {$orderQuantity} orders, Total: {$totalEarnings} UZS.";
} 

$order1 = orderStats(40000, false, 5);
echo $order1 . '<br>';

$order2 = orderStats(50000, true);
echo $order2 . '<br>';

$order3 = orderStats(-500, false, 4);
echo $order3 . '<br>';

$order4 = orderStats(60000, false, 1);
echo $order4 . '<br>'; */

/* declare(strict_types=1);

$greet = function(string $name): string 
{ 
    return "Hi, $name";
};

echo $greet('bilol');

$greet1 = $greet("aa");
echo $greet1; */

/* declare(strict_types=1);

$users = [
    'Bilol' => 50000.0,
    'Ali' => 15000.0,
    'Steve' => 100.0,
];

$transactions = [
    ['sender' => 'Bilol', 'receiver' => 'Ali', 'amount' => 10000.0],
    ['sender' => 'Ali', 'receiver' => 'Bilol', 'amount' => -500.0],
    ['sender' => 'Steve', 'receiver' => 'Ali', 'amount' => 5000.0],
    ['sender' => 'Bilol', 'receiver' => 'Bilol', 'amount' => 1000.0],
    ['sender' => 'Ali', 'receiver' => 'Steve', 'amount' => 2000.0],
];

define('COMMISSION', 0.02);
                                                                           
function financeCore () 
{

}
*/
//1

/*
$input = [
    'a' => 'olma', 
    'b' => 'banan', 
    'c' => 'olma', 
    'd' => 'uzum'
];

$inputUnique = array_unique($input);

$inputKeys = array_keys($inputUnique);
$inputValues = array_values($inputUnique);

sort($inputValues);

print_r($inputValues);

//2 

$text = "php,laravel,javascript,mysql";

$textArr = explode(",", $text);
$textArr[] = 'git';

$textStr = implode("-", $textArr);

echo "Natija: $textStr" . '<br>';

//3



// 4

$prices = [100, 250, 50, 300];

$res = array_reduce($prices, function ($p)) {
    return $p+=$p;
}

print_r($res); */

/*$arr = [
    'country' => [
        'age' => 2000,
        'language' => [
            'uz' => 1,
            'ru' => 2
        ]
    ]
];

echo $arr['country']['language']['ru']; */

/* declare(strict_types=1);

$pickaxeDurability = 5;

function mineBlock(int &$durability, ?int $damage = 1): string 
{
    static $blocksMined = 0;

    if ($durability <= 0) {
        return "Tool is broken! Cannot mine.";
    }

    $durability-=$damage;

    if ($durability < 0) {
        $durability = 0;
    }

    $blocksMined++;
    return "Mined a block! Durability left: {$durability}. Total blocks mined: {$blocksMined}";
}

$hit1 = mineBlock($pickaxeDurability);
echo $hit1 . '<br>';

$hit2 = mineBlock($pickaxeDurability, 3);
echo $hit2 . '<br>';

$hit3 = mineBlock($pickaxeDurability);
echo $hit3 . '<br>';

$hit4 = mineBlock($pickaxeDurability);
echo $hit4 . '<br>'; */

/* declare(strict_types=1);

$myInventory = ['P250', 'M4A4', 'Desert Eagle'];
$premiumPrefix = "StatTrak ";

function tradeUpContract(array &$inventory, string $skinName, ?bool $hasPremium = false): string
{   
    static $successfulTrades = 0;

    if (count($inventory) < 2) {
        return "Error: Need at least 2 items to trade.";
    }

    array_splice($inventory, -2);

    if ($hasPremium) {
        $skinName = $GLOBALS['premiumPrefix'] . $skinName;
    }

    $inventory[] = $skinName;
    $successfulTrades++;
    
    return "Craft success! Received {$skinName}. Total server crafts: {$successfulTrades}";
}

$craft1 = tradeUpContract($myInventory, 'AWP');
echo $craft1 . '<br>';

$craft2 = tradeUpContract($myInventory, 'Karambit', true);
echo $craft2 . '<br>';

$craft3 = tradeUpContract($myInventory, 'Glock');
echo $craft3 . '<br>';

var_dump($myInventory); */

/* declare(strict_types=1);

$bugTracker = [
    101 => ['title' => 'Login bug', 'status' => 'open', 'priority' => 'high'],
    102 => ['title' => 'CSS error', 'status' => 'in_progress', 'priority' => 'low'],
    103 => ['title' => 'DB Crash', 'status' => 'open', 'priority' => 'critical'],
];

function closeTicket(array &$bugDesk, int $ticketID, ?string $comment = null ): string
{
    static $criticalBugs = 0;

    if (!array_key_exists($ticketID, $bugDesk)) {
        return "Error: Ticket #{$ticketID} not found";
    }

    if ($bugDesk[$ticketID]['status'] === 'closed') {
        return "Error: Ticket #{$ticketID} id already closed ";
    }

    $bugDesk[$ticketID]['status'] = 'closed';
    
    if (isset($comment)) {
        $bugDesk[$ticketID]['resolution'] = $comment;
    }

    if ($bugDesk[$ticketID]['priority'] === 'critical') {
        $criticalBugs++;
    }

    return "Success: Ticket  #{$ticketID} closed. Criticals fixed today: {$criticalBugs}";
}

$action1 = closeTicket($bugTracker, 101, 'Fixed typo in code');
echo $action1 . '<br>';

$action2 = closeTicket($bugTracker, 999);
echo $action2 . '<br>';

$action3 = closeTicket($bugTracker, 103, 'Rebooted server');
echo $action3 . '<br>';

$action4 = closeTicket($bugTracker, 101);
echo $action4 . '<br>'; 

echo '<pre>';
var_dump($bugTracker);
echo '</pre>'; */

//3 */
/* declare(strict_types=1);

function formatPrice(int|float $price, ?string $currency = null): string  
{
    if (isset($currency)) {
        return "{$price} {$currency}";
    }

    return "{$price}";
}

echo formatPrice(50000, 'UZS') . '<br>';
echo formatPrice(50000) . '<br>'; */
 /*
declare(strict_types=1);

$appName = "E_Commerce App";

function getAppName(): string
{
    return $GLOBALS['appName'];
}

echo getAppName() . '<br>';

//function scope dgani function tashqaridagi codni oqiolmaydi chunki oqiyolganda kop bug la bolardi tashqaridagi narsala ozgarb ketardi global $ yoki GLOBALS massivini chaqirse tashqaridagi qiymatlaga access ololimiz



function incrementCounter(): int
{
    static $counter = 1;
    return $counter++;
}

echo incrementCounter() . '<br>';
echo incrementCounter() . '<br>';
echo incrementCounter() . '<br>';

*/


/* $square = function($a) 
{
    return $a**2;
};

echo $square(5) . '<br>';

$taxRate = 12;
$calculateTax = function($price) use($taxRate) 
{
    return $price * $taxRate/100;
};

echo $calculateTax(100000);

$isAdult = fn($age) => $age >= 18 ? true: false;

var_dump($isAdult(15));
var_dump($isAdult(18)); */
 
/* declare(strict_types=1);

$userWallet = 100;

function steamTransaction (float|int &$userWallet, string $gameName, float $gamePrice, ?int $promocode = null): string
{ 
    static $successfulPurchases = 0;
    
    if (isset($promocode)) {
        $gamePrice -= $gamePrice * $promocode/100;
    }

    if ($gamePrice > $userWallet) {
        return "Error: insufficient funds for {$gameName}. Remaining balance \${$userWallet}.";
    }

    $userWallet -= $gamePrice;
    $successfulPurchases++;

    return "Success: Game [{$gameName}] has been purchased. Remaining balance: \${$userWallet}. Total boughts on server: {$successfulPurchases}.";
}

$purchase1 = steamTransaction($userWallet, 'Portal 1', 20, 50);
echo $purchase1 . '<br>';

$purchase2 = steamTransaction($userWallet, 'Cyberpunk 2077', 60);
echo $purchase2 . '<br>';

$purchase3 = steamTransaction($userWallet, 'Elder Ring', 60);
echo $purchase3 . '<br>'; */

/* $ages = [15, 20, 12, 30];

$adults = array_filter($ages, fn($age) => $age >= 18);

print_r($adults); */

/* declare (strict_types=1);

$stock = [15, 0, 42, 0, 5, 0];

$stockQuantity = array_filter($stock, fn(int $s) => $s > 0);
print_r($stockQuantity);*/ 

/* declare (strict_types=1);

$transactions = [150.0, -20.0, 300.0, 0.0, 50.0, 400.0];

$successfulGigs = array_filter($transactions, fn(float $t) => $t > 0);

$netIncomes = array_map(fn(float $n) => $n*0.8, $successfulGigs);

$totalWithdrawal = array_reduce($netIncomes, fn(float $carry, float $d) => $carry + $d, 0);

echo "Availble to send: {$totalWithdrawal}$."; */ 

/* declare(strict_types=1);

$fleetCashbox = 1000.0;
$rides = [150.0, 0.0, -50.0, 300.0, 50.0];

function processDriverShift (float &$fleetCashbox, array $rides): string 
{
    static $shiftsProcessed = 0.0;

    $filtered = array_filter($rides, fn(float $f) => $f > 0);
    $mapped = array_map(fn(float $m) => $m*0.2, $filtered);
    $shiftProfit = array_reduce($mapped, fn(float $carry, float $s) => $carry + $s, 0);

    $fleetCashbox += $shiftProfit;
    $shiftsProcessed++;

    return "Shift processed. Park earned: {$shiftProfit}. Total in cass: {$fleetCashbox}$. Shifts processed: {$shiftsProcessed}. <br>";
}

$report1 = processDriverShift($fleetCashbox, $rides);
echo $report1;

$report2 = processDriverShift($fleetCashbox, [500.0, 100.0, 0.0]);
echo $report2; */

/*declare(strict_types=1);

date_default_timezone_set('Asia/Tashkent');
$currentTimestamp = time();

echo "Now {$currentTimestamp} has passed from 1970. <br>";
$humanDate = date('Y-m-d H:i:s');

echo "Current Tashkent time: {$humanDate}. <br>";

echo '<br>';

echo strtotime(''); */
/* date_default_timezone_set('Asia/Tashkent');

// Сначала получаем секунды для "завтра"
$tomorrowSeconds = strtotime("+1 day");

// Потом превращаем эти секунды в красивую дату
$tomorrowHuman = date('Y-m-d', $tomorrowSeconds);
echo $tomorrowHuman; */

/* declare (strict_types=1);

date_default_timezone_set('Asia/Tashkent');

$expireTimestamp = strtotime('1 month');

$expireDate = date('d-m-Y H:i:s', $expireTimestamp);
echo "Sizning obunangiz {$expireDate} gacha amal qiladi"; */

/* function divide(int $a, int $b) 
{
    if ($b === 0) {
        throw new Exception("Cannot divide by zero");
    }
    return $a / $b;
}

try {
    echo divide (10, 2) . '<br>';

    echo divide (10, 3) . '<br>';

    echo divide (10, 0) . '<br>';

    echo divide (10, 1) . '<br>';
} catch (Exception $e) {
    echo "Something went wrong: " . $e->getMessage();
} */
/*declare(strict_types=1);

function processPayment(float $balance, float $price): float 
{
    if ($price <= 0) {
        throw new Exception("Invalid price.");
    }

    if($balance < $price) {
        throw new Exception ("Not enough money.");
    }

    return $balance -= $price;
}
try { 
    echo processPayment(100, 10) . '<br>';

    echo processPayment(100, 0) . '<br>';

    echo processPayment(30, 50) . '<br>';
} catch (Exception $e) {s
    echo "Payment failed: {$e->getMessage()}";
} finally {
    echo "Connection to payment gateway closed.";
} */

date_default_timezone_set('Asia/Tashkent');

$fullDate = date('Y-m-d H:i:s');
echo $fullDate . '<br>';

$formatUz = date('d.m.Y');
echo $formatUz . '<br>';

$withWeekDay = date('l, d F Y');
echo $withWeekDay . '<br>';

//2
$oneDay = strtotime('1 day');
$tomorrowDate = date('d.m.Y', $oneDay);
echo $tomorrowDate . '<br>';

//3
$birthday = strtotime("2005-01-15");
$now = time();

$gap = $now - $birthday;

$gapToDays = floor(($gap/86400));

echo "Siz dunyoga kelganingizga {$gapToDays} kun boldi";
