-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2015 at 05:41 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `v_meetup`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `slno` bigint(10) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `in_id` varchar(40) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `g_id` varchar(40) DEFAULT NULL,
  `week` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`slno`),
  KEY `in_id` (`in_id`),
  KEY `g_id` (`g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`slno`, `date`, `status`, `in_id`, `timestamp`, `g_id`, `week`) VALUES
(2, '2015-07-03', 'present', '14MCS1010', '2015-10-30 04:28:44', '50396', 'july1'),
(3, '2015-07-04', 'present', '14MCS1010', '2015-10-30 04:28:44', '50396', 'july1'),
(4, '2015-07-06', 'present', '14MCS1010', '2015-10-30 05:19:36', '50396', 'july2'),
(5, '2015-07-07', 'present', '14MCS1010', '2015-10-30 05:19:36', '50396', 'july2'),
(6, '2015-08-01', 'present', '14MCS1010', '2015-10-30 05:30:07', '50396', 'aug1'),
(7, '2015-08-02', 'present', '14MCS1010', '2015-10-30 05:30:07', '50396', 'aug1'),
(8, '2015-08-01', 'present', '14MCS1012', '2015-10-30 05:31:19', '50396', 'aug1'),
(9, '2015-08-02', 'present', '14MCS1012', '2015-10-30 05:31:19', '50396', 'aug1'),
(10, '2015-11-01', 'present', '14MCS1010', '2015-10-30 05:45:43', '50396', 'nov1'),
(11, '2015-11-01', 'present', '14MCS1012', '2015-10-30 05:45:58', '50396', 'nov1'),
(12, '2015-11-26', 'present', '14MCS1010', '2015-10-30 05:49:25', '50396', 'nov5'),
(13, '2015-11-27', 'present', '14MCS1010', '2015-10-30 05:49:25', '50396', 'nov5'),
(14, '2015-11-28', 'present', '14MCS1010', '2015-10-30 05:49:26', '50396', 'nov5'),
(15, '2015-11-29', 'present', '14MCS1010', '2015-10-30 05:49:26', '50396', 'nov5'),
(16, '2015-11-23', 'present', '14MCS1012', '2015-10-30 05:49:48', '50396', 'nov5'),
(17, '2015-11-24', 'present', '14MCS1012', '2015-10-30 05:49:48', '50396', 'nov5'),
(18, '2015-11-25', 'present', '14MCS1012', '2015-10-30 05:49:48', '50396', 'nov5');

-- --------------------------------------------------------

--
-- Table structure for table `common_status`
--

CREATE TABLE IF NOT EXISTS `common_status` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `g_id` varchar(40) DEFAULT NULL,
  `e_id` varchar(40) DEFAULT NULL,
  `off_id` varchar(40) DEFAULT NULL,
  `postedby` varchar(40) NOT NULL,
  PRIMARY KEY (`slno`),
  KEY `g_id` (`g_id`),
  KEY `e_id` (`e_id`),
  KEY `off_id` (`off_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `external_guide`
--

CREATE TABLE IF NOT EXISTS `external_guide` (
  `e_company` varchar(150) NOT NULL,
  `e_name` varchar(40) NOT NULL,
  `e_mail` varchar(40) NOT NULL,
  `e_number` varchar(40) NOT NULL,
  `e_id` varchar(40) NOT NULL,
  `e_password` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`e_id`),
  UNIQUE KEY `e_mail` (`e_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `external_guide`
--

INSERT INTO `external_guide` (`e_company`, `e_name`, `e_mail`, `e_number`, `e_id`, `e_password`) VALUES
('PayPal', 'Dilip Dhiran', 'Dilipdhiran@paypal.com', '', '15VIT1065', 'vitcc065'),
('DATAMATO Technologies pvt.ltd. , address ;403,Ashray,Elphistone road,opp. to kirloskar engine oil,khadki , pune', 'Sachin Londhe', 'sachin@datamato.com', '9822354264', '15VITI001', '134'),
('Absyz Consultancy Services, Samvruddi Srisampada Building,  201, Raghvendra Colony, Kondapur  Hyderabad, India - 500084', 'Mr. Anshul Jain', 'anshul.jain@absyz.com', '9052498524', '15VITI002', '9v2@bYp='),
('multi core ware inc', 'Mr Venkatakrishnan Ranganathan', 'venkata@orzota.com', '9840702594', '15VITI003', '9C5gM^qE'),
('ZettaMine Technologies; Hyderabad', 'Surya Putchala', 'surya.putchala@zettamine.com', '9963697775', '15VITI004', 'M&2B9y_8'),
('Vdime Innovation private limited, IIT Research Park, behind Tidel Park,Chennai', 'Mr. Senthil Kumaran  ', 'Senthil0504@gmail.com', '', '15VITI005', '7!XVw2gp'),
('Dumbelled(Zywie Ventures Pvt Ltd)  ', 'Aarti Gill', 'aarti@dumbelled.com', '9920278477', '15VITI006', '*@KA55vR'),
('SAP Labs India Pvt Ltd, 138, EPIP Zone, Whitefield, Bengaluru, Karnataka 560066', 'Siva Kumar N', 'sivakumar.n@sap.com', '9731081933', '15VITI007', '=dm2+YVR'),
('Broadcom Corporation, bldg no. 10, raheja mindspace, hitech city, Hyderabad', 'Mr. Vallinath Panchagnula', 'vallinath.panchagnula@broadcom.com', '9652911249', '15VITI008', '2?_L8pfM'),
('Agrud Advisors India Pvt Ltd. Address-  Unit 10, 220 AJC Bose Road,  Kolkata- 700017', 'Ms.Sharmila Ghosh', 'sharmila@agrud.com', '', '15VITI009', 't6e?SEV='),
('Hexaware Technologies limited; Chennai', 'Mr. Mohammed Rafi K', 'mohammedrafik@hexaware.com', '9840174861', '15VITI010', 'Pz#s3Vy4'),
('Broadridge Financial Solutions Pvt. Ltd.; Hyderabad', 'Sarabjit Gugneja', 'Sarabjit.Gugneja@broadridge.com', '9849821824', '15VITI011', '6J#mvUtW'),
('Intel India pvt.ltd. , Devarabisanhalli , Outer ring road,Bellandur,Bangalore Karnataka, 560103', 'ShriHarsha Bhat', 'shriharsha.bhat@intel.com', '9845835807', '15VITI012', '6QfG-9p9'),
('IBM ; EGL tech park; Bangalore', 'Avnish Midha', 'avnish.midha@in.ibm.com', '9535588044', '15VITI013', '$m33vBj7'),
('C-DAC;tidal park taramani;chennai', 'Mr.Vijayakumar', 'vijaydharshan@gmail.com', '9543192449', '15VITI014', 'UBv_D8zQ'),
('NetApp,  2nd Floor ,Fair Winds Block, Embassy Golf Links, Embassy Golf Links Business Park, Challaghatta, Bengaluru, Karnataka 560071', 'Brahmanna K', 'Brahmanna.Kodavali@netapp.com', '9880033006', '15VITI015', '^9BAcfN3'),
('NetApp ;Fairwinds Block ; EGL Software Park;Bengaluru 560071', 'Niyaz Mohamed TM', 'Niyaz.Mohamed@netapp.com', '9886012624', '15VITI016', '7$3yCjFB'),
('Philips, Philips Innovation Campus, Manyata Tech Park, Nagavara, Bangalore - 560045, India.', 'Sanjay Bhat', 'sanjay.bhat@philips.com', '9886498225', '15VITI017', '9^^fV7AY'),
('LeoMetric Technology Pvt. Ltd; Warje; Pune- 58', 'Ramdas Khatake', 'ramdaskhatake@leometric.com', '9421959376', '15VITI018', 'pX$^9N!='),
('VMware Software India Pvt Ltd. - Bengaluru', 'Manoj Krishnan', 'manojkrishnan@vmware.com', '9844000364', '15VITI019', 'A9?SS2yJ'),
('NetApp; At Embassy Golf Link; Bangalore', 'Suseendra Babu', 'Suseendran.N@netapp.com', '9916584260', '15VITI020', '&Ce%*K7Q'),
('NetApp, Fair Winds Block, Embassy Golf Links Business Park, Challaghatta, Bengaluru, Karnataka 560071', 'Shridhar Gangadharappa', 'shridhar.gangadharappa2@netapp.com', '9901166363', '15VITI021', 'Jv7mHy*K'),
('Altiux Innovations Pvt. Ltd.; Bangalore', 'Arun Jose', 'arun.j@altiux.com', '7829420223', '15VITI022', 'y*3N?9g4'),
('Broadridge Financial Solutions,Adjacent to cyber towers,Hi-tech city madhapur, hyderabad-500081', 'Bikramaditya Singhal', 'Bikramaditya.Singhal@broadridge.com', '9583321111', '15VITI023', 'BA+?e6bj'),
('wabag house no 17,200 feet Thoraippakkam,Pallavaram Main Road,chennai', 'T.Ayyamperumal', 't_ayyamperumal@wabag.in', '9789995670', '15VITI024', 'f82$hGyY'),
('NetApp India Private Limited, Fair Winds Block,EGL Software Park,off Intermediate Ring Road,Banglore-560071', 'Mr. Vasudev Mulchandani', 'vasudev.mulchandani@netapp.com', '9880105141', '15VITI025', '4k=$XeHK'),
('Ernst & young LLP - GTH Division,Drishya Building,Kinfra Film & Videopark,SEZ Sainik School, Kazhakkottam, Thiruvananthapuram, Kerala 695585', 'Bijilash Babu', 'Bijilash.Babu@xe04.ey.com ', '9995109993', '15VITI026', '8bvb?WbL'),
('axis interprise mumbai', 'vijay goge', 'goge.vijay@gmail.com', '9665370200', '15VITI027', 'G=92^pfj'),
('Oracle; Hyderabad.', 'ALLURI MURALI KRISHNA', 'alluri.krishna@oracle.com', '', '15VITI028', 'A_kJ?52?'),
('WIPRO ,EC4 ,WIPRO AVENUE,ELECTRONICS CITY,BANGALORE,KARNATAKA', 'Balwant Singh', 'balwant.singh@wipro.com', '7259186779', '15VITI029', 'n6!Xh@f9'),
('Shaan Softtech Pvt.Ltd.', ' Sameer Jakate', 'jakate@gmail.com', '8421735416', '15VITI030', 'd@vGD4fa'),
('FIXNIX INFOSEC SOLUTIONS, GANDHI NAGAR, SATHVACHARI, VELLORE', 'Shanmugavel Sundaram', 'shan@fixnix.co', '8790878222', '15VITI031', 'vitcc031'),
('MU-SIGMA, BANGLORE', 'SUNIL NARSINGHANI', 'sunil.narsinghani@mu-sigma.com', '', '15VITI032', 'vitcc032'),
('PayPal', 'Sandeep K', 'sank@paypal.com', '', '15VITI034', 'viti034'),
('AAUM research and analytics private limited', 'Suresh pitchaipillai', 'suresh.pitchaipillai@aaumanalytics.com', '', '15VITI035', 'viti035'),
('PayPal', 'Prakash Wilbert', 'pwilbert@paypal.com', '', '15VITI036', 'viti036'),
('Wipro Banglore', 'Narendra Ganapath Rao Ghate', 'narendra.ghate1@wipro.com', '', '15VITI037', 'viti037'),
('Hexaware Technologies', 'Dipayan', 'dipayan.S@hexaware.com', '', '15VITI038', 'viti038'),
('CIRROLOGIX', 'MADHU', 'madhusudan.m@cirrologix.com', '', '15VITI039', 'vitcc039'),
('AGILE LABS PVT LTD.', 'KUMARAVELMANI M.C.', '', '', '15VITI040', 'vitcc1040'),
('ALCATEL LUCENT INDIA PVT LTD.', 'SURESHGANDTH VIJAYANAND', 'sureshgandth.vijayanand@alcatel-lucent.c', '', '15VITI045', 'vitcc045'),
('SERENDIO', 'AZHAR', 'azhar@serendio.com', '', '15VITI050', 'vitcc050'),
('INFOCRAFT SOLUTION PVT. LTD', 'ANURAG JAIN', 'anurag.jain@infocraftsx.com', '', '15VITI051', 'vitcc051'),
('CYBER GROUP INC', 'AKHILESH MANI TIWARI', 'akhilesh.mani@cygrp.com', '', '15VITI052', 'vitcc052'),
('SERENDIO', 'PRAVEEN', 'praveen@serendio.com', '', '15VITI053', ''),
('xipetech', 'abdul fattah', 'fattah@xipetech.com', '', '15VITI054', ''),
('KnowledgeLens Pvt Ltd', 'Sudheesh Narayana', 'sudheeshnarayana@knowledgelens.com', '', '15VITI055', ''),
('sysfore technoogiesovt.LTD', 'Saikath benarjee', 'saikat.benarjee@sysfore.com', '', '15VITI056', ''),
('Visteon cooperation', 'Gunashekar.G', 'ggunashe@visteon.com', '', '15VITI057', ''),
('HoneyWell technology solutions lab', 'Thiruvaran ekambaram', 'thirumaran.ekambaram@honeywell.com', '', '15VITI058', ''),
('OrangeScape', 'Kausik Ram', 'kausikram@orangescape.com', '', '15VITI059', 'vitcc059'),
('Alpha Cloud Labs', 'Puneet Arora', 'puneet.arora@alphacloudlabs.com', '', '15VITI060', 'vitcc060'),
('Hexaware Technologies, Chennai', 'Mr.Gnananandhan Santhakrishnan', 'gnananandhans@hexaware.com', '', '15VITI061', 'vitcc061'),
('flutura decision science and analytics', 'nayan dharamshi', 'nayan.dharamshi@fluturasolutions.com', '', '15VITI062', ''),
('Honeywell', 'Venugopala', 'nadumane.venugopala@honeywell.com', '', '15VITI064', '');

-- --------------------------------------------------------

--
-- Table structure for table `inhouse_review`
--

CREATE TABLE IF NOT EXISTS `inhouse_review` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `g_id` varchar(40) NOT NULL,
  `in_id` varchar(40) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `week` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `postedby` varchar(40) NOT NULL,
  PRIMARY KEY (`slno`),
  KEY `g_id` (`g_id`),
  KEY `in_id` (`in_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inhouse_student`
--

CREATE TABLE IF NOT EXISTS `inhouse_student` (
  `in_id` varchar(40) NOT NULL,
  `in_name` varchar(40) DEFAULT NULL,
  `g_id` varchar(40) DEFAULT NULL,
  `in_pro` varchar(150) DEFAULT NULL,
  `in_domain` varchar(40) DEFAULT NULL,
  `in_email` varchar(40) DEFAULT NULL,
  `in_mobile` varchar(40) DEFAULT NULL,
  `in_password` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `abstract` text NOT NULL,
  PRIMARY KEY (`in_id`),
  KEY `g_id` (`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inhouse_student`
--

INSERT INTO `inhouse_student` (`in_id`, `in_name`, `g_id`, `in_pro`, `in_domain`, `in_email`, `in_mobile`, `in_password`, `abstract`) VALUES
('14MCB1006', ' ARUN SURESH D', '50391', 'Visualization of Big Data Density Analytics using Parallel Co-ordinates', 'Big Data Analytics', 'arun.sureshd2014@vit.ac.in', '9445575945', 'geethadharmalingam', ''),
('14MCB1008', ' ANUMALASETTY VENKATA SASIKANTH', '50605', 'LARGE DATA ANALYTICS', 'BIG DATA ANALYTICS', '', '', '!=2QZUyG', ''),
('14MCC1002', 'VIPASHYANA JAGANNATH WAVARE', '50408', 'Cloud Security for scalable data', 'Cloud Computing', 'vipashyana.jagannath2014@vit.ac.in', '9962406028', 'Bfocus4urself', ''),
('14MCC1005', ' UTHRA K', '50384', 'Cloud interoperability using API', 'Cloud computing', '', '', '#L@2^trf', ''),
('14MCC1011', ' TURLAPATI SAINATH', '50417', 'Cloud application', 'Cloud  computing', '', '', 'N^5@2m^e', ''),
('14MCC1015', 'MANIGANDAN.V', '50239', 'Adaptive resource provisioning using online bin packing in cloud', 'Cloud Computing', '', '', 'mani2k9485', ''),
('14MCC1017', 'Phanindra Kumar', '50304', 'Analysis of various Scheduling Schemes for Cloud Based Systems', 'Cloud Computing', '', '', 'vitcc1017', ''),
('14mcc1019', 'vivek kumar', '50239', 'developing an iot application in sensor cloud', 'iot', '', '', 'vitcc1019', ''),
('14mcc1020', 'Nagula shyamkumar', '50318', 'raspberry pi based smart lighting system', 'raspberry pi', '', '', 'vitcc1020', ''),
('14MCC1021', ' AJMAL USMAN.E', '50304', 'increase quality of data transfer with low bandwidth', 'communication and networking', 'ajmal.usmane2014@vit.ac.in', '9746906262', 'ajiajmalaji', ''),
('14MCC1022', ' THAKKAR PRATIK MOHANBHAI', '50304', 'Mobile cloud computing', 'Cloud computing', 'tpratik.mohanbhai2014@vit.ac.in', '9962416568', '14mcc1022', 'The aim is to build a private cloud to offer flexible and secure infrastructure services that can easily be utilized and managed by end users according to their needs using Microsoft Server Hyper-V and SCVMM.'),
('14MCC1023', 'SUMAN DEYASHI', '50307', 'Not Yet Decided', 'Cloud Computing', '', '', 'vitcc1023', ''),
('14MCC1024', ' DESHPANDE AKSHAY ANAND', '50258', 'VM replcement generic algorithm', 'cloud computing', '', '', 'f#2NZ5Nu', ''),
('14MCC1027', ' R KARTHICK RAJA', '50322', 'A SURVEY OF SOFTWARE-DEFINED NETWORKING', 'Networking', '', '', 'X&X8c5=d', ''),
('14MCC1029', ' BHEEMARASETTY SURENDRA KUMAR', '50159', 'Load Balancing Technique for Energy Efficient computational cloud', 'Cloud', '', '', 'y5#vweXL', ''),
('14MCS1004', ' MOHAMMAD YOUNUS FARVEAZ J', '50352', 'Marketplace model for Logistics providers', 'REST;Networking; ', '', '', 'h$e2ktRB', ''),
('14MCS1009', ' PRASAD RAJENDRA KHANDAR', '50187', 'enhancement of  text processing chain with lingware focusing on coreference resolution; semantic role labelling and spatial expressions recognition', 'NLP', 'prasaadkhandar@gmail.com', '9561229346', 'kprasaad23', ''),
('14MCS1010', ' AVVARU VENKATESH', '50396', 'ENCRYPTION AND DECRYPTION ALGORITHM FOR DATA SECURITY INN CLOUD COMPUTING', 'cloud', '', '', 'vitcc1010', ''),
('14MCS1011', ' MATHIVANA', '50442', 'Advance session tracking system', 'Network Security', '', '', 'P*6q*q@!', ''),
('14MCS1012', ' JONNADULA MANISEKHAR', '50396', 'ENHANCING AUTHENTICATION AND CONFIDENTIALITY IN CLOUD COMPUTING', 'Cloud security', '', '', 'vitcc1012', ''),
('14MCS1014', 'SHARAD LAMBA', '50587', 'FEATURE BASED SENTIMENT ANALYSIS OF PRODUCT REVIEWS', 'NATURAL LANGUAGE PROCESSING', 'sharad.lamba2014@vit.ac.in', '9003667285', 'vitcc1014', ''),
('14mcs1015', 'papillu veera pavan kumar reddy', '50440', 'security evalution classical pattern', 'security', '', '', 'vitcc1015', ''),
('14MCS1020', ' M.SUSEEDHAR', '50442', 'under water acoustic sensor', 'network security', '', '', '5*SRg5@7', ''),
('14mcs1023', 'Tarun', '50239', 'Enabling cloud storage auditing with client key resistance', 'cloud computing', '', '', 'vitcc1023', ''),
('14MCS1024', ' DIDLA PALLAVI', '50378', 'Scalability and reliability over cloud testing', 'cloud testing', '', '', 'Zk_pp2q$', ''),
('14MCS1028', ' SHANMUGAPRIYA. J', '50384', 'Internet of things on healthcare', 'cloud', 'shanmuga.priyaj2014@vit.ac.in', '8754154629', 'bMp7=Cks', 'The objective of Mobile med-care application is to design and develop a service oriented architecture to provide a healthcare services remotely using Android. The purpose is to utilize common services like alarm system to take up pills, Blood pressure checkup, calorie count to manage medication for daily usage. This will give effective intelligence way of leading a health life to acquire care through assistance.'),
('14MCS1030', ' KAMBHAMPATI JYOTHI', '50388', 'Ecode protocol using vanets', 'adhoc networks', '', '', 'Aj_#Y345', ''),
('14MCS1033', ' SILPA KAMBAM', '50390', 'automatic ontology matching with upper ontologies', 'web technologies', '', '', '+!Hr5+%v', ''),
('14MCS1035', ' NARAHARI VENKATESH', '50185', 'Extending Software Change Impact Analysis into COTS Components', 'software engineering ', '', '', 'D!t69^wE', ''),
('14MCS1041', ' SHRIMATHY', '50189', 'Compressed lucene indexing technique for Xml Files', 'DataMining', '', '', 'J*q7fF=Y', ''),
('14MCS1042', ' VALLETI KRANTHI KUMAR', '50185', 'Feature sub set selection in high dimensional data', 'Data mining', '', '', '!NeZH8rG', ''),
('14MCS1043', ' KALAIVANAN A', '50398', 'qos locatoion and information system', 'data base;webservice', '', '', 'e6kcfK_d', ''),
('14MCS1044', ' MINNEKANTI NYMISHA', '50338', 'A secure protocol and an authentication technique for security', 'network security', '', '', 'UDv$Ry2G', ''),
('14MCS1047', 'YALLALING BANSODE', '50299', 'AUTOMATED CLASSROOM ANDROID MOBILE LOCKING SYSTEM USING SENSOR ZONE', 'NETWORKING', 'bansode.yallalingram2014@vit.ac.in', '9962415064', 'vitcc1047', 'Smart phone Automation System playing a major role which helps in reducing a work by using some\r\ntechnologies. Now-a-day smart phones play vital roles in peopleâ€™s day to day work. Smart phones are an important asset for people living in the 21st century. With functionality similar to computers, smart phones have become all-in-one portable devices providing interconnectivity and device-to-device communication. Such continuous improvement in capabilities will cause the popularity of smart phones to constantly rise. Since todayâ€™s android mobiles so much causes on student. student cant focus on classroom study, when teacher are teaches in classroom some student busy with their android mobile to chatting, gaming and other thing. so we need to avoid such thing in classroom.\r\n'),
('14MCS1049', ' SUNIL MANDIWAL', '50569', 'network', 'WSN', '', '', 'eU9!2vyK', '');

-- --------------------------------------------------------

--
-- Table structure for table `internal_guide`
--

CREATE TABLE IF NOT EXISTS `internal_guide` (
  `g_id` varchar(40) NOT NULL,
  `g_name` varchar(40) NOT NULL,
  `g_mail` varchar(40) NOT NULL,
  `g_password` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `g_designation` varchar(40) NOT NULL,
  `g_intercom` varchar(40) NOT NULL,
  `g_cabin` varchar(40) NOT NULL,
  `g_mobile` varchar(40) NOT NULL,
  PRIMARY KEY (`g_id`),
  UNIQUE KEY `mail` (`g_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal_guide`
--

INSERT INTO `internal_guide` (`g_id`, `g_name`, `g_mail`, `g_password`, `g_designation`, `g_intercom`, `g_cabin`, `g_mobile`) VALUES
('50007', 'Prof. Sivagami   M', 'msivagami@vit.ac.in', '1Mm', 'Asst. Prof. (SG)', '1228', 'II 206', '9841562692'),
('50024', 'Prof. Pradeep Kumar  T.S', 'tspradeepkumar@vit.ac.in', 'hitler$123', 'Asst. Prof. (SG)', '1218', 'II MBA Block', '9994626196'),
('50036', 'Prof. Nisha  V.M', 'nishavm@vit.ac.in', '`:2OcBmy', 'Asst. Prof. (Sr.)', '1229', '3 A 3', '8056242631'),
('50049', 'Prof. Nithya Darisini  P.S', 'psnithyadarshini@vit.ac.in', 'e9I~{+N<', 'Asst. Prof. (SG)', '1227', 'II 206', '9487045673'),
('50063', 'Prof. Sajidha S A', 'vijaya.k@vit.ac.in', '1ck?g.C9', 'Asst. Prof. (SG)', '1226', '3 A 14', '9941385684'),
('50064', 'Prof. Sathis Kumar B', 'sathishkumar.b@vit.ac.in', 'R(t.9z4I', 'Asst. Prof. (SG)', '1231', 'IV MBA Block', '9442444010'),
('50094', 'Dr. Jeganathan L', 'jeganathan.l@vit.ac.in', 'P`b8?FaI', 'Professor', '1030', 'III M 12', '9488945529'),
('50136', 'Prof. Maheswari R', 'maheswari.r@vit.ac.in', 'wgPxe5,''', 'Asst. Prof. (SG)', '1240', '2 A 1', '7401596924'),
('50138', 'Prof. Vergin Raja Sarobin M', 'verginraja.m@vit.ac.in', '77=N6gIf', 'Asst. Professor', '1242', '3 M 3', '9710423195'),
('50154', 'Prof. Rukmani P', 'rukmani.p@vit.ac.in', 'p7!!W9f9', 'Asst. Prof. (Sr.)', '1263', '3 M 2', '9790944341'),
('50159', 'Prof. Harini S', 'harini.s@vit.ac.in', '151820', 'Asst. Prof. (Sr.)', '1268', '3 M 7', '9444419041'),
('50160', 'Dr. Maheswari N', 'maheswari.n@vit.ac.in', 'dynamic', 'Professor', '1269', 'II 206', '9865918740'),
('50161', 'Dr. Nayeemulla Khan', 'nayeemulla.khan@vit.ac.in', 'Gp0A/>-M', 'Professor', '1270', 'III M 16', '9444470335'),
('50168', 'Dr. Pattabiraman V', 'pattabiraman.v@vit.ac.in', '`KsQ^9fE', 'Associate Professor', '1277', '3 M 14', '9842289896'),
('50176', 'Prof. Graceline Jasmine S', 'graceline.jasmine@vit.ac.in', '-Iy~8U{H', 'Asst. Professor', '1281', '3 M 8', '9003654406'),
('50177', 'Prof. Thomas Abraham J V', 'thomasabraham.jv@vit.ac.in', '2[M^.3w]', 'Asst. Prof. (SG)', '1287', '3 A 4', '9176864924'),
('50178', 'Prof. Appalaraju Muralidhar', 'muralidhar.a@vit.ac.in', 'x5/`ZzIv', 'Asst. Prof. (Sr.)', '1288', '3 A 5', '9094962433'),
('50183', 'Prof. Ilakiyaselvan N', 'ilakiyaselvan.n@vit.ac.in', 'r*1x:RH7', 'Asst. Professor', '1286', '2 A 6', '9444633301'),
('50185', 'Prof. Sathyarajasekaran K', 'sathyarajasekaran.k@vit.ac.in', 'rpQW2%1P', 'Asst. Professor', '1285', '2 206', '9841732250'),
('50186', 'Dr. Parvathi R', 'parvathi.r@vit.ac.in', 'jishnu2008', 'Associate Professor', '1291', '2 A 2', '9443059207'),
('50187', 'Prof. Deivanai K', 'deivanai.k@vit.ac.in', '5Tz]%m2U', 'Asst. Professor', '1283', '3 M 9', '9751216865'),
('50189', 'Prof. Sharath Kumar Jagannathan', 'sharathkumar.j@vit.ac.in', '4+UcbE+\\', 'Asst. Prof. (Sr.)', '1289', '2 205', '9176020251'),
('50201', 'Prof. Umitty Srinivasa Rao', 'umitty.srinivasarao@vit.ac.in', 'Q~2vOJnM', 'Asst. Prof. (Sr.)', '1284', '3 A 1', '7845374637'),
('50237', 'Dr. Saleena B', 'saleena.b@vit.ac.in', 'Ffl7`g`P', 'Associate Professor', '1356', '3 M 6', '9840695935'),
('50238', 'Prof. Geetha M', 'geetha.m@vit.ac.in', 'Ryi31J{9', 'Asst. Professor', '1358', '3 M 5', '9941393892'),
('50239', 'Prof. Khadar Nawas K', 'khadarnawas.k@vit.ac.in', 'vitfootball', 'Asst. Professor', '1359', '3 A 9', '9159182399'),
('50249', 'Prof. Prakash B', 'prakash.bala@vit.ac.in', 'ix]ZA4~e', 'Asst. Professor', '1365', '6', '9962098396'),
('50250', 'Prof. Maheswari S', 'maheswari.s@vit.ac.in', 'magiashok', 'Asst. Prof. (Sr.)', '1364', '3 A 14', '9884355623'),
('50258', 'Dr. Rajesh Kanna B', 'rajeshkanna.b@vit.ac.in', 'vitcc123', 'Associate Professor', '1290', '506', '9884223178'),
('50266', 'Prof. Shridevi S', 'shridevi.s@vit.ac.in', 'Ee3l-Hp$', 'Asst. Prof. (SG)', '1171', '2 A 5', '9791087626'),
('50270', 'Prof. Vijayalakshmi A', 'vijayalakshmi.av@vit.ac.in', '8?3n(OJM', 'Asst. Prof. (Sr.)', '1067', '3 A 6', '9445958156'),
('50276', 'Prof. B V A N S S PRABHAKAR RAO', 'prabhakarrao@vit.ac.in', 'Vignesh#1', 'Assistant Professor (Selection Grade)', '1134', '3 M 1', '9952096295'),
('50284', 'Prof. Gayathri Devi B', 'gayathridevi.b@vit.ac.in', 'vitcc50284', 'Asst. Prof. (Sr.)', '1072', '3 A 3', '9790937402'),
('50286', 'Prof. Aparna V', 'aparna.v@vit.ac.in', 'mB(42Hu4', 'Asst. Prof. (Sr.)', '1069', '4 A 17', '8148314140'),
('50289', 'Prof. Premalatha M', 'premalatha.m@vit.ac.in', 'G&na"3TE', 'Asst. Prof. (SG)', '1071', '4 M 4', '9884326554'),
('50297', 'Prof. Sumaiya Thaseen I', 'isumaiyathaseen@vit.ac.in', '=zCNb*6p', 'Asst. Prof. (Sr.)', '1131', '3 A 4', '9443215146'),
('50299', 'Prof. Bharathi Raja S', 'bharathiraja.s@vit.ac.in', 'sbrsas1800', 'Asst. Prof. (Sr.)', '1120', '4 M 3', '9841929299'),
('50300', 'Dr. Viswanathan V', 'viswanathan.v@vit.ac.in', 'RMVk+6ai', 'Associate Professor', '1130', '3 A 8', '9443174417'),
('50301', 'Prof. Rajkumar S', 'rajkumar.srinivasan@vit.ac.in', 'W3=e|oo!', 'Asst. Prof. (Sr.)', '1065', '4 M 5', '9442424291'),
('50303', 'Dr. Malathi G', 'malathi.g@vit.ac.in', 'R(q#3hHP', 'Associate Professor', '1107', '2 A 7', '9840833337'),
('50304', 'Kumar R', 'kumar.rangasamy@vit.ac.in', '2', 'Asst. Prof. (SG)', '1156', '6 A', '9444247444'),
('50307', 'Prof. Priyaadharshini M', 'priyaadharshini.m@vit.ac.in', 'manickam3', 'Asst. Prof. (Sr.)', '1064', '3 F 313', '9677271150'),
('50311', 'Prof. Kanchana Devi V', 'kanchanadevi@vit.ac.in', '<cS=PG6D', 'Asst. Prof. (Sr.)', '1176', '3 A 7', '9500642843'),
('50314', 'Prof. Kavya Alluru', 'kavya.alluru@vit.ac.in', 'gaurav21', 'Asst. Professor', '1074', '3 A 2', '9962196549'),
('50315', 'Prof. Jayaram B', 'jayaram.b@vit.ac.in', 'Hp/.1/0}', 'Asst. Prof. (Sr.)', '1121', '4 M 2', '9486203960'),
('50318', 'Prof. Nivedita M', 'nivedita.m@vit.ac.in', 'saraswathy', 'Asst. Professor', '1175', '3 A 2', '9952612366'),
('50319', 'Dr. Bharadwaja Kumar', 'bharadwaja.kumar@vit.ac.in', 'vitcc50319', 'Associate Professor', '1169', 'III M 15', '9789841134'),
('50322', 'Prof. Jayasudha M', 'jayasudha.n@vit.ac.in', 'o:5Xz8bQ', 'Asst. Prof. (Sr.)', '1109', '3 M 10', '9994979687'),
('50338', 'Dr. Ganesan R', 'ganesan.r@vit.ac.in', 'Q9LhV;yU', 'Associate Professor', '1357', '2A3', '9842292350'),
('50352', 'Dr. Jenila Livingston L M', 'jenila.lm@vit.ac.in', 'Q9Lhb;1U', 'Associate Professor', '1088', '4 M 1', '9444337733'),
('50359', 'Dr. Rekha D', 'rekha.d@vit.ac.in', 'srinithi07', 'Asst. Prof. (Sr.)', '1183', '7A', '9841408327'),
('50370', 'Prof. Rajesh Kumar', 'rajesh.kumar@vit.ac.in', 'raj12kum', 'Associate Professor', '1182', '7A 10', '9092952221'),
('50373', 'Dr. Justus S', 'justus.s@vit.ac.in', '<t[9LbhN', 'Associate Professor', '1319', 'II M 13', '9789145400'),
('50378', 'Dr. Umamaheswari E', 'umamaheswari.e@vit.ac.in', 'vitcc50378', 'Associate Professor', '1194', 'I f A 8', '9840079813'),
('50380', 'Prof. Rajarajeswari S', 'rajarajeswari.s@vit.ac.in', '8Bqauo>J', 'Asst. Prof. (Sr.)', '1195', 'I F A', '9790896652'),
('50384', 'Dr. Neela Narayanan V', 'neelanarayanan.v@vit.ac.in', 'ramakvp23', 'Associate Professor', '1129', 'IV NA 25', '7598564593'),
('50386', 'Prof. Abdul Quadir Md', 'abdulquadir.md@vit.ac.in', '6AW6"8gP', 'Asst. Professor', '1086', 'II A', '9884004139'),
('50388', 'Prof. Christy Jackson J', 'christyjackson.j@vit.ac.in', 'vitcc50388', 'Asst. Professor', '1320', 'II A', '8939109547'),
('50389', 'Prof. Tulasi Prasad Sariki', 'tulasiprasad.sariki@vit.ac.in', '7Z*5cn1L', 'Asst. Prof. (Sr.)', '1125', 'VI 604', '8675724402'),
('50390', 'Prof. Alok Chauhan', 'alok.chauhan@vit.ac.in', '1X/o$67x', 'Associate Professor', '1099', 'VI M 7', '8939527797'),
('50391', 'Prof. Rabindra Kumar Singh', 'rabindrakumar.singh@vit.ac.in', 'j1R+f;n`', 'Asst. Prof. (SG)', '1158', '3 M 4', '9884367578'),
('50392', 'Dr. Syed Ibrahim S P', 'syedibrahim.sp@vit.ac.in', 'syedatm786@', 'Professor', '1392', '605 B (lab)', '9944416392'),
('50393', 'Prof. Ramesh Ragala', 'ramesh.ragala@vit.ac.in', 'n)T$*4IQ', 'Asst. Prof. (Sr.)', '1141', 'VI M 8', '8148376575'),
('50394', 'Prof. Nachiyappan S', 'nachiyappan.s@vit.ac.in', 'Raggavv199^', 'Asst. Prof. (Sr.)', '1142', '6 M 5', '9443268429'),
('50396', 'Prof. Pradeep K V', 'pradeep.kv@vit.ac.in', 'Y2)1VTyi', 'Asst. Professor', '1189', 'VI M 4', '9445825675'),
('50398', 'Dr. Sivabalakrishnan M', 'sivabalakrishnan.m@vit.ac.in', 'msbkks7281', 'Associate Professor', '1434', 'IVNA 26', '9841260016'),
('50400', 'Prof. Gayathri R', 'gayathri.r@vit.ac.in', '*9zzYOvg', 'Asst. Professor', '1384', 'IV NA 22', '9597300373'),
('50401', 'Prof. Punitha K', 'punitha.k@vit.ac.in', 'DWe!ja3/', 'Asst. Prof. (Sr.)', '1140', 'IV NA 24', '9443916174'),
('50403', 'Prof. Rajesh M', 'rajesh.m@vit.ac.in', 'sashvika', 'Asst. Prof. (Sr.)', '1378', 'IF NA 4', '9944043544'),
('50404', 'Prof. Rajiv Vincent', 'rajiv.vincent@vit.ac.in', 'rajeev08', 'Asst. Professor', '1259', 'IF NA 6', '9994777058'),
('50408', 'Prof. Anusooya G', 'anusooya.g@vit.ac.in', 'vmeetup', 'Asst. Professor', '1145', 'IVNA 9', '9176313600'),
('50410', 'Dr. Sandhya P', 'sandhya.p@vit.ac.in', 'k,F6Tm7Y', 'Associate Professor', '1370', 'I floor NA 14', '7299480949'),
('50412', 'Dr. Vijayakumar V', 'vijayakumar.v@vit.ac.in', 'vitcc50412', 'Professor', '1329', 'IF A', '9942057843'),
('50413', 'Prof. Hema N', 'hema.n@vit.ac.in', '6b$+dMW)', 'Asst. Prof. (Sr.)', '1385', 'IF A', '9444253130'),
('50417', 'Prof. Prassanna J', 'prassanna.j@vit.ac.in', 'Y4GWe>{6', 'Asst. Prof. (SG)', '1425', 'IV NA 29', '9841475035'),
('50422', 'Dr. Priyadarshini J', 'priyadharshini.j@vit.ac.in', '.";5AJmQ', 'Associate Professor', '1097', '4 A 3', '9486074882'),
('50430', 'Prof. Prabakaran R', 'prabha.karan@vit.ac.in', '_^OcL9XF', 'Asst. Prof. (Sr.)', '1423', '4NA 30', '9710626073'),
('50432', 'Prof. Shola Usha Rani', 'sholausha.rani@vit.ac.in', '|>R5+Och', 'Asst. Prof. (Sr.)', '1383', 'IV NA 4 36', '9962290128'),
('50435', 'Prof. Karmel A', 'karmel.a@vit.ac.in', 'F.;lXb7A', 'Asst. Prof. (Sr.)', '1398', 'IV NA 8', '9840507512'),
('50438', 'Prof. Suganya G', 'suganya.g@vit.ac.in', '`[A9S]b_', 'Asst. Prof. (Sr.)', '1399', '4 ext A 28', '9894862359'),
('50440', 'Prof. Sridhar R', 'sridhar@vit.ac.in', '@j~5\\L">', 'Associate Professor', '1084', 'IVNA 14', '9790939134'),
('50442', 'Dr. Asha S', 'asha.s@vit.ac.in', 'Almighty1*', 'Associate Professor', '1085', '4 NA 19', '9442808934'),
('50443', 'Dr. Nithyanandam P', 'nithyanandam.p@vit.ac.in', '43({Xf#;', 'Professor', '1396', '4 NA 23', '9962066206'),
('50445', 'Prof. Sakthi Ganesh M', 'sakthiganesh.m@vit.ac.in', 'lb|48QB2', 'Asst. Professor (Sr.)', '1397', 'IV NA 20', '9786359728'),
('50569', 'Dr. Subbulakshmi T', 'subbulakshmi.t@vit.ac.in', ',&Q[$8lK', 'Professor', '1432', '4 A Ext 23', '9994163259'),
('50577', 'Dr. Renta Chintala Bhargavi', 'bhargavi.r@vit.ac.in', 'c&EXl=1.', 'Associate Professor', '1149', '4 NA Ext 7', '9940683362'),
('50587', 'Dr. Geetha S', 'geetha.s@vit.ac.in', '5.o1>IU^', 'Professor', '1483', '205', '9842550862'),
('50590', 'Dr. Asnath Victy Phamila Y', 'asnathvicty.phamila@vit.ac.in', 'femi1467', 'Associate Professor', '1467', 'canteen IIFloor 5', '9884322100'),
('50603', 'Prof. Hepsiba Mabel V', 'hepsiba.mabel@vit.ac.in', '*Ar,Nz5a', 'Assistant Professor (Sr)', '1469', 'Canteen II floor 6', '9840454781'),
('50605', 'Dr. Vishnu Priya R', 'vishnupriya.r@vit.ac.in', 'mTh2b}2B', 'Associate Professor', '1480', 'canteen 27', '9486072557'),
('50616', 'Dr.  M. Janaki Meena', 'janakimeena.m@vit.ac.in', 'ilmfmvhab$', 'Professor', '1470', '206', '98433 58320.'),
('50632', 'Dr. Jagadeesh Kannan R', 'jagadeeshkannan.r@vit.ac.in', '^1AbDl-"', 'Professor', '1518', '3 M 13', '9094058841'),
('50732', 'Dr. R.Nandhini', 'nandhini.ramachandra@vit.ac.in', 'OhYt\\9SN', 'Assistant Professor ', '1502', 'canteen 3', '9940656844'),
('50767', 'Prof. Sweetlin Hemalatha', 'sweetlin.hemalatha@vit.ac.in', '|Tj5.WCV', 'Assistant Professor (Sr.)', '', 'canteen room 22', '9791010060'),
('50773', 'Dr. Nagaraj SV', 'nagaraj.sv@vit.ac.in', 'bontra00', 'Professor', '', 'canteen room 12', '9003192288'),
('50785', 'Dr. Sakkaravarthi R', 'sakkaravarthi.r@vit.ac.in', '2/,X0eCj', 'Associate Professor', '', '', '9600117487');

-- --------------------------------------------------------

--
-- Table structure for table `intern_review`
--

CREATE TABLE IF NOT EXISTS `intern_review` (
  `slno` bigint(10) NOT NULL AUTO_INCREMENT,
  `int_id` varchar(40) NOT NULL,
  `g_id` varchar(40) NOT NULL,
  `e_id` varchar(40) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` text NOT NULL,
  `week` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `postedby` varchar(40) NOT NULL,
  PRIMARY KEY (`slno`),
  KEY `int_id` (`int_id`),
  KEY `g_id` (`g_id`),
  KEY `e_id` (`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `intern_student`
--

CREATE TABLE IF NOT EXISTS `intern_student` (
  `int_id` varchar(40) NOT NULL,
  `int_name` varchar(40) DEFAULT NULL,
  `g_id` varchar(40) DEFAULT NULL,
  `int_pro` varchar(150) DEFAULT NULL,
  `int_domain` varchar(40) DEFAULT NULL,
  `e_id` varchar(40) DEFAULT NULL,
  `int_email` varchar(40) DEFAULT NULL,
  `int_mobile` varchar(40) DEFAULT NULL,
  `int_password` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `abstract` text NOT NULL,
  PRIMARY KEY (`int_id`),
  KEY `g_id` (`g_id`),
  KEY `e_id` (`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern_student`
--

INSERT INTO `intern_student` (`int_id`, `int_name`, `g_id`, `int_pro`, `int_domain`, `e_id`, `int_email`, `int_mobile`, `int_password`, `abstract`) VALUES
('14MCB1001', ' VISHAL B KOLK', '50410', 'Model Evaluation of Machine Learning Techniques', 'Machine Learning', '15VITI004', 'vishal.bkolki2014@vit.ac.in', '9952038121', 'indi@win', ''),
('14MCB1003', ' AMRUTE ROHAN GIRIS', '50605', 'Message Deciphering through Semantic Text Analytics', 'Text Analytics and Machine Learning', '15VITI011', '', '', '8!cYEZ23', ''),
('14MCB1005', ' REKHA J', '50186', 'Predicting the Purchase Behaviour ', 'Recommendation system', '15VITI005', 'rekha.jh2014@vit.ac.in', '9840117097', 'vmeet1234!', ''),
('14MCB1007', ' NARESH D', '50237', 'Big Data in Healthcare Analytics', 'Healthcare', '15VITI014', '', '', 'Mb9#2Yfs', ''),
('14MCB1008', 'ANUMALASETTY VENKATA SASIKANTH', '50605', 'DEVELOPING BIG DATA APPLICATION FOR PREDICTIVE ANALYTICS', 'BIG DATA ANALYTICS', '15VITI035', '', '', 'vitcc1008', ''),
('14MCB1009', ' ABIRAMI M', '50168', 'Exploring Spark MLib with Big data usecases', 'Big Data ', '15VITI061', 'abirami.m2014@vit.ac.in', '', 'abirami2812', ''),
('14MCB1010', ' J.DHARMIN SIDDESH', '50276', 'recommendation system in e commerce', 'data mining', '15VITI003', '', '', 'fBG7v@dZ', ''),
('14MCB1011', ' REGIN RAJA R', '50569', 'Data Analytics for Connected Lighting products', 'Data Analytics', '15VITI017', 'reginsekar@gmail.com', '8940483280', 'rajavmeetup', 'Philips is the most prominentcompany in the field of lighting, health care and consumer lifestyle. It has a wide array of products and related softwares. In order to meet the customer needs and fabricate better products Philips adopts data analytics. Big Data and Cloud technologies are being used extensively to build such platforms and solutions. \r\n	Various analytics are handled for different products which provide various insights to the company which can be used to deliver more ideal solutions. Social media listening, sales prediction, customer support data analytics, etc. are some of the practices that are being adopted.\r\n	My work will include analytics on facebook data and derive insights such as customer sentiment, grouping of simillar words, etc. and visualizing them.\r\n'),
('14MCB1012', 'A VAISHNAVI', '50168', 'LOSS FORECASTING MODEL USING OBJECT ORIENTING PROGRAMMING', 'RISK ANALYTICS', '15VITI036', 'vaishnavi.a2014@vit.ac.in', '', 'vitcc1012', ''),
('14MCB1013', ' SHARANYA BHATTACHARY', '50445', 'IRIS (SAP LABS Project)', 'Image Processing', '15VITI007', 'sharanya.bhatt2014@vit.ac.in', '8807369193', 'Sonamoni$21', ''),
('14MCB1014', ' ANKITA DHAWALE', '50160', 'Performance Data Modelling ', 'Data Analytics ', '15VITI015', '', '', 'F*!ZKb45', ''),
('14MCB1015', 'JAHNAB KUMAR DEKA', '50276', 'EXPLORATORY DATA ANALYSIS IN THE FIELD OF SOLAR PANEL MANUFACTURING', NULL, '15VITI038', '', '', 'vitcc1015', ''),
('14MCB1016', ' NIVETHA', '50168', 'big data in health care analytics handling age-relavance problem', 'big data in health care analytics handli', '15VITI014', '', '', 'Rxqa2E#P', ''),
('14MCB1017', ' IMRAN ALI KHAN P', '50178', 'Health Care Analytics Using Hadoop Framework', 'Healthcare', '15VITI014', '', '', '&57e2AVE', ''),
('14MCB1018', 'PAVANSIMHA REDDY', '50201', 'DEVELOPING AN APPLICATIN TO DO ANALYTICS ON TELECOM DATA', 'DATA ANALYTICS', '15VITI035', '', '', 'vitcc1018', ''),
('14MCB1019', 'ANSHU KAURA', '50392', 'DESIGN OF BUYER AND SELLER PROTECTION STANDARDS BASED ON TREND ANALYSIS', 'RISK ANALYTICS', '15VITI034', '', '', 'vitcc1019', ''),
('14MCB1020', ' SHIWANGI YADAV', '50388', 'Big Data in Healthcare Analytics', 'Healthcare ', '15VITI014', '', '', '+g8U-Aab', ''),
('14MCB1021', ' BOKIL NIKHIL SUNI', '50161', 'Mobile Application for Geo location Tracking', 'Big Data', '15VITI004', 'bokil.nikhilsunil2014@vit.ac.in', '+919962408493', 'bnikhil123', 'Knowing the geo-location of a person in realtime can be beneficial for various applications such as real-time tracking, mobility analysis, locational targeting, emergency response etc., focus of this application is to gather real time location details from individuals belonging to a specific group of Mobile consumers - Google Hangouts, Whatsapp or any other Closed User Group (CUG). Visualizing the mobility of various users helps in proximity analysis, collaboration and chance meetings. The geo location data is collected using a fusion technology, which will automatically select best location provided from On-Board GPS Chip and the Mobile network provided geo location to minimize the strain on the device battery. The data collected is stored using MongoDB, a document database which is known for high availability and performance, the NOSQL data base is highly scalable and is easy to be used among different mobile or desktop platforms.'),
('14MCB1022', 'R AVINASH', '50392', 'COMBINING SEMANTIC DATA STORES AND BIG DATA FOR PHARMACEUTICAL USE CASE', 'DATA ANALYSIS', '15VITI037', 'avinashkravichandran@yahoo.com', '9840994849', 'vitcc1022', 'The increased generation of data in the pharmaceutical R&D process has failed to generate the expected returns in terms of enhanced productivity and pipelines. The inability of existing integration strategies to organize and apply the available knowledge to the range of real scientific and business issues is impacting on not only productivity but also transparency of information in crucial safety and regulatory applications. The new range of semantic technologies based on ontologies enables the proper integration of knowledge in a way that is reusable by several applications across businesses, from discovery to corporate affairs. This paper supports the use of Semantic Web technologies across health care, life sciences, clinical research and translational medicine and will help to increase the accuracy of information mining, retrieve complex entities, combine structured and unstructured analytical queries and create comprehensive queries.'),
('14MCB1024', ' KODALI SRIMALYA', '50393', 'Predictive analytics for motor and crane maintenance in Stee', 'Big Data Analytics', '15VITI022', '', '', '=Pq$e5K$', ''),
('14MCB1029', ' MALLINA SURYA TEJASWINI', '50410', 'Developing Evaluators for E-Commerce Products', 'Big Data Analytics', '15VITI004', '', '', 'c#*83S_+', ''),
('14MCB1030', ' HARINI SHANKA', '50178', 'To focus on changing human behaviour to drive them to lead a', 'Big Data ', '15VITI006', '', '', 'p6t&K?AG', ''),
('14MCB1031', ' PATIL AKSHAY ANANT', '50276', 'Storage Performance Modeling for different workloads.', 'Data Storage and Performance Analysis', '15VITI016', '', '', '!Q^*Au6!', ''),
('14MCB1032', 'Bikram Kumar Jangra', '50390', 'analaysising the knowledge from the past data', 'big data', '15VITI055', '', '', 'vitcc1032', ''),
('14MCB1033', 'Pravin Shahare', '50392', 'Knowledge discovery in criminal data', 'Big Data', '15VITI055', '', '', 'vitcc1033', ''),
('14MCB1034', 'CHINTA MANOJNA', '50319', 'LEGAL DOCUMENT ANALYSES', 'BIG DATA', '15VITI050', '', '', 'vitcc1034', ''),
('14MCB1035', ' ANIRUDH SAINATH DORNADULA', '50401', 'Cloud Computing', 'Cloud Computing', '15VITI019', '', '', '_SswM5hP', ''),
('14MCB1036', ' KANDGE RUCHA VIVE', '50392', 'Machine learning use cases in real world.', 'Machine learning', '15VITI004', '', '', 'LU7nJ4%q', ''),
('14MCB1037', ' KUSH TEHLAN', '50178', 'Enhancements to Inventory Collection Tool', 'Data Management', '15VITI025', '', '', 'Mother#84', ''),
('14MCB1038', ' SUJITH KUMAR GURRAM', '50319', 'Puper Power Integrated manager', 'Cloud Automation', '15VITI013', '', '', '6n-S-cJk', ''),
('14MCB1039', 'VINAY GAJULA', '50390', 'E COPUAN RECOMENDATION SYSTEM', 'BIG DATA', '15VITI053', '', '', 'vitcc1039', ''),
('14MCB1040', 'PRANAVI LINGAMALLU', '50389', '', 'DATA SCIENCE', '15VITI058', '', '', 'vitcc1040', ''),
('14MCB1041', ' BHEEMINETI SHOBHANA', '50403', 'Building Spatial Reccomendation Systems with Graphs', 'Data Analytics', '15VITI004', '', '', '_367eRSV', ''),
('14MCB1042', ' CHAVALI LAKSHMI SUBRAHMANYAM', '50319', 'Joint Learning User''s Activities and Profiles from GPS Data', 'Bigdata Analytics', '15VITI022', '', '', '9?SxLcV5', ''),
('14MCB1043', ' AMOL BHAUSAHEB WALE', '50160', 'Cluster provisioning in hadoop for big Data analysis', 'Big Data Analytic ', '15VITI008', '', '', 'Sh#9BNHU', ''),
('14MCB1045', ' ADITI SIT', '50392', 'Sampling Automated Management System', 'Software Engineering', '15VITI012', '', '', 'Cf?4s6rF', ''),
('14MCB1046', ' BHAJIPALE MONIKA MANIKRAO', '50392', 'Consumer Risk Modeling & Fraud Detection using Social Media', 'Big Data Analytics', '15VITI004', '', '', '7FnzG!vY', ''),
('14mcb1047', 'Ajit Pandharinath Sonawane', '50238', 'Operational analytics', 'Big data analytics', '15VITI037', '', '', 'vitcc1047', ''),
('14mcb1048', 'Rahul .k', '50388', 'Real Time Data Monitoring System', 'Big Data Analysis', '15VITI036', '', '', 'vitcc1048', ''),
('14MCB1049', ' MUDAVADKAR PRASAD VIJAY', '50319', ' Company Profiling through Market Sentiment Analytics', ' Sentiment Analysis and Machine Learning', '15VITI023', '', '', 'z7^ghYQN', ''),
('14MCB1050', ' BIBEK KUMAR PATRO', '50577', 'DIGITAL SERVICES INSIGHTS', 'BIG DATA AND OPERATIONAL INTELLIGENCE IN', '15VITI029', '', '', '3&5gk?Z#', ''),
('14MCB1051', ' AAKASH KAG', '50352', 'Building Real-time Analytics with Stream Processing', 'Analytics', '15VITI004', 'aakash.kag2014@vit.ac.in', '9700284462', 'hL53Y@=2', 'Webpage classification'),
('14mcb1052', 'naveen kumar reddy m', '50201', 'unsupervised text summarization', 'bigdata,machine learning', '15VITI062', '', '', 'vitcc1052', ''),
('14mcb1054', 'Jayanth kumar s', '50390', 'Knowledge discovery from data', 'Big data analysis', '15VITI055', '', '', 'vitcc1054', ''),
('14mcb1055', 'kompalli sruthi', '50410', 'not yet assigned', 'not yet assigned', '15VITI064', '', '', 'vitcc1055', ''),
('14mcb1056', 'vinod kumar reddy raavula', '50390', 'not yet assigned', 'not yet assigned', '15VITI064', '', '', 'vitcc1056', ''),
('14MCB1057', ' WAGH TEJAS ANANT', '50577', 'Statistical Machine Learning: A performance Study', 'Machine Learning-Big data', '15VITI004', '', '', '$9Xv8dPt', ''),
('14MCB1058', ' BHARAT BHUSHAN SINGH', '50036', 'intelligent accident prediction model', 'big data analytics + IOT', '15VITI022', '', '', 'cw*9b$Kk', ''),
('14MCC1001', ' KANDURI VAISHNAV', '50201', 'Auto visualization: A versatile programming paradigm', 'Big data analytics', '15VITI004', '', '', '-3nUUn2?', ''),
('14MCC1004', 'ASMITHA', '50307', '', '', '15VITI031', '', '', 'vitcc1004', ''),
('14MCC1006', ' D B S V S SAI SANKAR', '50314', 'Oracle Cloud Appliclations(Fusion HCM) Automation', 'ERP', '15VITI028', '', '', 'g+9NM9aR', ''),
('14MCC1007', 'ANUBHAV DWIVEDI', '50569', 'EMPLOYEE TRACKING SYSTEM ON ANDROID PLATFORM', 'ANDROID', '15VITI052', '', '', 'vitcc1007', ''),
('14MCC1008', ' SRAMANA SENGUPT', '50386', 'Implementation of Continuous Integration; Testing and Deploy', 'Process Automation- DevOps', '15VITI009', '', '', 'yd*^7TU_', ''),
('14MCC1009', 'G Laxmi narayana', '50239', 'Asset Management cloud', 'cloud', '15VITI031', 'gunnam239@gmail.com', '9493276234', 'vitcc1009', ''),
('14MCC1010', 'MOHAMMAD RAYYAN', '50276', 'Whistle blower in cloud', 'Cloud Computing', '15VITI031', '', '', 'vitcc1010', ''),
('14MCC1016', 'K PURNA SAINADH', '50314', 'CIRROLOGIX RECRUTING APPLICATION IN SALESFORCE', 'cloud computing', '15VITI039', '', '', 'vitcc1016', ''),
('14MCC1018', ' INDU PRASA', '50024', 'Development of a management application using Salesforce Pla', 'Cloud Computing', '15VITI002', '', '', '^xVs$N3w', ''),
('14MCC1028', ' SETHI GAURAV VINO', '50307', 'NIC Driver testing on Virtualization platform ', 'Cloud Testing', '15VITI008', '', '', 'bY!9Ms?!', ''),
('14MCC1029', 'B Surendra Kumar', '50159', 'Trade Line Algorithm', 'cloud computing', '15VITI059', '', '', 'vitcc1029', ''),
('14MCC1030', ' CHOUDHARY SOURABH SATTYENDRA', '50304', 'Devlopement of Cloud Application', 'Cloud Computing', '15VITI001', 'mandar.choudhary@gmail.com', '9420036237', '7Md8f!Vn', ''),
('14mcc1031', 'karthik', '50159', 'saasifying storage', 'cloud computing', '15VITI056', 'ck.karthik2014@vit.ac.in', '8122950339', 'vitcc1031', ''),
('14MCS1003', 'BHAVSAR SONAL RAJENDRA', '50319', 'DEVELOPMENT OF GUIDED, ANALYTICAL WORKBENCH USING BIG DATA', 'BIG DATA ANALYTICS', '15VITI032', '', '', 'vitcc1003', ''),
('14MCS1006', ' NARDEKAR SHASHANK SHEKHAR SHRADHA', '50587', 'Developing a Data Science Platform: An Integration Approach', 'Data Science', '15VITI004', '', '', '8t?JuYdu', ''),
('14MCS1007', 'Ganesan K', '50412', 'Risk analysis in cloud', 'cloud computing', '15VITI031', '', '', 'vitcc1007', ''),
('14MCS1017', ' ANITA SUSAN JOHN', '50189', 'Civil design software', '.net', '15VITI024', 'anita.susanjohn2014@vit.ac.in', '', 'anitasusanjohnaug2', ''),
('14MCS1019', ' PARTH SUGANDHI', '50307', 'Service orchestration across diverse cloud platforms', 'cloud', '15VITI029', '', '', 'vitcc1019', ''),
('14MCS1021', ' HIRUDKAR KEWAL BHASKAR', '50304', 'java', 'java', '15VITI027', '', '', 'GD@*2+ve', ''),
('14mcs1022', 'Danish Ahmad', '50322', 'Ecotrak', 'Ecotrak', '15VITI054', '', '', 'vitcc1022', ''),
('14MCS1025', ' SAYLI RAMAKANT KOMAWAR', '50094', 'Improvising DEV productivity via automation of build generat', 'Cloud Storage', '15VITI020', '', '', 'komawar123', ''),
('14MCS1027', 'REVATHY S', '50159', 'Generic graph plot interface for test vector generation.', 'Network', '15VITI057', '', '', 'vitcc1027', ''),
('14MCS1032', ' PATIL SHWETA MAHADEO', '50378', 'Customer Relationship Management for particular products', 'web service', '15VITI030', '', '', 'XBt8_Rsk', ''),
('14MCS1034', 'PRASHIK NANDESHWAR', '50590', 'AXPERT ON CLOUD', 'CLOUD', '15VITI040', '', '', 'vitcc1034', ''),
('14MCS1036', 'Pushpinder Singh', '50389', 'backend job monitoring system', 'Risk and compliance', '15VIT1065', '', '', 'vitcc1036', ''),
('14MCS1037', 'NAYAN PANJAB TAYADE', '50189', 'ANALYTICS DASHBOARD FOR GOVERNANCE DEPARTMENT', 'BIG DATA', '15VITI031', '', '', 'vitcc1037', ''),
('14MCS1038', ' SUCHITA SINGH', '50237', 'Scripting framework for nLAB tool used in automation testing', 'Storage fundamentals; Java; Perl; MySQL.', '15VITI021', 'singh.suchita06@gmail.com', '9962416437', 'suchi@123', ''),
('14MCS1039', ' P KIRAN KUMAR PRUST', '50237', 'Performance Benchmarking for SOC features', 'Testing', '15VITI008', '', '', 'GH$#7jRm', ''),
('14MCS1040', ' BINSU MATHEW', '50024', 'Click Stream Technology for an Insurance Company ', 'Digital Analytics on Big Data Platform', '15VITI026', 'binsu.mathew2014@vit.ac.in', '09995205220', '9Bbyd$YH', ''),
('14MCS1045', 'Payal Chandra', '50438', 'Text Analysis for social media', 'NLP', '15VITI060', '', '', 'vitcc1045', ''),
('14MCS1046', ' ASHWIN CHANDRASEKAR', '50442', 'Developing  a Data Science platform: An Integration approach', 'Data Science', '15VITI004', '', '', 'Z87TL$s6', ''),
('14MCS1048', 'Tushar Shinde', '50297', 'Controls Management in Cloud', 'cloud computing', '15VITI031', '', '', 'vitcc1048', ''),
('14MCS1049', 'SUNIL MANDIWAL', '50569', 'THIRD PARTY AUDITING AND ANALYTICS IN CLOUD WITH GRC', 'CLOUD COMPUTING', '15VITI031', '', '', 'vitcc1049', ''),
('14MCS1050', 'ANKIT JAIN', '50569', 'BILDWELL-CONSTRUCTION WORLD WIDE', 'BIG DATA', '15VITI051', '', '', 'vitcc1050', '');

-- --------------------------------------------------------

--
-- Table structure for table `mainreview1`
--

CREATE TABLE IF NOT EXISTS `mainreview1` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(40) NOT NULL,
  `s_id` varchar(40) NOT NULL,
  `g_id` varchar(40) NOT NULL,
  `g_name` varchar(40) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `q1` int(1) NOT NULL,
  `q2` int(1) NOT NULL,
  `q3` int(1) NOT NULL,
  `q4` int(1) NOT NULL,
  `q5` int(1) NOT NULL,
  `valid` varchar(3) NOT NULL,
  `comment` text NOT NULL,
  `stype` varchar(40) NOT NULL,
  `pstatus` varchar(10) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `mainreview1`
--

INSERT INTO `mainreview1` (`slno`, `s_name`, `s_id`, `g_id`, `g_name`, `time`, `q1`, `q2`, `q3`, `q4`, `q5`, `valid`, `comment`, `stype`, `pstatus`) VALUES
(4, ' REKHA J', '14MCB1005', '50410', 'Dr. Sandhya P', '2015-10-05 05:23:15', 3, 3, 3, 3, 4, 'Yes', 'Tool evaluation\r\nGeneralization of parser\r\n', 'intern', 'Posted'),
(5, ' VISHAL B KOLK', '14MCB1001', '50410', 'Dr. Sandhya P', '2015-10-05 05:43:39', 2, 2, 2, 2, 2, 'Yes', 'More literature study on performance metrics and on the algorithms', 'intern', 'Posted'),
(6, ' SHARANYA BHATTACHARY', '14MCB1013', '50168', 'Dr. Pattabiraman V', '2015-10-05 05:51:33', 3, 3, 3, 2, 3, 'Yes', 'The title need to be update as shown in PPT and feel that maximum time spent for training and learning it is good, however there is need for improvement, the amount of the work done so for not sufficient. ', 'intern', 'Posted'),
(7, ' PARTH SUGANDHI', '14MCS1019', '50307', 'Prof. Priyaadharshini M', '2015-10-05 05:59:06', 4, 3, 4, 3, 4, 'Yes', 'checked the ppt', 'intern', 'Posted'),
(8, ' ABIRAMI M', '14MCB1009', '50410', 'Dr. Sandhya P', '2015-10-05 06:04:03', 3, 2, 2, 3, 4, 'Yes', 'Do more analysis', 'intern', 'Posted'),
(9, ' ANKITA DHAWALE', '14MCB1014', '50168', 'Dr. Pattabiraman V', '2015-10-05 06:08:07', 4, 3, 3, 2, 4, 'Yes', 'The objective of the work is to design the optimized tool. But felt that initially need to have some simulation kind of things to show the optimization.', 'intern', 'Posted'),
(10, ' KANDURI VAISHNAV', '14MCC1001', '50370', 'Prof. Rajesh Kumar', '2015-10-05 06:17:10', 2, 3, 2, 2, 3, 'Yes', 'Need clarity for the modules such as flask used in project . More improvement is required for progress of project', 'intern', 'Posted'),
(11, ' NARESH D', '14MCB1007', '50410', 'Dr. Sandhya P', '2015-10-05 07:04:56', 3, 2, 2, 2, 3, 'Yes', 'Better understanding of the problem required. More knowledge of the data that is used in the project is needed', 'intern', 'Posted'),
(12, 'ASMITHA', '14MCC1004', '50307', 'Prof. Priyaadharshini M', '2015-10-05 07:30:07', 3, 3, 3, 3, 3, 'Yes', 'approved', 'intern', 'Posted'),
(13, ' AMRUTE ROHAN GIRIS', '14MCB1003', '50410', 'Dr. Sandhya P', '2015-10-05 07:58:20', 4, 4, 4, 4, 4, 'Yes', 'Good work', 'intern', 'Posted'),
(14, ' REGIN RAJA R', '14MCB1011', '50410', 'Dr. Sandhya P', '2015-10-05 07:59:33', 4, 4, 4, 4, 4, 'Yes', 'Good work', 'intern', 'Posted'),
(15, ' ANUMALASETTY VENKATA SASIKANTH', '14MCB1008', '50410', 'Dr. Sandhya P', '2015-10-05 08:06:14', 2, 2, 2, 2, 2, 'Yes', 'has assigned work for 20 days only', 'inhouse', 'Posted'),
(16, ' ARUN SURESH D', '14MCB1006', '50410', 'Dr. Sandhya P', '2015-10-05 08:07:16', 2, 2, 2, 2, 2, 'Yes', 'Assigned work only 5 days back', 'inhouse', 'Posted'),
(17, ' J.DHARMIN SIDDESH', '14MCB1010', '50410', 'Dr. Sandhya P', '2015-10-05 08:50:19', 3, 2, 2, 2, 2, 'Yes', 'Need more study of collaborative filtering algorithms', 'intern', 'Posted'),
(18, ' ANITA SUSAN JOHN', '14MCS1017', '50587', 'Dr. Geetha S', '2015-10-05 09:59:02', 2, 2, 2, 2, 3, 'Yes', '1. DFD incorrect\r\n2. Slides to be corrected by the Guide before presentation\r\n3. Web Security component to be introduced\r\n', 'intern', 'Posted'),
(19, 'BHAVSAR SONAL RAJENDRA', '14MCS1003', '50587', 'Dr. Geetha S', '2015-10-05 10:00:49', 3, 3, 2, 2, 3, 'Yes', '1. How big is big data?\r\n2. Words - democratizing, \r\n3. Refine the problem statement\r\n4. Features - lot of lucid statements, superficial claims\r\n5. Only 3 ML algorithms - NB, DT, K-Means - Not enough\r\n6. Gannt Chart\r\n7. References - improper\r\n8. More additional algorithms\r\n', 'intern', 'Posted'),
(20, 'Ganesan K', '14MCS1007', '50587', 'Dr. Geetha S', '2015-10-05 10:02:55', 1, 1, 1, 1, 2, 'No', '1. No problem statement - only problem scenario\r\n2. Not even started anything - Only under training\r\n3. Looks like involved only Cloud Deployment\r\n4. Lack of structure of project\r\n5. No clarity at all about what they are doing\r\n6. Very general timeline\r\n7. Quantum of work, objective of work - no idea at all\r\n8. Student has not done required homework\r\n', 'intern', 'Posted'),
(21, ' HIRUDKAR KEWAL BHASKAR', '14MCS1021', '50587', 'Dr. Geetha S', '2015-10-05 10:05:44', 2, 2, 1, 2, 2, 'Yes', '1. Time line - Over estimation\r\n2. Elementary for M.Tech project\r\n3. No references\r\n4. Committed module - Java web application, Android app.\r\n5. Extend the project - identify additional modules\r\n', 'intern', 'Posted'),
(22, ' NARDEKAR SHASHANK SHEKHAR SHRADHA', '14MCS1006', '50587', 'Dr. Geetha S', '2015-10-05 10:07:20', 3, 3, 2, 2, 3, 'Yes', '..', 'intern', 'Posted'),
(23, 'Tushar Shinde', '14MCS1048', '50412', 'Dr. Vijayakumar V', '2015-10-05 10:08:57', 1, 1, 1, 1, 1, 'Yes', 'More clarity on the project responsibilities are missing.', 'intern', 'Posted'),
(24, 'PAVANSIMHA REDDY', '14MCB1018', '50168', 'Dr. Pattabiraman V', '2015-10-05 10:40:38', 2, 2, 2, 2, 2, 'Yes', 'He joined very late and also so for he has not done good amount of work, Not clear with the objective of the work, Asked him to meet the respective internal guide within 10days and update the status of the project', 'intern', 'Posted'),
(25, 'JAHNAB KUMAR DEKA', '14MCB1015', '50168', 'Dr. Pattabiraman V', '2015-10-05 10:42:44', 2, 2, 2, 2, 2, 'Yes', 'The work done so for is not upto the mark, informed to the respective guide as well as informed to the students to meet the guide within 15days and update the project status.', 'intern', 'Posted'),
(26, 'ANSHU KAURA', '14MCB1019', '50168', 'Dr. Pattabiraman V', '2015-10-05 10:45:25', 3, 3, 3, 2, 3, 'Yes', 'Goal of theoretical concern is ok. But the technical goal is not clear and need to identify the algo and policy guideline etc., Technical concepts is not clear ', 'intern', 'Posted'),
(27, ' SHIWANGI YADAV', '14MCB1020', '50168', 'Dr. Pattabiraman V', '2015-10-05 10:47:52', 2, 2, 2, 2, 3, 'Yes', 'Title need to changed according to the objective of the work. Also need to decide the algorithm/technique which required to identify the predictions', 'intern', 'Posted'),
(28, ' NIVETHA', '14MCB1016', '50168', 'Dr. Pattabiraman V', '2015-10-05 10:50:27', 3, 2, 2, 2, 3, 'Yes', 'The objective is prediction of medical records of age related problems using machine learning techniques. But not yet identified the algorithm/techniques. Also need to change the title to the problem specific ', 'intern', 'Posted'),
(29, ' IMRAN ALI KHAN P', '14MCB1017', '50168', 'Dr. Pattabiraman V', '2015-10-05 10:53:25', 2, 2, 2, 2, 2, 'Yes', 'All C-DAC projects are looks like similar. They are going to use same data mart only the algo/techniques are differ according to the prediction. But not yet decide what algo/technique. Also need to change the title according to the problem', 'intern', 'Posted'),
(30, 'A VAISHNAVI', '14MCB1012', '50168', 'Dr. Pattabiraman V', '2015-10-05 10:58:35', 3, 3, 3, 2, 3, 'Yes', 'Identification of machine learning techniques / algo is essential for the prediction purpose.', 'intern', 'Posted'),
(31, ' TURLAPATI SAINATH', '14MCC1011', '50370', 'Prof. Rajesh Kumar', '2015-10-05 12:06:54', 2, 2, 2, 2, 3, 'No', 'Problem statement needs clarity. Review after one week to know if student need to do separate project at VIT.', 'inhouse', 'Posted'),
(32, ' D B S V S SAI SANKAR', '14MCC1006', '50370', 'Prof. Rajesh Kumar', '2015-10-05 12:11:27', 3, 2, 2, 2, 3, 'Yes', 'Need to find architecture and design of test automation. Student is working on script at this time. Close and more frequent review is suggested.', 'intern', 'Posted'),
(33, ' GUNNAM LAXMI NARAYANA', '14MCC1009', '50370', 'Prof. Rajesh Kumar', '2015-10-05 12:15:18', 2, 1, 0, 1, 2, 'No', 'Project problem is not clear. Student has joined the internship 10 days back. Please review in 2 weeks or suggest separate M.tech project for student at VIT for M.Tech.', 'inhouse', 'Posted'),
(34, ' UTHRA K', '14MCC1005', '50370', 'Prof. Rajesh Kumar', '2015-10-05 12:18:57', 2, 1, 1, 0, 2, 'No', 'No clear statement for the project. Student has joined the internship 10 days back. Please review in 2 weeks or suggest separate M.tech project for student at VIT for M.Tech.', 'inhouse', 'Posted'),
(35, ' MOHAMMAD RAYYAN', '14MCC1010', '50370', 'Prof. Rajesh Kumar', '2015-10-05 12:24:00', 2, 1, 1, 1, 2, 'No', 'Problem statement is not clear. Advised to review in 15 days about clarity of problem statement or take alternate M.tech project at VIT.', 'inhouse', 'Posted'),
(38, ' AMOL BHAUSAHEB WALE', '14MCB1043', '50168', 'Dr. Pattabiraman V', '2015-10-06 05:05:43', 4, 4, 3, 4, 4, 'Yes', 'Need to change the title according to the objective, like optimization of hadoop cluster. Also the time invested and the work done so for is not proportionate.    ', 'intern', 'Posted'),
(39, ' CHAVALI LAKSHMI SUBRAHMANYAM', '14MCB1042', '50168', 'Dr. Pattabiraman V', '2015-10-06 05:21:03', 3, 4, 3, 2, 3, 'Yes', 'the amount of the work done so for is not sufficient', 'intern', 'Posted'),
(40, ' ADITI SIT', '14MCB1045', '50168', 'Dr. Pattabiraman V', '2015-10-06 06:55:05', 4, 4, 3, 2, 3, 'Yes', 'with sample dataset need to explain the work also the amount of work done so for not sufficient ', 'intern', 'Posted'),
(41, ' BHAJIPALE MONIKA MANIKRAO', '14MCB1046', '50168', 'Dr. Pattabiraman V', '2015-10-06 07:00:52', 4, 4, 3, 2, 3, 'Yes', 'Not yet decided the technique/algo. the amount of work done so for is not sufficient.', 'intern', 'Posted'),
(42, 'Ajit Pandharinath Sonawane', '14mcb1047', '50168', 'Dr. Pattabiraman V', '2015-10-06 07:06:07', 3, 3, 2, 2, 2, 'Yes', 'The objective and outcome is not clear also need to explain the elastic search in detail how it useful to achieve the goal.', 'intern', 'Posted'),
(43, 'Rahul .k', '14mcb1048', '50168', 'Dr. Pattabiraman V', '2015-10-06 07:12:58', 3, 3, 2, 2, 2, 'Yes', 'The work done so for not enough, the technique/ML algo is not yet decided ', 'intern', 'Posted'),
(44, 'Bikram Kumar Jangra', '14MCB1032', '50410', 'Dr. Sandhya P', '2015-10-06 07:19:39', 2, 2, 2, 2, 2, 'Yes', 'More ground work needs to be done.', 'intern', 'Posted'),
(45, ' ANIRUDH SAINATH DORNADULA', '14MCB1035', '50410', 'Dr. Sandhya P', '2015-10-06 07:34:01', 4, 3, 3, 3, 4, 'Yes', 'More groundwork is required', 'intern', 'Posted'),
(46, ' KUSH TEHLAN', '14MCB1037', '50410', 'Dr. Sandhya P', '2015-10-06 07:36:21', 4, 3, 3, 3, 3, 'Yes', 'Some more features can be added', 'intern', 'Posted'),
(47, ' SUJITH KUMAR GURRAM', '14MCB1038', '50410', 'Dr. Sandhya P', '2015-10-06 07:38:48', 4, 3, 3, 4, 3, 'Yes', 'good work', 'intern', 'Posted'),
(48, ' KANDGE RUCHA VIVE', '14MCB1036', '50410', 'Dr. Sandhya P', '2015-10-06 07:40:22', 4, 3, 3, 2, 4, 'Yes', 'good work', 'intern', 'Posted'),
(49, 'Pravin Shahare', '14MCB1033', '50410', 'Dr. Sandhya P', '2015-10-06 10:15:13', 4, 3, 3, 3, 2, 'Yes', 'Requires more ground work', 'intern', 'Posted'),
(50, ' PATIL SHWETA MAHADEO', '14MCS1032', '50587', 'Dr. Geetha S', '2015-10-06 10:29:46', 2, 2, 2, 2, 2, 'Yes', '1. Software and Database speciication - not given\r\n2. Timeline is very genneric - Give a project specfic timeline\r\n3. Looks more like an application project - Add more components to make it 20 credits worth/complex - Discuss with guide\r\n4. Enhance the scope of the project - Meet up the M.Tech Quality\r\n', 'intern', 'Posted'),
(51, 'PRASHIK NANDESHWAR', '14MCS1034', '50587', 'Dr. Geetha S', '2015-10-06 10:33:52', 3, 3, 3, 3, 3, 'Yes', '1. Include References', 'intern', 'Posted'),
(52, 'REVATHY S', '14MCS1027', '50587', 'Dr. Geetha S', '2015-10-06 10:37:24', 2, 2, 3, 2, 2, 'Yes', '1. Rephrase problem statement - As of now, it is very vague\r\n2. Time line - To be included\r\n3. Include references', 'intern', 'Posted'),
(53, ' SAYLI RAMAKANT KOMAWAR', '14MCS1025', '50587', 'Dr. Geetha S', '2015-10-06 10:40:58', 4, 3, 3, 3, 4, 'Yes', '1. Proposed method and modules are not yet schemed\r\n2. Finalise the project scope/timeline after discussion with internal and external guides.\r\n3. The project interns in upto July 2016....Check with the Timeline of the project\r\n4. Currently, the project title is "Oncommand Snaps" Please check with the already registered title.', 'intern', 'Posted'),
(54, ' KAMBHAMPATI JYOTHI', '14MCS1030', '50587', 'Dr. Geetha S', '2015-10-06 10:46:16', 1, 1, 1, 1, 1, 'No', 'A thorough revision/restructuring of the project is needed\r\n\r\n1. Redo the Problem Statement\r\n2. Change the Title - As of now, it is too vague\r\n3. Redo timeline -  Too many mistakes with years and estimates\r\n4. Validate and include standard references (IEEE, ACM etc)\r\n5. GA, VANET -- More reading is needed; Elementary knowledge in these areas are missing.\r\n\r\n6. Currently, the project title is "Clustering in VANET using GA".  Please check with the already registered title.\r\n\r\n\r\nLot of improvements to be shown in the work. On meeting all these suggestion, the project may be approved', 'inhouse', 'Posted'),
(55, ' SILPA KAMBAM', '14MCS1033', '50587', 'Dr. Geetha S', '2015-10-06 10:50:25', 1, 1, 1, 1, 1, 'No', 'A thorough revision/restructuring of the project is needed\r\n\r\n1. Redo the Problem Statement\r\n2. Change the Title - As of now, it is too vague\r\n3. Redo timeline -  Too many mistakes with years and estimates\r\n4. Validate and include standard references (IEEE, ACM etc)\r\n5. Change the title - Make it more specific\r\n6. Mention the software tools and domain of application\r\n7. Establish a clear objective for the project - Right now, its too vague.\r\n\r\nCurrently the title shown is "Evaluation of Ontology Matching System" - Check with the registered Title.\r\n\r\nLot of improvements to be shown in the work. On meeting all these suggestion, the project may be approved\r\n', 'inhouse', 'Posted'),
(56, 'SUNIL MANDIWAL', '14MCS1049', '50587', 'Dr. Geetha S', '2015-10-06 10:54:00', 3, 3, 3, 2, 3, 'Yes', '1. Check for the uniqueness of the project among the Interns in FixNix. (Some topics are overlapping)\r\n2. Clarify the scope of the project\r\n3. More details on the proposed method/technique to be adapted\r\n4. Yet to start - Only Training phase (Ruby on Rails)', 'intern', 'Posted');

-- --------------------------------------------------------

--
-- Table structure for table `mainreview1statusinhouse`
--

CREATE TABLE IF NOT EXISTS `mainreview1statusinhouse` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `in_id` varchar(40) DEFAULT NULL,
  `status` varchar(40) NOT NULL,
  `g_id` varchar(40) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `mainreview1statusinhouse`
--

INSERT INTO `mainreview1statusinhouse` (`slno`, `in_id`, `status`, `g_id`) VALUES
(17, '14MCB1015', 'Eligible', '50276'),
(18, '14MCC1010', 'Eligible', '50276'),
(19, '14MCC1011', 'Eligible', '50417'),
(20, '14MCC1002', 'Eligible', '50408'),
(21, '14MCC1024', 'Eligible', '50258'),
(22, '14MCC1005', 'Eligible', '50384'),
(23, '14MCS1047', 'Eligible', '50299'),
(24, '14MCC1005', 'Eligible', '50384'),
(25, '14MCC1021', 'Eligible', '50304'),
(26, '14MCS1028', 'Eligible', '50384'),
(27, '14MCC1022', 'Eligible', '50304'),
(28, '14MCC1005', 'Eligible', '50384'),
(29, '14MCS1043', 'Eligible', '50398'),
(30, '14mcc1020', 'Eligible', '50318');

-- --------------------------------------------------------

--
-- Table structure for table `mainreview1statusintern`
--

CREATE TABLE IF NOT EXISTS `mainreview1statusintern` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `int_id` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `g_id` varchar(40) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `mainreview1statusintern`
--

INSERT INTO `mainreview1statusintern` (`slno`, `int_id`, `status`, `g_id`) VALUES
(7, '14MCC1001', 'Eligible', '50201'),
(8, '14MCC1018', 'Eligible', '50024'),
(9, '14MCS1040', 'Eligible', '50024'),
(10, '14MCS1046', 'Eligible', '50442'),
(11, '14MCS1046', 'Eligible', '50442'),
(12, '14MCB1017', 'Eligible', '50178'),
(13, '14MCB1030', 'Eligible', '50178'),
(14, '14MCB1014', 'Eligible', '50160'),
(15, '14MCB1043', 'Eligible', '50160'),
(16, '14MCB1010', 'Eligible', '50276'),
(17, '14MCC1004', 'Eligible', '50307'),
(18, '14MCC1028', 'Eligible', '50307'),
(19, '14MCS1019', 'Eligible', '50307'),
(20, '14MCB1001', 'Eligible', '50410'),
(21, '14MCB1029', 'Eligible', '50410'),
(22, '14MCB1009', 'Eligible', '50168'),
(23, '14MCB1012', 'Eligible', '50168'),
(24, '14MCB1016', 'Eligible', '50168'),
(25, '14MCB1007', 'Eligible', '50237'),
(26, '14MCB1037', 'Eligible', '50178'),
(27, '14MCS1007', 'Eligible', '50412'),
(28, '14MCS1021', 'Eligible', '50304'),
(29, '14MCC1030', 'Eligible', '50304'),
(30, '14MCB1043', 'Eligible', '50160'),
(31, '14MCB1041', 'Eligible', '50403'),
(32, '14MCB1021', 'Eligible', '50161'),
(33, '14MCB1031', 'Eligible', '50276'),
(34, '14MCB1015', 'Eligible', '50276'),
(35, '14MCB1019', 'Eligible', '50392'),
(36, '14MCC1018', 'Eligible', '50024'),
(37, '14MCS1040', 'Eligible', '50024'),
(38, '14MCS1048', 'Eligible', '50297'),
(39, '14MCS1027', 'Eligible', '50159'),
(40, '14mcc1031', 'Eligible', '50159'),
(41, '14MCC1010', 'Eligible', '50276');

-- --------------------------------------------------------

--
-- Table structure for table `password_recovery`
--

CREATE TABLE IF NOT EXISTS `password_recovery` (
  `slno` bigint(40) NOT NULL AUTO_INCREMENT,
  `type` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `password_recovery`
--

INSERT INTO `password_recovery` (`slno`, `type`, `email`, `time`) VALUES
(1, 'internal_guide', 'umamaheswari.e@vit.ac.in', '2015-10-01 09:55:34'),
(2, 'internal_guide', 'syedibrahim.sp@vit.ac.in', '2015-10-01 09:58:49'),
(3, 'internal_guide', 'rajesh.kumar@vit.ac.in', '2015-10-01 10:21:14'),
(4, 'intern_student', 'bokil.nikhilsunil2014@vit.ac.in', '2015-10-05 02:59:37'),
(5, 'inhouse_student', 'arun.sureshd2014@vit.ac.in', '2015-10-05 03:01:49'),
(6, 'intern_student', 'sethi.gauravvinod2014@vit.ac.in', '2015-10-05 03:11:09'),
(7, 'inhouse_student', 'suman.deyashi2014@gmail.com', '2015-10-05 06:36:54'),
(8, 'inhouse_student', 'suman.deyashi2014@vit.ac.in', '2015-10-05 06:37:09'),
(9, 'inhouse_student', 'suman.deyashi2014@vit.ac.in', '2015-10-05 06:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `content` mediumblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vit_officials`
--

CREATE TABLE IF NOT EXISTS `vit_officials` (
  `off_id` varchar(40) NOT NULL,
  `off_name` varchar(40) NOT NULL,
  `off_designation` varchar(40) NOT NULL,
  `off_password` varchar(40) NOT NULL,
  `off_username` varchar(40) NOT NULL,
  PRIMARY KEY (`off_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vit_officials`
--

INSERT INTO `vit_officials` (`off_id`, `off_name`, `off_designation`, `off_password`, `off_username`) VALUES
('Project Coordinator', 'Project Coordinator', 'Project Coordinator', '123456789', 'Project Coordinator');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`in_id`) REFERENCES `inhouse_student` (`in_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`g_id`) REFERENCES `internal_guide` (`g_id`);

--
-- Constraints for table `common_status`
--
ALTER TABLE `common_status`
  ADD CONSTRAINT `common_status_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `internal_guide` (`g_id`),
  ADD CONSTRAINT `common_status_ibfk_2` FOREIGN KEY (`e_id`) REFERENCES `external_guide` (`e_id`),
  ADD CONSTRAINT `common_status_ibfk_3` FOREIGN KEY (`off_id`) REFERENCES `vit_officials` (`off_id`);

--
-- Constraints for table `inhouse_review`
--
ALTER TABLE `inhouse_review`
  ADD CONSTRAINT `inhouse_review_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `internal_guide` (`g_id`),
  ADD CONSTRAINT `inhouse_review_ibfk_2` FOREIGN KEY (`in_id`) REFERENCES `inhouse_student` (`in_id`);

--
-- Constraints for table `inhouse_student`
--
ALTER TABLE `inhouse_student`
  ADD CONSTRAINT `inhouse_student_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `internal_guide` (`g_id`);

--
-- Constraints for table `intern_review`
--
ALTER TABLE `intern_review`
  ADD CONSTRAINT `intern_review_ibfk_1` FOREIGN KEY (`int_id`) REFERENCES `intern_student` (`int_id`),
  ADD CONSTRAINT `intern_review_ibfk_2` FOREIGN KEY (`g_id`) REFERENCES `internal_guide` (`g_id`),
  ADD CONSTRAINT `intern_review_ibfk_3` FOREIGN KEY (`e_id`) REFERENCES `external_guide` (`e_id`);

--
-- Constraints for table `intern_student`
--
ALTER TABLE `intern_student`
  ADD CONSTRAINT `intern_student_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `internal_guide` (`g_id`),
  ADD CONSTRAINT `intern_student_ibfk_2` FOREIGN KEY (`e_id`) REFERENCES `external_guide` (`e_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
