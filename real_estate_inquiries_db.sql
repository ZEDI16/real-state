CREATE DATABASE real_estate_inquiries;

USE real_estate_inquiries;

CREATE TABLE inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(15),
    property VARCHAR(100),
    budget DECIMAL(10, 2),
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
