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




CREATE TABLE TRAINS(
  TID INT,
  TNAME VARCHAR2(20),
  TOTAL_SEATS NUMBER(3,0),
  TOTAL_BLOCKS NUMBER(2,0),
  CONSTRAINT TRAIN_PK PRIMARY KEY (TID)
);

CREATE SEQUENCE TRAINS_seq START WITH 1000;

CREATE OR REPLACE TRIGGER TRAIN_ID
BEFORE INSERT ON TRAINS
FOR EACH ROW

BEGIN
  SELECT TRAINS_seq.NEXTVAL
  INTO   :new.TID
  FROM   dual;
END;
/

CREATE TABLE BLOCKS(
  BID INT,
  TID INT,
  B_NAME VARCHAR2(20),
  TOTAL_STEATS NUMBER(3,0),
  CLASS VARCHAR2(20),
  FARE NUMBER(3,0),
  CONSTRAINT BLOCK_PK PRIMARY KEY (BID),
  CONSTRAINT BT_FK FOREIGN KEY (TID) REFERENCES TRAINS(TID)
);

CREATE SEQUENCE BLOCKS_seq START WITH 1;

CREATE OR REPLACE TRIGGER BLOCK_ID
BEFORE INSERT ON BLOCKS
FOR EACH ROW

BEGIN
  SELECT BLOCKS_seq.NEXTVAL
  INTO   :new.BID
  FROM   dual;
END;
/

CREATE TABLE SEATS(
  SID INT,
  SEAT_NUM INT,
  TID INT,
  BID INT,
  IS_BOOKED NUMBER(1,0),
  CONSTRAINT SPK PRIMARY KEY (SID),
  CONSTRAINT STD FOREIGN KEY(TID) REFERENCES TRAINS(TID),
  CONSTRAINT SBD FOREIGN KEY(BID) REFERENCES BLOCKS(BID)
);

CREATE SEQUENCE SEATS_seq START WITH 1;

CREATE OR REPLACE TRIGGER SEAT_ID
BEFORE INSERT ON SEATS
FOR EACH ROW

BEGIN
  SELECT SEATS_seq.NEXTVAL
  INTO   :new.SID
  FROM   dual;
END;
/


CREATE TABLE ROUTES(
  ROUTE_ID INT,
  SOURCE VARCHAR2(20),
  DEST VARCHAR2(20),
  CONSTRAINT ROUTE_PK PRIMARY KEY(ROUTE_ID)
);


CREATE SEQUENCE ROUTE_seq START WITH 1;

CREATE OR REPLACE TRIGGER ROUTE_ID
BEFORE INSERT ON ROUTES
FOR EACH ROW

BEGIN
  SELECT ROUTE_seq.NEXTVAL
  INTO   :new.ROUTE_ID
  FROM   dual;
END;
/

CREATE TABLE ROUTE_TRAIN_JUNCTION(
  ROUTE_ID INT,
  TID INT,
  ARRIVAL_TIME VARCHAR2(20),
  DEPARTURE_TIME VARCHAR2(20),
  CONSTRAINT R_FK FOREIGN KEY (ROUTE_ID) REFERENCES ROUTES(ROUTE_ID),
  CONSTRAINT T_FK FOREIGN KEY (TID) REFERENCES TRAINS(TID)
);


CREATE TABLE TICKETS(
  TICKET_ID INT,
  TRAIN_ID INT,
  USER_ID INT,
  ROUTE_ID,
  TRAVEL_DATE DATE,
  DEPARTURE_TIME VARCHAR2(20),
  TRAIN_NAME VARCHAR2(20),
  B_NAME VARCHAR2(20),
  SEAT_NUM INT,
  CLASS VARCHAR2(20),
  FARE NUMBER(3,0),
  CONSTRAINT TICKET_PK PRIMARY KEY(TICKET_ID),
  CONSTRAINT TRAIN_FK  FOREIGN KEY (TRAIN_ID) REFERENCES TRAINS(TID),
  CONSTRAINT USER_FK FOREIGN KEY (USER_ID)  REFERENCES USERS(ID),
  CONSTRAINT ROUTE_FK FOREIGN KEY (ROUTE_ID)  REFERENCES ROUTESS(ROUTE_ID),
  CONSTRAINT BLOCK_FK FOREIGN KEY (B_NAME) REFERENCES BLOCKS(B_NAME),
  CONSTRAINT BLOCK_FK FOREIGN KEY (SEAT_NUM) REFERENCES SEATS(SEAT_NUM)
);

CREATE OR REPLACE FUNCTION GEN_TICKET_ID(USER_ID INT, TRAIN_ID INT, ROUTE_ID INT)
RETURN VARCHAR2
IS
TICKET_ID VARCHAR2(20) := '';
BEGIN
TICKET_ID := CONCAT(USER_ID,CONCAT(TRAIN_ID, ROUTE_ID));
RETURN TICKET_ID;
DBMS_OUTPUT.PUT_LINE(TICKET_ID);
END;
/

CREATE OR REPLACE TRIGGER TICKET_ID
BEFORE INSERT ON TICKETS
FOR EACH ROW

BEGIN
  SELECT GEN_TICKET_ID(:new.USER_ID, :new.TRAIN_ID, :new.ROUTE_ID)
  INTO   :new.TICKET_ID
  FROM   dual;
END;
/