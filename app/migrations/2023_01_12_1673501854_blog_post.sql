CREATE TABLE `blog_post` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `user_id` INT NOT NULL , 
    `blog_category_id` INT NOT NULL , 
    `title` VARCHAR(255) NOT NULL , 
    `description` TEXT NULL , 
    `img` VARCHAR(255) NULL , 
    `content` TEXT NULL , 
    `date_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`id`)) 
    ENGINE = InnoDB;