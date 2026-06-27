CREATE DATABASE college_db;
USE college_db;

CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  email VARCHAR(50),
  branch VARCHAR(20),
  marks INT
);

INSERT INTO students (name, email, branch, marks) VALUES
('Rahul Patel', 'rahul@email.com', 'CE', 85),
('Sneha Shah', 'sneha@email.com', 'IT', 90),
('Amit Modi', 'amit@email.com', 'EC', 78),
('Priya Joshi', 'priya@email.com', 'CE', 88);