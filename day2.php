<?php // M_PI ; M_E ;S abs() по модулю , ceil() ~ к большему , floor() ~ к меньшему , round() - gde blije
// <pre> -> вывод информации с сохранением пробелов отступов и табуляции. 
// $arr[] = "aaaa"; <-> // array_push && array_pop
/* for ($i = 1 ; $i <= 20; $i++)  {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz' . "<br>";
    } elseif ($i % 3 === 0) {
        echo 'Fizz' . "<br>";
    } elseif ($i % 5 === 0) {
        echo 'Buzz' . "<br>";
    } else {
        echo $i . "<br>";
    }
}  */

/* echo abs(12) . '<br>';
echo abs(-12). '<br>';
echo floor(3.1). '<br>';
echo mt_rand (1, 230999900). '<br>'; */

/* function sum ($a, $b) {
    return $a + $b;
}
echo sum(1, 3443); */

/* $arr = ['a', 3, "ww", 4, 5];
echo $arr[1] . '<br>';
array_push($arr, 5);
echo count($arr);
$arr[] = "aaaa";
echo '<pre>';
print_r($arr);
echo '</pre>'; */
/* $arr = ['a', 3, "ww", 4, 5];
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . '<br>';
} */

/* $car = [
    'brand' => 'Toyota',
    'color'=> 'Black',
    'year' => 2010,
    'price' => 19000
];
echo 'Brand: ' . $car['brand'] . '<br>' ;
echo 'Color: ' . $car['color'] . '<br>' ;
echo 'Year: ' . $car['year'] . '<br>' ;
echo 'Price: ' . $car['price'] . '<br>' ; */

/* $names = ['Sasha', 'Oleg', 'Alex'];

foreach ($names as $name) {
    echo $name . '<br>' ;
} */

/*foreach ($car as $key => $value) {
     echo $key . ": " . $value . '<br>';
} */

/* ssss$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $number) {
    echo $number*2 . '<br>' ; 
}

$car = [
    'Brand' => 'Toyota',
    'Color'=> 'Black',
    'Year' => 2010,
    'Price' => 19000
];

foreach ($car as $key => $value) {
    echo "$key: $value <br>";
}

$prices = [
    'laptop' => 300,
    'mouse' => 25,
    'keyboard' => 40,
];

$total = 0;

foreach ($prices as $price) {
    $total += $price;
}
echo "Total price: $total"; */


/* function countExpensive($prices, $threshold) { 
    $quant = 0;
    foreach ($prices as $price) {
        if($price>$threshold) {
             $quant++;
        }
        
        
    

    }
    return $quant;
}

$prices = [
  'laptop' => 1200,
  'mouse' => 25,
  'keyboard' => 60,
  'monitor' => 300
];

echo countExpensive($prices, 100) . '<br>';
echo countExpensive($prices, 26) . '<br>'; /*




/* function average($numbers) {
    if (count($numbers) === 0) {
        return 0;
    }
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;

    }
    return $sum / count($numbers);
}

$numbers = [10, 20, 30];

echo average($numbers) . '<br>';



//dodelat 3 4 5 zadaniya

function formatProduct($product) {
    foreach ($product as $key => $cost) {
        return "$sena:  $$sena <br>";
    }
     



}

$product = [
    'name' => 'Laptop',
    'price' => 1200



];

echo formatProduct($product); */


/* $item = [
    'name' => 'Laptop', 
    'price' => 1200
];

function formatProduct($item) {
    return $item['name'] . ': ' . '$' . $item['price'] . '<br>';
}

echo formatProduct($item); */
/* function totalPrice($products) { 
    $total = 0;
    foreach ($products as $product) {
    $total += $product['price'];
    }
    return $total;
}

$products = [
    ['name' => 'Mouse', 'price' => 25],
    ['name' => 'Keyboard', 'price' => 60],
    ['name' => 'Monitor', 'price' => 300],
];

echo totalPrice($products) . '<br>'; */

/* function expensiveProductNames($products, $threshold) {
    $result = "";
    foreach ($products as $product) { 
        if ($product['price'] > $threshold) {
            $result .= $product['name'] . ', ';
        }
        
    }
    return $result;
}




$products = [
    ['name' => 'Mouse', 'price' => 25],
    ['name' => 'Keyboard', 'price' => 60],
    ['name' => 'Monitor', 'price' => 300],
];
echo expensiveProductNames($products, 50)  . "<br>";
// echo "A\nB";
echo phpversion(); */

/* function countOdd($numbers) {
    $count = 0;
    foreach ($numbers as $number) { 
        if ($number % 2 !== 0) {
            $count++;

        }
    } 
    return $count;
}

$n = [1, 2, 3, 4, 5, 6, 7];

echo countOdd($n); */

/* function mostExpensiveName($products) {
    $total = 0;
    $name = "";
    foreach ($products as $product) {
        if ($product['price'] > $total) {
            $total = $product['price'];
            $name = $product['name']; 

        }
        

    }
    return $name;
}

$products = [
    ['name' => 'mouse', 'price' => 25],
    ['name' => 'monitor', 'price' => 300],
    ['name' => 'keyboard', 'price' => 60],
];

echo mostExpensiveName($products); */

/* function passedStudents ($students) { 
    $name = "";
    $highestScore = 0;

    foreach ($students as $student) {
        
        if($student['score'] >= 60) {
            $name .= $student['name'] . ', ' ;
        }
        if($student['score'] > $highestScore) {
            $highestScore = $student['score'];
        }

    }
    return $name . '<br>' . "The highest score is: $highestScore";

}

$students = [
    ['name' => 'Anya', 'score' => 45],
    ['name' => 'Boris', 'score' => 78],
    ['name' => 'Vika', 'score' => 60],
];
echo passedStudents($students);
echo strtoupper(strtolower(trim(" aaa  "))); */

/* $password = '901b';
while ($password != '901b') {
    echo "Password is incorrect";
} */

//$day = 34;

/* switch ($day) {
    case 1: 
        echo "M";
        break;
    case 2:
        echo "T";
        break;
    case 3:
        echo "W";
        break;
    case 4:
        echo "Th";
        break;
    default:
        echo "other";
} */

/* $age = 20;
$status = ($age >= 18) ? true : false ; 
echo $status; */

/* $i = 10;
while ($i >= 1) {
    $i--;
    echo $i . '<br>';
}

/* $grade = "B";
switch ($grade) {
case "A":
    echo "Cool";
    break;
case "B":
    echo "Normal";
    break;
case "C":
    echo "Ok";
    break;
}

function isEven($n) {
    $ans = ($n % 2 === 0) ? true : false;
    return $ans;
}

echo isEven(4); */

/* $i = 2;
while ($i <= 20) {
    echo $i . '<br>';
    $i+=2;
}

$number = 4;
switch ($number) {
case 1:  
    echo 'a';
    break;
case 2:
    echo 'b';
    break;
case 3:
    echo 'c';
    break;
default:
    echo 'unknown';
}

function signLabel ($n) {
    $ans = $n >= 0  ? "Positive or zero" : "Negative";
    return $ans;
}

echo signLabel(0); */



/* $cart = [
    ['name' => 'Laptop', 'price' => 800, 'qty' => 1],
    ['name' => 'Mouse', 'price' => 20, 'qty' => 2],
    ['name' => 'Keyboard', 'price' => 45, 'qty' => 1],
];

function itemSubtotal($item) {
    return $item['price']*$item['qty'];
}

function cartTotal($cart) {
    $total = 0;
    foreach($cart as $c){
        $total += itemSubtotal($c);
        
    }
    return $total;

}

$total = cartTotal($cart);

function applyDiscount($total) {
    return ($total > 500) ? ($total*0.9) : $total ;
}

$totalDiscount = applyDiscount($total);

foreach($cart as $a) {
    echo $a['name'] . " x" . $a['qty'] . " = " . itemSubtotal($a) . " <br>";
}

echo "Total: $total <br> With discount: $totalDiscount"; */

/*
$scores = [85, 92, 74, 60, 45];

function averageScore($scores) {
    $sum = 0;
    foreach ($scores as $score) {
        $sum += $score;
    }
    return $sum / count($scores);
}

$avg = averageScore($scores);

function passStatus($avg) {
    $check = ($avg >= 60) ? "Pass" : "Fail";
    return $check;
    
}

$passCheck = passStatus($avg);

echo "Average score: $avg, Status: $passCheck"; */

/* $expenses = [
    ['category' => 'Rent', 'amount' => 500],
    ['category' => 'Salary', 'amount' => 1200],
    ['category' => 'Add', 'amount' => 150],
    ['category' => 'Chancery', 'amount' => 30],
];

function totalExpenses($expenses) {
    $sum = 0;
    foreach($expenses as $expense) {
        $sum += $expense['amount'];
    }
    return $sum;
}

function biggestExpenseCategory($expenses) {
    $amount = 0;
    $category = "";
    foreach ($expenses as $expense) { 
        if ($expense['amount'] > $amount) {
            $amount = $expense['amount'];
            $category = $expense['category'];
        } 
    
    }
    return $category;
}

function budgetStatus($totalExpenses, $budget) {
    $res = ($totalExpenses <= $budget) ? "On limit" : "Of limit";
    return $res;
}

$totalExpenses = totalExpenses($expenses);
$biggestExpenseCategory = biggestExpenseCategory($expenses);
$budgetStatus = budgetStatus($totalExpenses, 1500);

echo "Total: $totalExpenses$, Biggest Expense Category: $biggestExpenseCategory, Budget Status: $budgetStatus <br>"; */

