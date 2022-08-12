DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    create_at TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP,
    last_access TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP

);