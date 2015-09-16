CREATE TABLE administrator (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    administrator_id INT NOT NULL,
    title VARCHAR(50),
    body TEXT,
    publish_date DATETIME,
    embargo_date DATETIME,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY administrator_key (administrator_id) REFERENCES administrator(id)
);

CREATE TABLE image (
	id INT AUTO_INCREMENT PRIMARY KEY,
    news_id INT NOT NULL,
    url varchar(255) NOT NULL,
    FOREIGN KEY news_key (news_id) REFERENCES news(id)
);