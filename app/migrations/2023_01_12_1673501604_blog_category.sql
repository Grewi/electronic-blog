CREATE TABLE `blog_category` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `parent` INT NOT NULL DEFAULT '0', 
    `name` VARCHAR(255) NOT NULL , 
    `slug` VARCHAR(255) NOT NULL , 
    `descripton` TEXT NULL , 
    `img` VARCHAR(255) NULL , 
    `sort` SMALLINT NOT NULL DEFAULT '0', 
    PRIMARY KEY (`id`)) 
    ENGINE = InnoDB;