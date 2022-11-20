# phpSimpleLoginDocker
Simple login with php and mysql in docker containers

## Download and Install
```bash
git clone https://github.com/atriox2510/phpSimpleLoginDocker
cd phpSimpleLoginDocker
docker-compose up -d
```

## Configuration
### Create the "users" table
We can create it in the phpMyAdmin service running in localhost:8080, however, we can do the same thing in the mariadb-cli like this:
```bash
docker exec -it db /bin/bash
```

Container with the database named "db":
```bash
mariadb -uuser -p
```
The passwords to access at the database are in the www/config.php file and docker-compose.yml.

Copy and paste this:
```MySQL
CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
This is the same that are in a comment in the file www/config.php. **You must insert the users data manually**.

## EXTRA INFO AND CONFIG (optional)
To run this service when the server start just copy the file **docker-webapp.service** like root or with sudo in the system folder and enable the service:
```bash
cp docker-webapp.service /etc/systemd/system/
systemctl enable docker-webapp.service
```
