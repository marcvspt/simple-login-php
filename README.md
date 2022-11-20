# phpSimpleLoginDocker
Simple login with php and mysql in docker containers

## Download and Install
```
git clone https://github.com/atriox2510/phpSimpleLoginDocker
cd phpSimpleLoginDocker
docker-compose up -d
```

## Configuration
### Create the "users" table
We can create it in the phpMyAdmin service running in localhost:8080, however, we can do the same thing in the mariadb-cli like this:
```
docker exec -it db /bin/bash
```

Container with the database named "db":
```
mariadb -uuser -p
```

Copy and paste this:
```MySQL
CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
This is the same that have in a comment in the file www/config.php. You must insert the users data manually.
