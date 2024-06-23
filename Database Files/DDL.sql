-- CREATE: Used to create the database or its objects (like table, index, function, views, store procedure, etc.).
CREATE TABLE User (
    User_Id INT PRIMARY KEY,
    Name VARCHAR(100),
    Password VARCHAR(100),
    Dob DATE,
    PhoneNo VARCHAR(15),
    Email_Id VARCHAR(100),
    Address VARCHAR(255)
);

-- ALTER: Used to alter the structure of the database.
ALTER TABLE User ADD COLUMN Gender CHAR(1);

-- DROP: Used to delete objects from the database.
DROP TABLE User;

-- TRUNCATE: Used to remove all records from a table, including all spaces allocated for the records are removed.
TRUNCATE TABLE User;

-- RENAME: Used to rename an object existing in the database.
RENAME TABLE User TO NewUser;

-- COMMENT: Used to add comments to the data dictionary.
COMMENT ON COLUMN NewUser.Name IS 'Name of the user';

-- ADD: Used to add columns into the existing table.
ALTER TABLE NewUser ADD COLUMN Age INT;

-- MODIFY: Used to modify the existing columns in a table.
ALTER TABLE NewUser MODIFY COLUMN Age SMALLINT;

-- CONSTRAINT: Used to define rules on the data columns of a table.
ALTER TABLE NewUser ADD CONSTRAINT CHK_Age CHECK (Age>=18 AND Age<=100);

-- FOREIGN KEY: Used to prevent actions that would destroy links between tables.
ALTER TABLE NewUser ADD FOREIGN KEY (User_Id) REFERENCES Admin(Admin_Id);

-- PRIMARY KEY: Uniquely identifies each record in a table.
ALTER TABLE NewUser ADD PRIMARY KEY (User_Id);

-- NOT NULL: Ensures that a column cannot have NULL value.
ALTER TABLE NewUser MODIFY Name VARCHAR(100) NOT NULL;

-- UNIQUE: Ensures that all values in a column are different.
ALTER TABLE NewUser ADD UNIQUE (Email_Id);

-- CHECK: Ensures that all values in a column satisfies certain conditions.
ALTER TABLE NewUser ADD CHECK (Age>=18);

-- INDEX: Used to create and retrieve data from the database very quickly.
CREATE INDEX idx_NewUser_Name ON NewUser (Name);