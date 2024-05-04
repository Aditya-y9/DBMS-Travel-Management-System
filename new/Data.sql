CREATE TABLE admin 
(
    Admin_id	VARCHAR(512),
    Name	VARCHAR(512),
    Password	VARCHAR(512),
    Role	VARCHAR(512)
);

INSERT INTO admin (Admin_id, Name, Password, Role) VALUES
	('A1001', 'Ravi Kumar', 'h3L#Z$p!@', 'Owner'),
	('A1002', 'Priya Patel', 'y%2&nJ@9!', 'Manager'),
	('A1003', 'Amit Singh', '$e*4Xb8#Z', 'Guide'),
	('A1004', 'Deepika Sharma', 'Q7^T@g*1K', 'Owner'),
	('A1005', 'Rajesh Gupta', '5@hY*o#mP', 'Manager'),
	('A1006', 'Neha Khan', '8k$Q@jPw!', 'Guide'),
	('A1007', 'Vikram Malhotra', 'w&3$%kS1J', 'Owner'),
	('A1008', 'Anjali Desai', '6R*t#xG9@', 'Manager'),
	('A1009', 'Sandeep Verma', 'b2!mP8Lx&', 'Guide'),
	('A1010', 'Sunita Reddy', 'y$F&5u@4m', 'Owner'),
	('A1011', 'Rahul Iyer', 'P^4uK&w8#', 'Manager'),
	('A1012', 'Pooja Choudhury', '9L!s$zN7#', 'Guide'),
	('A1013', 'Arun Khanna', '2@B8w*3%q', 'Owner'),
	('A1014', 'Shilpa Joshi', 'u@1H9V!s%', 'Manager'),
	('A1015', 'Manoj Kapoor', '5T@n6%y#J', 'Guide'),
	('A1016', 'Sneha Sharma', '#9x@7g4P!', 'Owner'),
	('A1017', 'Rajendra Prasad', 'p6Q&wN1!%', 'Manager'),
	('A1018', 'Nisha Singh', 'K$8h!q*4T', 'Guide'),
	('A1019', 'Kishan Patel', '#3S@jW6x!', 'Owner'),
	('A1020', 'Swati Menon', '@1z*Y#6sJ', 'Manager'),
	('A1021', 'Arjun Deshpande', 't$J7H&m3@', 'Guide'),
	('A1022', 'Anita Chatterjee', 'v4X#n%6K@', 'Owner'),
	('A1023', 'Vivek Rastogi', '&y5r@K8J!', 'Manager'),
	('A1024', 'Ananya Das', '8L@k4%wD&', 'Guide'),
	('A1025', 'Suresh Tiwari', 'u8#p2K@5m', 'Owner'),
	('A1026', 'Meena Singh', '5H@p8zX2k', 'Manager'),
	('A1027', 'Harish Sharma', 'p&L@8b3n%', 'Guide'),
	('A1028', 'Geeta Patel', '#4U@n3z%w', 'Owner'),
	('A1029', 'Alok Dubey', 'q7V#n9z*W', 'Manager'),
	('A1030', 'Kavita Shah', 'e&4Y8j@1X', 'Guide'),
	('A1031', 'Anand Joshi', '3F@z!5y6x', 'Owner'),
	('A1032', 'Madhuri Gupta', '9U@z$7y1%', 'Manager'),
	('A1033', 'Nitin Rao', '7@v!mK2W%', 'Guide'),
	('A1034', 'Pallavi Mohan', '4F@x8L!7Y', 'Owner'),
	('A1035', 'Ganesh Iyer', '#8D@f5r1K', 'Manager'),
	('A1036', 'Sarita Sharma', 'y6@p8s%b#', 'Guide'),
	('A1037', 'Prakash Patel', '%3k@9q2N*', 'Owner'),
	('A1038', 'Jyoti Mishra', '5X@y4K!v3', 'Manager'),
	('A1039', 'Kunal Khurana', '8T@m4K&p!', 'Guide'),
	('A1040', 'Sarika Singh', '6Z#n@2g7P', 'Owner'),
	('A1041', 'Aditya Mehra', '2G@m!4y7J', 'Manager'),
	('A1042', 'Shubha Agarwal', '9N#m5q6K@', 'Guide'),
	('A1043', 'Rahul Tiwari', '3T@g9n8Q$', 'Owner'),
	('A1044', 'Neelam Rao', '8M%r@5s9Z', 'Manager'),
	('A1045', 'Sanjay Gupta', '5P%w!9x8H', 'Guide'),
	('A1046', 'Juhi Patel', 'v$6t@8j3Q', 'Owner'),
	('A1047', 'Amar Singh', '#3X@v9m7G', 'Manager'),
	('A1048', 'Suman Sharma', '6H@x3L&4Z', 'Guide'),
	('A1049', 'Deepak Verma', '9K@q3m2Jv', 'Owner'),
	('A1050', 'Rajni Kapoor', '4R@m5J&8W', 'Manager');


    CREATE TABLE bill 
(
    Bill_no	VARCHAR(512),
    Amount	INT,
    Date	VARCHAR(512),
    Payment_method	VARCHAR(512),
    User_Id	VARCHAR(512)
);

INSERT INTO bill (Bill_no, Amount, Date, Payment_method, User_Id) VALUES
	('BL1001', '5000', '15-05-24', 'Credit Card', 'USR1001'),
	('BL1002', '7000', '20-06-24', 'Debit Card', 'USR1002'),
	('BL1003', '6000', '10-07-24', 'Net Banking', 'USR1003'),
	('BL1004', '8000', '05-08-24', 'PayPal', 'USR1004'),
	('BL1005', '6500', '15-09-24', 'Cash', 'USR1005'),
	('BL1006', '7500', '20-10-24', 'Credit Card', 'USR1006'),
	('BL1007', '8500', '10-11-24', 'Debit Card', 'USR1007'),
	('BL1008', '7000', '05-12-24', 'Net Banking', 'USR1008'),
	('BL1009', '9000', '20-01-25', 'PayPal', 'USR1009'),
	('BL1010', '8000', '15-02-25', 'Cash', 'USR1010'),
	('BL1011', '6000', '10-03-25', 'Credit Card', 'USR1011'),
	('BL1012', '10000', '05-04-25', 'Debit Card', 'USR1012'),
	('BL1013', '7500', '20-05-25', 'Net Banking', 'USR1013'),
	('BL1014', '9500', '10-06-25', 'PayPal', 'USR1014'),
	('BL1015', '8000', '05-07-25', 'Cash', 'USR1015'),
	('BL1016', '6500', '15-08-25', 'Credit Card', 'USR1016'),
	('BL1017', '8500', '20-09-25', 'Debit Card', 'USR1017'),
	('BL1018', '7000', '10-10-25', 'Net Banking', 'USR1018'),
	('BL1019', '9000', '05-11-25', 'PayPal', 'USR1019'),
	('BL1020', '7500', '20-12-25', 'Cash', 'USR1020'),
	('BL1021', '7000', '15-01-26', 'Credit Card', 'USR1021'),
	('BL1022', '9500', '10-02-26', 'Debit Card', 'USR1022'),
	('BL1023', '8500', '05-03-26', 'Net Banking', 'USR1023'),
	('BL1024', '8000', '20-04-26', 'PayPal', 'USR1024'),
	('BL1025', '6000', '10-05-26', 'Cash', 'USR1025'),
	('BL1026', '9000', '05-06-26', 'Credit Card', 'USR1026'),
	('BL1027', '7500', '20-07-26', 'Debit Card', 'USR1027'),
	('BL1028', '8500', '15-08-26', 'Net Banking', 'USR1028'),
	('BL1029', '7000', '10-09-26', 'PayPal', 'USR1029'),
	('BL1030', '9500', '05-10-26', 'Cash', 'USR1030'),
	('BL1031', '8000', '20-11-26', 'Credit Card', 'USR1031'),
	('BL1032', '7000', '10-12-26', 'Debit Card', 'USR1032'),
	('BL1033', '8500', '05-01-27', 'Net Banking', 'USR1033'),
	('BL1034', '7500', '20-02-27', 'PayPal', 'USR1034'),
	('BL1035', '9000', '15-03-27', 'Cash', 'USR1035'),
	('BL1036', '8000', '10-04-27', 'Credit Card', 'USR1036'),
	('BL1037', '6500', '20-05-27', 'Debit Card', 'USR1037'),
	('BL1038', '7000', '10-06-27', 'Net Banking', 'USR1038'),
	('BL1039', '9500', '05-07-27', 'PayPal', 'USR1039'),
	('BL1040', '8500', '20-08-27', 'Cash', 'USR1040'),
	('BL1041', '7500', '15-09-27', 'Credit Card', 'USR1041'),
	('BL1042', '8000', '10-10-27', 'Debit Card', 'USR1042'),
	('BL1043', '7000', '05-11-27', 'Net Banking', 'USR1043'),
	('BL1044', '9500', '20-12-27', 'PayPal', 'USR1044'),
	('BL1045', '8500', '15-01-28', 'Cash', 'USR1045'),
	('BL1046', '8000', '10-02-28', 'Credit Card', 'USR1046'),
	('BL1047', '7500', '05-03-28', 'Debit Card', 'USR1047'),
	('BL1048', '9000', '20-04-28', 'Net Banking', 'USR1048'),
	('BL1049', '7000', '10-05-28', 'PayPal', 'USR1049'),
	('BL1050', '9500', '05-06-28', 'Cash', 'USR1050');


    CREATE TABLE Hotel 
(
    Hotel_id	VARCHAR(512),
    Name	VARCHAR(512),
    No_Of_Rooms	INT,
    Cost	INT,
    Address	VARCHAR(512),
    Rating	DOUBLE
);

INSERT INTO Hotel (Hotel_id, Name, No_Of_Rooms, Cost, Address, Rating) VALUES
	('H1001', 'Grand Hyatt', '200', '5000', 'Mumbai', '8.5'),
	('H1002', 'Taj Palace', '150', '6000', 'Delhi', '9'),
	('H1003', 'Marriott Marquis', '180', '5500', 'Bengaluru', '8.7'),
	('H1004', 'Hilton', '220', '4800', 'Chennai', '8.2'),
	('H1005', 'InterContinental', '190', '5200', 'Kolkata', '8.4'),
	('H1006', 'The Oberoi', '210', '5100', 'Jaipur', '8.8'),
	('H1007', 'ITC Grand Chola', '240', '4700', 'Hyderabad', '8.3'),
	('H1008', 'Leela Palace', '230', '4900', 'Pune', '8.6'),
	('H1009', 'Radisson Blu', '170', '5700', 'Ahmedabad', '8.1'),
	('H1010', 'Hyatt Regency', '200', '5400', 'Lucknow', '8.9'),
	('H1011', 'The Ritz-Carlton', '250', '4600', 'Goa', '8'),
	('H1012', 'Novotel', '160', '6200', 'Chandigarh', '9.1'),
	('H1013', 'Four Seasons', '190', '5300', 'Nagpur', '8.7'),
	('H1014', 'Westin', '210', '5100', 'Indore', '8.4'),
	('H1015', 'Shangri-La', '180', '5800', 'Varanasi', '8.6'),
	('H1016', 'Le Meridien', '220', '5000', 'Dehradun', '8.2'),
	('H1017', 'DoubleTree', '200', '5600', 'Bhopal', '8.5'),
	('H1018', 'Crowne Plaza', '190', '5900', 'Gurugram', '8.8'),
	('H1019', 'JW Marriott', '240', '4800', 'Ludhiana', '8.3'),
	('H1020', 'Trident', '230', '5200', 'Raipur', '8.7'),
	('H1021', 'The Leela', '170', '5700', 'Vadodara', '8.2'),
	('H1022', 'Holiday Inn', '200', '5400', 'Ranchi', '8.9'),
	('H1023', 'Park Hyatt', '250', '4600', 'Visakhapatnam', '8'),
	('H1024', 'Grand Mercure', '160', '6200', 'Puducherry', '9.1'),
	('H1025', 'Aloft', '190', '5300', 'Kochi', '8.7'),
	('H1026', 'Hotel Formule1', '210', '5100', 'Mysuru', '8.4'),
	('H1027', 'ibis', '180', '5800', 'Thiruvananthapuram', '8.6'),
	('H1028', 'The Lalit', '220', '5000', 'Bhubaneswar', '8.2'),
	('H1029', 'Radisson', '200', '5600', 'Aurangabad', '8.5'),
	('H1030', 'Renaissance', '190', '5900', 'Surat', '8.8'),
	('H1031', 'ITC Maurya', '230', '5200', 'Patna', '8.7'),
	('H1032', 'The Westin', '170', '5700', 'Jodhpur', '8.2'),
	('H1033', 'Taj Bengal', '200', '5400', 'Kanpur', '8.9'),
	('H1034', 'Le Méridien', '250', '4600', 'Gwalior', '8'),
	('H1035', 'Hotel Sahara Star', '160', '6200', 'Amritsar', '9.1'),
	('H1036', 'The Gateway Hotel', '190', '5300', 'Nashik', '8.7'),
	('H1037', 'Hyatt Pune', '210', '5100', 'Kolhapur', '8.4'),
	('H1038', 'Hilton Mumbai', '180', '5800', 'Jabalpur', '8.6'),
	('H1039', 'Taj Lands End', '220', '5000', 'Allahabad', '8.2'),
	('H1040', 'The St. Regis', '200', '5600', 'Rajkot', '8.5'),
	('H1041', 'Le Méridien', '190', '5900', 'Guwahati', '8.8'),
	('H1042', 'The Ritz-Carlton', '230', '5200', 'Rourkela', '8.7'),
	('H1043', 'Oberoi Grand', '170', '5700', 'Hisar', '8.2'),
	('H1044', 'ITC Sonar', '200', '5400', 'Ramgarh', '8.9'),
	('H1045', 'The Oberoi Cecil', '250', '4600', 'Kharagpur', '8'),
	('H1046', 'Hotel Trident', '200', '5500', 'Panchkula', '8.4'),
	('H1047', 'The Lalit Great Eastern', '220', '5200', 'Siliguri', '8.6'),
	('H1048', 'Crowne Plaza Jaipur Tonk Road', '210', '5300', 'Jaipur', '8.5'),
	('H1049', 'Hyatt Ahmedabad', '190', '5700', 'Ahmedabad', '8.7'),
	('H1050', 'Marriott Hotel Kochi', '180', '5800', 'Kochi', '8.9');


    CREATE TABLE Itinerary 
(
    Itinerary_id	VARCHAR(512),
    Title	VARCHAR(512),
    Budget	INT,
    Country	VARCHAR(512),
    State	VARCHAR(512),
    City	VARCHAR(512),
    Rating	DOUBLE,
    No_Of_Travellers	VARCHAR(512),
    FoodPreference	VARCHAR(512),
    Transport_id	VARCHAR(512),
    Hotel_id	VARCHAR(512),
    Date_Of_Travel	VARCHAR(512)
);

INSERT INTO Itinerary (Itinerary_id, Title, Budget, Country, State, City, Rating, No_Of_Travellers, FoodPreference, Transport_id, Hotel_id, Date_Of_Travel) VALUES
	('IT1001', 'Exploring Mumbai', '5000', 'India', 'Maharashtra', 'Mumbai', '4.2', '2', 'Vegetarian', 'FL1001', 'HT1001', '15-05-24'),
	('IT1002', 'Sightseeing in Paris', '8000', 'France', 'Île-de-France', 'Paris', '4.5', '1', 'Non-Vegetarian', 'FL1021', 'HT1041', '20-06-24'),
	('IT1003', 'Weekend Trip to Goa', '6000', 'India', 'Goa', 'Panaji', '4.6', '4', 'Seafood', 'FL1002', 'HT1009', '10-07-24'),
	('IT1004', 'Business Trip to New York', '10000', 'United States', 'New York', 'New York City', '4.8', '1', 'Non-Vegetarian', 'FL1023', 'HT1051', '05-08-24'),
	('IT1005', 'Adventure in Tokyo', '7000', 'Japan', 'Tokyo', 'Tokyo', '4.7', '2', 'Vegetarian', 'FL1025', 'HT1024', '15-09-24'),
	('IT1006', 'Exploring Barcelona', '7500', 'Spain', 'Catalonia', 'Barcelona', '4.4', '2', 'Non-Vegetarian', 'FL1026', 'HT1063', '20-10-24'),
	('IT1007', 'Holiday in Sydney', '8500', 'Australia', 'New South Wales', 'Sydney', '4.6', '2', 'Seafood', 'FL1031', 'HT1055', '10-11-24'),
	('IT1008', 'Exploring Bangkok', '7000', 'Thailand', 'Bangkok', 'Bangkok', '4.3', '1', 'Vegetarian', 'FL1038', 'HT1054', '05-12-24'),
	('IT1009', 'Weekend in Amsterdam', '8000', 'Netherlands', 'North Holland', 'Amsterdam', '4.5', '1', 'Non-Vegetarian', 'FL1039', 'HT1069', '20-01-25'),
	('IT1010', 'Relaxing in Zurich', '9000', 'Switzerland', 'Zurich', 'Zurich', '4.7', '2', 'Vegetarian', 'FL1040', 'HT1070', '15-02-25'),
	('IT1011', 'Cultural Tour in Delhi', '5500', 'India', 'Delhi', 'New Delhi', '4.4', '3', 'Vegetarian', 'FL1003', 'HT1002', '10-03-25'),
	('IT1012', 'Skiing in Oslo', '10000', 'Norway', 'Oslo', 'Oslo', '4.8', '2', 'Non-Vegetarian', 'FL1047', 'HT1047', '05-04-25'),
	('IT1013', 'Hiking in Helsinki', '7500', 'Finland', 'Uusimaa', 'Helsinki', '4.6', '1', 'Vegan', 'FL1048', 'HT1048', '20-05-25'),
	('IT1014', 'Exploring Dubai', '9000', 'United Arab Emirates', 'Dubai', 'Dubai', '4.5', '2', 'Non-Vegetarian', 'FL1036', 'HT1036', '10-06-25'),
	('IT1015', 'Sightseeing in Rome', '8000', 'Italy', 'Lazio', 'Rome', '4.7', '1', 'Non-Vegetarian', 'FL1024', 'HT1056', '05-07-25'),
	('IT1016', 'Weekend Trip to Bengaluru', '6000', 'India', 'Karnataka', 'Bangalore', '4.3', '4', 'Seafood', 'FL1004', 'HT1003', '15-08-25'),
	('IT1017', 'Exploring Istanbul', '8500', 'Turkey', 'Istanbul', 'Istanbul', '4.4', '2', 'Vegetarian', 'FL1029', 'HT1029', '20-09-25'),
	('IT1018', 'Adventure in Seoul', '7500', 'South Korea', 'Seoul', 'Seoul', '4.6', '1', 'Non-Vegetarian', 'FL1037', 'HT1037', '10-10-25'),
	('IT1019', 'Holiday in Barcelona', '9000', 'Spain', 'Catalonia', 'Barcelona', '4.7', '2', 'Vegetarian', 'FL1026', 'HT1063', '05-11-25'),
	('IT1020', 'Cultural Tour in Paris', '6000', 'France', 'Île-de-France', 'Paris', '4.5', '3', 'Vegan', 'FL1021', 'HT1041', '20-12-25'),
	('IT1021', 'Exploring Moscow', '8500', 'Russia', 'Moscow', 'Moscow', '4.6', '2', 'Non-Vegetarian', 'FL1028', 'HT1028', '15-01-26'),
	('IT1022', 'Weekend Trip to Goa', '6500', 'India', 'Goa', 'Panaji', '4.4', '4', 'Vegetarian', 'FL1002', 'HT1009', '10-02-26'),
	('IT1023', 'Skiing in Stockholm', '10000', 'Sweden', 'Stockholm', 'Stockholm', '4.8', '2', 'Non-Vegetarian', 'FL1044', 'HT1044', '05-03-26'),
	('IT1024', 'Relaxing in Dubai', '9500', 'United Arab Emirates', 'Dubai', 'Dubai', '4.7', '2', 'Vegan', 'FL1036', 'HT1036', '20-04-26'),
	('IT1025', 'Hiking in Auckland', '8000', 'New Zealand', 'Auckland', 'Auckland', '4.5', '1', 'Vegetarian', 'FL1045', 'HT1045', '10-05-26'),
	('IT1026', 'Cultural Tour in Bangkok', '6500', 'Thailand', 'Bangkok', 'Bangkok', '4.3', '3', 'Non-Vegetarian', 'FL1038', 'HT1054', '05-06-26'),
	('IT1027', 'Weekend in Amsterdam', '8500', 'Netherlands', 'North Holland', 'Amsterdam', '4.6', '1', 'Vegetarian', 'FL1039', 'HT1069', '20-07-26'),
	('IT1028', 'Adventure in Barcelona', '9000', 'Spain', 'Catalonia', 'Barcelona', '4.7', '2', 'Seafood', 'FL1026', 'HT1063', '15-08-26'),
	('IT1029', 'Holiday in Tokyo', '7500', 'Japan', 'Tokyo', 'Tokyo', '4.4', '1', 'Non-Vegetarian', 'FL1025', 'HT1024', '10-09-26'),
	('IT1030', 'Sightseeing in London', '8000', 'United Kingdom', 'England', 'London', '4.6', '1', 'Vegetarian', 'FL1023', 'HT1052', '05-10-26'),
	('IT1031', 'Exploring Paris', '8500', 'France', 'Île-de-France', 'Paris', '4.7', '2', 'Vegan', 'FL1021', 'HT1041', '20-11-26'),
	('IT1032', 'Weekend Trip to Moscow', '6500', 'Russia', 'Moscow', 'Moscow', '4.3', '4', 'Non-Vegetarian', 'FL1028', 'HT1028', '10-12-26'),
	('IT1033', 'Cultural Tour in Rome', '9000', 'Italy', 'Lazio', 'Rome', '4.5', '3', 'Non-Vegetarian', 'FL1024', 'HT1056', '05-01-27'),
	('IT1034', 'Adventure in Istanbul', '7500', 'Turkey', 'Istanbul', 'Istanbul', '4.6', '1', 'Vegetarian', 'FL1029', 'HT1029', '20-02-27'),
	('IT1035', 'Holiday in Seoul', '8000', 'South Korea', 'Seoul', 'Seoul', '4.4', '2', 'Vegan', 'FL1037', 'HT1037', '15-03-27'),
	('IT1036', 'Skiing in Stockholm', '10000', 'Sweden', 'Stockholm', 'Stockholm', '4.8', '2', 'Non-Vegetarian', 'FL1044', 'HT1044', '10-04-27'),
	('IT1037', 'Relaxing in Dubai', '9500', 'United Arab Emirates', 'Dubai', 'Dubai', '4.7', '2', 'Vegan', 'FL1036', 'HT1036', '20-05-27'),
	('IT1038', 'Hiking in Auckland', '8000', 'New Zealand', 'Auckland', 'Auckland', '4.5', '1', 'Vegetarian', 'FL1045', 'HT1045', '10-06-27'),
	('IT1039', 'Cultural Tour in Bangkok', '6500', 'Thailand', 'Bangkok', 'Bangkok', '4.3', '3', 'Non-Vegetarian', 'FL1038', 'HT1054', '05-07-27'),
	('IT1040', 'Weekend in Amsterdam', '8500', 'Netherlands', 'North Holland', 'Amsterdam', '4.6', '1', 'Vegetarian', 'FL1039', 'HT1069', '20-08-27'),
	('IT1041', 'Adventure in Paris', '7500', 'France', 'Île-de-France', 'Paris', '4.4', '2', 'Non-Vegetarian', 'FL1021', 'HT1041', '15-09-27'),
	('IT1042', 'Exploring Los Angeles', '8000', 'United States', 'California', 'Los Angeles', '4.6', '1', 'Vegan', 'FL1022', 'HT1052', '10-10-27'),
	('IT1043', 'Holiday in London', '8500', 'United Kingdom', 'England', 'London', '4.7', '2', 'Vegetarian', 'FL1023', 'HT1052', '05-11-27'),
	('IT1044', 'Weekend Trip to Rome', '6500', 'Italy', 'Lazio', 'Rome', '4.3', '3', 'Non-Vegetarian', 'FL1024', 'HT1056', '20-12-27'),
	('IT1045', 'Cultural Tour in Tokyo', '9000', 'Japan', 'Tokyo', 'Tokyo', '4.5', '2', 'Vegan', 'FL1025', 'HT1024', '15-01-28'),
	('IT1046', 'Sightseeing in Barcelona', '7500', 'Spain', 'Catalonia', 'Barcelona', '4.6', '1', 'Vegetarian', 'FL1026', 'HT1063', '10-02-28'),
	('IT1047', 'Adventure in São Paulo', '8000', 'Brazil', 'São Paulo', 'São Paulo', '4.7', '2', 'Non-Vegetarian', 'FL1027', 'HT1027', '05-03-28'),
	('IT1048', 'Weekend in Moscow', '6500', 'Russia', 'Moscow', 'Moscow', '4.3', '3', 'Vegetarian', 'FL1028', 'HT1028', '20-04-28'),
	('IT1049', 'Holiday in Dubai', '9500', 'United Arab Emirates', 'Dubai', 'Dubai', '4.6', '2', 'Non-Vegetarian', 'FL1036', 'HT1036', '10-05-28'),
	('IT1050', 'Exploring Amsterdam', '8500', 'Netherlands', 'North Holland', 'Amsterdam', '4.5', '1', 'Vegetarian', 'FL1039', 'HT1069', '05-06-28');


    CREATE TABLE Tourist_Places 
(
    Id	VARCHAR(512),
    Country	VARCHAR(512),
    State	VARCHAR(512),
    City	VARCHAR(512)
);

INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1001', 'India', 'Maharashtra', 'Mumbai');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1002', 'India', 'Delhi', 'New Delhi');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1003', 'India', 'Karnataka', 'Bangalore');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1004', 'India', 'Tamil Nadu', 'Chennai');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1005', 'India', 'West Bengal', 'Kolkata');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1006', 'India', 'Rajasthan', 'Jaipur');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1007', 'India', 'Telangana', 'Hyderabad');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1008', 'India', 'Uttar Pradesh', 'Lucknow');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1009', 'India', 'Goa', 'Panaji');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1010', 'India', 'Himachal Pradesh', 'Shimla');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1011', 'India', 'Gujarat', 'Ahmedabad');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1012', 'India', 'Punjab', 'Chandigarh');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1013', 'India', 'Kerala', 'Thiruvananthapuram');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1014', 'India', 'Assam', 'Dispur');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1015', 'India', 'Uttarakhand', 'Dehradun');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1016', 'India', 'Bihar', 'Patna');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1017', 'India', 'Haryana', 'Chandigarh');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1018', 'India', 'Odisha', 'Bhubaneswar');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1019', 'India', 'Chhattisgarh', 'Raipur');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1020', 'India', 'Jharkhand', 'Ranchi');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1021', 'France', 'Île-de-France', 'Paris');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1022', 'United States', 'California', 'Los Angeles');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1023', 'United Kingdom', 'England', 'London');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1024', 'Italy', 'Lazio', 'Rome');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1025', 'Japan', 'Tokyo', 'Tokyo');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1026', 'Spain', 'Catalonia', 'Barcelona');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1027', 'Brazil', 'São Paulo', 'São Paulo');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1028', 'Russia', 'Moscow', 'Moscow');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1029', 'Turkey', 'Istanbul', 'Istanbul');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1030', 'Malaysia', 'Kuala Lumpur', 'Kuala Lumpur');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1031', 'Australia', 'New South Wales', 'Sydney');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1032', 'Canada', 'Ontario', 'Toronto');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1033', 'China', 'Beijing', 'Beijing');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1034', 'Singapore', 'Central Singapore', 'Singapore');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1035', 'Germany', 'Berlin', 'Berlin');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1036', 'United Arab Emirates', 'Dubai', 'Dubai');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1037', 'South Korea', 'Seoul', 'Seoul');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1038', 'Thailand', 'Bangkok', 'Bangkok');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1039', 'Netherlands', 'North Holland', 'Amsterdam');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1040', 'Switzerland', 'Zurich', 'Zurich');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1041', 'Austria', 'Vienna', 'Vienna');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1042', 'Argentina', 'Buenos Aires', 'Buenos Aires');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1043', 'Denmark', 'Capital Region of Denmark', 'Copenhagen');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1044', 'Sweden', 'Stockholm', 'Stockholm');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1045', 'New Zealand', 'Auckland', 'Auckland');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1046', 'Portugal', 'Lisbon', 'Lisbon');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1047', 'Norway', 'Oslo', 'Oslo');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1048', 'Finland', 'Uusimaa', 'Helsinki');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1049', 'Belgium', 'Brussels-Capital Region', 'Brussels');
INSERT INTO Tourist_Places (Id, Country, State, City) VALUES ('TP1050', 'Ireland', 'Leinster', 'Dublin');

CREATE TABLE Transport_Type 
(
    Transport_id	VARCHAR(512),
    NameOfProvider	VARCHAR(512),
    Fare	DOUBLE,
    TypeOfVehicle	VARCHAR(512)
);

INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1001', 'Air India', '50000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1002', 'IndiGo', '45000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1003', 'GoAir', '40000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1004', 'SpiceJet', '42000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1005', 'Jet Airways', '55000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1006', 'Vistara', '48000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1007', 'British Airways', '60000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1008', 'Lufthansa', '70000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1009', 'Emirates', '75000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1010', 'Etihad Airways', '68000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1011', 'Qatar Airways', '72000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1012', 'First Flight', '28000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1013', 'Ola', '2500.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1014', 'Uber', '2000.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1015', 'Tata Motors', '3000.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1016', 'Maruti Suzuki', '2800.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1017', 'ZoomCar', '3000.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1018', 'Ford', '3200.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1019', 'Honda', '2700.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1020', 'Kia Motors', '3500.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1021', 'Volvo', '1200.00', 'Bus');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1022', 'KSRTC', '1000.00', 'Bus');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1023', 'BMTC', '800.00', 'Bus');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1024', 'Scania', '1400.00', 'Bus');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1025', 'Toyota', '2900.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1026', 'Nissan', '3100.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1027', 'Hyundai', '2600.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1028', 'Mercedes-Benz', '4000.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1029', 'Metro', '500.00', 'Train');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1030', 'Indian Railways', '1000.00', 'Train');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1031', 'Air India', '50000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1032', 'IndiGo', '45000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1033', 'GoAir', '40000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1034', 'SpiceJet', '42000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1035', 'Jet Airways', '55000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1036', 'Vistara', '48000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1037', 'British Airways', '60000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1038', 'Lufthansa', '70000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1039', 'Emirates', '75000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1040', 'Etihad Airways', '68000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1041', 'Qatar Airways', '72000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1042', 'First Flight', '28000.00', 'Flight');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1043', 'Ola', '2500.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1044', 'Uber', '2000.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1045', 'Tata Motors', '3000.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1046', 'Maruti Suzuki', '2800.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1047', 'ZoomCar', '3000.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1048', 'Ford', '3200.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1049', 'Honda', '2700.00', 'Car');
INSERT INTO Transport_Type (Transport_id, NameOfProvider, Fare, TypeOfVehicle) VALUES ('T1050', 'Kia Motors', '3500.00', 'Car');

CREATE TABLE User 
(
    User_Id	VARCHAR(512),
    Name	VARCHAR(512),
    Password	VARCHAR(512),
    Dob	VARCHAR(512),
    Email_Id	VARCHAR(512),
    Address	VARCHAR(512)
);

INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1001', 'Ravi Kumar', 'h3L#Z$p!@', '15-05-90', 'ravikumar@example.com', 'Mumbai');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1002', 'Priya Patel', 'y%2&nJ@9!', '25-10-88', 'priyapatel@example.com', 'New Delhi');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1003', 'Amit Singh', '$e*4Xb8#Z', '08-03-95', 'amitsingh@example.com', 'Bangalore');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1004', 'Deepika Sharma', 'Q7^T@g*1K', '30-12-87', 'deepikasharma@example.com', 'Kolkata');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1005', 'Rajesh Gupta', '5@hY*o#mP', '18-08-90', 'rajeshgupta@example.com', 'Chennai');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1006', 'Neha Khan', '8k$Q@jPw!', '20-07-92', 'nehakhan@example.com', 'Hyderabad');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1007', 'Vikram Malhotra', 'w&3$%kS1J', '12-06-85', 'vikrammalhotra@example.com', 'Pune');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1008', 'Anjali Desai', '6R*t#xG9@', '05-09-98', 'anjalidesai@example.com', 'Ahmedabad');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1009', 'Sandeep Verma', 'b2!mP8Lx&', '28-04-93', 'sandeepverma@example.com', 'Jaipur');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1010', 'Sunita Reddy', 'y$F&5u@4m', '02-11-96', 'sunitareddy@example.com', 'Lucknow');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1011', 'Rahul Iyer', 'P^4uK&w8#', '14-02-87', 'rahuliyer@example.com', 'Kanpur');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1012', 'Pooja Choudhury', '9L!s$zN7#', '30-06-89', 'poojachoudhury@example.com', 'Nagpur');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1013', 'Arun Khanna', '2@B8w*3%q', '22-09-86', 'arunkhanna@example.com', 'Indore');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1014', 'Shilpa Joshi', 'u@1H9V!s%', '17-03-91', 'shilpajoshi@example.com', 'Thane');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1015', 'Manoj Kapoor', '5T@n6%y#J', '04-07-94', 'manojkapoor@example.com', 'Bhopal');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1016', 'Sneha Sharma', '#9x@7g4P!', '28-11-88', 'snehasharma@example.com', 'Visakhapatnam');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1017', 'Rajendra Prasad', 'p6Q&wN1!%', '12-12-79', 'rajendraprasad@example.com', 'Patna');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1018', 'Nisha Singh', 'nisha1997', '09-05-97', 'nishasingh@example.com', 'Ludhiana');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1019', 'Kishan Patel', 'kishan@1991', '03-08-91', 'kishanpatel@example.com', 'Agra');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1020', 'Swati Menon', 'swati#93', '17-10-93', 'swatimenon@example.com', 'Nashik');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1021', 'Arjun Deshpande', 'arjun@1998', '21-01-98', 'arjundeshpande@example.com', 'Meerut');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1022', 'Anita Chatterjee', 'anita@85', '15-04-85', 'anitachatterjee@example.com', 'Varanasi');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1023', 'Vivek Rastogi', '&y5r@K8J!', '27-09-92', 'vivekrastogi@example.com', 'Allahabad');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1024', 'Ananya Das', 'ananya1989', '31-12-89', 'ananyadas@example.com', 'Jabalpur');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1025', 'Suresh Tiwari', 'suresh@97', '05-02-97', 'sureshtiwari@example.com', 'Ranchi');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1026', 'Meena Singh', 'meenak@2000', '12-06-00', 'meenasingh@example.com', 'Gwalior');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1027', 'Harish Sharma', 'harish_1994', '03-10-94', 'harishsharma@example.com', 'Jodhpur');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1028', 'Geeta Patel', 'geeta78', '27-03-78', 'geetapatel@example.com', 'Raipur');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1029', 'Alok Dubey', 'alok@96', '14-08-96', 'alokdubey@example.com', 'Kota');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1030', 'Kavita Shah', 'kavita#99', '07-11-99', 'kavitashah@example.com', 'Chandigarh');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1031', 'Anand Joshi', 'anand85', '19-02-85', 'anandjoshi@example.com', 'Guwahati');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1032', 'Madhuri Gupta', 'madhuri@90', '23-07-90', 'madhurigupta@example.com', 'Shimla');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1033', 'Nitin Rao', 'nitin_87', '15-09-87', 'nitinrao@example.com', 'Kochi');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1034', 'Pallavi Mohan', 'pallavi_91', '05-01-91', 'pallavimohan@example.com', 'Thiruvananthapuram');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1035', 'Ganesh Iyer', 'ganesh@95', '11-04-95', 'ganeshiyer@example.com', 'Mysore');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1036', 'Anushka Sharma', 'sharma@2001', '20-08-01', 'anushkasharma@example.com', 'Jaipur');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1037', 'Rahul Khanna', 'rahul@1996', '25-12-96', 'rahulkhanna@example.com', 'New Delhi');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1038', 'Aarav Singh', 'singh@1999', '10-05-99', 'aaravsingh@example.com', 'Mumbai');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1039', 'Ishaan Mehra', 'mehra@2002', '01-04-02', 'ishaanmehra@example.com', 'Chennai');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1040', 'Aadya Gupta', 'gupta@2003', '07-11-03', 'aadyagupta@example.com', 'Kolkata');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1041', 'Aaradhya Patel', 'patel@2005', '14-09-05', 'aaradhyapatel@example.com', 'Bangalore');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1042', 'Veer Singh', 'singh@1998', '18-03-98', 'veersingh@example.com', 'Hyderabad');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1043', 'Diya Reddy', 'reddy@2004', '22-06-04', 'diyareddy@example.com', 'Pune');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1044', 'Kabir Kumar', 'kumar@2000', '30-10-00', 'kabirkumar@example.com', 'Ahmedabad');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1045', 'Aahana Sharma', 'sharma@2006', '08-02-06', 'aahanasharma@example.com', 'Jaipur');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1046', 'Vihaan Khanna', 'khanna@2007', '17-07-07', 'vihaankhanna@example.com', 'Lucknow');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1047', 'Advik Patel', 'patel@2008', '24-12-08', 'advikpatel@example.com', 'Kanpur');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1048', 'Misha Gupta', 'gupta@2009', '03-04-09', 'mishagupta@example.com', 'Nagpur');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1049', 'Ananya Singh', 'singh@2010', '11-08-10', 'ananyasingh@example.com', 'Indore');
INSERT INTO User (User_Id, Name, Password, Dob, Email_Id, Address) VALUES ('U1050', 'Kiaan Choudhury', 'choudhury@2011', '16-03-11', 'kiaanchoudhury@example.com', 'Thane');

CREATE TABLE User_Profile 
(
    User_Id	VARCHAR(512),
    Blood_group	VARCHAR(512)
);

INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1001', 'A+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1002', 'O-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1003', 'B+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1004', 'AB-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1005', 'A-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1006', 'O+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1007', 'B-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1008', 'AB+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1009', 'A+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1010', 'O-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1011', 'B+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1012', 'AB-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1013', 'A-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1014', 'O+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1015', 'B-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1016', 'AB+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1017', 'A+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1018', 'O-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1019', 'B+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1020', 'AB-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1021', 'A-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1022', 'O+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1023', 'B-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1024', 'AB+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1025', 'A+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1026', 'O-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1027', 'B+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1028', 'AB-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1029', 'A-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1030', 'O+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1031', 'B-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1032', 'AB+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1033', 'A+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1034', 'O-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1035', 'B+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1036', 'AB-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1037', 'A-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1038', 'O+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1039', 'B-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1040', 'AB+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1041', 'A+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1042', 'O-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1043', 'B+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1044', 'AB-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1045', 'A-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1046', 'O+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1047', 'B-');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1048', 'AB+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1049', 'A+');
INSERT INTO User_Profile (User_Id, Blood_group) VALUES ('U1050', 'O-');

CREATE TABLE User_Account 
(
    Account_Id	VARCHAR(512),
    Doj	VARCHAR(512),
    Wallet	INT,
    User_Id	VARCHAR(512)
);

INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1001', '15-03-20', '5000', 'U1001');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1002', '21-08-19', '7500', 'U1002');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1003', '10-01-21', '3000', 'U1003');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1004', '05-05-22', '4500', 'U1004');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1005', '30-11-23', '6000', 'U1005');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1006', '17-07-20', '4000', 'U1006');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1007', '25-12-19', '5500', 'U1007');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1008', '02-08-21', '6500', 'U1008');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1009', '14-09-22', '7000', 'U1009');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1010', '03-04-23', '8000', 'U1010');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1011', '19-11-20', '3500', 'U1011');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1012', '27-05-19', '4800', 'U1012');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1013', '08-03-21', '5200', 'U1013');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1014', '12-10-22', '6800', 'U1014');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1015', '01-07-23', '4200', 'U1015');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1016', '30-01-20', '5700', 'U1016');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1017', '18-06-19', '6100', 'U1017');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1018', '25-09-21', '4600', 'U1018');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1019', '08-12-22', '7300', 'U1019');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1020', '14-02-23', '3800', 'U1020');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1021', '20-05-20', '5000', 'U1021');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1022', '11-10-19', '6400', 'U1022');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1023', '03-07-21', '3000', 'U1023');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1024', '19-08-22', '5500', 'U1024');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1025', '07-01-23', '4700', 'U1025');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1026', '24-04-20', '6200', 'U1026');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1027', '15-09-19', '5400', 'U1027');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1028', '28-11-21', '4900', 'U1028');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1029', '05-06-22', '6800', 'U1029');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1030', '11-08-23', '5100', 'U1030');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1031', '09-02-20', '4500', 'U1031');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1032', '14-07-19', '5900', 'U1032');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1033', '29-10-21', '7000', 'U1033');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1034', '17-03-22', '4300', 'U1034');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1035', '22-05-23', '6500', 'U1035');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1036', '03-09-20', '4800', 'U1036');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1037', '06-04-19', '5400', 'U1037');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1038', '25-12-21', '5200', 'U1038');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1039', '18-02-22', '4600', 'U1039');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1040', '11-03-23', '6900', 'U1040');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1041', '28-06-20', '3900', 'U1041');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1042', '05-11-19', '5700', 'U1042');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1043', '18-08-21', '4800', 'U1043');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1044', '01-07-22', '6200', 'U1044');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1045', '14-09-23', '5500', 'U1045');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1046', '22-03-20', '5000', 'U1046');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1047', '12-08-19', '6600', 'U1047');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1048', '27-01-21', '4300', 'U1048');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1049', '09-04-22', '7100', 'U1049');
INSERT INTO User_Account (Account_Id, Doj, Wallet, User_Id) VALUES ('A1050', '15-06-23', '5400', 'U1050');

CREATE TABLE User_Preference 
(
    User_Id	VARCHAR(512),
    Budget	INT,
    Country	VARCHAR(512),
    Climate	VARCHAR(512),
    Rating	DOUBLE,
    No_Of_Travellers	VARCHAR(512),
    FoodPreference	VARCHAR(512),
    Transport_Preference	VARCHAR(512),
    No_Of_Days	INT
);

INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1011', '7500', 'Italy', 'Moderate', '4.5', '2', 'Non-Vegetarian', 'Flight', '7');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1012', '8500', 'South Korea', 'Mild', '4.4', '1', 'Vegetarian', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1013', '9000', 'Germany', 'Moderate', '4.7', '2', 'Seafood', 'Flight', '9');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1014', '7000', 'Brazil', 'Tropical', '4.6', '2', 'Non-Vegetarian', 'Flight', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1015', '8000', 'Russia', 'Cold', '4.3', '1', 'Vegan', 'Flight', '7');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1016', '9500', 'New Zealand', 'Mild', '4.8', '2', 'Non-Vegetarian', 'Flight', '10');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1017', '6000', 'Sweden', 'Cold', '4.2', '4', 'Seafood', 'Train', '5');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1018', '7000', 'Norway', 'Cold', '4.6', '2', 'Vegetarian', 'Train', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1019', '8500', 'Denmark', 'Cold', '4.4', '1', 'Non-Vegetarian', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1020', '8000', 'Argentina', 'Mild', '4.5', '2', 'Vegetarian', 'Flight', '7');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1021', '7500', 'Portugal', 'Moderate', '4.3', '1', 'Vegan', 'Flight', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1022', '9000', 'Finland', 'Cold', '4.7', '2', 'Non-Vegetarian', 'Flight', '9');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1023', '8500', 'United Kingdom', 'Mild', '4.6', '1', 'Non-Vegetarian', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1024', '7000', 'Switzerland', 'Moderate', '4.5', '1', 'Vegetarian', 'Train', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1025', '9500', 'Ireland', 'Mild', '4.8', '2', 'Seafood', 'Flight', '10');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1026', '8000', 'Austria', 'Moderate', '4.4', '2', 'Vegan', 'Flight', '7');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1027', '7500', 'Singapore', 'Tropical', '4.3', '1', 'Non-Vegetarian', 'Flight', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1028', '7000', 'Malaysia', 'Tropical', '4.6', '2', 'Non-Vegetarian', 'Flight', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1029', '9000', 'China', 'Mild', '4.7', '2', 'Seafood', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1030', '8000', 'Turkey', 'Moderate', '4.5', '1', 'Vegetarian', 'Flight', '7');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1031', '8500', 'Maldives', 'Tropical', '4.6', '2', 'Vegan', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1032', '7500', 'Greece', 'Moderate', '4.4', '1', 'Vegetarian', 'Flight', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1033', '9000', 'Sri Lanka', 'Tropical', '4.7', '2', 'Non-Vegetarian', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1034', '8500', 'Philippines', 'Tropical', '4.5', '1', 'Vegan', 'Flight', '7');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1035', '7000', 'Egypt', 'Hot', '4.3', '1', 'Non-Vegetarian', 'Flight', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1036', '9500', 'Peru', 'Mild', '4.6', '2', 'Seafood', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1037', '8000', 'Chile', 'Mild', '4.4', '2', 'Vegetarian', 'Flight', '7');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1038', '7500', 'Costa Rica', 'Tropical', '4.3', '1', 'Non-Vegetarian', 'Flight', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1039', '9000', 'Canada', 'Cold', '4.7', '2', 'Vegan', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1040', '8500', 'Iceland', 'Cold', '4.6', '1', 'Non-Vegetarian', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1041', '7000', 'Scotland', 'Mild', '4.5', '1', 'Seafood', 'Train', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1042', '9500', 'Australia', 'Mild', '4.8', '2', 'Vegan', 'Flight', '10');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1043', '8000', 'Germany', 'Moderate', '4.4', '2', 'Non-Vegetarian', 'Flight', '7');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1044', '7500', 'Spain', 'Moderate', '4.3', '1', 'Vegetarian', 'Flight', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1045', '7000', 'France', 'Mild', '4.6', '2', 'Vegan', 'Flight', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1046', '9000', 'Italy', 'Moderate', '4.7', '2', 'Seafood', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1047', '8500', 'United States', 'Mild', '4.5', '1', 'Non-Vegetarian', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1048', '7000', 'Japan', 'Mild', '4.3', '1', 'Vegan', 'Flight', '6');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1049', '9500', 'Brazil', 'Tropical', '4.6', '2', 'Non-Vegetarian', 'Flight', '8');
INSERT INTO User_Preference (User_Id, Budget, Country, Climate, Rating, No_Of_Travellers, FoodPreference, Transport_Preference, No_Of_Days) VALUES ('USR1050', '8000', 'India', 'Tropical', '4.4', '2', 'Vegetarian', 'Train', '7');
dbms_projecttmsbilladmin