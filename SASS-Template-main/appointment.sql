CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    specialization VARCHAR(100) NOT NULL,
    message TEXT,
    hmo VARCHAR(100) NOT NULL,
    consultation_type VARCHAR(100) NOT NULL, -- Added Consultation Type column
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
