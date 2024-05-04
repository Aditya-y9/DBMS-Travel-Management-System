CREATE TABLE Admin (
    Admin_id VARCHAR PRIMARY KEY,
    Name VARCHAR,
    Password VARCHAR,
    Role VARCHAR
);

CREATE TABLE User (
    User_Id VARCHAR PRIMARY KEY,
    Name VARCHAR,
    Password VARCHAR,
    Dob DATE,
    PhoneNo VARCHAR,
    Email_Id VARCHAR,
    Address VARCHAR
);

INSERT INTO Bill (Bill_no, Amount, Date, Payment_method, User_Id) 
VALUES ('TEST123', 50.00, '2024-04-16', 'Credit Card', 'user123');

CREATE TABLE UserProfile (
    User_Id VARCHAR PRIMARY KEY,
    Blood_group VARCHAR,
    FOREIGN KEY (User_Id) REFERENCES User(User_Id)
);

CREATE TABLE UserAccount (
    Account_Id VARCHAR PRIMARY KEY,
    Doj DATE,
    Wallet DECIMAL,
    User_Id VARCHAR,
    FOREIGN KEY (User_Id) REFERENCES User(User_Id)
);

CREATE TABLE TransportType (
    Transport_id VARCHAR PRIMARY KEY,
    NameOfProvider VARCHAR,
    Fare DECIMAL,
    TypeOfVehicle VARCHAR
);

CREATE TABLE Hotel (
    Hotel_id VARCHAR PRIMARY KEY,
    Name VARCHAR,
    No_Of_Rooms INT,
    Cost DECIMAL,
    Address VARCHAR,
    Contact VARCHAR,
    Rating DECIMAL
);

CREATE TABLE TouristPlaces (
    Id VARCHAR PRIMARY KEY,
    Country VARCHAR,
    State VARCHAR,
    City VARCHAR
);

CREATE TABLE Itinerary (
    Itinerary_id VARCHAR PRIMARY KEY,
    Title VARCHAR,
    Budget DECIMAL,
    Country VARCHAR,
    State VARCHAR,
    City VARCHAR,
    Rating DECIMAL,
    No_Of_Travellers INT,
    FoodPreference VARCHAR,
    Transport_id VARCHAR,
    Hotel_id VARCHAR,
    Date_Of_Travel DATE,
    FOREIGN KEY (Transport_id) REFERENCES TransportType(Transport_id),
    FOREIGN KEY (Hotel_id) REFERENCES Hotel(Hotel_id)
);

CREATE TABLE UserPreference (
    User_Id VARCHAR PRIMARY KEY,
    Budget DECIMAL,
    Country VARCHAR,
    Climate VARCHAR,
    Rating DECIMAL,
    No_Of_Travellers INT,
    FoodPreference VARCHAR,
    Transport_Preference VARCHAR,
    No_Of_Days INT,
    FOREIGN KEY (User_Id) REFERENCES User(User_Id)
);

CREATE TABLE Bill (
    Bill_no VARCHAR PRIMARY KEY,
    Amount DECIMAL,
    Date DATE,
    Payment_method VARCHAR,
    User_Id VARCHAR,
    FOREIGN KEY (User_Id) REFERENCES User(User_Id)
);





