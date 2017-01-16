<?php
/*
 * 내용: PHP 기본 문법.
 * 작성자: 박현민.
 * 작성일: 2017년 1월 13일.
 */

echo "Hello World!<br/>\n";

# 에러 분석.
// 문법 에러: echo 중 에러 ','나';'를 기대함.
echo "Parse error: syntax error, unexpected T_ECHO, expecting',' or ';'<br/>\n";

# 변수.
// 변수명 앞에 $를 사용한다.
$name;
// bool
$isTrue = TRUE;    // boolean null or 1
echo $isTrue;
echo "<br/>\n";

// 정수
$num = 123;     // 십진수
$num2 = -123;   // 음수
$num3 = 0123;   // 8진수
$num4 = 0x12;   // 16진수
echo $num,"<br/>\n";
echo $num2,"<br/>\n";
echo $num3,"<br/>\n";
echo $num4,"<br/>\n";

// 소수
$num_f = 1.234;
$num_f2 = 1.2e3;
echo $num_f,"<br/>\n";  // 소수
echo $num_f2,"<br/>\n"; // e3는 10의 3승인 1000이 곱해진다. 1.2 * 1000 = 1200

// 문자열
// * 한글을 출력하려면 고급 저장 옵션에서 유니코드 utf-8로 저장한다.
$str = "스트링";
$str2 = "\n개행";       // 개행
$str3 = "\r캐리지 리턴";       // 캐리지 리턴
$str4 = "\t탭";       // 탭
$str5 = "\\역슬래시";       // 역슬래시
$str6 = "\"따옴표";       // 따움표
$str7 = "\$달러";       // 달러

echo $str."<br/>";
echo $str2."<br/>";
echo $str3."<br/>";
echo $str4."<br/>";
echo $str5."<br/>";
echo $str6."<br/>";
echo $str7."<br/>";

echo '작은 따옴표 안에서는 \n 특수문자와 변수가 $str 동작 안함<br/>';
echo "큰 따옴표 안에서는 \n 특수문자와 변수가 $str 동작 함<br/>";

$money = 1000;
echo "문자열에 변수 넣기 쉬운 방법: $money 000<br/>\n";
echo "문자열에 변수 넣기 안전한 방법: {$money}000<br/>\n";


// 외부 변수.
// $_Get;
// $_POST;
// $_COOKIE;
// $_FILES;
// $_SESSION;
// $_SERVER;
// $_ENV;

// 전역 변수
$g1 = 1;

function GlobalTest()
{
    // error
    // echo $g1."<br/>";

    global $g1;
    echo $g1."<br/>";
}

GlobalTest();

// static 변수
function StaticTest()
{
    static $t1 = 0;
    echo $t1."<br/>";
    $t1++;
}

StaticTest();
StaticTest();
StaticTest();

// 상수
define("Hello", "안녕");
echo Hello."<br/>";

// 연산자(operator)
// =
// +-*/%
// ++$a
// $a--
// < > <= >=
// == != <> 값이 같다거나 다르면
// === !== 같다거나 다르면
// and, or, xor, !, &&, ||
// "a"."b" 문자열 더하기
$arr1 = array("a" => "사과", "b" => "바나나");
$arr2 = array("a" => "배", "b" => "딸기", "c" => "포도");
$arr3 = $arr1 + $arr2;
echo $arr3['a']."<br/>";
echo $arr3['b']."<br/>";
echo $arr3['c']."<br/>";

// 조건문
if(3 > 1)
{
    echo "true<br />";
}
else
{
    echo "false<br />";
}

$w = 1;
while($w <= 10)
{
    echo $w;
    $w++;
}

echo "<br/>";

for($j = 1; $j < 20; $j++)
{
    if($j % 2 == 0)
        continue;

    if($j > 10)
        break;

    echo $j;
}

echo "<br/>";

$choice = 2;
switch($choice)
{
    case 1:
        echo "아메리카노<br />";
        break;

    case 2:
        echo "아이스 라떼<br />";
        break;

    default:
        break;
}

// include
// include "/var/www/Class1.php";
include 'Class1.php';
include ('Class1.php');
$file = 'Class1.php';
include $file;

// function
function sum($a, $b)
{
    return $a+$b;
}

$result = sum(3,4);
echo $result."<br>";

// 값에 의한 인자 전달.
function swap1($a, $b)
{
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}
$n1 = 5;
$n2 = 6;
swap1($n1, $n2);
echo "$n1, $n2";

echo "<br>";
// 참조에 의한 전달
function swap2(&$a, &$b)
{
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

$n3 = 5;
$n4 = 6;
swap2($n3, $n4);
echo "$n3, $n4";

function return_array()
{
    return array(0,1,2);
}




























?>