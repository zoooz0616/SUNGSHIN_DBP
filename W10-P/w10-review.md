성신여자대학교 컴퓨터공학과 20180993 이은지

[10주차 학습 내용]
=============
<새로 배운 내용>
-------------

* DBP(DataBase Programming)이란?
```
: DBMS에 데이터를 정의하고 저장된 데이터를 가져와 변경하는 프로그램을 작성하는 과정.

-4가지 선택 필요
  1)호스트 언어
  2)DBMS
  3)운영체제
  4)컴퓨터 기종
-DBP 방법
  1)웹 프로그래밍 언어에 SQL 삽입.
  2)SQL 전용 언어 사용.(오라클은 PL/SQL, SQL Server는 T-SQL)
  3)일반 프록래밍 언어에 SQL 삽입.(JAVA, C++, C)
  4)데이터베이스 관리 기능과 비주얼 프로그래밍 기능을 갖춘 GUI 기반 SW개발 도구 사용.
```

* Oracle
```
: 오라클사의 공동 설립자인 래리 앨리슨이 1977년 SDL 회사를 설립하고 1982년에 오라클로 변경.
-외부에서도 접속할 수 있도록 설정 변경
  EXEC DBMS_XDB.SETLISTENERLOCALACCESS(FALSE);
-샘플 계정인 HR사용. 잠금 푸는 것 필요.
  ALTER USER HR ACCOUNT UNLOCK IDENTIFIED BY 1234;
```

* PHP
```
1.print와 echo의 차이점
:print는 하나의 입력을 받아 리턴.echo는 하나 이상의 문자열 출력

2.배열 선언 방법
: $foo=[1,2,3,4]; or $bar = array(1,2,3,4);
```


<문제 발생과 해결 과정>
-------------
'mysqli_fetch_array() expects parameter 1 to be mysqli_result, bool given'오류가 발생함. 오타 발견..

<참고사이트>
----------
https://www.phpschool.com/gnuboard4/bbs/board.php?bo_table=qna_function&wr_id=238408&page=2579

<회고>
------
(+): 처음 배웠을 때보다 확실히 실력이 는 것을 체감함. 원하는 결과가 나오도록 코딩할 수 있게됨!

(-): 오타 좀 조심해야겠다.

(!): MySQL, PHP

