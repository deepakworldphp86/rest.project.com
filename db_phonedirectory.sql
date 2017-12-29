-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2013 at 12:12 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_phonedirectory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `fld_Id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_userName` varchar(20) NOT NULL,
  `fld_password` varchar(20) NOT NULL,
  PRIMARY KEY (`fld_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`fld_Id`, `fld_userName`, `fld_password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `fld_id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_firstName` varchar(50) NOT NULL,
  `fld_lastName` varchar(50) NOT NULL,
  `fld_hno` varchar(150) NOT NULL,
  `fld_country` varchar(10) NOT NULL,
  `fld_state` varchar(10) NOT NULL,
  `fld_city` varchar(30) NOT NULL,
  `fld_pincode` varchar(10) NOT NULL,
  `fld_qualify` varchar(30) NOT NULL,
  `fld_gender` char(4) NOT NULL,
  `fld_jobProfile` varchar(30) NOT NULL,
  `fld_mob1` varchar(15) NOT NULL,
  `fld_mob2` varchar(15) NOT NULL,
  `fld_phone` varchar(15) NOT NULL,
  `fld_eid` varchar(60) NOT NULL,
  `fld_status` char(4) NOT NULL COMMENT '1 for Active or 0 for Inactive',
  `fld_addedDate` date NOT NULL,
  `fld_updatedDate` datetime NOT NULL,
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`fld_id`, `fld_firstName`, `fld_lastName`, `fld_hno`, `fld_country`, `fld_state`, `fld_city`, `fld_pincode`, `fld_qualify`, `fld_gender`, `fld_jobProfile`, `fld_mob1`, `fld_mob2`, `fld_phone`, `fld_eid`, `fld_status`, `fld_addedDate`, `fld_updatedDate`) VALUES
(1, 'Sandeep', 'kumar', 'R36, Badarpur', '56', '105', 'New Delhi', '110044', '3', 'M', 'Computer Operator', '8010731488', '9971080766', '23271372', 'sanjunaga@gmail.com', '1', '2013-02-11', '0000-00-00 00:00:00'),
(2, 'Rahul', 'Sharma', '16, Netaji Subash Marg, Darya Ganj', '56', '105', 'Delhi', '110002', '4', 'M', 'Managing Director', '9971080766', '8010731488', '23271372', 'roshanl@vsnl.net', '1', '2013-02-11', '0000-00-00 00:00:00'),
(3, 'Deepak', 'kumar', 'barnala, Noida', '56', '103', 'Noida', '0012167', '3', 'M', 'PHP Developer', '9971080766', '8010731488', '23271372', 'deepakphpworld@gmail.com', '1', '2013-02-11', '0000-00-00 00:00:00'),
(4, 'amit', 'kumar', 'madanpur, khadar', '56', '105', 'New Delhi', '110056', '2', 'M', 'Accountant', '8010731488', '9971080766', '23271372', 'amit_kumar@yahoo.com', '1', '2013-02-11', '0000-00-00 00:00:00'),
(5, 'bindesh', 'fdsaf', '3/97', '56', '105', 'Delhi', '110044', '1', 'M', 'PHP Developer', '9971080766', '8010731488', '23271372', 'bindesh@abc.com', '', '2013-02-11', '0000-00-00 00:00:00'),
(6, 'sanjay', 'patel', '2552', '225', '8', 'Delhi', '110002', '2', 'M', 'Accountant', '9971080766', '9971080766', '23271372', 'deepakphpworld@gmail.com', '', '2013-02-11', '0000-00-00 00:00:00'),
(7, 'rahuy', 'nasrona', 'nar0a', '185', '5', 'Delhi', '110044', '3', 'M', 'Accountant', '8010731488', '9971080766', '23271372', 'bindesh@abc.com', '', '2013-02-11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE IF NOT EXISTS `tbl_contact_us` (
  `fld_id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_name` varchar(50) NOT NULL,
  `fld_emailId` varchar(50) NOT NULL,
  `fld_contact_no` varchar(50) NOT NULL,
  `fld_query` varchar(100) NOT NULL,
  `fld_postedDate` date NOT NULL,
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`fld_id`, `fld_name`, `fld_emailId`, `fld_contact_no`, `fld_query`, `fld_postedDate`) VALUES
(1, 'sanjay', 'sanjaugar@gmail.com', '8010731488', '', '2013-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE IF NOT EXISTS `tbl_countries` (
  `country_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `country` varchar(100) NOT NULL DEFAULT '',
  `country_ISD_code` char(3) NOT NULL DEFAULT '',
  `is_active` char(1) NOT NULL DEFAULT '0',
  `country_code` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=248 ;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`country_id`, `country`, `country_ISD_code`, `is_active`, `country_code`) VALUES
(1, 'Argentina', '', '0', 'AR'),
(2, 'Aruba', '', '0', 'AW'),
(3, 'Australia', '', '0', 'AU'),
(4, 'Austria', '', '0', 'AT'),
(5, 'Bahamas', '', '0', 'BS'),
(6, 'Barbados', '', '0', 'BB'),
(7, 'Belgium', '', '0', 'BE'),
(8, 'Belize', '', '0', 'BZ'),
(9, 'Benin', '', '0', 'BJ'),
(10, 'Bermuda', '', '0', 'BM'),
(11, 'Bhutan', '', '0', 'BT'),
(12, 'Bolivia', '', '0', 'BO'),
(13, 'Brazil', '', '0', 'BR'),
(14, 'Canada', '', '0', 'CA'),
(15, 'Cape Verde', '', '0', 'CV'),
(16, 'Cayman Islands', '', '0', 'KY'),
(17, 'Chile', '', '0', 'CL'),
(18, 'China', '', '0', 'CN'),
(19, 'Colombia', '', '0', 'CO'),
(20, 'Comoros', '', '0', 'KM'),
(21, 'Congo', '', '0', 'CG'),
(22, 'Costa Rica', '', '0', 'CR'),
(23, 'Croatia', '', '0', 'HR'),
(24, 'Cuba', '', '0', 'CU'),
(25, 'Cyprus', '', '0', 'CY'),
(26, 'Czech Republic', '', '0', 'CZ'),
(27, 'C&ocirc;te d''Ivoire', '', '0', NULL),
(28, 'Denmark', '', '0', 'DK'),
(29, 'Dominica', '', '0', 'DM'),
(30, 'Dominican Republic', '', '0', 'DO'),
(31, 'Ecuador', '', '0', 'EC'),
(32, 'Egypt', '', '0', 'EG'),
(33, 'El salvador', '', '0', 'SV'),
(34, 'Estonia', '', '0', 'EE'),
(35, 'Ethiopia', '', '0', 'ET'),
(36, 'Faroe Islands', '', '0', 'FK'),
(37, 'Fiji', '', '0', 'FJ'),
(38, 'Finland', '', '0', 'FI'),
(39, 'France', '', '0', 'FR'),
(40, 'French Guiana', '', '0', 'GF'),
(41, 'French Polynesia', '', '0', 'PF'),
(42, 'French Southern Ts', '', '0', 'TF'),
(43, 'Gabon', '', '0', 'GA'),
(44, 'Gambia', '', '0', 'GM'),
(45, 'Georgia', '', '0', 'GE'),
(46, 'Germany', '', '0', 'DE'),
(47, 'Ghana', '', '0', 'GH'),
(48, 'Gibraltar', '', '0', 'GI'),
(49, 'Greece', '', '0', 'GR'),
(50, 'Greenland', '', '0', 'GL'),
(51, 'Grenada', '', '0', 'GD'),
(52, 'Honduras', '', '0', NULL),
(53, 'Hong Kong', '', '0', 'HK'),
(54, 'Hungary', '', '0', 'HU'),
(55, 'Iceland', '', '0', 'IS'),
(56, 'India', '91', '1', 'IN'),
(57, 'Indonesia', '', '0', 'ID'),
(58, 'Iran', '', '0', 'IR'),
(59, 'Iraq', '', '0', 'IQ'),
(60, 'Ireland', '', '0', 'IE'),
(61, 'Israel', '', '0', 'IL'),
(62, 'Italy', '', '0', 'IT'),
(63, 'Jamaica', '', '0', 'JM'),
(64, 'Japan', '', '0', 'JP'),
(65, 'Jordan', '', '0', 'JO'),
(66, 'Kuwait', '', '0', 'KW'),
(67, 'Lao', '', '0', 'LA'),
(68, 'Latvia', '', '0', 'LV'),
(69, 'Lebanon', '', '0', 'LB'),
(70, 'Lesotho', '', '0', 'LS'),
(71, 'Liberia', '', '0', 'LR'),
(72, 'Liechtenstein', '', '0', 'LI'),
(73, 'Lithuania', '', '0', 'LT'),
(74, 'Luxembourg', '', '0', 'LU'),
(75, 'Macau', '', '0', 'MO'),
(76, 'Macedonia (FYR)', '', '0', 'MK'),
(77, 'Madagascar', '', '0', 'MG'),
(78, 'Malawi', '', '0', 'MW'),
(79, 'Malaysia', '', '0', 'MY'),
(80, 'Maldives', '', '0', 'MV'),
(81, 'Mali', '', '0', 'ML'),
(82, 'Malta', '', '0', 'MT'),
(83, 'Marshall Islands', '', '0', 'MH'),
(84, 'Martinique', '', '0', 'MQ'),
(85, 'Mauritania', '', '0', 'MR'),
(86, 'Mauritius', '', '0', 'MU'),
(87, 'Mayotte', '', '0', 'YT'),
(88, 'Mexico', '', '0', 'MX'),
(89, 'Micronesia', '', '0', 'FM'),
(90, 'Moldova', '', '0', 'MD'),
(91, 'Monaco', '', '0', 'MC'),
(92, 'Mongolia', '', '0', 'MN'),
(93, 'Montserrat', '', '0', 'MS'),
(94, 'Morocco', '', '0', 'MA'),
(95, 'Mozambique', '', '0', 'MZ'),
(96, 'Myanmar', '', '0', 'MM'),
(97, 'Namibia', '', '0', 'NA'),
(98, 'Nauru', '', '0', 'NR'),
(99, 'Nepal', '', '0', 'NP'),
(100, 'Netherlands', '', '0', 'NL'),
(101, 'Netherlands Antilles', '', '0', 'AN'),
(102, 'New Caledonia', '', '0', 'NC'),
(103, 'New Zealand', '', '0', 'NZ'),
(104, 'Nicaragua', '', '0', 'NI'),
(105, 'Niger', '', '0', 'NE'),
(106, 'Nigeria', '', '0', 'NG'),
(107, 'Niue', '', '0', 'NU'),
(108, 'Norfolk Island', '', '0', 'NF'),
(109, 'North Korea', '', '0', ''),
(110, 'Norway', '', '0', 'NO'),
(111, 'Oman', '', '0', 'OM'),
(112, 'Pakistan', '', '0', 'PK'),
(113, 'Palau', '', '0', 'PW'),
(114, 'Panama', '', '0', 'PA'),
(115, 'Paraguay', '', '0', 'PY'),
(116, 'Peru', '', '0', 'PE'),
(117, 'Philippines', '', '0', 'PH'),
(118, 'Pitcairn', '', '0', 'PN'),
(119, 'Poland', '', '0', 'PL'),
(120, 'Portugal', '', '0', 'PT'),
(121, 'Puerto Rico', '', '0', 'PR'),
(122, 'Qatar', '', '0', 'QA'),
(123, 'Reunion', '', '0', 'RE'),
(124, 'Romania', '', '0', 'RO'),
(125, 'Russian Federation', '', '0', 'RU'),
(126, 'Rwanda', '', '0', 'RW'),
(127, 'Saint Helena', '', '0', 'SH'),
(128, 'Saint Lucia', '', '0', 'LC'),
(129, 'Samoa', '', '0', 'WS'),
(130, 'San Marino', '', '0', 'SM'),
(131, 'Saudi Arabia', '', '0', 'SA'),
(132, 'Senegal', '', '0', 'SN'),
(133, 'Seychelles', '', '0', 'SC'),
(134, 'Sierra Leone', '', '0', 'SL'),
(135, 'Singapore', '', '0', 'SG'),
(136, 'Slovakia', '', '0', 'SK'),
(137, 'Slovenia', '', '0', 'SI'),
(138, 'Solomon Islands', '', '0', 'SB'),
(139, 'Somalia', '', '0', 'SO'),
(140, 'South Africa', '', '0', 'ZA'),
(141, 'South Georgia', '', '0', 'GS'),
(142, 'South Korea', '', '0', NULL),
(143, 'Spain', '', '0', 'ES'),
(144, 'Sri Lanka', '', '0', 'LK'),
(145, 'Sudan', '', '0', 'SD'),
(146, 'Suriname', '', '0', 'SR'),
(147, 'Swaziland', '', '0', 'SZ'),
(148, 'Sweden', '', '0', 'SE'),
(149, 'Switzerland', '', '0', 'CH'),
(150, 'Syria', '', '0', 'SY'),
(151, 'Taiwan', '', '0', 'TW'),
(152, 'Tajikistan', '', '0', 'TJ'),
(153, 'Tanzania', '', '0', 'TZ'),
(154, 'Thailand', '', '0', 'TH'),
(155, 'Togo', '', '0', 'TG'),
(156, 'Tokelau', '', '0', 'TK'),
(157, 'Tonga', '', '0', 'TO'),
(158, 'Trinidad and Tobago', '', '0', 'TT'),
(159, 'Tunisia', '', '0', 'TN'),
(160, 'Turkey', '', '0', 'TR'),
(161, 'Turkmenistan', '', '0', 'TM'),
(162, 'Turks and Caicos', '', '0', 'TC'),
(163, 'Tuvalu', '', '0', 'TV'),
(164, 'Uganda', '', '0', 'UG'),
(165, 'Ukraine', '', '0', 'UA'),
(166, 'United Arab Emirates', '', '0', 'AE'),
(167, 'United Kingdom', '', '0', 'GB'),
(168, 'United States', '1', '1', 'US'),
(169, 'Uruguay', '', '0', 'UY'),
(170, 'Uzbekistan', '', '0', 'UZ'),
(171, 'Vanuatu', '', '0', 'VU'),
(172, 'Venezuela', '', '0', 'VE'),
(173, 'Viet Nam', '', '0', 'VN'),
(174, 'Virgin Islands (Brit)', '', '0', 'VG'),
(175, 'Virgin Islands (U.S.)', '', '0', 'VI'),
(176, 'Western Sahara', '', '0', 'EH'),
(177, 'Yemen', '', '0', 'YE'),
(178, 'Yugoslavia', '', '0', NULL),
(179, 'Zaire', '', '0', NULL),
(180, 'Zambia', '', '0', 'ZM'),
(181, 'Zimbabwe', '', '0', 'ZW'),
(183, 'AFGHANISTAN', '', '0', 'AF'),
(184, 'ALAND ISLANDS', '', '0', 'AX'),
(185, 'ALBANIA', '', '0', 'AL'),
(186, 'ALGERIA', '', '0', 'DZ'),
(187, 'ANDORRA', '', '0', 'AD'),
(188, 'ANGOLA', '', '0', 'AO'),
(189, 'ANGUILLA', '', '0', 'AI'),
(190, 'ANTARCTICA', '', '0', 'AQ'),
(191, 'ANTIGUA AND BARBUDA', '', '0', 'AG'),
(192, 'ARMENIA', '', '0', 'AM'),
(193, 'AZERBAIJAN', '', '0', 'AZ'),
(194, 'BAHRAIN', '', '0', 'BH'),
(195, 'BANGLADESH', '', '0', 'BD'),
(197, 'BELARUS', '', '0', 'BY'),
(198, 'BOSNIA AND HERZEGOVINA', '', '0', 'BA'),
(199, 'BOTSWANA', '', '0', 'BW'),
(200, 'BOUVET ISLAND', '', '0', 'BV'),
(201, 'BRITISH INDIAN OCEAN TERRITORY', '', '0', 'IO'),
(202, 'BRUNEI DARUSSALAM', '', '0', 'BN'),
(203, 'BULGARIA', '', '0', 'BG'),
(204, 'BURKINA FASO', '', '0', 'BF'),
(205, 'BURUNDI', '', '0', 'BI'),
(206, 'CAMBODIA', '', '0', 'KH'),
(207, 'CAMEROON', '', '0', 'CM'),
(208, 'CENTRAL AFRICAN REPUBLIC', '', '0', 'CF'),
(209, 'CHAD', '', '0', 'TD'),
(210, 'CHRISTMAS ISLAND', '', '0', 'CX'),
(211, 'COCOS (KEELING) ISLANDS', '', '0', 'CC'),
(213, 'COOK ISLANDS', '', '0', 'CK'),
(214, 'DJIBOUTI', '', '0', 'DJ'),
(215, 'EQUATORIAL GUINEA', '', '0', 'GQ'),
(216, 'ERITREA', '', '0', 'ER'),
(217, 'FALKLAND ISLANDS (MALVINAS)', '', '0', 'FK'),
(218, 'GUADELOUPE', '', '0', 'GP'),
(219, 'GUAM', '', '0', 'GU'),
(220, 'GUATEMALA', '', '0', 'GT'),
(221, 'GUERNSEY', '', '0', 'GG'),
(222, 'GUINEA', '', '0', 'GN'),
(223, 'GUINEA-BISSAU', '', '0', 'GW'),
(224, 'GUYANA', '', '0', 'GY'),
(225, 'HAITI', '', '0', 'HT'),
(226, 'HEARD ISLAND AND MCDONALD ISLANDS', '', '0', 'HM'),
(227, 'HOLY SEE (VATICAN CITY STATE)', '', '0', 'VA'),
(228, 'ISLE OF MAN', '', '0', 'IM'),
(229, 'JERSEY', '', '0', 'JE'),
(230, 'KAZAKHSTAN', '', '0', 'KZ'),
(231, 'KENYA', '', '0', 'KE'),
(232, 'KIRIBATI', '', '0', 'KI'),
(233, 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', '', '0', 'KP'),
(234, 'KYRGYZSTAN', '', '0', 'KG'),
(235, 'LIBYAN ARAB JAMAHIRIYA', '', '0', 'LY'),
(236, 'PALESTINIAN TERRITORY, OCCUPIED', '', '0', 'PS'),
(237, 'PAPUA NEW GUINEA', '', '0', 'PG'),
(238, 'SAINT KITTS AND NEVIS', '', '0', 'KN'),
(239, 'SAINT PIERRE AND MIQUELON', '', '0', 'PM'),
(240, 'SAINT VINCENT AND THE GRENADINES', '', '0', 'VC'),
(241, 'SAO TOME AND PRINCIPE', '', '0', 'ST'),
(242, 'SERBIA AND MONTENEGRO', '', '0', 'RS'),
(243, 'SVALBARD AND JAN MAYEN', '', '0', 'SJ'),
(244, 'TIMOR-LESTE', '', '0', 'TL'),
(245, 'UNITED STATES MINOR OUTLYING ISLANDS', '', '0', 'UM'),
(246, 'Vatican City State see HOLY SEE', '', '0', 'VA'),
(247, 'WALLIS AND FUTUNA', '', '0', 'WF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

CREATE TABLE IF NOT EXISTS `tbl_signup` (
  `fld_id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_userName` varchar(30) NOT NULL,
  `fld_password` varchar(50) NOT NULL,
  `fld_firstName` varchar(30) NOT NULL,
  `fld_lastName` varchar(30) NOT NULL,
  `fld_hno` varchar(30) NOT NULL,
  `fld_country` smallint(3) NOT NULL,
  `fld_state` varchar(30) NOT NULL,
  `fld_city` varchar(30) NOT NULL,
  `fld_pincode` varchar(8) NOT NULL,
  `fld_phoneNumber` varchar(12) NOT NULL,
  `fld_mobileNumber` varchar(12) NOT NULL,
  `fld_qualification` varchar(10) NOT NULL,
  `fld_dob` date NOT NULL,
  `fld_gender` char(4) NOT NULL,
  `fld_photo` varchar(30) NOT NULL,
  `fld_hobbies` varchar(20) NOT NULL,
  `fld_status` char(4) NOT NULL COMMENT '1 for Active & 0 for Inactive',
  `fld_addedDate` date NOT NULL,
  `fld_updateDate` date NOT NULL,
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_signup`
--

INSERT INTO `tbl_signup` (`fld_id`, `fld_userName`, `fld_password`, `fld_firstName`, `fld_lastName`, `fld_hno`, `fld_country`, `fld_state`, `fld_city`, `fld_pincode`, `fld_phoneNumber`, `fld_mobileNumber`, `fld_qualification`, `fld_dob`, `fld_gender`, `fld_photo`, `fld_hobbies`, `fld_status`, `fld_addedDate`, `fld_updateDate`) VALUES
(2, 'mohan@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Kumar', 'Singh1316', 'R36-33, Pulpahladpur', 40, '78', 'New Delhi', '110082', '23271372', '5857/497441', '', '1999-00-16', 'M', '1360238390.tmp', 'M,H,C,R', '1', '2013-02-07', '2013-02-11'),
(3, 'uk@2013.com', '279c69e4abe8b786f73a72e664c3c3dd', 'Uk', 'Kushwaha', 'A-269, jasola Vihar, Badarpu', 56, '105', 'New Delhi', '110052', '791614197', '1122914941', '', '2001-03-15', 'F', '1360297141.jpg', 'M,H,C,R', '1', '2013-02-07', '2013-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `fld_id` int(11) NOT NULL AUTO_INCREMENT,
  `fld_countryId` int(11) NOT NULL,
  `fld_name` varchar(100) NOT NULL,
  `fld_code` varchar(5) NOT NULL,
  PRIMARY KEY (`fld_id`),
  KEY `fld_countryId` (`fld_countryId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`fld_id`, `fld_countryId`, `fld_name`, `fld_code`) VALUES
(1, 182, 'Alabama', 'AL'),
(2, 182, 'Alaska', 'AK'),
(3, 182, 'American Samoa', 'AS'),
(4, 182, 'Arizona', 'AZ'),
(5, 182, 'Arkansas', 'AR'),
(6, 182, 'Armed Forces Africa', 'AF'),
(7, 182, 'Armed Forces Americas', 'AA'),
(8, 182, 'Armed Forces Canada', 'AC'),
(9, 182, 'Armed Forces Europe', 'AE'),
(10, 182, 'Armed Forces Middle East', 'AM'),
(11, 182, 'Armed Forces Pacific', 'AP'),
(12, 182, 'California', 'CA'),
(13, 182, 'Colorado', 'CO'),
(14, 182, 'Connecticut', 'CT'),
(15, 182, 'Delaware', 'DE'),
(16, 182, 'District of Columbia', 'DC'),
(17, 182, 'Federated States Of Micronesia', 'FM'),
(18, 182, 'Florida', 'FL'),
(19, 182, 'Georgia', 'GA'),
(20, 182, 'Guam', 'GU'),
(21, 182, 'Hawaii', 'HI'),
(22, 182, 'Idaho', 'ID'),
(23, 182, 'Illinois', 'IL'),
(24, 182, 'Indiana', 'IN'),
(25, 182, 'Iowa', 'IA'),
(26, 182, 'Kansas', 'KS'),
(27, 182, 'Kentucky', 'KY'),
(28, 182, 'Louisiana', 'LA'),
(29, 182, 'Maine', 'ME'),
(30, 182, 'Marshall Islands', 'MH'),
(31, 182, 'Maryland', 'MD'),
(32, 182, 'Massachusetts', 'MA'),
(33, 182, 'Michigan', 'MI'),
(34, 182, 'Minnesota', 'MN'),
(35, 182, 'Mississippi', 'MS'),
(36, 182, 'Missouri', 'MO'),
(37, 182, 'Montana', 'MT'),
(38, 182, 'Nebraska', 'NE'),
(39, 182, 'Nevada', 'NV'),
(40, 182, 'New Hampshire', 'NH'),
(41, 182, 'New Jersey', 'NJ'),
(42, 182, 'New Mexico', 'NM'),
(43, 182, 'New York', 'NY'),
(44, 182, 'North Carolina', 'NC'),
(45, 182, 'North Dakota', 'ND'),
(46, 182, 'Northern Mariana Islands', 'MP'),
(47, 182, 'Ohio', 'OH'),
(48, 182, 'Oklahoma', 'OK'),
(49, 182, 'Oregon', 'OR'),
(50, 182, 'Palau', 'PW'),
(51, 182, 'Pennsylvania', 'PA'),
(52, 182, 'Puerto Rico', 'PR'),
(53, 182, 'Rhode Island', 'RI'),
(54, 182, 'South Carolina', 'SC'),
(55, 182, 'South Dakota', 'SD'),
(56, 182, 'Tennessee', 'TN'),
(57, 182, 'Texas', 'TX'),
(58, 182, 'Utah', 'UT'),
(59, 182, 'Vermont', 'VT'),
(60, 182, 'Virgin Islands', 'VI'),
(61, 182, 'Virginia', 'VA'),
(62, 182, 'Washington', 'WA'),
(63, 182, 'West Virginia', 'WV'),
(64, 182, 'Wisconsin', 'WI'),
(65, 182, 'Wyoming', 'WY'),
(66, 121, 'Flevoland', ''),
(67, 121, 'Friesland', ''),
(68, 121, 'Gelderland', ''),
(69, 121, 'Groningen', ''),
(70, 121, 'Limburg', ''),
(71, 121, 'North Brabant', ''),
(72, 121, 'North Holland', ''),
(73, 121, 'Overijssel', ''),
(74, 121, 'South Holland', ''),
(75, 121, 'Utrecht', ''),
(76, 121, 'Zeeland', ''),
(77, 142, 'Andra Pradesh', ''),
(78, 142, 'Arunachal Pradesh', ''),
(79, 142, 'Assam', ''),
(80, 142, 'Bihar', ''),
(81, 142, 'Chhattisgarh', ''),
(82, 142, 'Goa', ''),
(83, 142, 'Gujarat', ''),
(84, 142, 'Haryana', ''),
(85, 142, 'Himachal Pradesh', ''),
(86, 142, 'Jammu and Kashmir', ''),
(87, 142, 'Jharkhand', ''),
(88, 142, 'Karnataka', ''),
(89, 142, 'Kerala', ''),
(90, 142, 'Madya Pradesh', ''),
(91, 142, 'Maharashtra', ''),
(92, 142, 'Manipur', ''),
(93, 142, 'Meghalaya', ''),
(94, 142, 'Mizoram', ''),
(95, 142, 'Nagaland', ''),
(96, 142, 'Orissa', ''),
(97, 142, 'Punjab', ''),
(98, 142, 'Rajasthan', ''),
(99, 142, 'Sikkim', ''),
(100, 142, 'Tamil Nadu', ''),
(101, 142, 'Tripura', ''),
(102, 142, 'Uttaranchal', ''),
(103, 142, 'Uttar Pradesh', ''),
(104, 142, 'West Bengal', ''),
(105, 142, 'Delhi', ''),
(106, 142, 'Chandigarh', '');
