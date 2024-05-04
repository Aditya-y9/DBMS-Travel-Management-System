-- Find the average budget of all itineraries
SELECT AVG(Budget) AS AverageBudget FROM Itinerary;

-- Find the total number of users with the same blood group
SELECT Blood_group, COUNT(*) AS NumberOfUsers FROM User_Profile GROUP BY Blood_group;

-- Find the maximum wallet balance among all user accounts
SELECT MAX(Wallet) AS MaxWalletBalance FROM User_Account;

-- Find the minimum, maximum, and average hotel cost
SELECT MIN(Cost) AS MinCost, MAX(Cost) AS MaxCost, AVG(Cost) AS AverageCost FROM Hotel;

-- Find the top 5 most expensive itineraries
SELECT * FROM Itinerary ORDER BY Budget DESC LIMIT 5;

-- Find the number of itineraries per country
SELECT Country, COUNT(*) AS NumberOfItineraries FROM Itinerary GROUP BY Country;

-- Find the total amount billed per user
SELECT User_Id, SUM(Amount) AS TotalAmount FROM Bill GROUP BY User_Id;

-- Find the number of users per climate preference
SELECT Climate, COUNT(*) AS NumberOfUsers FROM User_Preference GROUP BY Climate;

-- Find the top 3 most preferred transport types by users
SELECT Transport_Preference, COUNT(*) AS NumberOfUsers FROM User_Preference GROUP BY Transport_Preference ORDER BY NumberOfUsers DESC LIMIT 3;

-- Find the average rating of hotels
SELECT AVG(Rating) AS AverageRating FROM Hotel;

-- Find the number of tourist places per city
SELECT City, COUNT(*) AS NumberOfPlaces FROM Tourist_Places GROUP BY City;

-- Find the names of users who have the maximum wallet balance
SELECT Name FROM User WHERE User_Id IN (SELECT User_Id FROM User_Account WHERE Wallet = (SELECT MAX(Wallet) FROM User_Account));

SELECT User.Name FROM User INNER JOIN (SELECT User_Id, MAX(Wallet) AS MaxWallet FROM User_Account GROUP BY User_Id) AS MaxWallets

-- Find the names of users who have travelled to the most popular tourist place
SELECT User.Name FROM User INNER JOIN Itinerary ON User.User_Id = Itinerary.User_Id WHERE Itinerary.City = (SELECT City FROM Tourist_Places GROUP BY City ORDER BY COUNT(*) DESC LIMIT 1);

-- Find the names of users who have stayed in the highest rated hotel
SELECT User.Name FROM User INNER JOIN Itinerary ON User.User_Id = Itinerary.User_Id WHERE Itinerary.Hotel_id = (SELECT Hotel_id FROM Hotel ORDER BY Rating DESC LIMIT 1);

-- Find the total amount spent by each user
SELECT User.Name, SUM(Bill.Amount) AS TotalSpent FROM User INNER JOIN Bill ON User.User_Id = Bill.User_Id GROUP BY User.Name;

-- Find the average rating of itineraries for each country
SELECT Country, AVG(Rating) AS AverageRating FROM Itinerary GROUP BY Country;

-- Find the most preferred food preference among users
SELECT FoodPreference, COUNT(*) AS NumberOfUsers FROM User_Preference GROUP BY FoodPreference ORDER BY NumberOfUsers DESC LIMIT 1;

-- Find the total number of users who have a preference for each climate
SELECT Climate, COUNT(*) AS NumberOfUsers FROM User_Preference GROUP BY Climate;

UPDATE User SET Name = 'Aditya Yedurkar' WHERE User_Id = 'U001';

UPDATE User_Account SET Wallet = 50000 WHERE User_Id = 'U001';

UPDATE User_Preference SET Budget = 200000 WHERE User_Id = 'U001';

UPDATE Itinerary SET Budget = 250000 WHERE User_Id = 'U001';

UPDATE Bill SET Amount = 30000 WHERE User_Id = 'U001';

DELETE FROM User WHERE User_Id = 'U002';

INSERT INTO User (User_Id, Name, Email, Phone) VALUES ('U1051','Aditya Yedurkar','aditya.yedurkar@gmail.com','9876543210','Mumbai');

ALTER TABLE User ADD COLUMN Email VARCHAR(255);

CREATE TABLE Address ( Address_Id INT PRIMARY KEY, Street VARCHAR(255), City VARCHAR(255), State VARCHAR(255), Country VARCHAR(255) );

DROP TABLE User_Preference;

TRUNCATE TABLE Itinerary;

RENAME TABLE User TO Users;

GRANT SELECT, INSERT, UPDATE, DELETE ON Users TO 'admin'@'localhost';

REVOKE INSERT, UPDATE ON Users FROM 'root'@'localhost';

COMMIT;

ROLLBACK;

