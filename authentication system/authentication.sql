--php version: 8.1.6
--server version: 8.1


--data base name: authentication_sys


CREATE TABLE `authentication_sys`.`meta_data` (`id` INT(11) NOT NULL , 
`fullname` VARCHAR(255) NOT NULL ,
`mail` VARCHAR(255) NOT NULL , 
`password` VARCHAR(255) NOT NULL , 
`timestamp` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;



 --table for job_app_data

 CREATE TABLE `authentication_sys`.`job_app_data` (`id` INT(11) NOT NULL AUTO_INCREMENT , 
`firstname` VARCHAR(50) NOT NULL , 
`lastname` VARCHAR(50) NOT NULL , 
`email` VARCHAR(100) NOT NULL , 
`phone` INT(16) NOT NULL , 
`state` VARCHAR(20) NOT NULL , 
`country` VARCHAR(30) NOT NULL , 
`linkeldn_link` VARCHAR(100) NOT NULL , 
`website_link` VARCHAR(100) NOT NULL ,
`intro` TEXT NOT NULL , 
`cv` VARCHAR(100) NOT NULL , 
`other attachment` VARCHAR(100) NOT NULL ,
`paid` VARCHAR(5) NOT NULL ,
`timestamp` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;