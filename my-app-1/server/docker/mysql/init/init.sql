-- .env, .env.example, .env.testing など、DB_DATABASEの値に合わせること
CREATE DATABASE IF NOT EXISTS laravel_stations;
CREATE DATABASE IF NOT EXISTS laravel_stations_test;
GRANT ALL ON laravel_stations.* TO 'dev'@'%';
GRANT ALL ON laravel_stations_test.* TO 'dev'@'%';

