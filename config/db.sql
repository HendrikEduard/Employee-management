CREATE TABLE `employees` (
  `id` tinyint(11) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE='InnoDB' COLLATE 'utf8mb4_unicode_ci';

CREATE VIEW `employee` AS
SELECT * FROM employees WHERE is_deleted=0;