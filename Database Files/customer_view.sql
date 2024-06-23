CREATE VIEW customer_view AS
SELECT 
    i.Itinerary_id,
    i.Title,
    i.Budget,
    i.Country,
    i.State,
    i.City,
    i.Rating AS Itinerary_Rating,
    i.No_Of_Travellers,
    i.FoodPreference,
    i.Transport_id AS Transport_Id_Itinerary,
    i.Hotel_id,
    i.Date_Of_Travel,
    i.ItineraryImage,
    tp.Country AS Tourist_Place_Country,
    tp.State AS Tourist_Place_State,
    tp.City AS Tourist_Place_City,
    tt.Transport_id AS Transport_Id,
    tt.NameOfProvider AS Transport_Provider,
    tt.Fare AS Transport_Fare,
    tt.TypeOfVehicle AS Transport_Type,
    h.Name AS Hotel_Name,
    h.No_Of_Rooms AS Hotel_No_Of_Rooms,
    h.Cost AS Hotel_Cost,
    h.Address AS Hotel_Address,
    h.Rating AS Hotel_Rating
FROM 
    itinerary i
LEFT JOIN 
    tourist_places tp ON i.Country = tp.Country AND i.State = tp.State AND i.City = tp.City
LEFT JOIN 
    transport_type tt ON i.Transport_id = tt.Transport_id
LEFT JOIN 
    hotel h ON i.Hotel_id = h.Hotel_id;
