<?php
/*
 * 내용: PHP 함수 래퍼런스.
 * 작성자: 박현민.
 * 작성일: 2017년 1월 14일.
 */

// 1. 날짜와 시간 함수
// 실제 존재하는 날짜인지 검사하는 함수
$result = checkdate(2, 29, 2006);
if($result)
    echo "true<br>";
else
    echo "false<br>";

// 날짜와 시간을 문자열로 변환
echo date("y년 m월 d일")."<br>";
echo date("h시 i분 s초")."<br>";
echo date("올해 z번째 주")."<br>";
echo date("올해 w번째 주")."<br>";
echo date("이번달 마지막 날은 t일")."<br>";

$date = mktime(6, 28, 31, 6, 8, 2009);
echo date("y m d", $date)."<br>";
echo date("h i s", $date)."<br>";

// 날짜와 시간을 배열로 변환
$today = getdate();
foreach($today as $key => $value)
{
    echo $key." : ".$value."<br>";
}
echo "today is ".$today['year'].$today['mon'].$today['mday']."<br>";

// 유닉스 형식으로 100만분의 1초 단위로 반환
// 1970년 1월 1일 0시 0분 0초가 기준
echo microtime()."<br>";
echo microtime(TRUE)."<br>";

// time() 날짜와 시간을 유닉스 형식으로 반환
$next_week = time() + (7 * 24 * 60 * 60);
echo 'today: ' . date('y-m-d')."<br>";
echo 'next week: ' . date('y-m-d', $next_week)."<br>";


// 2. 파일 시스템 함수
// basename() 주어진 경로의 파일 이름 반환
$path = "index.php";
echo basename($path)."<br>";
echo basename($path, ".php")."<br>";

// chmod() 파일 모드 변환
// 읽기 권한=4, 쓰기권한=2, 실행권한=1
// 읽기+쓰기= 6
chmod("index.php", 0775);

// copy() 파일 복사
$file = "index.php";
if(copy($file, $file.'.bak'))
    echo "복사 성공<br>";
else
    echo "복사 실패<br>";

// dirname() 파일 이름을 제외한 디렉토리 경로 반환
$path = "/test/index.php";
echo dirname($path)."<br>";

// fclose() 파일 닫기
// fgetc() 파일에서 문자 가져오기
$fd = fopen("Test.txt", "r");

while(!feof($fd))
{
    $buffer = fgetc($fd);
    echo $buffer;
}

fclose($fd);

echo "<br>";

// fgets() 지정된 길이만큼 문자열을 가져온다.
// 개행문자(\n)을 만나면 개행문자 까지의 문자열 반환
// 두번째 인자 생략시 한 줄만 반환
$handle = @fopen("Test.txt", "r");

if($handle)
{
    while(!feof($handle))
    {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}

echo "<br>";

// file_exists() 파일이나 디렉토리 존재 검사
$filename = "TT.txt";

if(file_exists($filename))
{
    echo "파일이 존재합니다.<br>";
}
else
{
    echo "파일이 존재하지 않습니다.<br>";
}

// file() 파일의 모든 데이터를 배열에 저장
$array = file("Test.txt");
foreach($array as $line_num => $line)
{
    echo "$line_num : $line <br>\n";
}

// filesize() 파일 크기 반환
$filename = "Test.txt";
echo $filename . ": " . filesize($filename) . " bytes<br>";

// filetype() 파일 형식 반환
echo filetype("index.php") . "<br>";
echo filetype(".") . "<br>";

// fopen() 파일 열기
$handle = fopen("Test.txt", "r");

if($handle)
{
    echo "Open<br>";
}

fclose($handle);

// fpassthru() 파일의 끝까지 출력한다

//$name = 'wacom.png';
//$fp = fopen($name, 'rb');

//header("Content-Type: image/png");
//header("Content-Length: ". filesize($name));

//if(fpassthru($fp))
//{
//    echo "성공<br>";
//}
//else
//{
//    echo "실패<br>";
//}
//fclose($fp);

// fputs, pwrite 파일 쓰기
$handle = fopen("file.txt", "w");
fwrite($handle, "Test...");
fclose($handle);

// fread 파일 읽기
$filename = "file.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
echo $contents . "<br>";
fclose($handle);

// is_dir() 디렉토리 검사
if(is_dir("."))
{
    echo "존재하는 디렉토리<br>";
}

// is_file() 존재하는 파일 검사
if(is_file("index.php"))
{
    echo "존재하는 파일<br>";
}

// is_uploaded_file() HTTP POST를 통해 업로드된 파일 인지 검사
$_FILES['userfile']['tmp_name'] = "Text.txt";
if(is_uploaded_file($_FILES['userfile']['tmp_name']))
{
    echo "업로드 파일<br>";
}
else
{
    echo "업로드 파일 아님<br>";
}

// mkdir 디렉토리 생성
//if(mkdir("test_dir", 0700))
//{
//    echo "디렉토리 생성 성공<br>";
//}
//else
//{
//    echo "디렉토리 생성 실패<br>";
//}

// move_uploaded_file 업로드 파일 이동

// readfile 파일 읽기

// rename 파일 이름 변경
//rename("Test1.txt", "Test2.txt");

// rmdir 디렉토리 제거

// unlink 파일 삭제



// 3. 문자 함수
/* crypt 단방향 문자열 암호화
 * echo 문자열 출력
 * explode 문자열 분리
 * htmlentities 문자를 HTML로 변환
 * htmlspecialchars 특수문자 HTML로 변환
 * implode / join 배열을 문자열로 연결
 * ltrim 문자열 왼쪽 공백 제거
 * md5 MD5 해시값 반환
 * nl2br 문자열 줄바꿈 앞에 <br /> 삽입
 * print 문자열 출력
 * printf 형식화된 문자열 출력
 * rtrim / chop 문자열 오른쪽 공백 제거
 * sprintf 형식에 따라 문자열 출력
 * sscanf 형식에 따라 문자 읽기
 * str_replace 문자 치환
 * strip_tags 문자열에서 HTML PHP 태그 제거
 * strlen 문자열 길이 변환
 * strpos 문자열 처음 위치 반환
 * strstr / strchr 문자열 처음 위치 반환
 * substr 문자열 일부 반환
 * trim 문자열 처음 끝 공백 제거
 */

// 4. 기타 함수

/* mail 메일 보내기
 *
 * 수학 함수
 * abs 절대값
 * ceil 올림
 * floor 내림
 * pow 거듭제곱
 * rand 랜덤
 * mt_rand 향상된 난수
 * round 반올림
 *
 * URL 함수
 * base64_encode base64로 인코딩
 * base64_decode base64 디코딩
 * urlencode url 인코딩
 * urldecode url 디코딩
 *
 * 변수 관련 함수
 * empty 변수가 비어있는지 확인
 * isset 변수가 존재하는지 확인
 * unset 변수 제거
 * is_array 변수가 배열인지 확인
 * */


?>