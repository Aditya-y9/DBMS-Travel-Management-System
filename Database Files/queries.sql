-- 1. Retrieve all records from the Admin table
SELECT * FROM Admin;

-- 2. Retrieve all records from the User table
SELECT * FROM User;

-- 3. Retrieve all records from the User_Profile table
SELECT * FROM User_Profile;

-- 4. Retrieve all records from the User_Account table
SELECT * FROM User_Account;

-- 5. Transport_Type Table: Retrieve information about different types of transportation available in the system, along with their fare and vehicle type
SELECT * FROM Transport_Type;

-- 6. Hotel Table: Retrieve details of all hotels including their names, number of rooms, cost, and contact information
SELECT * FROM Hotel;

-- 7. Tourist_Places Table: Retrieve information about tourist places currently registered in the system, along with their locations
SELECT * FROM Tourist_Places;

-- 8. Itinerary Table: Retrieve details of all planned itineraries, including the destinations, budgets, and travel dates
SELECT * FROM Itinerary;

-- 9. User_Preference Table: Retrieve information about user preferences regarding budget, climate, food, etc., for their travel plans
SELECT * FROM User_Preference;

-- 10. Bill Table: Retrieve details of all bills including the amount, date, and payment method used by users
SELECT * FROM Bill;

-- 11. Show administrators with the role 'Owner' and registered before January 1, 2023
SELECT * FROM Admin WHERE Role = 'Owner' AND DATE(STR_TO_DATE(SUBSTRING(Admin_id, 4, 6), '%y%m%d')) < '2023-01-01';

-- 12. List administrators with the role 'Admin' and whose name starts with 'J'
SELECT * FROM Admin WHERE Role = 'Manager' AND Name LIKE 'J%';

-- 13. Display administrators with the role 'Guide' and registered between January 1, 2020, and December 31, 2024
SELECT * FROM Admin WHERE Role = 'Guide' and DATE(STR_TO_DATE(SUBSTRING(Admin_id, 4, 6), '%y%m%d')) BETWEEN '2020-01-01' AND '2024-12-31';

-- 14. Provide details of users who registered in 2023
SELECT * FROM User where name like "A%"

-- 15. Show users with email addresses ending with '@apple.com'
SELECT * FROM User WHERE Email_Id LIKE '%@apple.com'

-- 16. List users with names containing 'Ananya' and registered in the last 30 days
SELECT * FROM User WHERE Name LIKE '%Ananya%' AND Dob >= CURDATE() - INTERVAL 30 YEAR;

-- 17. Retrieve all records from the Admin table where the role is 'Owner' and registered before January 1, 2023
SELECT * FROM Admin WHERE Role = 'Owner' AND DATE(STR_TO_DATE(SUBSTRING(Admin_id, 4, 6), '%y%m%d')) < '2023-01-01';

-- 18. Retrieve all records from the Admin table where the role is 'Admin' and the name starts with 'A'
SELECT * FROM Admin WHERE Role = 'Owner' AND Name LIKE 'A%';

-- 19. Retrieve all records from the Admin table (repeated query)
SELECT * FROM Admin WHERE Role = 'Manager' AND DATE(STR_TO_DATE(SUBSTRING(Admin_id, 4, 6), '%y%m%d')) BETWEEN '2020-01-01' AND '2024-12-31';

-- 20. Retrieve all records from the User table where the name starts with 'A'
SELECT * FROM User WHERE Name LIKE 'A%'

-- 21. Retrieve all records from the User table (repeated query)
SELECT * FROM User WHERE Email_Id LIKE '%@gmail.com' AND Name LIKE '%Ananya%';

-- 22. Retrieve all records from the User table (repeated query)
SELECT * FROM User WHERE Dob >= CURDATE() - INTERVAL 30 DAY;


-- 23. Retrieve all records from the Hotel table
SELECT * FROM Hotel WHERE Rating > 4 AND No_Of_Rooms >= 100;

-- 24. Retrieve all records from the Tourist_Places table
SELECT * FROM Tourist_Places WHERE Country LIKE '%India%' AND City LIKE 'S%';

-- 25. Retrieve all records from the Itinerary table
SELECT * FROM Itinerary WHERE Budget BETWEEN 500 AND 10000 AND Country = 'India' AND Rating >= 4;

-- 26. Retrieve all records from the User_Preference table
SELECT * FROM User_Preference WHERE Budget > 1000 AND Rating > 3 AND FoodPreference = 'Seafood';

-- 27. Retrieve all records from the Hotel table (repeated query)
SELECT * FROM Hotel WHERE Rating > 4.5

-- 28. Retrieve all records from the Tourist_Places table (repeated query)
SELECT * FROM Tourist_Places WHERE Country LIKE '%India%';

-- 29. Retrieve all records from the Itinerary table (repeated query)
SELECT * FROM Itinerary WHERE Budget < 50000 AND Country = 'United States' AND Rating > 3;

-- 30. Retrieve all records from the User_Preference table (repeated query)
SELECT * FROM User_Preference WHERE Budget > 2000 AND Rating > 4 AND No_Of_Travellers > 2;

SELECT * FROM  bill WHERE Payment_method = 'Credit Card' AND Amount > 5000 ;

-- 32. Retrieve all records from the Admin table
SELECT * FROM Admin WHERE Role = 'Guide' AND DATE(STR_TO_DATE(SUBSTRING(Admin_id, 4, 6), '%y%m%d')) <= '2022-12-31';

-- 33. Retrieve all records from the User_Preference table
SELECT * FROM User_Preference WHERE Climate = 'Tropical' AND Budget > 1500 AND No_Of_Travellers <= 2;

-- 34. Retrieve all records from the Transport_Type table
SELECT * FROM Transport_Type WHERE Fare > 100 AND TypeOfVehicle = 'Flight' AND NameOfProvider = 'Emirates';

-- 35. Retrieve all records from the Hotel table (repeated query)
SELECT * FROM Hotel WHERE Rating > 4 AND No_Of_Rooms > 100;

-- 36. List hotels with a rating of 3 stars and located in 'Delhi' or 'Pune'.
SELECT * FROM Hotel WHERE Rating > 3

-- 37. Display tourist places located in 'Italy' or 'Spain' with a city name starting with 'R'.
SELECT * FROM Tourist_Places WHERE (Country = 'Italy' OR Country = 'Spain') AND City LIKE 'R%';

-- 38. Show planned itineraries with a budget over ?2000 and traveling to 'Japan'.
SELECT * FROM Itinerary WHERE Budget > 2000 AND Country = 'Japan';

-- 39. Provide user preferences for destinations with a rating of 5 stars and a budget between ?1000 and ?2000.
SELECT * FROM User_Preference WHERE Rating > 4 AND Budget BETWEEN 8000 AND 9500;

-- 40. Show hotels with a rating of 4 stars or higher and located in either 'New York' or 'Los Angeles'.
SELECT * FROM Hotel WHERE Rating >= 4

-- 41. List tourist places located in countries starting with 'U' and cities starting with 'L'.
SELECT * FROM Tourist_Places WHERE Country LIKE 'U%' AND City LIKE 'L%';

-- 42. Provide itineraries with a budget more than ?1000 and traveling to 'France' or 'Germany'.
SELECT * FROM Itinerary WHERE Budget > 1000 AND (Country = 'France' OR Country = 'Germany');

-- 43. Display user preferences for destinations with a budget over ?1500 and a rating between 3 and 4.
SELECT * FROM User_Preference WHERE Budget > 1500 AND Rating BETWEEN 3 AND 5;

-- 44. Show bills paid via PayPal with an amount greater than ?200
SELECT * FROM Bill WHERE Payment_method = 'PayPal' AND Amount > 200;

-- 45. Provide administrators who are either 'Admin' or 'Owner' and registered after January 1, 2023.
SELECT * FROM Admin WHERE (Role = 'Owner' OR Role = 'Manager') AND DATE(STR_TO_DATE(SUBSTRING(Admin_id, 4, 6), '%y%m%d')) > '2023-01-01';

-- 46. List users who prefer 'Cold' climate, have a budget over ?1000, and travel with more than 3 travelers.
SELECT * FROM User_Preference WHERE Climate = 'Cold' AND Budget > 1000 AND No_Of_Travellers > 3;

-- 47. Display transport options provided by 'Volvo' with a fare less than ?50 and vehicle type 'Bus'.
SELECT * FROM Transport_Type WHERE NameOfProvider = 'Scania' AND Fare > 500 AND TypeOfVehicle = 'Bus';

-- 48. Show hotels with a rating above 4 stars, located in 'Tokyo' or 'Sydney' with more than 100 rooms.
SELECT * FROM Hotel WHERE Rating > 4 AND No_Of_Rooms > 100;

-- 49. Provide tourist places located in countries with names containing 'United Kingdom' and cities starting with 'S'.
SELECT * FROM Tourist_Places WHERE Country LIKE 'U%' AND City LIKE 'D%';

-- 50. List itineraries with a budget more than ?5000, traveling to the 'United Kingdom' with a rating above 4 stars.
SELECT * FROM Itinerary WHERE Budget > 5000 AND Country = 'United Kingdom' AND Rating > 4;

-- 51. Display user preferences for destinations with a budget over ?1000, a rating above 3 stars, and no preference for food.
SELECT * FROM User_Preference WHERE Budget > 1000 AND Rating > 3 AND FoodPreference = 'Vegetarian';

-- 52. Show hotels with a rating of 4 stars
SELECT * FROM Hotel WHERE Rating > 4

-- 53. Provide tourist places located in countries with names containing 'India' and cities containing 'Beach'.
SELECT * FROM Tourist_Places WHERE Country LIKE '%United Kingdom%' AND City LIKE '%London%';

-- 54. List itineraries with a budget less than ?500 and traveling to 'Spain' with a rating of 3 stars.
SELECT * FROM Itinerary WHERE Budget > 5000 AND Country LIKE 'U%' AND Rating >  4.5;

-- 55. Display user preferences for destinations with a budget over ?2000 and a rating above 4 stars, traveling with more than 2 travelers.
SELECT * FROM User_Preference WHERE Budget > 2000 AND Rating > 4 AND No_Of_Travellers > 2;

-- 56. Show bills paid via 'Credit Card' with an amount less than ?100 and made by users with email addresses ending with '@gmail.com'.
SELECT * FROM Bill WHERE Payment_method = 'PayPal'

-- 57. Provide administrators who are 'Manager' and registered before January 1, 2022, in the country 'USA'.
SELECT * FROM Admin WHERE Role = 'Guide' AND DATE(STR_TO_DATE(SUBSTRING(Admin_id, 4, 6), '%y%m%d')) < '2022-01-01'

-- 58. List users who prefer 'Tropical' climate and have a budget over ?1500, but travel with 2 or fewer travelers.
SELECT * FROM User_Preference WHERE Climate = 'Tropical' AND Budget > 1500 AND No_Of_Travellers <= 2;

-- 59. Display transport options provided by 'Emirates' with a fare less than ?100 and vehicle type 'Train'.
SELECT * FROM Transport_Type WHERE NameOfProvider = 'Emirates' AND Fare > 10000 AND TypeOfVehicle = 'Flight';

-- 60. Show hotels with a rating above 4 stars and located in 'London' or 'Rome', with more than 100 rooms.
SELECT * FROM Hotel WHERE Rating > 4 AND  No_Of_Rooms > 100;

-- 61. Provide tourist places located in countries with names containing 'India' and cities containing 'Beach'.
SELECT * FROM Tourist_Places WHERE Country LIKE '%United Kingdom%' AND City LIKE '%London%';

-- 62. List itineraries with a budget less than ?500 and traveling to 'Spain' with a rating of 3 stars.
SELECT * FROM Itinerary WHERE Budget < 500 AND Country = 'United States' AND Rating > 3;

-- 63. Display user preferences for destinations with a budget over ?2000 and a rating above 4 stars, traveling with more than 2 travelers.
SELECT * FROM User_Preference WHERE Budget > 2000 AND Rating > 4 AND No_Of_Travellers > 2;

-- 64. Show bills paid via 'Credit Card' with an amount less than ?100 and made by users with email addresses ending with '@gmail.com'.
SELECT * FROM Bill WHERE Payment_method = 'Credit Card' AND Amount > 100

-- 65. Provide administrators who are 'Manager' and registered before January 1, 2022, in the country 'USA'.
SELECT * FROM Admin WHERE Role = 'Manager' AND DATE(STR_TO_DATE(SUBSTRING(Admin_id, 4, 6), '%y%m%d')) < '2022-01-01'

-- 66. List users who prefer 'Tropical' climate and have a budget over ?1500, but travel with 2 or fewer travelers.
SELECT * FROM User_Preference WHERE Climate = 'Tropical' AND Budget > 1500 AND No_Of_Travellers <= 2;

-- 67. Display transport options provided by 'Emirates' with a fare less than ?100 and vehicle type 'Train'.
SELECT * FROM Transport_Type WHERE NameOfProvider = 'Emirates' AND Fare < 100 AND TypeOfVehicle = 'Train';

-- 68. Show hotels with a rating above 4 stars and located in 'London' or 'Rome', with more than 100 rooms.
SELECT * FROM Hotel WHERE Rating > 4 AND No_Of_Rooms > 100;

-- 69. Show user accounts with a wallet balance over ?1000 and registered after January 1, 2022.
SELECT * FROM User_Account WHERE Wallet > 1000 AND Doj > '2022-01-01';

-- 70. Provide details of bills paid via credit card and PayPal, and the amount exceeding ?100, paid by users from the country 'USA'.
SELECT * FROM Bill WHERE (Payment_method = 'Credit card' OR Payment_method = 'PayPal') AND Amount > 100 AND User_Id IN (SELECT User_Id FROM User WHERE Country = 'USA');

-- 71. List bills paid via credit card or PayPal, and the amount less than ?50.
SELECT * FROM Bill WHERE Payment_method = 'Credit card' OR Payment_method = 'PayPal' AND Amount < 50

-- 72. Show administrators registered in 2022 or earlier.
SELECT * FROM Admin WHERE DATE(STR_TO_DATE(SUBSTRING(Admin_id, 4, 6), '%y%m%d')) <= '2022-12-31';

-- 73. List users who registered in the last 90 days.
SELECT * FROM User WHERE DATEDIFF(CURDATE(), Doj) <= 90;

-- 74. Provide details of users from the country 'UK' or 'Australia' with phone numbers starting with '+44'.
SELECT * FROM User WHERE (Country = 'United Kingdom' OR Country = 'Australia') 

-- 75. Display blood groups of users with email addresses ending with '@yahoo.com'.
SELECT Blood_Group FROM User WHERE Email_Id LIKE '%@yahoo.com%';

-- 76. Show user accounts with a wallet balance less than ?50 and registered before January 1, 2022.
SELECT * FROM User_Account WHERE Wallet < 50 AND Doj < '2022-01-01';

-- 77. Provide transportation options with fares greater than ?100 and vehicle type 'Car'.
SELECT * FROM Transport_Type WHERE Fare > 100 AND TypeOfVehicle = 'Car';

-- 78. List hotels with a rating of 3 stars and located in 'London' or 'Paris'.
SELECT * FROM Hotel WHERE Rating > 3

-- 79. Display tourist places located in 'Italy' or 'Spain' with a city name starting with 'R'.
SELECT * FROM Tourist_Places WHERE (Country = 'France' OR Country = 'Russia') AND City LIKE 'R%';

-- 80. Show planned itineraries with a budget over ?2000 and traveling to 'Japan'.
SELECT * FROM Itinerary WHERE Budget > 2000 AND Country = 'Japan';

-- 81. Provide user preferences for destinations with a rating of 5 stars and a budget between ?1000 and ?2000.
SELECT * FROM User_Preference WHERE Rating = 5 AND Budget BETWEEN 1000 AND 2000;

-- 82. Show hotels with a rating of 4 stars or higher and located in either 'New York' or 'Los Angeles'.
SELECT * FROM Hotel WHERE Rating >= 4

-- 83. List tourist places located in countries starting with 'S' and cities starting with 'M'.
SELECT * FROM Tourist_Places WHERE Country LIKE 'S%' AND City LIKE 'M%';

-- 84. Provide itineraries with a budget less than ?1000 and traveling to 'France' or 'Germany'.
SELECT * FROM Itinerary WHERE Budget < 1000 AND (Country = 'France' OR Country = 'United States');

-- 85. Display user preferences for destinations with a budget over ?1500 and a rating between 3 and 4.
SELECT * FROM User_Preference WHERE Budget > 1500 AND Rating BETWEEN 3 AND 4;

-- 86. Show bills paid via PayPal with an amount greater than ?200 and made by users with names containing 'Smith'.
SELECT * FROM Bill WHERE Payment_method = 'PayPal' AND Amount > 200

-- 87. Provide administrators who are either 'Admin' or 'Owner' and registered after January 1, 2023.
SELECT * FROM Admin WHERE (Role = 'Admin' OR Role = 'Owner') AND DATE(STR_TO_DATE(SUBSTRING(Admin_id, 4, 6), '%y%m%d')) > '2023-01-01';

-- 88. List users who prefer 'Cold' climate, have a budget over ?1000, and travel with more than 3 travelers.
SELECT * FROM User_Preference WHERE Climate = 'Cold' AND Budget > 1000 AND No_Of_Travellers > 3;

-- 89. Display transport options provided by 'Volvo' with a fare less than ?50 and vehicle type 'Bus'.
SELECT * FROM Transport_Type WHERE NameOfProvider = 'Volvo' AND Fare > 50 AND TypeOfVehicle = 'Bus';

-- 90. Show hotels with a rating above 4 stars, located in 'Tokyo' or 'Sydney' with more than 100 rooms.
SELECT * FROM Hotel WHERE Rating > 4 AND No_Of_Rooms > 100;

-- 91. Provide tourist places located in countries with names containing 'United Kingdom' and cities starting with 'S'.
SELECT * FROM Tourist_Places WHERE Country LIKE '%United Kingdom%' AND City LIKE 'S%';

-- 92. List itineraries with a budget between ?500 and ?1000, traveling to 'Germany' with a rating of 4 stars.
SELECT * FROM Itinerary WHERE Budget BETWEEN 500 AND 1000 AND Country = 'United States' AND Rating >= 4;

-- 93. Display user preferences for destinations with a budget over ?1000, a rating above 3 stars, and no preference for food.
SELECT * FROM User_Preference WHERE Budget > 1000 AND Rating > 3 AND FoodPreference = 'Vegetarian';

-- 94. Show hotels with a rating of 4 stars
SELECT * FROM Hotel WHERE Rating > 4

-- 95. Provide tourist places located in countries with names containing 'India' and city 'Mumbai'.
SELECT * FROM Tourist_Places WHERE Country LIKE '%India%' AND City LIKE '%Mumbai%';

-- 96. List itineraries with a budget less than ?500 and traveling to 'India' with a rating of 3 stars.
SELECT * FROM Itinerary WHERE Budget < 500 AND Country = 'India' AND Rating > 3;

-- 97. Display user preferences for destinations with a budget over ?2000 and a rating above 4 stars, traveling with more than 2 travelers.
SELECT * FROM User_Preference WHERE Budget > 2000 AND Rating > 4 AND No_Of_Travellers > 2;

-- 98. Show bills paid via 'Credit Card' with an amount less than ?100 and made by users with email addresses ending with '@gmail.com'.
SELECT * FROM Bill WHERE Payment_method = 'PayPal' AND Amount < 100

-- 99. Provide administrators who are 'Manager' and registered before January 1, 2022, in the country 'USA'.
SELECT * FROM Admin WHERE Role = 'Owner' AND DATE(STR_TO_DATE(SUBSTRING(Admin_id, 4, 6), '%y%m%d')) < '2022-01-01'

-- 100. List users who prefer 'Tropical' climate and have a budget over ?1500, but travel with 2 or fewer travelers.
SELECT * FROM User_Preference WHERE Climate = 'Tropical' AND Budget > 1500 AND No_Of_Travellers <= 2;

-- 101. Display transport options provided by 'Emirates' with a fare less than ?100 and vehicle type 'Train'.
SELECT * FROM Transport_Type WHERE NameOfProvider = 'Emirates' AND Fare > 100 AND TypeOfVehicle = 'Flight';

-- 102. Show hotels with a rating above 4 stars and located in 'London' or 'Rome', with more than 100 rooms.
SELECT * FROM Hotel WHERE Rating > 4 AND No_Of_Rooms > 100;



