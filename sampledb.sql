-- Create a new database
CREATE DATABASE DeviceRequestSystem;
USE DeviceRequestSystem;

-- Create Employees Table
CREATE TABLE Employees (
    EPFNumber INT PRIMARY KEY,
    Name VARCHAR(255),
    Designation VARCHAR(255),
    Department VARCHAR(255)
);

-- Populate Employees Table with Sample Data
INSERT INTO Employees (EPFNumber, Name, Designation, Department)
VALUES
    (1001, 'John Smith', 'Software Engineer', 'IT Department'),
    (1002, 'Jane Doe', 'Marketing Manager', 'Marketing Department'),
    (1003, 'Bob Johnson', 'HR Specialist', 'HR Department');

-- Create DeviceInventory Table
CREATE TABLE DeviceInventory (
    DeviceID INT AUTO_INCREMENT PRIMARY KEY,
    DeviceName VARCHAR(255),
    Quantity INT
);

-- Populate DeviceInventory Table with Sample Data
INSERT INTO DeviceInventory (DeviceName, Quantity)
VALUES
    ('Digital Camera', 5),
    ('PenDrive', 20),
    ('Portable HDD', 10),
    ('Other', 15);

-- Create DeviceRequests Table
CREATE TABLE DeviceRequests (
    RequestID INT AUTO_INCREMENT PRIMARY KEY,
    EPFNumber INT,
    DateTime TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ReferenceNumber VARCHAR(20),
    Reasons TEXT,
    FOREIGN KEY (EPFNumber) REFERENCES Employees(EPFNumber)
);

-- Create DeviceRequestStatus Table
CREATE TABLE DeviceRequestStatus (
    RequestID INT PRIMARY KEY,
    Status ENUM('Pending', 'Approved', 'Rejected')
);

-- Create DeviceRequestItems Table
CREATE TABLE DeviceRequestItems (
    RequestItemID INT AUTO_INCREMENT PRIMARY KEY,
    RequestID INT,
    DeviceID INT,
    Quantity INT,
    FOREIGN KEY (RequestID) REFERENCES DeviceRequests(RequestID),
    FOREIGN KEY (DeviceID) REFERENCES DeviceInventory(DeviceID)
);

-- Create DevicePhotos Table
CREATE TABLE DevicePhotos (
    PhotoID INT AUTO_INCREMENT PRIMARY KEY,
    RequestID INT,
    PhotoFile BLOB,
    FOREIGN KEY (RequestID) REFERENCES DeviceRequests(RequestID)
);

-- Create UserLog Table
CREATE TABLE UserLog (
    LogID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    Action VARCHAR(255),
    Timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES Employees(EPFNumber)
);
