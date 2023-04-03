CREATE TABLE `files_category` (
     `id` INT NOT NULL AUTO_INCREMENT , 
     `name` INT NOT NULL , 
     `parent` INT NOT NULL DEFAULT '0' , 
     `type` INT NOT NULL,
     PRIMARY KEY (`id`)
     ) ENGINE = InnoDB;