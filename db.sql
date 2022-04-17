-- create table admin(
--     id INT NOT NULL,
--     username Varchar2(40),
--     Email varchar2(40),
--     mobile varchar2(11),
--     password varchar2(255),
--     CONSTRAINT ADMIN_PK PRIMARY KEY (ID)
-- );

-- CREATE SEQUENCE admin_seq START WITH 1;

-- CREATE OR REPLACE TRIGGER ADMIN_ID
-- BEFORE INSERT ON admin
-- FOR EACH ROW

-- BEGIN
--   SELECT admin_seq.NEXTVAL
--   INTO   :new.id
--   FROM   dual;
-- END;
-- /

create table users(
    id INT NOT NULL,
    username Varchar2(40),
    Email varchar2(40),
    mobile varchar2(11),
    dob DATE,
    password varchar2(255),
    isAdmin NUMBER(1,0) DEFAULT 0,
    CONSTRAINT user_PK PRIMARY KEY (ID)
);

CREATE SEQUENCE users_seq START WITH 1;

CREATE OR REPLACE TRIGGER user_ID
BEFORE INSERT ON users
FOR EACH ROW

BEGIN
  SELECT users_seq.NEXTVAL
  INTO   :new.id
  FROM   dual;
END;
/