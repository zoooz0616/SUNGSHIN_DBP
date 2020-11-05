성신여자대학교 컴퓨터공학과 20180993 이은지

[10주차 학습 내용]
=============
새로 배운 내용
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

* JDBC(Java DataBase Connectivity)
```
: 자바와 데이터베이스를 연동할 수 있는 API

-JDBC의 과정
  1)JDBC 드라이버 로드
  2)DB연결
  3)DB에 데이터 읽기/쓰기(SQL구문)
  4)DB연결 종료
```


문제 발생과 해결 과정
-------------
실습하는 과정에서 포트가 1521로 나와있는데 나는 디폴트가 1522로 되어있었다. 연결이 안돼서 걱정했는데 포트번호 오류였다.


참고사이트
----------
https://jerryjerryjerry.tistory.com/57

회고
------
(+): 오라클과 나에게 익숙한 자바를 이용해 DB를 다뤘다. 나중에 프로젝트를 할 때 DB로 오라클을 사용해보고 싶다.

(-): 연결할 때 오류가 났다. 오타도 조심해야겠다.

(!): Oracle, JAVA, JDBC

