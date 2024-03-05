SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `test-user`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_user`
--

CREATE TABLE `all_user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_user`
--

INSERT INTO `all_user` (`id`, `f_name`, `l_name`, `username`, `email`, `password`) VALUES
(1, 'Amina', 'A', 'amina123', 'amina@gmail.com', 'amina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_user`
--
ALTER TABLE `all_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_user`
--
ALTER TABLE `all_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;