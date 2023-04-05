CREATE TABLE rain_data (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  device_id VARCHAR(50) NOT NULL
  latitude float(10,6),
  longitude float(10,6),
  rainValue INT(6) NOT NULL,
  rainStatus VARCHAR(50) NOT NULL
   timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);

CREATE TABLE temperature_data (
  id INT AUTO_INCREMENT PRIMARY KEY,
  temperatureValue FLOAT,
  temperatureStatus VARCHAR(255),
  timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE humidity_data (
  id INT AUTO_INCREMENT PRIMARY KEY,
  humidityValue FLOAT,
  humidityStatus VARCHAR(255),
  timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);