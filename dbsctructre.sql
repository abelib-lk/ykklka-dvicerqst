-- Create Employees Table
CREATE TABLE Employees (
    EPFNumber INT PRIMARY KEY,
    Name VARCHAR(255),
    Designation VARCHAR(255),
    Department VARCHAR(255)
);

-- Create DeviceRequests Table
CREATE TABLE DeviceRequests (
    RequestID INT AUTO_INCREMENT PRIMARY KEY,
    EPFNumber INT,
    DateTime TIMESTAMP,
    ReferenceNumber VARCHAR(20),
    Reasons TEXT,
    FOREIGN KEY (EPFNumber) REFERENCES Employees(EPFNumber)
);

-- Create DeviceInventory Table
CREATE TABLE DeviceInventory (
    DeviceID INT AUTO_INCREMENT PRIMARY KEY,
    DeviceName VARCHAR(255),
    Quantity INT
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

-- Create DeviceRequestStatus Table
CREATE TABLE DeviceRequestStatus (
    RequestID INT PRIMARY KEY,
    Status ENUM('Pending', 'Approved', 'Rejected')
);

-- Create DevicePhotos Table
CREATE TABLE DevicePhotos (
    PhotoID INT AUTO_INCREMENT PRIMARY KEY,
    RequestID INT,
    PhotoFile BLOB, -- Assuming binary data storage for photos
    FOREIGN KEY (RequestID) REFERENCES DeviceRequests(RequestID)
);

-- Create UserLog Table
CREATE TABLE UserLog (
    LogID INT AUTO_INCREMENT PRIMARY KEY,
    UserID INT,
    Action VARCHAR(255),
    Timestamp TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);

-- Create Users Table (for IT Department)
CREATE TABLE Users (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(255),
    Password VARCHAR(255),
    Role VARCHAR(255)
);
