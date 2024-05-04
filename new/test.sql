DELIMITER //

CREATE TRIGGER trig_1
AFTER INSERT ON Bill
FOR EACH ROW
BEGIN
    DECLARE total_amount DECIMAL(10, 2);
    SELECT SUM(Amount) INTO total_amount FROM Bill WHERE User_Id = NEW.User_Id;
    UPDATE user_account SET Wallet = Wallet - NEW.amount WHERE User_Id = NEW.User_Id;
END;
//

DELIMITER ;