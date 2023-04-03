CREATE TABLE `files` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `user_id` INT NOT NULL , 
    `name` VARCHAR(255) NOT NULL , 
    `url` VARCHAR(255) NOT NULL , 
    `category` INT NULL , 
    `active` BOOLEAN NOT NULL DEFAULT TRUE , 
    `mod` VARCHAR(255) NULL , 
    `date_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`) 
    ) ENGINE = InnoDB;