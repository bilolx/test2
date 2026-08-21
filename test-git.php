<?php
declare(strict_types=1);

require_once 'database.php';

$_POST['username'] = 'Admin';
$_POST['password'] = '007'; 



/* $searchQuery = $_GET['query'] ?? "All items";
$pageNumber = $_GET['page'] ?? 1;
echo "Search results for: {$searchQuery}. Page: {$pageNumber}.";
print_r($_GET); */

/* function registerUser(): string
{   
    $username = $_POST['username'] ?? 'Guest';
    $password = $_POST['password'] ?? '';
    if (strlen($password) < 8) {
        throw new Exception("Password is too short!");
    } 
    return "User {$username} registered successfully! <br>";
}

try {
    $user1 = registerUser();
    echo $user1;
} catch (Exception $e) {
    echo "Error: {$e->getMessage()} <br>";

} finally {
    echo "Finished <br>";
} */

/* echo '<pre style="background:#f4f4f4; padding:10px; border-radius:5px;">';
print_r($_SERVER);
echo '</pre>'; */
/* $_SERVER['REQUEST_METHOD'] = 'POST';
$_POST['secret_code'] = '007';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "Welcome to the homepage. Please submit the form. <br>";
} 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try { 
        $secretCode = $_POST['secret_code'] ?? '';

            if ($secretCode !== '007') {
                throw new Exception("Intruder alert!");
            }

            echo "Access granted, agent <br>.";

    } catch (Exception $e) {
        echo $e->getMessage();
    }
} */

/* $username = 'Bilol';
$role = 'Admin';
$text = "User: {$username} | Role: {$role}";
$tekst = 'tekst.txt';

echo file_exists($tekst);

file_put_contents($tekst, $text);
file_put_contents($tekst, $text);

echo file_get_contents($tekst);



// 1. User nomli alohida Class yaratamiz
/* class User
{
    public int $id;
    public string $name;
    public string $email;

    // Konstruktor orqali ma'lumotlarni o'rnatamiz
    public function __construct(int $id, string $name, string $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}

// 2. Class asosida yangi obyektlar (instance) hosil qilamiz
$user1 = new User(1, 'Ali', 'ali@gmail.com');
$user2 = new User(2, 'Vali', 'vali@gmail.com');
$user3 = new User(3, 'Hasan', 'hasan@gmail.com');

// 3. Obyektlarni bitta massivga yig'amiz (Array of Objects)
$users = [$user1, $user2, $user3];

// 4. Massiv ichidagi obyektlarni JSON formatiga o'giramiz
$jsonData = json_encode($users, JSON_PRETTY_PRINT);

// 5. Natijani brauzerda formatlangan holda chiqaramiz
echo "<pre>" . $jsonData 
. "</pre>"; */

$playerSettings = [
    'nickname' => 'skyzz',
    'volume' => 80,
    'theme' => 'dark'
];

$fileName = 'settings.json';

$encoded = json_encode($playerSettings);
file_put_contents($fileName, $encoded);

$got = file_get_contents($fileName);
$loadedSettings = json_decode($got, true);

echo "Player: {$loadedSettings['nickname']} | Theme: {$loadedSettings['theme']} <br>"; 

time(); 

$a = 5;
if ($a > 10) {
    echo "A is greater than 10";
} else {
    echo "A is not greater than 10";
}