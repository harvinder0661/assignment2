-- Create database
CREATE DATABASE IF NOT EXISTS security_company;

-- Switch to the database
USE security_company;

-- Create table guard_requests
CREATE TABLE IF NOT EXISTS guard_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    event_type VARCHAR(255) NOT NULL,
    num_guards INT NOT NULL,
    duration INT NOT NULL,
    price INT NOT NULL
);



-- Insert 12 entries into guard_requests
INSERT INTO guard_requests (event_type, num_guards, duration, price) VALUES
    ('Event 1', 5, 8, 4000),
    ('Event 2', 3, 12, 3600),
    ('Event 3', 6, 6, 3600),
    ('Event 4', 4, 10, 4000),
    ('Event 5', 7, 9, 6300),
    ('Event 6', 2, 12, 2400),
    ('Event 7', 8, 4, 3200),
    ('Event 8', 3, 8, 2400),
    ('Event 9', 6, 10, 6000),
    ('Event 10', 4, 6, 2400),
    ('Event 11', 5, 7, 3500),
    ('Event 12', 3, 11, 3300);

