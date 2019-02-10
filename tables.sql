CREATE TABLE 'users' (
  'SNo' int(20) DEFAULT NULL,
  'Name' varchar(20) DEFAULT NULL,
  'Email' varchar(20) DEFAULT NULL,
  'Credits' int(30) DEFAULT '10'
);


INSERT INTO 'users' ('SNo','Name', 'Email', 'Credits') VALUES
('1','John', 'john123@gmail.com', 600),
('2','Ravi', 'ravi123@gmail.com', 900),
('3','Jerry', 'jerry@gmail.com', 450),
('4','Ram', 'ram123@gmail.com', 260),
('5','Rahul', 'rahul123@gmail.com', 780),
('6','Ian', 'ian123@gmail.com', 500),
('7','Wang', 'wang123@gmail.com', 100),
('8','Goku', 'goku123@gmail.com', 300),
('9','Ron', 'ron123@gmail.com', 250),
('10','Harry', 'Harry123@gmail.com',190);

CREATE TABLE 'transfers' (
  'from' varchar(20) DEFAULT NULL,
  'to' varchar(20) DEFAULT NULL,
  'credits' int(11) DEFAULT NULL
); 
