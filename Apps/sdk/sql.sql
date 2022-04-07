CREATE TABLE sms_applications (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
application_name VARCHAR(30) NOT NULL,
selected_course VARCHAR(30) NOT NULL,
order_id VARCHAR(50),
csv_fields LONGTEXT,
applied_date TIMESTAMP
)