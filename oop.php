<?php

/* class Product {
    public $name;
    public $price;
    public $qty;

}

$laptop = new Product();
$laptop->name = "Laptop";
$laptop->price = 800;
$laptop->qty = 1;

echo $laptop->price; */

/* sclass Player {
    public $name;
    public $health;
    public function atack() {
        echo $this->name . " atacking!";
    }
}

$player = new Player();
$player->name = 'Bilol';
$player->health = 100;
$player->atack(); */

/* class Circle {
    public $radius;

    public function area() {
        return M_PI * $this->radius**2;
    }
}

$c = new Circle();
$c->radius = 5;
echo $c->area(); */

/* class Rectangle {
    public $width; 
    public $height;

    public function area () {
        return $this->width * $this->height;
    }

    public function perimeter () {
        return 2 * ($this->width + $this->height);
    }

    public function isSquare () {
        return $this->width === $this->height  ? true : false;
    }
}

$rect = new Rectangle ();
$rect->width = 5;
$rect->height = 5;

echo $rect->area() . '<br>';
echo $rect->perimeter() . '<br>';
var_dump ($rect->isSquare());
echo '<br>' . '<br>';

$rect2 = new Rectangle ();
$rect2->width = 4;
$rect2->height = 9;

echo $rect2->area() . '<br>';
var_dump ($rect2->isSquare()) ;
echo '<br>'; */

/* class Rectangle {
    public $width; 
    public $height;

    public function __construct($w, $h) {
        $this->width = $w;
        $this->height = $h;


    }
    public function area () {
        return $this->width * $this->height;
    }

    public function perimeter () {
        return 2 * ($this->width + $this->height);
    }

    public function isSquare () {
        return $this->width === $this->height  ? true : false;
    }
}

$rect = new Rectangle (5, 5);

echo $rect->area() . '<br>';
echo $rect->perimeter() . '<br>';
var_dump ($rect->isSquare());
echo '<br>' . '<br>';

$rect2 = new Rectangle (4, 9);

echo $rect2->area() . '<br>';
var_dump ($rect2->isSquare()) ;
echo '<br>';  */

/* class User {

    public $name;
    public $age;
    public $job;

    public function __construct($name, $age, $job) {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }

    public function introduce() {
        return "Hi, I am $this->name, $this->age ($this->job) <br>";
    }
}

$a = new User('Alex', 18, 'doctor');
$b = new User('John', 32, 'carpenter');

echo $a->introduce();
echo $b->introduce();
echo '<br>';


class BankAccount {

    private $owner;
    private $balance;

    public function __construct($o, $b) {
        $this->owner = $o;
        $this->balance = $b;
    }

    public function deposite($amount) {
         $this->balance += $amount;
    }

    public function showBalance() {
        return "Welcome, $this->owner, your current balance is $this->balance <br>";
    }
}

$balance1 = new BankAccount('Bilol', 200);
$balance2 = new BankAccount('Zafar', 350);
echo $balance1->deposite(1);
echo $balance1->showBalance();

echo $balance2->deposite(50);
echo $balance2->showBalance(); 
echo '<br>';

class Product {
    
    private $name;
    private $price;

    public function __construct($n, $p) {
        $this->name = $n;
        $this->price = $p; 
    }
    public function getPrice() {
        return "$this->name: $this->price";
    }
    public function setPrice($newPrice) {
        $this->price = $newPrice > 0 ? $newPrice : $this->price;
    } 
}

$phone = new Product('Phone', 100);
$phone->setPrice(2000);
echo $phone->getPrice() . '<br>'; */

/* class Product {
    private $name;
    private $price;
    private $stock;

    public function __construct($n, $p, $s) {
        $this->name = $n;
        $this->price = $p;
        $this->stock = $s;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getStock() {
        return $this->stock;
    }

    public function setPrice($newPrice) {
        return $this->price = $newPrice >= 0 ? $newPrice : $this->price;
    }

    public function reduceStock($quantity) {
        return $this->stock -= $quantity;
    }
}

class Customer {
    private $name; 
    private $balance;
    
    public function __construct($n, $b) {
        $this->name = $n;
        $this->balance = $b;           
    }
    public function getName() {
        return $this->name;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        return $this->balance = $amount > 0 ? $this->balance + $amount : $this->balance; 
    }

    public function buyProduct($product, $quantity) {
        $total = $product->getPrice() * $quantity;     
        if ($product->getStock() >= $quantity && $this->balance >= $total) {
            $this->balance -= $total;
            $reduceStock = $product->reduceStock($quantity);
            
        }
        else {
            return "There is no enough $ in balance / items . <br>";
        }   
        return "The transcation was successful. Remained: $this->balance. Items in stock: $reduceStock <br>";

    }



}


$phone = new Product ('Phone', 500, 3);
$bilol = new Customer ('Bilol', 1200); 



echo $bilol->buyProduct($phone, 4);
echo $bilol->buyProduct($phone, 2);
echo $bilol->buyProduct($phone, 1);

$bilol->deposit(400);
echo $bilol->buyProduct($phone, 1); */

/* class Taxi {
    private $driverName;
    private $ratePerKm;
    private $earnings = 0;

    public function __construct($dN, $km) {
        $this->driverName = $dN;
        $this->ratePerKm = $km;
    }
    
    public function getDriverName() {
        return $this->driverName;
    }

     public function getRatePerKm() {
        return $this->ratePerKm;
    }

    public function getEarnings() {
        return $this->earnings;
    }

    public function addEarnings($amount) {
        return $this->earnings += $amount;
    }
  
}

class Passenger {
    private $name;
    private $balance;
    
    public function __construct($n, $b) {
        $this->name = $n;
        $this->balance = $b;
    }

    public function getName() {
        return $this->name;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function takeTaxi($taxi, $distance) {
    $total = $distance * $taxi->getRatePerKm();
    if ($this->balance >= $total) {
        $this->balance-=$total;
        $taxi->addEarnings($total);
        return "Successful trip! <br> The way: $distance km. <br> Balance now: $this->balance$. <br> Driver earning: " . $taxi->getEarnings() . "<br>";
    }
    return "No balance for the trip!";
    }
}

$driver1 = new Taxi ('Alisher', 3);
$passenger = new Passenger ('Bilol', 20);
$passenger2 = new Passenger ('Tema', 100);

echo $passenger->takeTaxi($driver1, 5) . '<br>'; 
echo $passenger->takeTaxi($driver1, 1) . '<br>'; 
echo $passenger2->takeTaxi($driver1, 1000) . '<br>'; */


/* class Taxi {
    private $driverName;
    private $ratePerKm;
    private $earnings = 0;

    public function __construct($dN, $km) {
        $this->driverName = $dN;
        $this->ratePerKm = $km;
    }
    
    public function getDriverName() {
        return $this->driverName;
    }

     public function getRatePerKm() {
        return $this->ratePerKm;
    }

    public function getEarnings() {
        return $this->earnings;
    }

    public function addEarnings($amount) {
        return $this->earnings += $amount;
    }
  
}

class Passenger {
    private $name;
    private $balance;
    
    public function __construct($n, $b) {
        $this->name = $n;
        $this->balance = $b;
    }

    public function getName() {
        return $this->name;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function takeTaxi($taxi, $distance) {
    $total = $distance * $taxi->getRatePerKm();
    if ($this->balance >= $total) {
        $this->balance-=$total;
        $taxi->addEarnings($total);
        return "Successful trip! <br> The way: $distance km. <br> Balance now: $this->balance$. <br> Driver earning: " . $taxi->getEarnings() . "<br>";
    }
    return "No balance for the trip!";
    }
}

$driver1 = new Taxi ('Alisher', 3);
$passenger = new Passenger ('Bilol', 20);
$passenger2 = new Passenger ('Tema', 100);

echo $passenger->takeTaxi($driver1, 5) . '<br>'; 
echo $passenger->takeTaxi($driver1, 1) . '<br>'; 
echo $passenger2->takeTaxi($driver1, 1000) . '<br>'; */


/* class Player {
    private $name;
    private $health = 100;

    private static $playersCount = 0;

    public function __construct($name) {
        $this->name = $name;

        self::$playersCount++;
    }

    public function getName() {
        return $this->name;
    }

    public static function getPlayersCount() {
        return self::$playersCount;
    }
}

$p1 = new Player ("Alex");
$p2 = new Player ("Kosta");

echo $p1->getName() . '<br>';
echo $p2->getName() . '<br>';

echo Player::getPlayersCount() . '<br>'; */

/* class Taxi {
    private string $driverName;
    private static int $totalTaxis = 0;

    public function __construct($driverName) {
        $this->driverName = $driverName;
        
        self::$totalTaxis++;
    }

    public function getName(): string {
        return $this->driverName;
    }

    public static function driverCount(): int {
        return self::$totalTaxis;
    }
}

$taxi1 = new Taxi ("Alex");
$taxi2 = new Taxi ("Ben");
$taxi3 = new Taxi ("Harry");

echo Taxi::driverCount() . '<br>'; */

/* class Stock { 
    private string $itemName; 
    private int $itemQuantity;

    private static int $totalQuantity = 0;

    public function __construct($itemName, $itemQuantity) {
        $this->itemName = $itemName;
        $this->itemQuantity = $itemQuantity;
        
        self::$totalQuantity+=$this->itemQuantity;
    }

    public function getItemName(): string {
        return $this->itemName;
    }

    public function getItemQuantity(): int {
        return $this->itemQuantity;
    }

    public function plusItemQuantity ($amount): int { 
        self::$totalQuantity += $amount;
        return $this->itemQuantity += $amount;
    }

    public function minusItemQuantity ($amount): int { 
        self::$totalQuantity -= $amount;
        return $this->itemQuantity -= $amount;
    }

    public static function showTotalQuantity (): int {
        return self::$totalQuantity;
    }
}

$item1 = new Stock ("Phone", 4);
$item2 = new Stock ("P", 3);


echo $item1->getItemQuantity();
$item1->plusItemQuantity(4); 


echo Stock::showTotalQuantity(); */

/* class Video {
    private string $name;
    private int $views = 0;

    private static int $totalViews = 0;
    
    public function __construct($name) {
        $this->name = $name;
    }

    public function __destruct() {
        self::$totalViews -= $this->views;
    }

    public function watch(): void {
        $this->views++;
        self::$totalViews++;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getViews(): int {
        return $this->views;
    }

    public static function getTotalViews(): int {
        return self::$totalViews; 
    }
}

$video1 = new Video ("first");
$video2 = new Video ("second");

$video1->watch();
$video1->watch();
$video1->watch();

$video2->watch();
$video2->watch();

echo $video1->getName() . '<br>';
echo $video1->getViews() . '<br>';
echo $video2->getName() . '<br>';
echo $video2->getViews() . '<br>';


unset($video1);
echo Video::getTotalViews() . '<br>'; */

/* class Player { 
    private string $nickname; 
    private int $playerScore = 0;
    private static int $online = 0;

    public function __construct($nickname) {
        $this->nickname = $nickname;
        self::$online++;    
    } 

    public function __destruct() {
        self::$online--;
        echo "Player $this->nickname left the server <br>";
    }

    public function addScore($points): void {
        $this->playerScore += $points;
    } 

    public function getNickname (): string {
        return $this->nickname;
    }

    public function getPlayerScore (): int {
        return $this->playerScore;
    }

    public static function getOnline() {
        return self::$online;
    }
}

$player1 = new Player("A"); 
$player2 = new Player("S"); 
$player3 = new Player("N"); 

$player1->getPlayerScore();

$player1->addScore(10);
$player1->addScore(5);

unset($player2);

echo Player::getOnline() . '<br>'; */

/* declare(strict_types=1);

class User 
{        
    protected string $username;

    public function __construct(string $username) 
    {
        $this->username = $username;
    }

    public function login(): string 
    {
        return "User $this->username logged in";
    }
}

class Moderator extends User 
{
    public function ban(string $badGuy): string 
    {
        return "Moderator {$this->username} banned player {$badGuy}";
    }
}

$mod = new Moderator("Admin");
$mod->login();
echo $mod->ban("Smn"); */

/* class Product 
{
    public $title;
    public $price;
    public const TAX = 12; 
    public static $count = 0;

    public function __construct($title, $price)  
    {
        $this->title = $title;
        $this->price = $price;
        self::$count++;
    }

    public function getPriceWithTax() 
    {
        return $this->price += self::TAX;
    }
}

$product1 = new Product ('Phone', 100);
$product2 = new Product ('Laptop', 100);

echo $product1->getPriceWithTax() . '<br>'; //html brauzerda yaxshi korsatsin db qldm
echo $product2->getPriceWithTax() . '<br>';

echo Product::$count; */
