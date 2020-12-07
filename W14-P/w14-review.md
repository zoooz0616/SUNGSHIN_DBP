성신여자대학교 컴퓨터공학과 20180993 이은지

[14주차 학습 내용]
=============
동작 화면
-------
https://youtu.be/HFBc_BDhpW0

새로 배운 내용
-------------
*MongoDB
```
2009년에 발표된 크로스 플랫폼 도큐먼트 지향 데이터 베이스 시스템.
```
*MongoDB 구조
```
데이터베이스-컬렉션-도큐먼트
```
*Document 생성
```
db.myCollection.insertOne({x:1})
db.myCollection.insertMany([{x:2, y:3}, {x:4, y:5}, {x:6, y:[7,8,9]}])
```

*Document 조회
```
db.myCollection.find()
db.myCollection.find({x:1})
db.myCollection.find({"y.0": 7})
db.myCollection.find({x:6},{y:false})
```

*Document 수정
```
db.myCollection.replaceOne({x:2}, {x:10, y:11})
db.myCollection.replaceOne({x:12}, {x:12, y:[13,14]}, {upsert:true})
db.myCollection.updateMany({x:4}, {$set: {y:15}})
db.myCollection.updateMany({x:6},{$set:{"y.$[e]":17}},{arrayFilters:[{e:7}]})
```
*Document 삭제
```
db.myCollection.deleteOne({x:1})
db.myCollection.deleteMany({})
```

문제 발생과 해결 과정
-------------
문제는 딱히 없었다. shell에서 몽고디비를 사용하는 과정에서 updateOne, updateMany 이렇게 One, Many라는 키워드를 까먹고 계속 빼고 사용했다.
주의해야겠다.
		

참고사이트
----------
https://m.blog.naver.com/gnsl811/221413794473


회고
------
(+): 들어보기만 했던 몽고디비를 직접 사용해볼 수 있었다.

(-): shell 사용법을 더 익혀야겠다.

(!): Mongo


