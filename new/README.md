# Travel Management Project

This project is aimed at managing travel-related activities such as user profiles, accommodations, transportation, itineraries, and billing. It provides a comprehensive database schema to store and manage information efficiently.

## Schema Overview

The schema consists of the following tables:

1. **Admin**: Stores information about administrators who manage the system.
   - Admin_id (Primary Key): Unique identifier for the administrator.
   - Name: Name of the administrator.
   - Password: Password for authentication.
   - Role: Role of the administrator.

2. **User**: Contains details of registered users.
   - User_Id (Primary Key): Unique identifier for the user.
   - Name: Name of the user.
   - Password: Password for authentication.
   - Dob: Date of birth of the user.
   - PhoneNo: Phone number of the user.
   - Email_Id: Email address of the user.
   - Address: Address of the user.

3. **UserProfile**: Stores additional profile information for users.
   - User_Id (Primary Key, Foreign Key): References the User table.
   - Blood_group: Blood group of the user.

4. **UserAccount**: Manages user accounts and their financial details.
   - Account_Id (Primary Key): Unique identifier for the account.
   - Doj: Date of joining.
   - Wallet: Wallet balance.
   - User_Id (Foreign Key): References the User table.

5. **TransportType**: Contains information about available transportation options.
   - Transport_id (Primary Key): Unique identifier for the transportation.
   - NameOfProvider: Name of the transportation provider.
   - Fare: Fare for the transportation.
   - TypeOfVehicle: Type of vehicle.

6. **Hotel**: Stores details of hotels available for accommodation.
   - Hotel_id (Primary Key): Unique identifier for the hotel.
   - Name: Name of the hotel.
   - No_Of_Rooms: Number of rooms available.
   - Cost: Cost per night.
   - Address: Address of the hotel.
   - Contact: Contact information of the hotel.
   - Rating: Rating of the hotel.

7. **TouristPlaces**: Contains information about tourist places.
   - Id (Primary Key): Unique identifier for the place.
   - Country: Country of the tourist place.
   - State: State of the tourist place.
   - City: City of the tourist place.

8. **Itinerary**: Manages travel itineraries planned by users.
   - Itinerary_id (Primary Key): Unique identifier for the itinerary.
   - Title: Title of the itinerary.
   - Budget: Budget for the itinerary.
   - Country: Country of travel.
   - State: State of travel.
   - City: City of travel.
   - Rating: Rating of the itinerary.
   - No_Of_Travellers: Number of travelers.
   - FoodPreference: Food preference during travel.
   - Transport_id (Foreign Key): References the TransportType table.
   - Hotel_id (Foreign Key): References the Hotel table.
   - Date_Of_Travel: Date of travel.

9. **UserPreference**: Stores preferences set by users for their travel.
   - User_Id (Primary Key, Foreign Key): References the User table.
   - Budget: Budget preference.
   - Country: Preferred country for travel.
   - Climate: Preferred climate for travel.
   - Rating: Rating preference for accommodations.
   - No_Of_Travellers: Number of travelers.
   - FoodPreference: Food preference during travel.
   - Transport_Preference: Preferred mode of transport.
   - No_Of_Days: Duration of travel.

10. **Bill**: Manages billing details for user transactions.
    - Bill_no (Primary Key): Unique identifier for the bill.
    - Amount: Amount of the bill.
    - Date: Date of the bill.
    - Payment_method: Payment method used.
    - User_Id (Foreign Key): References the User table.

## Setup Instructions

1. **Database Creation**: Create a database in your preferred database management system (e.g., MySQL, PostgreSQL).

2. **Table Creation**: Execute the provided SQL schema to create the necessary tables in your database.

3. **Data Population**: Populate the tables with sample data to test the functionality of the system.

4. **Application Integration**: Integrate the database with your travel management application to leverage the functionalities offered by the schema.

## Sample Queries

Here are some sample SQL queries you can execute against the database:

```sql
-- Retrieve all users from a specific country
SELECT * FROM User WHERE Address LIKE '%USA%';

-- Retrieve all hotels with a rating above 4 stars
SELECT * FROM Hotel WHERE Rating > 4;

-- Retrieve all itineraries for a specific user
SELECT * FROM Itinerary WHERE User_Id = 'user123';

-- Calculate the total amount spent by a user
SELECT SUM(Amount) AS TotalAmount FROM Bill WHERE User_Id = 'user123';
