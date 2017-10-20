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
-- Database: `v_meetuptest`
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
  PRIMARY KEY (`slno`),
  KEY `attendance_ibfk_1` (`in_id`),
  KEY `attendance_ibfk_2` (`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  KEY `common_status_ibfk_1` (`g_id`),
  KEY `common_status_ibfk_2` (`e_id`),
  KEY `common_status_ibfk_3` (`off_id`)
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
('DATAMATO Technologies pvt.ltd. , address ;403,Ashray,Elphistone road,opp. to kirloskar engine oil,khadki , pune', 'Sachin Londhe', 'sachin@datamato.com', '9822354264', '15VITI001', '1'),
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
('Shaan Softtech Pvt.Ltd.', ' Sameer Jakate', 'jakate@gmail.com', '8421735416', '15VITI030', 'd@vGD4fa');

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
  KEY `inhouse_review_ibfk_1` (`g_id`),
  KEY `inhouse_review_ibfk_2` (`in_id`)
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
  KEY `inhouse_student_ibfk_1` (`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inhouse_student`
--

INSERT INTO `inhouse_student` (`in_id`, `in_name`, `g_id`, `in_pro`, `in_domain`, `in_email`, `in_mobile`, `in_password`, `abstract`) VALUES
('14MCB1006', 'ARUN SURESH D', '50391', 'Visualization of Big Data Density Analytics using Parallel Co-ordinates', 'Big Data Analytics', '', '', 'Kviyas', ''),
('14MCB1008', ' ANUMALASETTY VENKATA SASIKANTH', '50605', 'LARGE DATA ANALYTICS', 'BIG DATA ANALYTICS', '', '', '!=2QZUyG', ''),
('14MCB1015', ' JAHNAB KUMAR DEKA', '50276', 'Recommendation system', 'Data Analytics', '', '', 'E6@eME&+', ''),
('14MCB1034', 'CHINTA MANOJNA', '50319', 'Speaker Diarization on Television Channel News', 'Data Analytics-Machine Learning', '', '', '?FGz-9YU', ''),
('14MCC1002', 'VIPASHYANA JAGANNATH WAVARE', '50408', 'Cloud Security for scalable data', 'Cloud Computing', '', '', 'B!ZrCt7x', ''),
('14MCC1005', ' UTHRA K', '50384', 'Cloud interoperability using API', 'Cloud computing', '', '', '#L@2^trf', ''),
('14MCC1009', ' GUNNAM LAXMI NARAYANA', '50239', 'Iot of wireless body area networks', 'Networking', '', '', 'q87_z=By', ''),
('14MCC1010', ' MOHAMMAD RAYYAN', '50276', ' Minimizing Joint Response Time in Peer-Assisted Cloud Storage Systems', 'cloud computing', '', '', 'qMT+5Zb_', ''),
('14MCC1011', ' TURLAPATI SAINATH', '50417', 'Cloud application', 'Cloud  computing', '', '', 'N^5@2m^e', ''),
('14MCC1015', 'MANIGANDAN.V', '50239', 'Adaptive resource provisioning using online bin packing in cloud', 'Cloud Computing', '', '', '3@eQnN=h', ''),
('14MCC1016', 'KOLLIPARTHY PURNA SAINADH', '50314', 'Cloud Application', 'Cloud computing', '', '', 'M$6#uc8e', ''),
('14MCC1021', ' AJMAL USMAN.E', '50304', 'increase quality of data transfer with low bandwidth', 'communication and networking', '', '', '=?6RUYrj', ''),
('14MCC1022', ' THAKKAR PRATIK MOHANBHAI', '50304', 'Mobile cloud computing', 'Cloud computing', '', '', 'z*H3e*2T', ''),
('14MCC1023', 'SUMAN DEYASHI', '50307', 'Not Yet Decided', 'Cloud Computing', '', '', 'f#3NZ5Nu', ''),
('14MCC1024', ' DESHPANDE AKSHAY ANAND', '50258', 'VM replcement generic algorithm', 'cloud computing', '', '', 'f#2NZ5Nu', ''),
('14MCC1027', ' R KARTHICK RAJA', '50322', 'A SURVEY OF SOFTWARE-DEFINED NETWORKING', 'Networking', '', '', 'X&X8c5=d', ''),
('14MCC1029', ' BHEEMARASETTY SURENDRA KUMAR', '50159', 'Load Balancing Technique for Energy Efficient computational cloud', 'Cloud', '', '', 'y5#vweXL', ''),
('14MCC1031', ' C.K.KARTHIK', '50159', 'virtualized system architecture', 'cloud computing', '', '', '%nkTS9Wa', ''),
('14MCS1004', ' MOHAMMAD YOUNUS FARVEAZ J', '50352', 'Marketplace model for Logistics providers', 'REST;Networking; ', '', '', 'h$e2ktRB', ''),
('14MCS1009', ' PRASAD RAJENDRA KHANDAR', '50187', 'enhancement of  text processing chain with lingware focusing on coreference resolution; semantic role labelling and spatial expressions recognition', 'NLP', '', '', 'h8B*+4GT', ''),
('14MCS1010', ' AVVARU VENKATESH', '50396', 'key management in cloud computing', 'cloud', '', '', 'dq=zS86%', ''),
('14MCS1011', ' MATHIVANA', '50442', 'Advance session tracking system', 'Network Security', '', '', 'P*6q*q@!', ''),
('14MCS1012', ' JONNADULA MANISEKHAR', '50396', 'Modern security framework for cloud confidentiality', 'Cloud security', '', '', 'v_vPeh3X', ''),
('14MCS1020', ' M.SUSEEDHAR', '50442', 'under water acoustic sensor', 'network security', '', '', '5*SRg5@7', ''),
('14MCS1024', ' DIDLA PALLAVI', '50378', 'Scalability and reliability over cloud testing', 'cloud testing', '', '', 'Zk_pp2q$', ''),
('14MCS1027', ' S.REVATHY', '50159', 'complex hardware design bugs prediction and avoidance using interleaved instruction scheduling.', 'architecture.', '', '', 'mE#X2n#G', ''),
('14MCS1028', ' SHANMUGAPRIYA. J', '50384', 'Internet of things on healthcare', 'cloud', '', '', 'bMp7=Cks', ''),
('14MCS1030', ' KAMBHAMPATI JYOTHI', '50388', 'Ecode protocol using vanets', 'adhoc networks', '', '', 'Aj_#Y345', ''),
('14MCS1033', ' SILPA KAMBAM', '50390', 'automatic ontology matching with upper ontologies', 'web technologies', '', '', '+!Hr5+%v', ''),
('14MCS1035', ' NARAHARI VENKATESH', '50185', 'Extending Software Change Impact Analysis into COTS Components', 'software engineering ', '', '', 'D!t69^wE', ''),
('14MCS1041', ' SHRIMATHY', '50189', 'Compressed lucene indexing technique for Xml Files', 'DataMining', '', '', 'J*q7fF=Y', ''),
('14MCS1042', ' VALLETI KRANTHI KUMAR', '50185', 'Feature sub set selection in high dimensional data', 'Data mining', '', '', '!NeZH8rG', ''),
('14MCS1043', ' KALAIVANAN A', '50398', 'qos locatoion and information system', 'data base;webservice', '', '', 'e6kcfK_d', ''),
('14MCS1044', ' MINNEKANTI NYMISHA', '50338', 'A secure protocol and an authentication technique for security', 'network security', '', '', 'UDv$Ry2G', ''),
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
('50024', 'Prof. Pradeep Kumar  T.S', 'tspradeepkumar@vit.ac.in', '{1MzalSj', 'Asst. Prof. (SG)', '1218', 'IV MBA Block', '9994626196'),
('50036', 'Prof. Nisha  V.M', 'nishavm@vit.ac.in', '`:2OcBmy', 'Asst. Prof. (Sr.)', '1229', '3 A 3', '8056242631'),
('50049', 'Prof. Nithya Darisini  P.S', 'psnithyadarshini@vit.ac.in', 'e9I~{+N<', 'Asst. Prof. (SG)', '1227', 'II 206', '9487045673'),
('50063', 'Prof. Sajidha S A', 'vijaya.k@vit.ac.in', '1ck?g.C9', 'Asst. Prof. (SG)', '1226', '3 A 14', '9941385684'),
('50064', 'Prof. Sathis Kumar B', 'sathishkumar.b@vit.ac.in', 'R(t.9z4I', 'Asst. Prof. (SG)', '1231', 'IV MBA Block', '9442444010'),
('50094', 'Dr. Jeganathan L', 'jeganathan.l@vit.ac.in', 'P`b8?FaI', 'Professor', '1030', 'III M 12', '9488945529'),
('50136', 'Prof. Maheswari R', 'maheswari.r@vit.ac.in', 'wgPxe5,''', 'Asst. Prof. (SG)', '1240', '2 A 1', '7401596924'),
('50138', 'Prof. Vergin Raja Sarobin M', 'verginraja.m@vit.ac.in', '77=N6gIf', 'Asst. Professor', '1242', '3 M 3', '9710423195'),
('50154', 'Prof. Rukmani P', 'rukmani.p@vit.ac.in', 'p7!!W9f9', 'Asst. Prof. (Sr.)', '1263', '3 M 2', '9790944341'),
('50159', 'Prof. Harini S', 'harini.s@vit.ac.in', '{{ULg.4u', 'Asst. Prof. (Sr.)', '1268', '3 M 7', '9444419041'),
('50160', 'Dr. Maheswari N', 'maheswari.n@vit.ac.in', '!zTB1&r;', 'Professor', '1269', 'II 206', '9865918740'),
('50161', 'Dr. Nayeemulla Khan', 'nayeemulla.khan@vit.ac.in', 'Gp0A/>-M', 'Professor', '1270', 'III M 16', '9444470335'),
('50168', 'Dr. Pattabiraman V', 'pattabiraman.v@vit.ac.in', '`KsQ^9fE', 'Associate Professor', '1277', '3 M 14', '9842289896'),
('50176', 'Prof. Graceline Jasmine S', 'graceline.jasmine@vit.ac.in', '-Iy~8U{H', 'Asst. Professor', '1281', '3 M 8', '9003654406'),
('50177', 'Prof. Thomas Abraham J V', 'thomasabraham.jv@vit.ac.in', '2[M^.3w]', 'Asst. Prof. (SG)', '1287', '3 A 4', '9176864924'),
('50178', 'Prof. Appalaraju Muralidhar', 'muralidhar.a@vit.ac.in', 'x5/`ZzIv', 'Asst. Prof. (Sr.)', '1288', '3 A 5', '9094962433'),
('50183', 'Prof. Ilakiyaselvan N', 'ilakiyaselvan.n@vit.ac.in', 'r*1x:RH7', 'Asst. Professor', '1286', '2 A 6', '9444633301'),
('50185', 'Prof. Sathyarajasekaran K', 'sathyarajasekaran.k@vit.ac.in', 'rpQW2%1P', 'Asst. Professor', '1285', '2 206', '9841732250'),
('50186', 'Dr. Parvathi R', 'parvathi.r@vit.ac.in', ',A<s7ZB;', 'Associate Professor', '1291', '2 A 2', '9443059207'),
('50187', 'Prof. Deivanai K', 'deivanai.k@vit.ac.in', '5Tz]%m2U', 'Asst. Professor', '1283', '3 M 9', '9751216865'),
('50189', 'Prof. Sharath Kumar Jagannathan', 'sharathkumar.j@vit.ac.in', '4+UcbE+\\', 'Asst. Prof. (Sr.)', '1289', '2 205', '9176020251'),
('50201', 'Prof. Umitty Srinivasa Rao', 'umitty.srinivasarao@vit.ac.in', 'Q~2vOJnM', 'Asst. Prof. (Sr.)', '1284', '3 A 1', '7845374637'),
('50237', 'Dr. Saleena B', 'saleena.b@vit.ac.in', 'Ffl7`g`P', 'Associate Professor', '1356', '3 M 6', '9840695935'),
('50238', 'Prof. Geetha M', 'geetha.m@vit.ac.in', 'Ryi31J{9', 'Asst. Professor', '1358', '3 M 5', '9941393892'),
('50239', 'Prof. Khadar Nawas K', 'khadarnawas.k@vit.ac.in', 'I%1vpF!t', 'Asst. Professor', '1359', '3 A 9', '9159182399'),
('50249', 'Prof. Prakash B', 'prakash.bala@vit.ac.in', 'ix]ZA4~e', 'Asst. Professor', '1365', '6', '9962098396'),
('50250', 'Prof. Maheswari S', 'maheswari.s@vit.ac.in', 'oQ[8r_A@', 'Asst. Prof. (Sr.)', '1364', '3 A 14', '9940055623'),
('50258', 'Dr. Rajesh Kanna B', 'rajeshkanna.b@vit.ac.in', '6!vOxNSk', 'Associate Professor', '1290', '506', '9884223178'),
('50266', 'Prof. Shridevi S', 'shridevi.s@vit.ac.in', 'Ee3l-Hp$', 'Asst. Prof. (SG)', '1171', '2 A 5', '9791087626'),
('50270', 'Prof. Vijayalakshmi A', 'vijayalakshmi.av@vit.ac.in', '8?3n(OJM', 'Asst. Prof. (Sr.)', '1067', '3 A 6', '9445958156'),
('50276', 'Prof. Prabhakar Rao B V A N S S', 'prabhakarrao@vit.ac.in', 'jafXW}9a', 'Asst. Prof. (SG)', '1134', '3 M 1', '9952096295'),
('50284', 'Prof. Gayathri Devi B', 'gayathridevi.b@vit.ac.in', '\\NuN1M''i', 'Asst. Prof. (Sr.)', '1072', '3 A 3', '9790937402'),
('50286', 'Prof. Aparna V', 'aparna.v@vit.ac.in', 'mB(42Hu4', 'Asst. Prof. (Sr.)', '1069', '4 A 17', '8148314140'),
('50289', 'Prof. Premalatha M', 'premalatha.m@vit.ac.in', 'G&na"3TE', 'Asst. Prof. (SG)', '1071', '4 M 4', '9884326554'),
('50297', 'Prof. Sumaiya Thaseen I', 'isumaiyathaseen@vit.ac.in', '=zCNb*6p', 'Asst. Prof. (Sr.)', '1131', '3 A 4', '9443215146'),
('50299', 'Prof. Bharathi Raja S', 'bharathiraja.s@vit.ac.in', '*pna3AFm', 'Asst. Prof. (Sr.)', '1120', '4 M 3', '9841929299'),
('50300', 'Dr. Viswanathan V', 'viswanathan.v@vit.ac.in', 'RMVk+6ai', 'Associate Professor', '1130', '3 A 8', '9443174417'),
('50301', 'Prof. Rajkumar S', 'rajkumar.srinivasan@vit.ac.in', 'W3=e|oo!', 'Asst. Prof. (Sr.)', '1065', '4 M 5', '9442424291'),
('50303', 'Dr. Malathi G', 'malathi.g@vit.ac.in', 'R(q#3hHP', 'Associate Professor', '1107', '2 A 7', '9840833337'),
('50304', 'Kumar R', 'kumar.rangasamy@vit.ac.in', '2', 'Asst. Prof. (SG)', '1156', '6 A', '9444247444'),
('50307', 'Prof. Priyaadharshini M', 'priyaadharshini.m@vit.ac.in', 'nE[13!k`', 'Asst. Prof. (Sr.)', '1064', '3 F 312', '9677271150'),
('50311', 'Prof. Kanchana Devi V', 'kanchanadevi@vit.ac.in', '<cS=PG6D', 'Asst. Prof. (Sr.)', '1176', '3 A 7', '9500642843'),
('50314', 'Prof. Kavya Alluru', 'kavya.alluru@vit.ac.in', '.J2PpNgM', 'Asst. Professor', '1074', '3 A 2', '9962196549'),
('50315', 'Prof. Jayaram B', 'jayaram.b@vit.ac.in', 'Hp/.1/0}', 'Asst. Prof. (Sr.)', '1121', '4 M 2', '9486203960'),
('50318', 'Prof. Nivedita M', 'nivedita.m@vit.ac.in', '2a:X,;Gk', 'Asst. Professor', '1175', '3 A 2', '9952612366'),
('50319', 'Dr. Bharadwaja Kumar', 'bharadwaja.kumar@vit.ac.in', 'oPzb$i8\\', 'Associate Professor', '1169', 'III M 15', '9789841134'),
('50322', 'Prof. Jayasudha M', 'jayasudha.n@vit.ac.in', 'o:5Xz8bQ', 'Asst. Prof. (Sr.)', '1109', '3 M 10', '9994979687'),
('50338', 'Dr. Ganesan R', 'ganesan.r@vit.ac.in', 'Q9LhV;yU', 'Associate Professor', '1357', '2A3', '9842292350'),
('50352', 'Dr. Jenila Livingston L M', 'jenila.lm@vit.ac.in', 'Q9Lhb;1U', 'Associate Professor', '1088', '4 M 1', '9444337733'),
('50359', 'Dr. Rekha D', 'rekha.d@vit.ac.in', '<*.<eQ3y', 'Asst. Prof. (Sr.)', '1183', '7A', '9841408327'),
('50370', 'Prof. Rajesh Kumar', 'rajesh.kumar@vit.ac.in', '<>l\\E_6&', 'Associate Professor', '1182', '7A 10', '9092952221'),
('50373', 'Dr. Justus S', 'justus.s@vit.ac.in', '<t[9LbhN', 'Associate Professor', '1319', 'II M 13', '9789145400'),
('50378', 'Dr. Umamaheswari E', 'umamaheswari.e@vit.ac.in', 'Q/bVl\\8P', 'Associate Professor', '1194', 'I f A 8', '9840079813'),
('50380', 'Prof. Rajarajeswari S', 'rajarajeswari.s@vit.ac.in', '8Bqauo>J', 'Asst. Prof. (Sr.)', '1195', 'I F A', '9790896652'),
('50384', 'Dr. Neela Narayanan V', 'neelanarayanan.v@vit.ac.in', ':~>I)c8;', 'Associate Professor', '1129', 'IV NA 25', '7598564593'),
('50386', 'Prof. Abdul Quadir Md', 'abdulquadir.md@vit.ac.in', '6AW6"8gP', 'Asst. Professor', '1086', 'II A', '9884004139'),
('50388', 'Prof. Christy Jackson J', 'christyjackson.j@vit.ac.in', 'Wm"9\\v8T', 'Asst. Professor', '1320', 'II A', '8939109547'),
('50389', 'Prof. Tulasi Prasad Sariki', 'tulasiprasad.sariki@vit.ac.in', '7Z*5cn1L', 'Asst. Prof. (Sr.)', '1125', 'VI 604', '8675724402'),
('50390', 'Prof. Alok Chauhan', 'alok.chauhan@vit.ac.in', '1X/o$67x', 'Associate Professor', '1099', 'VI M 7', '8939527797'),
('50391', 'Prof. Rabindra Kumar Singh', 'rabindrakumar.singh@vit.ac.in', 'j1R+f;n`', 'Asst. Prof. (SG)', '1158', '3 M 4', '9884367578'),
('50392', 'Dr. Syed Ibrahim S P', 'syedibrahim.sp@vit.ac.in', 'o,2,''P#''', 'Professor', '1392', '605 B (lab)', '9944416392'),
('50393', 'Prof. Ramesh Ragala', 'ramesh.ragala@vit.ac.in', 'n)T$*4IQ', 'Asst. Prof. (Sr.)', '1141', 'VI M 8', '8148376575'),
('50394', 'Prof. Nachiyappan S', 'nachiyappan.s@vit.ac.in', ')WhP6R"j', 'Asst. Prof. (Sr.)', '1142', '6 M 5', '9443268429'),
('50396', 'Prof. Pradeep K V', 'pradeep.kv@vit.ac.in', 'Y2)1VTyi', 'Asst. Professor', '1189', 'VI M 4', '9445825675'),
('50398', 'Dr. Sivabalakrishnan M', 'sivabalakrishnan.m@vit.ac.in', '8DjU|]bz', 'Associate Professor', '1434', 'IVNA 26', '9841260016'),
('50400', 'Prof. Gayathri R', 'gayathri.r@vit.ac.in', '*9zzYOvg', 'Asst. Professor', '1384', 'IV NA 22', '9597300373'),
('50401', 'Prof. Punitha K', 'punitha.k@vit.ac.in', 'DWe!ja3/', 'Asst. Prof. (Sr.)', '1140', 'IV NA 24', '9443916174'),
('50403', 'Prof. Rajesh M', 'rajesh.m@vit.ac.in', 'U4qG{ma8', 'Asst. Prof. (Sr.)', '1378', 'IF NA 4', '9944043544'),
('50404', 'Prof. Rajiv Vincent', 'rajiv.vincent@vit.ac.in', '_,yZ1!R]', 'Asst. Professor', '1259', 'IF NA 6', '9994777058'),
('50408', 'Prof. Anusooya G', 'anusooya.g@vit.ac.in', 'Wt#)4tMw', 'Asst. Professor', '1145', 'IVNA 9', '9176313600'),
('50410', 'Prof. Sandhya P', 'sandhya.p@vit.ac.in', 'k,F6Tm7Y', 'Asst. Prof. (SG)', '1370', 'I floor NA 14', '7299480949'),
('50412', 'Dr. Vijayakumar V', 'vijayakumar.v@vit.ac.in', 'G\\13e''yL', 'Professor', '1329', 'IF A', '9942057843'),
('50413', 'Prof. Hema N', 'hema.n@vit.ac.in', '6b$+dMW)', 'Asst. Prof. (Sr.)', '1385', 'IF A', '9444253130'),
('50417', 'Prof. Prassanna J', 'prassanna.j@vit.ac.in', 'Y4GWe>{6', 'Asst. Prof. (SG)', '1425', 'IV NA 29', '9841475035'),
('50422', 'Dr. Priyadarshini J', 'priyadharshini.j@vit.ac.in', '.";5AJmQ', 'Associate Professor', '1097', '4 A 3', '9486074882'),
('50430', 'Prof. Prabakaran R', 'prabha.karan@vit.ac.in', '_^OcL9XF', 'Asst. Prof. (Sr.)', '1423', '4NA 30', '9710626073'),
('50432', 'Prof. Shola Usha Rani', 'sholausha.rani@vit.ac.in', '|>R5+Och', 'Asst. Prof. (Sr.)', '1383', 'IV NA 4 36', '9962290128'),
('50435', 'Prof. Karmel A', 'karmel.a@vit.ac.in', 'F.;lXb7A', 'Asst. Prof. (Sr.)', '1398', 'IV NA 8', '9840507512'),
('50438', 'Prof. Suganya G', 'suganya.g@vit.ac.in', '`[A9S]b_', 'Asst. Prof. (Sr.)', '1399', '4 ext A 28', '9894862359'),
('50440', 'Prof. Sridhar R', 'sridhar@vit.ac.in', '@j~5\\L">', 'Associate Professor', '1084', 'IVNA 14', '9790939134'),
('50442', 'Dr. Asha S', 'asha.s@vit.ac.in', ')%S[3s$h', 'Associate Professor', '1085', '4 NA 19', '9442808934'),
('50443', 'Dr. Nithyanandam P', 'nithyanandam.p@vit.ac.in', '43({Xf#;', 'Professor', '1396', '4 NA 23', '9962066206'),
('50445', 'Prof. Sakthi Ganesh M', 'sakthiganesh.m@vit.ac.in', 'lb|48QB2', 'Asst. Professor (Sr.)', '1397', 'IV NA 20', '9786359728'),
('50569', 'Dr. Subbulakshmi T', 'subbulakshmi.t@vit.ac.in', ',&Q[$8lK', 'Professor', '1432', '4 A Ext 23', '9994163259'),
('50577', 'Dr. Renta Chintala Bhargavi', 'bhargavi.r@vit.ac.in', 'c&EXl=1.', 'Associate Professor', '1149', '4 NA Ext 7', '9940683362'),
('50587', 'Dr. Geetha S', 'geetha.s@vit.ac.in', '5.o1>IU^', 'Professor', '1483', '205', '9842550862'),
('50590', 'Dr. Asnath Victy Phamila Y', 'asnathvicty.phamila@vit.ac.in', '6~9WMNk[', 'Associate Professor', '1467', 'canteen IIFloor 5', '9884322100'),
('50603', 'Prof. Hepsiba Mabel V', 'hepsiba.mabel@vit.ac.in', '*Ar,Nz5a', 'Assistant Professor (Sr)', '1469', 'Canteen II floor 6', '9840454781'),
('50605', 'Dr. Vishnu Priya R', 'vishnupriya.r@vit.ac.in', 'mTh2b}2B', 'Associate Professor', '1480', 'canteen 27', '9486072557'),
('50616', 'Dr.  M. Janaki Meena', 'janakimeena.m@vit.ac.in', 'P-+>{7jo', 'Professor', '1470', '206', '98433 58320.'),
('50632', 'Dr. Jagadeesh Kannan R', 'jagadeeshkannan.r@vit.ac.in', '^1AbDl-"', 'Professor', '1518', '3 M 13', '9094058841'),
('50732', 'Dr. R.Nandhini', 'nandhini.ramachandra@vit.ac.in', 'OhYt\\9SN', 'Assistant Professor ', '1502', 'canteen 3', '9940656844'),
('50767', 'Prof. Sweetlin Hemalatha', 'sweetlin.hemalatha@vit.ac.in', '|Tj5.WCV', 'Assistant Professor (Sr.)', '', 'canteen room 22', '9791010060'),
('50773', 'Dr. Nagaraj SV', 'nagaraj.sv@vit.ac.in', 'd*<R$$4^', 'Professor', '', 'canteen room 12', '9003192288'),
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
  KEY `intern_review_ibfk_1` (`int_id`),
  KEY `intern_review_ibfk_2` (`g_id`),
  KEY `intern_review_ibfk_3` (`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `intern_student`
--

CREATE TABLE IF NOT EXISTS `intern_student` (
  `int_id` varchar(40) NOT NULL,
  `int_name` varchar(40) DEFAULT NULL,
  `g_id` varchar(40) DEFAULT NULL,
  `int_pro` varchar(60) DEFAULT NULL,
  `int_domain` varchar(40) DEFAULT NULL,
  `e_id` varchar(40) DEFAULT NULL,
  `int_email` varchar(40) DEFAULT NULL,
  `int_mobile` varchar(40) DEFAULT NULL,
  `int_password` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `abstract` text NOT NULL,
  PRIMARY KEY (`int_id`),
  KEY `intern_student_ibfk_1` (`g_id`),
  KEY `intern_student_ibfk_2` (`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern_student`
--

INSERT INTO `intern_student` (`int_id`, `int_name`, `g_id`, `int_pro`, `int_domain`, `e_id`, `int_email`, `int_mobile`, `int_password`, `abstract`) VALUES
('14MCB1001', ' VISHAL B KOLK', '50410', 'Model Evaluation of Machine Learning Techniques', 'Machine Learning', '15VITI004', '', '', 'kKC7tT*X', ''),
('14MCB1003', ' AMRUTE ROHAN GIRIS', '50605', 'Message Deciphering through Semantic Text Analytics', 'Text Analytics and Machine Learning', '15VITI011', '', '', '8!cYEZ23', ''),
('14MCB1005', ' REKHA J', '50186', 'Predicting the Purchase Behaviour ', 'Recommendation system', '15VITI005', '', '', 'cuk_A8?5', ''),
('14MCB1007', ' NARESH D', '50237', 'Big Data in Healthcare Analytics', 'Healthcare', '15VITI014', '', '', 'Mb9#2Yfs', ''),
('14MCB1009', ' ABIRAMI M', '50168', 'Exploring Deep learning techniques in distributed environmen', 'Big Data ', '15VITI010', '', '', 'jKk@!9u2', ''),
('14MCB1010', ' J.DHARMIN SIDDESH', '50276', 'recommendation system in e commerce', 'data mining', '15VITI003', '', '', 'fBG7v@dZ', ''),
('14MCB1011', ' REGIN RAJA R', '50569', 'Data Analytics for Connected Lighting products', 'Data Analytics', '15VITI017', '', '', 'Ee8Xvc&s', ''),
('14MCB1013', ' SHARANYA BHATTACHARY', '50445', 'IRIS (SAP LABS Project)', 'Image Processing', '15VITI007', '', '', '4dv=d6Ms', ''),
('14MCB1014', ' ANKITA DHAWALE', '50160', 'Performance Data Modelling ', 'Data Analytics ', '15VITI015', '', '', 'F*!ZKb45', ''),
('14MCB1016', ' NIVETHA', '50168', 'Healthcare analytics using hadoop framework', 'health care analytics', '15VITI014', '', '', 'Rxqa2E#P', ''),
('14MCB1017', ' IMRAN ALI KHAN P', '50178', 'Health Care Analytics Using Hadoop Framework', 'Healthcare', '15VITI014', '', '', '&57e2AVE', ''),
('14MCB1020', ' SHIWANGI YADAV', '50388', 'Big Data in Healthcare Analytics', 'Healthcare ', '15VITI014', '', '', '+g8U-Aab', ''),
('14MCB1021', ' BOKIL NIKHIL SUNI', '50161', 'Mobile Application for Geo location Tracking', 'Big Data', '15VITI004', '', '', '_@f8Dz+L', ''),
('14MCB1024', ' KODALI SRIMALYA', '50393', 'Predictive analytics for motor and crane maintenance in Stee', 'Big Data Analytics', '15VITI022', '', '', '=Pq$e5K$', ''),
('14MCB1029', ' MALLINA SURYA TEJASWINI', '50410', 'Developing Evaluators for E-Commerce Products', 'Big Data Analytics', '15VITI004', '', '', 'c#*83S_+', ''),
('14MCB1030', ' HARINI SHANKA', '50178', 'To focus on changing human behaviour to drive them to lead a', 'Big Data ', '15VITI006', '', '', 'p6t&K?AG', ''),
('14MCB1031', ' PATIL AKSHAY ANANT', '50276', 'Storage Performance Modeling for different workloads.', 'Data Storage and Performance Analysis', '15VITI016', '', '', '!Q^*Au6!', ''),
('14MCB1035', ' ANIRUDH SAINATH DORNADULA', '50401', 'Cloud Computing', 'Cloud Computing', '15VITI019', '', '', '_SswM5hP', ''),
('14MCB1036', ' KANDGE RUCHA VIVE', '50392', 'Machine learning use cases in real world.', 'Machine learning', '15VITI004', '', '', 'LU7nJ4%q', ''),
('14MCB1037', ' KUSH TEHLAN', '50178', 'Enhancements to Inventory Collection Tool', 'Data Management', '15VITI025', '', '', 'sM&ETF37', ''),
('14MCB1038', ' SUJITH KUMAR GURRAM', '50319', 'Puper Power Integrated manager', 'Cloud Automation', '15VITI013', '', '', '6n-S-cJk', ''),
('14MCB1041', ' BHEEMINETI SHOBHANA', '50403', 'Building Spatial Reccomendation Systems with Graphs', 'Data Analytics', '15VITI004', '', '', '_367eRSV', ''),
('14MCB1042', ' CHAVALI LAKSHMI SUBRAHMANYAM', '50319', 'Joint Learning User''s Activities and Profiles from GPS Data', 'Bigdata Analytics', '15VITI022', '', '', '9?SxLcV5', ''),
('14MCB1043', ' AMOL BHAUSAHEB WALE', '50160', 'Cluster provisioning in hadoop for big Data analysis', 'Big Data Analytic ', '15VITI008', '', '', 'Sh#9BNHU', ''),
('14MCB1045', ' ADITI SIT', '50392', 'Sampling Automated Management System', 'Software Engineering', '15VITI012', '', '', 'Cf?4s6rF', ''),
('14MCB1046', ' BHAJIPALE MONIKA MANIKRAO', '50392', 'Consumer Risk Modeling & Fraud Detection using Social Media', 'Big Data Analytics', '15VITI004', '', '', '7FnzG!vY', ''),
('14MCB1049', ' MUDAVADKAR PRASAD VIJAY', '50319', ' Company Profiling through Market Sentiment Analytics', ' Sentiment Analysis and Machine Learning', '15VITI023', '', '', 'z7^ghYQN', ''),
('14MCB1050', ' BIBEK KUMAR PATRO', '50577', 'DIGITAL SERVICES INSIGHTS', 'BIG DATA AND OPERATIONAL INTELLIGENCE IN', '15VITI029', '', '', '3&5gk?Z#', ''),
('14MCB1051', ' AAKASH KAG', '50352', 'Building Real-time Analytics with Stream Processing', 'Analytics', '15VITI004', '', '', 'hL53Y@=2', ''),
('14MCB1057', ' WAGH TEJAS ANANT', '50577', 'Statistical Machine Learning: A performance Study', 'Machine Learning-Big data', '15VITI004', '', '', '$9Xv8dPt', ''),
('14MCB1058', ' BHARAT BHUSHAN SINGH', '50036', 'intelligent accident prediction model', 'big data analytics + IOT', '15VITI022', '', '', 'cw*9b$Kk', ''),
('14MCC1001', ' KANDURI VAISHNAV', '50201', 'Auto visualization: A versatile programming paradigm', 'Big data analytics', '15VITI004', '', '', '-3nUUn2?', ''),
('14MCC1006', ' D B S V S SAI SANKAR', '50314', 'Oracle Cloud Appliclations(Fusion HCM) Automation', 'ERP', '15VITI028', '', '', 'g+9NM9aR', ''),
('14MCC1008', ' SRAMANA SENGUPT', '50386', 'Implementation of Continuous Integration; Testing and Deploy', 'Process Automation- DevOps', '15VITI009', '', '', 'yd*^7TU_', ''),
('14MCC1018', ' INDU PRASA', '50024', 'Development of a management application using Salesforce Pla', 'Cloud Computing', '15VITI002', '', '', '^xVs$N3w', ''),
('14MCC1028', ' SETHI GAURAV VINO', '50307', 'NIC Driver testing on Virtualization platform ', 'Cloud Testing', '15VITI008', '', '', 'bY!9Ms?!', ''),
('14MCC1030', ' CHOUDHARY SOURABH SATTYENDR', '50304', 'Devlopement of Cloud Application', 'Cloud Computing', '15VITI001', '', '', '7Md8f!Vn', ''),
('14MCS1006', ' NARDEKAR SHASHANK SHEKHAR SHRADHA', '50587', 'Developing a Data Science Platform: An Integration Approach', 'Data Science', '15VITI004', '', '', '8t?JuYdu', ''),
('14MCS1017', ' ANITA SUSAN JOHN', '50189', 'Civil design software', '.net', '15VITI024', '', '', 'Drm5x8$w', ''),
('14MCS1019', ' PARTH SUGANDHI', '50307', 'Service orchestration across diverse cloud platforms', 'cloud', '15VITI029', '', '', '_%Wzy49=', ''),
('14MCS1021', ' HIRUDKAR KEWAL BHASKAR', '50304', 'java', 'java', '15VITI027', '', '', 'GD@*2+ve', ''),
('14MCS1025', ' SAYLI RAMAKANT KOMAWAR', '50094', 'Improvising DEV productivity via automation of build generat', 'Cloud Storage', '15VITI020', '', '', 'j$S2L=@F', ''),
('14MCS1032', ' PATIL SHWETA MAHADEO', '50378', 'Customer Relationship Management for particular products', 'web service', '15VITI030', '', '', 'XBt8_Rsk', ''),
('14MCS1038', ' SUCHITA SINGH', '50237', 'Scripting framework for nLAB tool used in automation testing', 'Storage fundamentals; Java; Perl; MySQL.', '15VITI021', '', '', '#nfQ+3xR', ''),
('14MCS1039', ' P KIRAN KUMAR PRUST', '50237', 'Performance Benchmarking for SOC features', 'Testing', '15VITI008', '', '', 'GH$#7jRm', ''),
('14MCS1040', ' BINSU MATHEW', '50024', 'Click Stream Technology for an Insurance Company ', 'Digital Analytics on Big Data Platform', '15VITI026', '', '', '9Bbyd$YH', ''),
('14MCS1046', ' ASHWIN CHANDRASEKAR', '50442', 'Developing  a Data Science platform: An Integration approach', 'Data Science', '15VITI004', '', '', 'Z87TL$s6', '');

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
  PRIMARY KEY (`slno`),
  UNIQUE KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
