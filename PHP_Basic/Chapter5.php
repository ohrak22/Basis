<?php
/*
 * 내용: PHP 배열과 객체.
 * 작성자: 박현민.
 * 작성일: 2017년 1월 15일.
 */

// 1. 배열
// 배열 생성
$arr = array("name"=>"brown", 7=>"브라운");
echo $arr["name"]."<br>";
echo $arr[7];

$arr = array("brown", "브라운");
echo $arr[0]."<br>";
echo $arr[1]."<br>";

// 배열 제거
$arr = array("name"=>"brown", "age"=>29, "sex"=>"male");
// 배열의 원소 제거
unset($arr["sex"]);
print_r($arr);
// 배열의 전체 제거
unset($arr);
// print_r($arr); // error

// 다중 배열
$arr = array(
        array(100, 100, 50),
        array(100, 100, 50),
        array(100, 100, 50)
        );

// 배열 연산
// + 배열 합치기(중복을 허용하지 않음)
// == != <> 값 비교
// === !== 배열 비교

// 배열 정렬
// sort 값을 기준으로 정렬
// rsort 값을 기준으로 내림차순 정렬
// asort 값을 기준으로 정렬하되 키와 값의 관계 유지
// arsort 값을 기준으로 내림차순 정렬하되 키와 값의 관계 유지
// ksort 키를 기준으로 정렬
// krsort 키를 기준으로 내림차순 정렬
// natsort natural order 알고리즘으로 정렬하되 키와 값의 관계 유지
// natcasesort 대소문자 구분없이 natsort

echo "<br>";
// 2. 객체
//include "Human.php";
include "Baby.php";

// 인스턴스 생성
$charles = new Human("철수");
$younghee = new Human("영희");
$charles->Talk("내 나이는" . $charles->Age);
$younghee->Eat("dinner");
$younghee->Weight = 60;
$charles = NULL;
$younghee = NULL;

$baby = new Baby("아기");
$baby->BabyEat();















?>