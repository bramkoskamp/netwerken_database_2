CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `Date_Of_Birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `Date_Of_Birth`) VALUES
(1, 'Jose', 'Lopez', '1997-03-21'),
(2, 'Lisa', 'Luiz', '1986-04-01'),
(3, 'Claude', 'Sanchez', '2007-11-20'),
(4, 'Ida', 'Johnsson', '2001-10-13');
COMMIT;
