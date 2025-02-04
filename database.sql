CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    room_type VARCHAR(100),
    booking_date DATE,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO users (name, email, password) 
VALUES ('Test User', 'user@example.com', '" . password_hash('123456', PASSWORD_DEFAULT) . "');
