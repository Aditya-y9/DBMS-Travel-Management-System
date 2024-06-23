## Implemented From Scratch (As Visible in Commit History)

# Travel Management System with MariaDB and PHP

Designed and implemented a comprehensive travel management system using PHP for the frontend and MariaDB for robust database operations.

Engineered a user-centric interface that prioritized intuitive navigation and seamless user experience.

Implemented secure access protocols, ensuring distinct and protected views for administrators and customers.

Addressed real-world challenges such as efficient customer-to-admin enquiry management through proficient database operations.

Employed CRUD functionalities for seamless data management and modern interface abstractions to enhance usability and functionality.

## Description
This project is a simple travel management system that allows users to book itineraries and manage their bookings. The system is built using PHP and MariaDB.
This project is a part of the course "Database Management Systems" at the Veermata Jijabai Technological Institute (VJTI), Mumbai.


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


## Some Features

#### Enquiry Form
- Users can enquire about a particular itinerary by filling up a form.
- Admin can view all enquiries and respond to them.

#### User Registration and Login
- Users can register and login to the system.
- Admin can view all users.

#### Itinerary Management
- Admin can add new itineraries.
- Admin can view all itineraries.

#### Booking Management
- Users can view all available itineraries.
- Users can book an itinerary.
- Users can view all bookings.
- Users can cancel a booking.
- Admin can view all bookings.
- Admin can cancel a booking.

6. Open the browser and navigate to `http://localhost:8000`

## Database Schema
The database schema consists of the following tables:
```
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

```

- User registration and login
- User can view all available itineraries
- User can book an itinerary
- User can view all bookings
- User can cancel a booking
- Admin can add new itineraries
- Admin can view all bookings
- Admin can cancel a booking
- Admin can view all users
- Admin can view all itineraries
- Admin can view all bookings
