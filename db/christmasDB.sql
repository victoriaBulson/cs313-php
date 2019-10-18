CREATE TABLE accounts(                                                          username      VARCHAR(20) PRIMARY KEY,                                         password      VARCHAR(20) NOT NULL,
name          VARCHAR(20) NOT NULL,                                           comment       TEXT        NOT NULL
);

CREATE TABLE members(
email         TEXT        PRIMARY KEY,
family        VARCHAR(20) NOT NULL REFERENCES accounts(username),
name          VARCHAR(20) NOT NULL
);

CREATE TABLE partners(
partner_id    SERIAL      PRIMARY KEY,
member1       TEXT        NOT NULL REFERENCES members(email),
member2       TEXT        NOT NULL REFERENCES members(email)
);

CREATE TABLE combos(
combo_id      SERIAL      PRIMARY KEY,
giver         TEXT        NOT NULL REFERENCES members(email),
reciever      TEXT        NOT NULL REFERENCES members(email),
year          INT         NOT NULL         
);


INSERT INTO accounts(username, password, name, comment)
VALUES
    ('bulson_buldogs', 'buldogs', 'Bulson', 'Jay & Laurie');
    
INSERT INTO members(email, family, name)
VALUES
    ('gidget278@comcast.net', (SELECT username FROM accounts WHERE username='bulson_buldogs'), 'Tina'),
    ('geoff.bulson@gmail.com', (SELECT username FROM accounts WHERE username='bulson_buldogs'), 'Geoff'),
    ('felth88@yahoo.com', (SELECT username FROM accounts WHERE username='bulson_buldogs'), 'Eric'),
    ('victoriabulson@gmail.com', (SELECT username FROM accounts WHERE username='bulson_buldogs'), 'Eric'),
    ('breweda1982@yahoo.com', (SELECT username FROM accounts WHERE username='bulson_buldogs'), 'Dan'),
    ('lexie66allen@gmail.com', (SELECT username FROM accounts WHERE username='bulson_buldogs'), 'Lexi'),
    ('av8rdude@gmail.com', (SELECT username FROM accounts WHERE username='bulson_buldogs'), 'Kevin'),
    ('aaroncmears@gmail.com', (SELECT username FROM accounts WHERE username='bulson_buldogs'), 'Aaron');
    
INSERT INTO partners(partner_id, member1, member2)
VALUES
    (1, (SELECT email FROM members WHERE email='gidget278@comcast.net'), (SELECT email FROM members WHERE email='breweda1982@yahoo.com')),
    (2, (SELECT email FROM members WHERE email='geoff.bulson@gmail.com'), (SELECT email FROM members WHERE email='lexie66allen@gmail.com')),
    (3, (SELECT email FROM members WHERE email='felth88@yahoo.com'), (SELECT email FROM members WHERE email='av8rdude@gmail.com')),
    (4, (SELECT email FROM members WHERE email='victoriabulson@gmail.com'), (SELECT email FROM members WHERE email='aaroncmears@gmail.com'));
    
INSERT INTO combos (combo_id, giver, reciever, year)
VALUES
    (1, (SELECT email FROM members WHERE email='gidget278@comcast.net'), (SELECT email FROM members WHERE email='aaroncmears@gmail.com'), 2019),
    (2, (SELECT email FROM members WHERE email='victoriabulson@gmail.com'), (SELECT email FROM members WHERE email='felth88@yahoo.com'), 2019),
    (3, (SELECT email FROM members WHERE email='felth88@yahoo.com'), (SELECT email FROM members WHERE email='breweda1982@yahoo.com'), 2019),
    (4, (SELECT email FROM members WHERE email='geoff.bulson@gmail.com'), (SELECT email FROM members WHERE email='gidget278@comcast.net'), 2019),
    (5, (SELECT email FROM members WHERE email='lexie66allen@gmail.com'), (SELECT email FROM members WHERE email='victoriabulson@gmail.com'), 2019),
    (6, (SELECT email FROM members WHERE email='breweda1982@yahoo.com'), (SELECT email FROM members WHERE email='av8rdude@gmail.com'), 2019),
    (7, (SELECT email FROM members WHERE email='av8rdude@gmail.com'), (SELECT email FROM members WHERE email='geoff.bulson@gmail.com'), 2019),
    (8, (SELECT email FROM members WHERE email='aaroncmears@gmail.com'), (SELECT email FROM members WHERE email='lexie66allen@gmail.com'), 2019);
