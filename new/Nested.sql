-- Nested Query: Find the names of users who have the maximum wallet balance
SELECT Name FROM User WHERE User_Id IN (SELECT User_Id FROM User_Account WHERE Wallet = (SELECT MAX(Wallet) FROM User_Account));

-- Join Query: Find the names of users who have stayed in the highest rated hotel
SELECT User.Name FROM User INNER JOIN Itinerary ON User.User_Id = Itinerary.User_Id WHERE Itinerary.Hotel_id = (SELECT Hotel_id FROM Hotel ORDER BY Rating DESC LIMIT 1);

-- Aggregate Function: Find the average budget of all itineraries
SELECT AVG(Budget) AS AverageBudget FROM Itinerary;

-- Complex Query: Find the total amount spent by each user
SELECT User.Name, SUM(Bill.Amount) AS TotalSpent FROM User INNER JOIN Bill ON User.User_Id = Bill.User_Id GROUP BY User.Name;

-- Aggregate Function with Group By: Find the number of itineraries per country
SELECT Country, COUNT(*) AS NumberOfItineraries FROM Itinerary GROUP BY Country;

-- Complex Query with Aggregate Function and Group By: Find the top 3 most preferred transport types by users
SELECT Transport_Preference, COUNT(*) AS NumberOfUsers FROM User_Preference GROUP BY Transport_Preference ORDER BY NumberOfUsers DESC LIMIT 3;