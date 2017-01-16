<?php
/*
 * 내용: PHP 쿠키와 세션
 * 작성자: 박현민.
 * 작성일: 2017년 1월 15일.
 */

// 1. 쿠키
// 쿠키 다루기
echo "쿠키 예제<br>";
setcookie('php', 'Cool~');
echo $_COOKIE['php'];




// 2. 세션
// 세션 시작
session_start();
echo SID . '<p>';

// 세션 변수 등록
$_SESSION['message'] = 'Welcome to PHP world!';
echo "PHPSESSID=" . session_id() . "<br>";

// 세션 변수 제거
$_SESSION['name'] = '이민호';
$_SESSION['age'] = 29;

print_r($_SESSION);

unset($_SESSION['age']);
echo "<br>";

print_r($_SESSION);

echo "<br>";

// 세션에 저장된 모든 변수 제거
session_unset();

// 세션 종료
session_destroy();

print_r($_SESSION);


// 데이터베이스
// 4. MySQL 관련 함수
// mysql_connect 연결
// mysql_close 종료
// mysql_pconnect 이미 열결된 링크가 존재하면 새로운 링크를 연결한다.
// mysql_select_db 데이터베이스 선택
// mysql_query 쿼리 전송
// mysql_num_rows mysql_query를 통해 실행된 쿼리에 대한 레코드 수
// mysql_affected_rows INSERT, UPDATE, DELETE를 통해 실행된 쿼리 결과에 대한 레코드 수
// mysql_result 결과 레코드를 한 셀 단위로 가져온다.
// mysql_fetch_row 결과 레코드를 한 레코드 단위로 가져온다.
// mysql_fetch_assoc mysql_fetch_row와 비슷하며 연관 배열 형태로 결과를 반환
// mysql_fetch_array 결과 방식을 assoc와 row 형태로 선택 할 수 있다.
// mysql_real_escape_string 특수 문자를 처리하여 안전한 형태로 변환
// mysql_error 에러 메세지

// mysqli_connect 연결
// mysqli_close 종료
// mysqli_select_db 데이터베이스 선택
// mysqli_real_query 쿼리 전송
// mysqli_store_result 마지막 쿼리 결과 레코드 전송
// mysqli_use_result 마지막 쿼리 결과 레코드 조회
// mysqli_query real_query 후 use_result 또는 store_result 와 같다.
// mysqli_multi_query 여러 쿼리 동시에
// mysqli_next_result multi_query 다음 레코드를 가져온다
// mysqli_more_result multi_query 실행된 결과가 남아있는지 확인
// mysqli_fetch_array real_query, use_result, store_result 결과를 배열로
// mysqli_free_result 쿼리 결과를 메모리에서 해제
// mysqli_autocommit 자동 커밋 결정
// mysqli_commit 커밋
// mysqli_rollback 롤백




?>
<a href="nexpage.php?<>=strip_tags(SID)?>">다음 페이지</a>