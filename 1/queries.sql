
-- create
CREATE TABLE hometask (
  Id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO hometask VALUES (0001, 'someguy1', 25, 'Moscow');
INSERT INTO hometask VALUES (0002, 'someguy2', 35, 'Moscow');
INSERT INTO hometask VALUES (0003, 'someguy3', 45, 'Moscow');
INSERT INTO hometask VALUES (0004, 'someguy4', 15, 'Moscow');

-- fetch 
SELECT * FROM hometask;