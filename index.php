<?php 
// declare(strict_types=1);

 print 'hello' . '<br>';// return 1 with what it print :)
echo 'hello',' ','world' . '<br>';// print hello world :)

$x=1;

$y=&$x; // reference when x is change , y is change too :)
// `<?= 'hello' `  equal php echo

define('age',30);

echo defined('age') .'<br>';// return 1 :)

echo PHP_VERSION . '<br>'; //predefined constant

echo __LINE__ . '<br>'; //magic constants

$foo ='bar';

$$foo ='baz'; // use the value of variable as name to another variable :)

echo $foo , $bar . '<br>'; // returns barbaz 

// Data types & type casting

# 4 scaler types
    #bool
    #int
    #float
    #string

# 4 compound types
    #array
    #object
    #callable
    #iterable

# 2 special types
    #resource
    #null
$name ='dsd';
echo gettype($name) . '<br>';
echo var_dump($name). '<br>';

$companies = ['s',1,5,7,true];
// echo $companies;
//Notice: Array to string conversion in C:\xampp\htdocs\study\index.php on line 46 Array
print_r($companies);

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

$isComplete = (String) false;
var_dump($isComplete); // string(0) ""

var_dump(is_bool($isComplete));
// PHP_INT_MAX
$gh=(int) '45';
var_dump($gh);
var_dump(is_int($gh));

// $g = 2_000_000_000;
// echo $g;
// var_dump($g);

$ld=13.5e3;
echo $ld;
$ld = 13.5e-3;
echo '<br>'.$ld;
echo '<br>'.PHP_INT_MAX;

$pf = floor((0.1 + 0.7) * 10); // floor round everything down
echo '<br>'.$pf; // 7


$pf = ceil((0.1 + 0.7) * 10); // ceil round everything up
echo '<br>'. $pf; //8 

echo NAN;
echo INF;
echo log(-1);// return NAN
echo PHP_FLOAT_MAX * 2; 
// var_dump(is_infinite($g)); 
// is_nan($pf)
 var_dump((float) $ld);
 var_dump(floatval($ld));

$firstName = 'will';
$lastName = 'smith';
$name= $firstName . ' ' . $lastName;
echo $name . '<br>';
$name[1]='2';
echo $name;

/* Strings */
$x =1;
$y=2;

// Heredoc
$text =<<<TEXT
Hello There $x 
my name is $y 
after that you can find that 
TEXT;

echo $text;
echo nl2br($text);

// Nowdoc

$text=<<<'TEXT'
Hello There $x 
my name is $y 
after that you can find that 

TEXT;
echo '<br>';
echo nl2br($text);

$text2=<<<TEXT
<div>
<p>Hello there</p>
</div>

TEXT;
// echo '<br>';
echo $text2;

/* Arrays */
$programmingLanguage=['php','java','python'];
echo '<pre>';
print_r($programmingLanguage);
echo '</pre>';

echo count($programmingLanguage);
echo '<br>';

$programmingLanguage[]='c++'; // push value in the end of array 
// another way to push using 
// array_push($programmingLanguage,'c++');


echo '<pre>';
print_r($programmingLanguage);
echo '</pre>';

echo count($programmingLanguage);
echo '<br>';

// Note: key not required 
$array=[true=>'a', 1 =>'b','1'=>'c',1.8=>'d',null =>'e'];
print_r($array); // Array ( [1] => d [] => e )

$array = ['a','b',50=>'c','d','e'];
print_r($array); //Array ( [0] => a [1] => b [50] => c [51] => d [52] => e )

array_pop($array);
print_r($array); // Array ( [0] => a [1] => b [50] => c [51] => d )

array_shift($array);
print_r($array); //  Array ( [0] => b [1] => c [2] => d )

unset($array[1]);
print_r($array); //  Array ( [0] => b [2] => d )


var_dump(array_key_exists(50,$array));// bool(false)

/* Operators */
 
// Arithmetic operators (+ - *  / % **)

$x=10;
$y=0;
// var_dump(fdiv($x/$y)); // float(INF)
//var_dump(fmod($x % $y)); if the modulus equal minus number 
// Assignment operators (= += -= *=  /=  %= **=)
// string operators (. .=)
// comparison operators (== === =/ <> === < > -< -> <===> ?? ?:)
// error control operators (@)
$x = @file('foo.txt'); // give error file not exist but when i add @ error will remove
// Increment/Decrement operators (++,--)
// Logical operators (&& || ! and or xor)
// Bitwise operators (& | ^ ~ << >>)
// ^ zor operator return if x is exist or y not both 110 ^ 011 = 101=5
// ~ negation operator flip the value of first number only 110 -> 001 , 011 and 1 with 1 equal 1 , others will be zeros so the result = 001
// << shift bits to the left 
// >> shift bits to the right 
// means every time bits is shifted it will basically either multiply by two or divide by two 
// when shifting based to the left , it will multiplying it by two 
// when shifting based to the right , every shift it will dividing it by two
// example: 
// $x =6; $y=3;
// var_dump($x << $y);
// 110 -> shift 3 time 110000 = 48 // multiply 6 by 2 three times 
// the result = 48 :) 
// var_dump($x >> $y); 
// that will discard the bites 3 times , the final result is zero :) 

$x=6;
$y=3;
//110
//&
//011
//--
//010
var_dump($x & $y);//int(2)
// Array operators (+ == === =/ <> ===/)
// Execution operators (``)
// type operators (instanceOf)
// NullSafe operator - PHP8 (?)

// operator precedence & associativity

// while() {}

// while()
// endwhile; // as for , foreach



$user=[
    'name'=>'foo',
    'email'=>'gio@gmail.com',
    'skills'=>[
        'php','graphql','react'
    ]
    ];

foreach($user as $key=>$value){
    echo $key . ' :'.$value . '<br>';
}

//  name :foo
// email :gio@gmail.com

// Notice: Array to string conversion in C:\xampp\htdocs\study\index.php on line 235
// skills :Array

foreach($user as $key => $value){
    echo $key. ':' . json_encode($value) . '<br>';
}

// name:"foo"
// email:"gio@gmail.com"
// skills:["php","graphql","react"]

foreach($user as $key => $value){
    if(is_array($value)){
        $value= implode(',',$value);
    }
    echo $key. ':' . $value . '<br>';
}
// name:foo
// email:gio@gmail.com
// skills:php,graphql,react
sleep(4); // pause the execution of the script for number of seconds :)

// match expression as switch with number of differences :)

// $food='cake';

// $return_value=match($food){
//     'apple' => 'This food is an apple',
//     'bar' => 'This food is a bar',
//     'cake' => 'This food is a cake',
// };
// var_dump($return_value);


/*  return/ declare / goto */

// declare - ticks

// tick directive is just an event occurs for tickable low level statements in php that are executed by the parser 
// what that means is that when php script is executing it executes bunch of statements right and most of these  
// statements cause something called a tick which is a kind of like an event not all statements are tickable 


function onTick(){
    echo 'Tick <br>';
}
register_tick_function('onTick');
declare(ticks=1);// means after 1 statements , retrieve a tick
$i=0;
$length=10;
while($i < $length){
    echo $i++ . '<br';

}
// declare - encoding

// the encoding directive can be used to specify the encoding per script but you should not use this and probably won't ever
// need it you won't need the tix directive either it does not have many use cases 
// one that i can think of is to do some sort of benchmarking or profiling to see how efficient your code runs so i would not worry 


// declare - strict_types

/* require / require_once / include / include_once  */

ob_start();
include 'df.php';
$nav= ob_get_clean();


/* functions */
// foo();
// bar();

// function foo(){
//     echo 'foo';
//     function bar(){
//         echo 'bar';
//     }
// }


function foco():int{ // return value must be integer :)
    return 1;
}
function df(): ?int{ // means it accepts null and int 
    return null;
}

function ls(): int{ // int|float|array
    return 56.5;
}

function sdf():mixed{
    return flsd;
}

// function sum(...$numbers):int{
//     $sum = 0;
//     foreach($numbers as $number){
//         $sum += $number;
//     }
//     return $sum;

// }
// $a = 6.0;
// $b= 7;

// echo sum($a,$b,5,7,85).'<br>';

function sum(int $x,int $y,int ...$numbers){
    return $x + $y + array_sum($numbers);

}
$a = 6.0;
 $b= 7;

 echo sum($a,$b,5,7,867).'<br>';

 setcookie( 'foo','bar', 24*24*60, '' ,'','',true);
 $GLOBALS['x'];// to access the variable in the global scope, change it inside function
 global $x; // to access the variable in the global scope , change it inside function
 static $x; // used to keep the value of variable after function ends :)

 // Anonymous function 

//  function sumofnums(...$numbers){
// return array_sum($numbers);
//  }

//  $x='sumofnums';

//  if(is_callable($X)){
//     echo $x(1,2,3,4);
//  }else{
//     echo 'Not callable';
//  }//10
$sumofnums= function (...$numbers){
     return array_sum($numbers);
 };
 $x='sumofnums';

  if(is_callable($X)){
     echo $x(1,2,3,4);
  }else{
     echo 'Not callable';
  }//10

//clousure 
// in anonmous function you can access the variables in the parent scope by using the use keyword and passing the varablies that
// you want to access so you would put use keyword after the closing parenthesis 
$x=3;
$sumos= function (...$numbers) use($x):int{ // i cann't change the value of x inside the function pass by value 
    // if i want to pass by reference use & in use(&$x);
    echo $x;
    return array_sum($numbers);
};
$x='sumos';

 if(is_callable($X)){
    echo $x(1,2,3,4);
 }else{
    echo 'Not callable';
 }

// callable type and callback function 
// when function is passed to another function as argument and then is called within that function it's called a callback function
// php has built-in functions that expect a callback function is an argument like array map or a filter u sort and so on

// $array=[1,2,3,4];
// $array2 = array_map(function($element){
//     return $element *2;
// }, $array);
// print_r($array);
// print_r($array2);

$array=[1,2,3,4];

function food($element){
return $element *2;
}
$array2 = array_map('food', $array);
print_r($array);
print_r($array2);

// we want to apply the function food to the result of array sum 
// $sum = function(callable $callback,int ...$numb ){
//     return $callback(array_sum($numb));
// };
// echo $sum('foo',1,2,3,4);
// $array = [1,2,3,4];
// function fo($element){

//     return $element *2;

// }
// in arrow functions , you can access global variables Without any try direct :) 
/* data and time */
$currentTime=time(); // timestamp 
echo $currentTime . '<br>';
echo $currentTime + 5*24*60*60 . '<br>';
echo $currentTime + 24*60*60 . '<br>';
echo date('m/d/Y g:ia'). '<br>';
echo date('m/d/Y g:ia', $currentTime + 5*24*60*60). '<br>';
echo date('m/d/Y g:ia', $currentTime - 60*60*24) . '<br>';
echo date_default_timezone_get(). '<br>';
date_default_timezone_set('UTC');
echo date('m/d/Y g:ia'). '<br>';
echo date('m/d/Y g:ia', $currentTime + 5*24*60*60). '<br>';
echo date('m/d/Y g:ia', $currentTime - 60*60*24) . '<br>';
echo date_default_timezone_get(). '<br>';
mktime(0,0,0,4,10,null); //mktime() to get the unix timestamp based on the arguments that you pass like hour year month
echo date('m/d/Y g:ia',mktime(0,0,0,4,10,null)). '<br>';

strtotime('2021-01-18 07:00:00'); // strtotime() used to get the timestamp of specidic date
$date= date('m/d/Y g:ia',strtotime('2021-01-18 07:00:00')). '<br>'; // i can use time string like tomorrow, first day of february 2020,
// second friday of january
echo date_parse($date);// will return details about the date

/* Arrays */
$items = ['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5];
$keys= array_keys($items);
print_r($keys); // Array ( [0] => a [1] => b [2] => c [3] => d [4] => e ) 
// if i want key of specific value 
$keys=array_keys($items,4);
print_r($keys);// Array ( [0] => d )
print_r(array_chunk($items,2)); // split an array into chunks of arrays with specified length , the first argument is 
// array , the second is length of the array 
// return Array ( [0] => Array ( [0] => 1 [1] => 2 ) [1] => Array ( [0] => 3 [1] => 4 ) [2] => Array ( [0] => 5 ) )
// if i want the keys return properly 
print_r(array_chunk($items,2,true)); 
// Array ( [0] => Array ( [a] => 1 [b] => 2 ) [1] => Array ( [c] => 3 [d] => 4 ) [2] => Array ( [e] => 5 ) )
$array1 =['a','b','c'];
$array2=[1,2,3];
print_r(array_combine($array1,$array2));// Array ( [a] => 1 [b] => 2 [c] => 3 ) 
// array combine takes array of keys and array of values , to get an associative array :) 
// 2 arrays must have  the same size 

// array_filter(array $array, callable|null $callback =null,int $mode=0):array

$array=[1,2,3,4,5,6,7,8,9,10];
$even = array_filter($array,fn($number)=> $number %2 ===0);
print_r($even);// Array ( [1] => 2 [3] => 4 [5] => 6 [7] => 8 [9] => 10 )
$veven = array_values($even);
print_r($veven);// Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 ) 

// array_map(callable $callback, array $array1, array ... $arrays):array
$array=[1,2,3,4,5,6];
$array = array_map(fn($number)=> $number= $number*3,$array);
print_r($array);// Array ( [0] => 3 [1] => 6 [2] => 9 [3] => 12 [4] => 15 [5] => 18 )

// array_merge(array $array1, array ... $arrays):aarray
$array1=[1,2,3];
$array2=[4,5,6];
$array3=[7,8,9];

$merged = array_merge($array1,$array2,$array3);
print_r($merged);// Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 )


// array_reduce(array $array, callable $callback, mixed $initial=null):mixed 
$invoiceItems=[
['price'=>9.99,'qty'=>3,'desc'=>'Item 1'],
['price'=>29.99,'qty'=>1,'desc'=>'Item 2'],
['price'=>149,'qty'=>1,'desc'=>'Item 3'],
['price'=>14.99,'qty'=>2,'desc'=>'Item 4'],
['price'=>4.99,'qty'=>4,'desc'=>'Item 5'],
];

$total = array_reduce($invoiceItems,fn($sum,$item)=> $sum + $item['price'] * $item['qty'],500);
echo $total;//758.9


// array_search(mixed $needle,array $haystack,bool $strict =false):int|string|false
$array = ['a','b','c','D','E','ab','bc','cd','b','d'];
$key=array_search('a',$array);
if($key === false){
echo 'letter not found';
}
if(! in_array('a',$array)){
    echo 'Letter Not Found';
}
var_dump($key);// int(1)

// find the difference between arrays by comparing values 

$array1=['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5];
$array2=['f'=>4,'g'=>5,'i'=>6,'j'=>7,'k'=>8];
$array3=['l'=>3,'m'=>9,'n'=>10];

print_r(array_diff($array1,$array2, $array3)); // Array ( [a] => 1 [b] => 2 ) //values 


print_r(array_diff_assoc($array1, $array2, $array3));// keys Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 4 [e] => 5 )


/* sorting */
$array=['d'=>3,'b'=>1,'c'=>4,'a'=>2];
// asort($array); // sort by values 
print_r($array);// Array ( [b] => 1 [a] => 2 [d] => 3 [c] => 4 ) 

// ksort($array);
print_r($array);// Array ( [a] => 2 [b] => 1 [c] => 4 [d] => 3 )

usort($array, fn($a, $b)=> $a <=> $b );// sort by values and callback function
print_r($array); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 ) 


// array destructing 
$array=[1,2,3,4];
// list($a, $b, $c, $d)= $array;
[$a, $b, $c, $d]= $array;
echo $a . ',' . $b .','.$c.','.$d.'<br>'; // 1,2,3,4

/* php.ini configuration */
// error_reporting , error_log, display_errors

// error_reporting allows you to set different levels of php error reporting 
// if i open php.ini , error_reporting=E_ALL (default value)
// i can change it to E_ALL, ~E_DEPRECATED , ~E_STRICT
// ~E_DEPRECATED Hide the deprecated 
// ~E_STRICT Hide the strict 
var_dump(ini_get('error_reporting'));//string(5) "32767"
var_dump(E_ALL);// int(32767) 


$array5t=[1];
echo $array5t[3];// Notice: Undefined offset: 3 in C:\xampp\htdocs\study\index.php on line 570

ini_set('error_reporting',E_ALL & ~E_WARNING);// so here, warning is hide :) 

// display_errors indicates whether you want to display errors on the screen or not 

var_dump(ini_get('display_errors'));
// ini_set('display_errors',0);

// error_log indicates where the error should be locked 

// POST_MAX_SIZE determines how much data can be posted in a request 

// max_execution_time sets the maximum number of seconds the script can run before it's timed out and terminated by default
// by default it's set to 30 seconds 

// memory_limit sets the maximum amount of memory a script can consume 

// file_uploads enable or disable the file uploads on php 

// upload_tmp_dir indicates the temp folder where the temp files will be stored when doing file uploads 

// upload_max_filesize 

//date.timezone

//include_path specifies the list of directories where the require include require once and include ones and other functions 
// that deal with opening files would look for files by default 

/* Error Handling | Errors and logs documentation */

error_reporting(0); // that doesn't show any errors 
error_reporting(E_ALL & ~E_WARNING); // that will accept everything except the warning 

// trigger_error('Example error', E_USER_ERROR);// Fatal error: Example error in C:\xampp\htdocs\study\index.php on line 604
echo 1; 

trigger_error('Example error', E_USER_WARNING);// Warning: Example error in C:\xampp\htdocs\study\index.php on line 607
echo 1; 
// trigger_error uses one of the user constants : E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE, E_USER_DEPRECATED

//PHP_ERROR_LOG in apache , in server coding useing error_log()

function errorHandler(
    int $type,
    string $msg,
    ?string $file=null,
    ?int $line=null
){
echo $type .':'. $msg . 'in' .$file.'on line'. $line;
exit;
}

error_reporting(E_ALL & ~E_WARNING);
echo $ghjjk; 

set_error_handler('errorHandler',E_ALL);// Notice: Undefined variable: ghjjk in C:\xampp\htdocs\study\index.php on line 624












