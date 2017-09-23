INSERT INTO
gs_an_table(id,name,email,naiyou,indate)
VALUES(null,'たなか','test1@test.jp','質問1',sysdate());
INSERT INTO
gs_an_table(id,name,email,naiyou,indate)
VALUES(null,'たさき','test2@test.jp','質問1',sysdate());
INSERT INTO
gs_an_table(id,name,email,naiyou,indate)
VALUES(null,'たになか','test3@test.jp','質問1',sysdate());
INSERT INTO
gs_an_table(id,name,email,naiyou,indate)
VALUES(null,'たけ','test4@test.jp','質問1',sysdate());
INSERT INTO
gs_an_table(id,name,email,naiyou,indate)
VALUES(null,'たけだ','test5@test.jp','質問1',sysdate());


SELECT * FROM gs_an_table WHERE
name='田中';

SELECT * FROM gs_an_table
WHERE
name LIKE 'た%';

SELECT * FROM gs_an_table ORDER BY indate DESC;