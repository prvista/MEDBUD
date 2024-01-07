CREATE DATABASE IF NOT EXISTS labtest_db;

USE labtest_db;

CREATE TABLE IF NOT EXISTS lab_tests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    contact_no VARCHAR(20) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    test_date DATE NOT NULL,
    test_time TIME NOT NULL,
    selected_tests VARCHAR(255) NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL
);
