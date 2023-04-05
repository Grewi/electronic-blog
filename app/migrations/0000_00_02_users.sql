CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_key` varchar(255) NOT NULL,
  `active_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_code` int(5) DEFAULT NULL,
  `email_status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,

  `active` tinyint(1) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `users` (`email`, `email_code`, `email_status`, `password`, `name`, `login`, `active`, `user_role_id`, `date_create`) VALUES

('grewi@ya.ru', 3500, 1, '$2y$10$CgcnD9KQqVjnmUH87/rqBuemv94y8lfzGgLXU3UvoeznI9TL9q3Gm', 'Евгений', NULL, 0, 1, '2022-10-21 09:54:22');

CREATE TABLE `user_role` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `slug` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

INSERT INTO `user_role` (`slug`) VALUES ('admin'),('user');

ALTER TABLE `users` ADD FOREIGN KEY (`user_role_id`) REFERENCES `user_role`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;



