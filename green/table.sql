DROP DATABASE IF EXISTS hlps5;

CREATE DATABASE hlps5;

GRANT ALL PRIVILEGES ON hlps5.* to grader@localhost IDENTIFIED BY 'allowme';

USE hlps5;

CREATE TABLE Vehicle (
  vid INTEGER,
  model VARCHAR(128),
	maker VARCHAR(128),
  price DOUBLE,
  isrent  BOOLEAN,
  PRIMARY KEY (vid)
);

CREATE TABLE Location(
  vid INTEGER AUTO_INCREMENT,
  xValue REAL,
  yValue REAL,
  PRIMARY KEY (vid)
);

CREATE TABLE Motorcycle (
	vid INTEGER NOT NULL,
	speed REAL,
  enginecapacity VARCHAR(10),
  color VARCHAR(20),
  PRIMARY KEY (vid),
  FOREIGN KEY (vid) REFERENCES Vehicle (vid) ON DELETE CASCADE
);

CREATE TABLE Tank(
	vid INTEGER NOT NULL,
	speed REAL,
  shell REAL,
  armor REAL,
  PRIMARY KEY (vid),
  FOREIGN KEY (vid) REFERENCES Vehicle (vid) ON DELETE CASCADE
);
CREATE TABLE Car(
	vid  INTEGER NOT NULL,
  type VARCHAR(30),
	fuel VARCHAR(20),
  color VARCHAR(20),
  speed REAL,
  enginecapacity VARCHAR(10),
  PRIMARY KEY (vid),
  FOREIGN KEY (vid) REFERENCES Vehicle (vid) ON DELETE CASCADE
);
CREATE TABLE People (
	pid INTEGER AUTO_INCREMENT,
  name VARCHAR(30),
  password VARCHAR(128),
  username VARCHAR(30),
  email VARCHAR(256),
  isManager  BOOLEAN,
  telephoneNumber VARCHAR(128),
  PRIMARY KEY (pid)
);
CREATE TABLE Customer (
	pid INTEGER AUTO_INCREMENT,
  ranking VARCHAR(32),
  PRIMARY KEY (pid),
  FOREIGN KEY (pid) REFERENCES People(pid) ON DELETE CASCADE
);
CREATE TABLE Address(
  pid INTEGER AUTO_INCREMENT,
  country VARCHAR(256),
  postal VARCHAR(256),
  city VARCHAR(256),
  street VARCHAR(256),
  PRIMARY KEY (pid),
  FOREIGN KEY (pid) REFERENCES People(pid) ON DELETE CASCADE
);
CREATE TABLE Discount (
  ranking VARCHAR(32),
  rate DOUBLE NOT NULL
);

CREATE TABLE Admin (
	pid INTEGER NOT NULL,
  click INTEGER,
  PRIMARY KEY (pid),
  FOREIGN KEY (pid) REFERENCES People(pid) ON DELETE CASCADE
);

CREATE TABLE Duration (
  did INTEGER NOT NULL,
  datefrom INTEGER,
  dateto INTEGER,
  PRIMARY KEY (did)
);
CREATE TABLE Rent (
  vid INTEGER NOT NULL,
	pid INTEGER NOT NULL,
  did INTEGER NOT NULL,
  PRIMARY KEY (vid,pid,did),
  FOREIGN KEY (pid) REFERENCES People(pid) ON DELETE CASCADE,
  FOREIGN KEY (vid) REFERENCES Vehicle (vid) ON DELETE CASCADE,
  FOREIGN KEY (did) REFERENCES Duration (did) ON DELETE CASCADE

);



INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (1,"Super Hawk","Renault","15731.96","0"),(2,"Trident ","Mitsubishi Motors","8919.65","0"),(3,"Black Bird","Vauxhall","29989.38","0"),(4,"Rocket III","Daihatsu","15914.21","0"),(5,"Daytona","Infiniti","27854.03","0"),(6,"Ninja","Tata Motors","20831.55","0"),(7,"Ninja","MINI","20633.58","0"),(8,"Bandit","Toyota","28817.13","0"),(9,"Magna","Buick","13615.03","0"),(10,"Intruder","Subaru","12297.33","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (11,"Black Bird","MINI","8958.87","0"),(12,"Magna","JLR","14856.26","0"),(13,"Magna","Hyundai Motors","11516.13","0"),(14,"Daytona","Acura","29690.35","0"),(15,"Formula 3","Acura","12974.40","0"),(16,"Super Hawk","FAW","26158.78","0"),(17,"Super Hawk","Audi","23855.32","0"),(18,"Bonneville","Subaru","6446.73","0"),(19,"Ninja","Dacia","12589.09","0"),(20,"Black Bird","Lexus","26435.01","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (21,"Dominator","Isuzu","23113.55","0"),(22,"Formula 3","Seat","13846.57","0"),(23,"Magna","Volvo","28963.97","0"),(24,"Super Hawk","Ford","7706.81","0"),(25,"Formula 3","RAM Trucks","26042.17","0"),(26,"Sportster","Acura","19795.27","0"),(27,"Katana","Peugeot","16286.17","0"),(28,"Black Bird","Seat","12912.20","0"),(29,"Avenger","Dongfeng Motor","18775.79","0"),(30,"Silver Hawk","Dacia","24859.20","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (31,"Intruder","GMC","9289.27","0"),(32,"Tiger","Audi","12280.07","0"),(33,"Bandit","Daihatsu","19032.85","0"),(34,"Bonneville","RAM Trucks","20790.11","0"),(35,"Super Glide","Tata Motors","26419.99","0"),(36,"Victor 441","Kenworth","23378.77","0"),(37,"Katana","BMW","18330.73","0"),(38,"Magna","Lincoln","19580.61","0"),(39,"Road King","Lincoln","21922.77","0"),(40,"Trident ","Acura","24328.42","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (41,"Dominator","Nissan","17102.36","0"),(42,"Formula 3","Audi","14546.93","0"),(43,"Silver Hawk","Isuzu","8280.77","0"),(44,"Sportster","Dodge","27750.17","0"),(45,"Ninja","Lincoln","7416.29","0"),(46,"Trail 90","General Motors","8212.11","0"),(47,"Ninja","Dacia","9244.38","0"),(48,"Daytona","GMC","27336.78","0"),(49,"Rocket III","Kenworth","26999.55","0"),(50,"Rocket III","RAM Trucks","13161.74","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (51,"Intruder","Skoda","10935.80","0"),(52,"Victor 441","Maruti Suzuki","7200.98","0"),(53,"Intruder","Chevrolet","23981.13","0"),(54,"Tiger","Buick","8817.09","0"),(55,"Formula 3","Infiniti","18324.09","0"),(56,"Katana","Isuzu","9117.46","0"),(57,"Victor 441","Fiat","16468.92","0"),(58,"Trident ","Dacia","18521.31","0"),(59,"Silver Hawk","Isuzu","21997.92","0"),(60,"Katana","Volkswagen","11407.14","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (61,"Ninja","Acura","15343.19","0"),(62,"Bullet","Kia Motors","10883.37","0"),(63,"V-Max","Porsche","22438.42","0"),(64,"Silver Hawk","Mazda","28683.19","0"),(65,"Bandit","Kenworth","21378.08","0"),(66,"Katana","Lexus","14066.89","0"),(67,"Silver Hawk","Volkswagen","15015.06","0"),(68,"Trail 90","Lexus","22146.38","0"),(69,"Ninja","Kenworth","7049.80","0"),(70,"Daytona","Porsche","12089.39","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (71,"Formula 3","Audi","9510.71","0"),(72,"Formula 3","Ferrari","21015.10","0"),(73,"Road King","Dacia","6266.94","0"),(74,"Road King","Skoda","15344.53","0"),(75,"Magna","Buick","26773.08","0"),(76,"Ninja","Subaru","9935.49","0"),(77,"Katana","JLR","28312.99","0"),(78,"Formula 3","Isuzu","12509.43","0"),(79,"Bonneville","Dacia","17757.09","0"),(80,"Sportster","Vauxhall","13983.36","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (81,"Black Bird","FAW","12484.11","0"),(82,"Dominator","MINI","19681.46","0"),(83,"Daytona","Mazda","15499.44","0"),(84,"Sportster","Suzuki","24518.55","0"),(85,"Magna","Dodge","6633.95","0"),(86,"Magna","Smart","19231.36","0"),(87,"Super Hawk","BMW","19680.37","0"),(88,"Victor 441","Suzuki","26441.10","0"),(89,"Super Hawk","Acura","25807.07","0"),(90,"Ninja","BMW","19150.34","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (91,"Road King","Fiat","23241.55","0"),(92,"Bonneville","Vauxhall","16460.13","0"),(93,"Bonneville","Citroen","17376.71","0"),(94,"Katana","GMC","8692.36","0"),(95,"Black Bird","BMW","13630.77","0"),(96,"Bullet","JLR","11690.68","0"),(97,"Black Bird","GMC","26071.86","0"),(98,"Super Glide","Jeep","22931.58","0"),(99,"Bonneville","Porsche","26567.52","0"),(100,"Bonneville","Dodge","21058.30","0");


INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (101," Panzer IV","BAE Systems","913534.63","0"),(102,"Mk VI Crusader","Boeing","989070.83","0"),(103,"Mk VI Crusader","Boeing","941862.86","0"),(104,"Tiger II","BAE Systems","999096.36","0"),(105,"Churchill","Finmeccanica","869293.60","0"),(106,"Panzer I","Raytheon","886662.39","0"),(107,"Tiger II","United Technologies Corporation","582684.21","0"),(108,"Tiger I ","BAE Systems","722785.92","0"),(109,"Tiger I ","Boeing","975104.82","0"),(110,"M4 Sherman","Boeing","587082.52","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (111,"Panzer I","Northrop Grumman","540890.86","0"),(112,"Tiger II","Northrop Grumman","537683.31","0"),(113,"Panzer II","Northrop Grumman","821900.50","0"),(114,"Churchill","Finmeccanica","735157.10","0"),(115,"M4 Sherman","Boeing","500717.29","0"),(116,"M3 Stuart","Northrop Grumman","706186.02","0"),(117,"M3 Stuart","United Technologies Corporation","527587.36","0"),(118,"Panzer I","General Dynamics","807411.66","0"),(119,"Mk VI Crusader","Finmeccanica","768220.85","0"),(120,"Panther","Boeing","513723.84","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (121,"Tiger I ","Northrop Grumman","720974.08","0"),(122,"Panzer II","Finmeccanica","957488.64","0"),(123," Panzer IV","Airbus Group","512312.70","0"),(124,"Panzer II","BAE Systems","868984.38","0"),(125," Panzer III","Finmeccanica","949300.41","0"),(126,"Panzer I","Finmeccanica","796677.49","0"),(127,"Panzer II","General Dynamics","605005.36","0"),(128,"Tiger I ","Finmeccanica","730067.85","0"),(129,"Tiger I ","Airbus Group","532571.89","0"),(130,"Panther","BAE Systems","825842.09","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (131,"Mk VI Crusader","Airbus Group","728240.42","0"),(132,"Tiger II","United Technologies Corporation","678595.74","0"),(133,"Panzer II","BAE Systems","630807.11","0"),(134," Panzer III","BAE Systems","866595.60","0"),(135,"Panther","Raytheon","722746.20","0"),(136,"M3 Stuart","Airbus Group","919707.82","0"),(137,"Tiger II","United Technologies Corporation","576231.94","0"),(138,"Tiger I ","Northrop Grumman","840313.07","0"),(139," Panzer IV","Boeing","731855.89","0"),(140,"Panzer II","Raytheon","943305.29","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (141,"M4 Sherman","Finmeccanica","909272.17","0"),(142," Panzer IV","Northrop Grumman","931478.81","0"),(143,"M4 Sherman","Raytheon","652872.77","0"),(144,"M3 Stuart","United Technologies Corporation","737101.17","0"),(145,"Panzer I","United Technologies Corporation","795169.03","0"),(146,"Mk VI Crusader","Boeing","663184.90","0"),(147,"Panzer I","Airbus Group","772226.63","0"),(148,"Panzer II","BAE Systems","725093.72","0"),(149,"M3 Stuart","Airbus Group","628181.17","0"),(150,"M4 Sherman","United Technologies Corporation","506773.59","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (151,"Tiger II","United Technologies Corporation","979864.88","0"),(152,"Tiger II","Northrop Grumman","639017.30","0"),(153,"Panzer I","Finmeccanica","579232.17","0"),(154,"Tiger I ","Finmeccanica","785487.87","0"),(155,"Panther","Boeing","790362.41","0"),(156," Panzer III","United Technologies Corporation","934819.42","0"),(157,"M4 Sherman","Raytheon","792914.11","0"),(158," Panzer III","Airbus Group","737837.13","0"),(159,"Tiger I ","Northrop Grumman","762312.49","0"),(160,"M3 Stuart","Raytheon","797055.13","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (161,"M4 Sherman","General Dynamics","717625.49","0"),(162,"Panzer I","Northrop Grumman","798421.02","0"),(163," Panzer IV","Boeing","587982.70","0"),(164,"Panzer II","BAE Systems","943484.81","0"),(165," Panzer IV","Raytheon","950855.31","0"),(166,"M3 Stuart","Airbus Group","911123.88","0"),(167,"Mk VI Crusader","General Dynamics","816849.99","0"),(168,"Panther","General Dynamics","646780.32","0"),(169," Panzer III","Airbus Group","528647.15","0"),(170," Panzer IV","Boeing","868420.99","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (171,"Panther","BAE Systems","539458.17","0"),(172," Panzer IV","United Technologies Corporation","622580.57","0"),(173,"Tiger II","BAE Systems","664712.51","0"),(174,"Mk VI Crusader","Finmeccanica","774789.87","0"),(175,"Tiger II","United Technologies Corporation","870794.86","0"),(176,"Tiger II","United Technologies Corporation","619289.45","0"),(177,"M4 Sherman","Raytheon","628749.53","0"),(178," Panzer III","BAE Systems","919521.61","0"),(179,"Tiger I ","General Dynamics","525546.10","0"),(180,"M3 Stuart","General Dynamics","713310.73","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (181,"Mk VI Crusader","United Technologies Corporation","891636.60","0"),(182,"Panther","General Dynamics","776443.02","0"),(183," Panzer III","Raytheon","768547.49","0"),(184,"Churchill","Raytheon","850790.72","0"),(185,"Tiger I ","General Dynamics","591496.18","0"),(186," Panzer III","Raytheon","537709.74","0"),(187," Panzer III","BAE Systems","931279.05","0"),(188,"Panther","BAE Systems","901460.87","0"),(189," Panzer III","General Dynamics","773332.33","0"),(190," Panzer IV","General Dynamics","741838.95","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (191,"Tiger I ","General Dynamics","840857.29","0"),(192,"Panzer I","Northrop Grumman","915898.73","0"),(193,"Tiger I ","BAE Systems","500590.35","0"),(194,"Panzer I","Finmeccanica","750357.30","0"),(195,"Panther","Airbus Group","821307.16","0"),(196,"Tiger I ","United Technologies Corporation","986966.33","0"),(197,"Mk VI Crusader","Finmeccanica","782677.03","0"),(198,"Churchill","Boeing","933236.82","0"),(199,"Panzer I","BAE Systems","854017.73","0"),(200,"Panther","Finmeccanica","981002.59","0");

INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (201,"A1","Kenworth","75285.66","0"),(202,"A7","Lincoln","89686.95","0"),(203,"A7","Acura","88371.51","0"),(204,"Z4","Peugeot","74128.55","0"),(205,"E","Mitsubishi Motors","60727.93","0"),(206,"A5","MINI","95944.88","0"),(207,"A3","GMC","72077.42","0"),(208,"XM3","Ford","88748.52","0"),(209,"A4","Cadillac","81235.63","0"),(210,"A1","MINI","89782.26","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (211,"A7","Renault","53590.73","0"),(212,"A6","Smart","99992.54","0"),(213,"E","Kia Motors","70334.92","0"),(214,"A1","Tata Motors","63083.65","0"),(215,"Reventon","Kia Motors","57506.00","0"),(216,"Santa Fe","FAW","58928.22","0"),(217,"M4","Jeep","74771.79","0"),(218,"A3","Mazda","66361.98","0"),(219,"LaPuta","MINI","75095.92","0"),(220,"M3","Tata Motors","69985.71","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (221,"Pajero","Subaru","64207.49","0"),(222,"Santa Fe","Vauxhall","73999.10","0"),(223,"Pajero","Ford","77940.10","0"),(224,"A1","Dacia","93255.65","0"),(225,"M4","Acura","65070.71","0"),(226,"A7","Daihatsu","73010.71","0"),(227,"A4","General Motors","68802.13","0"),(228,"LaCrosse","GMC","57711.50","0"),(229,"C","FAW","73639.29","0"),(230,"C","General Motors","76046.01","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (231,"A7","Daimler","80901.85","0"),(232,"XM5","Hyundai Motors","96918.06","0"),(233,"A4","Ferrari","74694.25","0"),(234,"Laura","Suzuki","50462.87","0"),(235,"Pajero","Infiniti","51987.01","0"),(236,"XM5","Cadillac","76485.05","0"),(237,"M3","Peugeot","70145.76","0"),(238,"S","Fiat","65868.74","0"),(239,"Moco","General Motors","93037.99","0"),(240,"XM5","MINI","56576.48","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (241,"LaPuta","Maruti Suzuki","56264.76","0"),(242,"E","Seat","70965.51","0"),(243,"A1","Buick","98878.40","0"),(244,"Fitta","Daimler","65622.44","0"),(245,"LaPuta","Honda","90552.40","0"),(246,"Moco","Chevrolet","57668.63","0"),(247,"XM5","Hyundai Motors","59416.32","0"),(248,"LaPuta","FAW","99166.62","0"),(249,"LaPuta","Kia Motors","52179.58","0"),(250,"A6","Porsche","61153.80","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (251,"Reventon","Seat","62129.33","0"),(252,"Pajero","FAW","68700.16","0"),(253,"A6","Acura","92633.70","0"),(254,"A6","Mercedes-Benz","64964.79","0"),(255,"C","Volkswagen","98110.78","0"),(256,"S","General Motors","90405.33","0"),(257,"A8","Ford","92013.96","0"),(258,"M4","Acura","97946.97","0"),(259,"Z4","Mazda","51025.37","0"),(260,"A5","RAM Trucks","50308.12","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (261,"A6","MINI","92338.99","0"),(262,"MR2","RAM Trucks","76509.13","0"),(263,"A5","Chrysler","57068.70","0"),(264,"S","Mahindra and Mahindra","66826.32","0"),(265,"Fitta","Mitsubishi Motors","90508.46","0"),(266,"Laura","Porsche","54839.41","0"),(267,"A1","BMW","65395.88","0"),(268,"MR2","Dongfeng Motor","76849.97","0"),(269,"A4","Ford","57704.65","0"),(270,"Fitta","Nissan","51153.64","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (271,"XM3","Cadillac","90367.36","0"),(272,"Pajero","Lexus","95182.41","0"),(273,"Pinto","FAW","86205.36","0"),(274,"A7","Chrysler","55951.82","0"),(275,"Z4","Smart","87730.43","0"),(276,"A6","Renault","69568.05","0"),(277,"E","Tata Motors","65261.37","0"),(278,"M3","Infiniti","97196.41","0"),(279,"XM3","Ferrari","88959.18","0"),(280,"Pajero","Skoda","70147.87","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (281,"Fitta","Buick","89424.91","0"),(282,"A5","Peugeot","90210.60","0"),(283,"Laura","Mitsubishi Motors","52977.71","0"),(284,"Moco","Chevrolet","58977.19","0"),(285,"Pinto","Peugeot","58022.51","0"),(286,"MR2","General Motors","66611.11","0"),(287,"Moco","Peugeot","62814.63","0"),(288,"XM3","Seat","51776.93","0"),(289,"A6","Cadillac","69474.75","0"),(290,"Laura","Volkswagen","91672.80","0");
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (291,"M4","FAW","98781.66","0"),(292,"A6","BMW","61910.73","0"),(293,"M4","JLR","71712.66","0"),(294,"A7","Lexus","88467.61","0"),(295,"A8","Mercedes-Benz","97031.38","0"),(296,"Z4","Skoda","95069.49","0"),(297,"S","Acura","96493.93","0"),(298,"A5","Mercedes-Benz","56577.69","0"),(299,"S","Suzuki","66897.78","0"),(300,"LaCrosse","FAW","72355.43","0");


INSERT INTO motorcycle (vid,speed,enginecapacity,color) VALUES (1,249,"125","violet"),(2,201,"50","yellow"),(3,236,"250","indigo"),(4,227,"125","green"),(5,233,"600","red"),(6,222,"50","orange"),(7,204,"600","orange"),(8,213,"1000","indigo"),(9,236,"600","violet"),(10,220,"1000","indigo");
INSERT INTO motorcycle (vid,speed,enginecapacity,color) VALUES (11,248,"600","red"),(12,227,"750","blue"),(13,198,"250","blue"),(14,219,"1000","blue"),(15,228,"750","orange"),(16,243,"50","blue"),(17,205,"125","yellow"),(18,202,"125","green"),(19,225,"600","orange"),(20,240,"250","orange");
INSERT INTO motorcycle (vid,speed,enginecapacity,color) VALUES (21,235,"750","violet"),(22,237,"50","indigo"),(23,210,"600","indigo"),(24,208,"1000","orange"),(25,244,"250","red"),(26,238,"125","indigo"),(27,213,"750","violet"),(28,200,"1000","yellow"),(29,239,"50","indigo"),(30,217,"125","indigo");
INSERT INTO motorcycle (vid,speed,enginecapacity,color) VALUES (31,230,"125","red"),(32,216,"50","blue"),(33,209,"50","yellow"),(34,241,"250","blue"),(35,208,"50","orange"),(36,241,"125","blue"),(37,222,"125","blue"),(38,200,"250","indigo"),(39,215,"50","indigo"),(40,236,"1000","orange");
INSERT INTO motorcycle (vid,speed,enginecapacity,color) VALUES (41,216,"250","blue"),(42,224,"400","violet"),(43,248,"125","yellow"),(44,250,"400","red"),(45,232,"750","violet"),(46,239,"400","orange"),(47,245,"1000","green"),(48,193,"250","red"),(49,217,"50","violet"),(50,224,"1000","indigo");
INSERT INTO motorcycle (vid,speed,enginecapacity,color) VALUES (51,230,"750","indigo"),(52,219,"750","blue"),(53,238,"125","red"),(54,250,"400","indigo"),(55,230,"50","yellow"),(56,205,"250","blue"),(57,210,"250","violet"),(58,243,"750","violet"),(59,191,"400","orange"),(60,244,"600","green");
INSERT INTO motorcycle (vid,speed,enginecapacity,color) VALUES (61,212,"750","indigo"),(62,221,"600","red"),(63,205,"50","orange"),(64,236,"750","orange"),(65,242,"125","violet"),(66,193,"50","blue"),(67,223,"400","green"),(68,213,"250","green"),(69,231,"400","red"),(70,212,"400","orange");
INSERT INTO motorcycle (vid,speed,enginecapacity,color) VALUES (71,223,"600","yellow"),(72,224,"400","violet"),(73,229,"125","yellow"),(74,245,"250","green"),(75,211,"400","yellow"),(76,233,"250","yellow"),(77,197,"600","yellow"),(78,214,"50","blue"),(79,202,"125","yellow"),(80,229,"50","yellow");
INSERT INTO motorcycle (vid,speed,enginecapacity,color) VALUES (81,208,"250","yellow"),(82,242,"750","orange"),(83,201,"50","orange"),(84,213,"125","red"),(85,223,"750","red"),(86,190,"50","orange"),(87,232,"400","yellow"),(88,212,"250","orange"),(89,208,"750","blue"),(90,245,"50","violet");
INSERT INTO motorcycle (vid,speed,enginecapacity,color) VALUES (91,198,"125","green"),(92,217,"600","green"),(93,193,"50","violet"),(94,191,"750","indigo"),(95,209,"400","green"),(96,249,"125","violet"),(97,210,"600","red"),(98,197,"600","orange"),(99,221,"750","blue"),(100,217,"250","orange");


INSERT INTO tank (vid,speed,shell,armor) VALUES (101,212,"100",159),(102,225,"105",138),(103,249,"120",69),(104,207,"120",112),(105,209,"75",53),(106,194,"75",154),(107,217,"120",11),(108,238,"120",50),(109,192,"120",9),(110,229,"105",243);
INSERT INTO tank (vid,speed,shell,armor) VALUES (111,194,"105",10),(112,205,"75",108),(113,234,"100",101),(114,191,"105",107),(115,235,"100",86),(116,214,"105",80),(117,199,"120",141),(118,233,"105",199),(119,223,"120",193),(120,215,"120",34);
INSERT INTO tank (vid,speed,shell,armor) VALUES (121,212,"100",72),(122,248,"120",125),(123,235,"100",142),(124,250,"120",195),(125,203,"105",11),(126,240,"105",76),(127,209,"120",116),(128,223,"120",20),(129,218,"105",28),(130,248,"75",213);
INSERT INTO tank (vid,speed,shell,armor) VALUES (131,228,"120",114),(132,231,"120",142),(133,215,"105",58),(134,224,"120",143),(135,191,"120",139),(136,243,"105",140),(137,214,"75",49),(138,197,"105",174),(139,225,"105",132),(140,200,"100",161);
INSERT INTO tank (vid,speed,shell,armor) VALUES (141,191,"105",143),(142,200,"100",200),(143,237,"100",211),(144,200,"120",19),(145,250,"100",201),(146,231,"120",27),(147,208,"100",225),(148,213,"120",162),(149,210,"120",123),(150,232,"100",65);
INSERT INTO tank (vid,speed,shell,armor) VALUES (151,224,"75",118),(152,206,"105",166),(153,202,"100",106),(154,238,"120",193),(155,193,"120",100),(156,191,"120",200),(157,200,"105",222),(158,229,"75",14),(159,221,"120",213),(160,238,"100",170);
INSERT INTO tank (vid,speed,shell,armor) VALUES (161,201,"105",249),(162,192,"120",224),(163,250,"105",234),(164,235,"100",140),(165,213,"105",191),(166,237,"100",239),(167,213,"120",225),(168,206,"120",25),(169,207,"120",125),(170,229,"75",195);
INSERT INTO tank (vid,speed,shell,armor) VALUES (171,229,"105",137),(172,240,"75",250),(173,192,"105",150),(174,190,"105",216),(175,198,"75",48),(176,247,"75",119),(177,214,"105",147),(178,201,"120",34),(179,196,"100",109),(180,232,"75",85);
INSERT INTO tank (vid,speed,shell,armor) VALUES (181,221,"75",126),(182,201,"75",52),(183,224,"105",174),(184,222,"120",78),(185,193,"100",48),(186,250,"105",31),(187,227,"120",223),(188,217,"105",227),(189,221,"75",141),(190,228,"105",73);
INSERT INTO tank (vid,speed,shell,armor) VALUES (191,205,"100",116),(192,239,"120",92),(193,211,"75",22),(194,213,"100",152),(195,246,"105",221),(196,238,"105",56),(197,217,"105",146),(198,241,"100",207),(199,222,"105",114),(200,209,"105",183);

INSERT INTO car (vid,type,fuel,color,speed,enginecapacity) VALUES (201,"SUV","diesel","blue",236,"1300"),(202,"coupe","gasoline","blue",287,"5000"),(203,"sedan","diesel","yellow",286,"2900"),(204,"SUV","gasoline","yellow",261,"3000"),(205,"hatchback","gasoline","red",214,"1000"),(206,"van","diesel","indigo",257,"2500"),(207,"van","gasoline","green",269,"4000"),(208,"hatchback","gasoline","yellow",292,"1800"),(209,"sedan","gasoline","green",219,"1500"),(210,"convertible","gasoline","indigo",252,"1000");
INSERT INTO car (vid,type,fuel,color,speed,enginecapacity) VALUES (211,"convertible","gasoline","indigo",244,"2000"),(212,"coupe","diesel","blue",286,"2900"),(213,"convertible","gasoline","green",275,"1300"),(214,"SUV","diesel","red",300,"2500"),(215,"SUV","gasoline","orange",228,"2800"),(216,"coupe","diesel","violet",209,"2900"),(217,"van","diesel","blue",213,"2500"),(218,"SUV","diesel","blue",232,"2900"),(219,"hatchback","gasoline","violet",218,"2500"),(220,"coupe","diesel","orange",252,"2500");
INSERT INTO car (vid,type,fuel,color,speed,enginecapacity) VALUES (221,"sedan","gasoline","orange",210,"2900"),(222,"sedan","diesel","blue",221,"1800"),(223,"hatchback","diesel","red",229,"1000"),(224,"SUV","gasoline","red",258,"1800"),(225,"van","gasoline","violet",264,"2800"),(226,"sedan","gasoline","indigo",234,"2900"),(227,"hatchback","gasoline","red",287,"2500"),(228,"coupe","diesel","violet",279,"2900"),(229,"SUV","gasoline","blue",229,"1800"),(230,"coupe","gasoline","blue",250,"4000");
INSERT INTO car (vid,type,fuel,color,speed,enginecapacity) VALUES (231,"hatchback","gasoline","yellow",282,"2000"),(232,"SUV","gasoline","yellow",263,"1300"),(233,"convertible","diesel","yellow",226,"2000"),(234,"sedan","gasoline","red",221,"2800"),(235,"van","gasoline","red",269,"1300"),(236,"coupe","diesel","green",246,"1300"),(237,"sedan","gasoline","yellow",219,"2800"),(238,"coupe","gasoline","green",288,"2900"),(239,"hatchback","diesel","blue",263,"4000"),(240,"convertible","diesel","indigo",266,"2800");
INSERT INTO car (vid,type,fuel,color,speed,enginecapacity) VALUES (241,"SUV","gasoline","violet",288,"2900"),(242,"SUV","gasoline","blue",289,"2800"),(243,"SUV","gasoline","blue",297,"1300"),(244,"coupe","gasoline","blue",216,"4000"),(245,"convertible","gasoline","red",211,"2900"),(246,"sedan","diesel","red",203,"800"),(247,"hatchback","diesel","orange",274,"3000"),(248,"hatchback","diesel","blue",270,"1500"),(249,"van","diesel","yellow",280,"2000"),(250,"hatchback","gasoline","red",212,"2000");
INSERT INTO car (vid,type,fuel,color,speed,enginecapacity) VALUES (251,"convertible","diesel","green",217,"5000"),(252,"SUV","diesel","indigo",214,"2900"),(253,"hatchback","gasoline","orange",242,"4000"),(254,"coupe","gasoline","orange",279,"5000"),(255,"hatchback","diesel","green",295,"800"),(256,"van","diesel","red",234,"1300"),(257,"SUV","gasoline","orange",300,"3000"),(258,"SUV","gasoline","yellow",255,"1800"),(259,"SUV","diesel","indigo",300,"2900"),(260,"coupe","diesel","orange",208,"4000");
INSERT INTO car (vid,type,fuel,color,speed,enginecapacity) VALUES (261,"coupe","gasoline","yellow",275,"800"),(262,"hatchback","diesel","red",244,"4000"),(263,"SUV","diesel","violet",253,"4000"),(264,"hatchback","gasoline","orange",268,"1800"),(265,"SUV","diesel","red",233,"2000"),(266,"sedan","diesel","yellow",200,"1000"),(267,"sedan","diesel","red",276,"2000"),(268,"SUV","diesel","blue",270,"2500"),(269,"van","gasoline","red",259,"1300"),(270,"coupe","diesel","orange",299,"1500");
INSERT INTO car (vid,type,fuel,color,speed,enginecapacity) VALUES (271,"hatchback","diesel","violet",245,"1300"),(272,"hatchback","diesel","green",245,"4000"),(273,"sedan","gasoline","blue",225,"2800"),(274,"convertible","gasoline","blue",229,"1500"),(275,"sedan","gasoline","blue",294,"2500"),(276,"convertible","diesel","yellow",234,"2900"),(277,"convertible","gasoline","orange",261,"2800"),(278,"hatchback","diesel","yellow",255,"2000"),(279,"hatchback","gasoline","yellow",266,"800"),(280,"van","gasoline","indigo",295,"800");
INSERT INTO car (vid,type,fuel,color,speed,enginecapacity) VALUES (281,"coupe","diesel","blue",262,"2900"),(282,"coupe","diesel","red",295,"1800"),(283,"sedan","gasoline","orange",282,"1800"),(284,"coupe","gasoline","orange",300,"2000"),(285,"convertible","gasoline","red",299,"800"),(286,"sedan","diesel","violet",223,"4000"),(287,"hatchback","gasoline","red",207,"2900"),(288,"hatchback","gasoline","green",225,"3000"),(289,"sedan","diesel","orange",222,"2500"),(290,"coupe","gasoline","violet",239,"1500");
INSERT INTO car (vid,type,fuel,color,speed,enginecapacity) VALUES (291,"SUV","gasoline","yellow",230,"1800"),(292,"convertible","diesel","yellow",259,"2500"),(293,"hatchback","gasoline","indigo",237,"5000"),(294,"SUV","diesel","indigo",279,"1800"),(295,"coupe","gasoline","orange",214,"4000"),(296,"sedan","gasoline","orange",298,"2500"),(297,"van","diesel","violet",280,"1000"),(298,"van","gasoline","yellow",206,"3000"),(299,"sedan","diesel","blue",238,"800"),(300,"SUV","diesel","yellow",200,"4000");




INSERT INTO People (name,password,username,email,isManager,telephoneNumber) VALUES ("A","A",1,"A@aliquam.ca",1,"010-0000-0000"),("Bryar D. Parrish","YGL04HQB4AU",2,"et.malesuada@Etiam.net",0,"010-5485-1327"),("Anastasia P. Morrow","CWT56QQF2RX",3,"massa@primisinfaucibus.org",0,"010-9822-0337"),("Hu Nieves","GHT83UKZ3KA",4,"enim.Mauris@aliquetPhasellus.net",0,"010-6179-3836"),("Zephania K. Cantrell","OSS39MTF1EX",5,"magna.malesuada.vel@diam.com",0,"010-5485-8315"),("Celeste J. Carney","VDS75HGI5FA",6,"neque@Crasvehicula.org",0,"010-7942-7239"),("Dora S. Guerrero","OEY66XOU9GE",7,"pede.sagittis.augue@lobortis.edu",0,"010-4118-7525"),("Whoopi F. Meadows","LIX63KWL1UA",8,"ut@vestibulumneque.co.uk",0,"010-6886-2862"),("Madeson W. Roman","JHN48GVL9ND",9,"egestas.ligula.Nullam@dapibus.co.uk",0,"010-1273-5525"),("Dale E. Avery","XKX80YRD0UX",10,"pede.et.risus@egetmetus.net",0,"010-1062-8868");
INSERT INTO People (name,password,username,email,isManager,telephoneNumber) VALUES ("Sydnee Yang","EUR17XDV2UI",11,"Morbi.accumsan.laoreet@NulladignissimMaecenas.edu",0,"010-2024-0028"),("Joseph T. Pruitt","TRB37NPJ5PU",12,"egestas.Sed.pharetra@Integer.com",0,"010-7237-1423"),("Chaim K. Copeland","ZXY99PHP2NJ",13,"nec.malesuada.ut@tellus.org",0,"010-5252-0936"),("Serena N. Sweet","KVE18UBP1KD",14,"Suspendisse@Quisqueaclibero.edu",0,"010-4845-2593"),("Francesca A. Porter","BUG78YFQ4AZ",15,"Suspendisse.tristique@auctorvelit.net",0,"010-6618-1404"),("Mannix K. Freeman","OJK78GMW8NK",16,"magna.Ut@nibh.ca",0,"010-8899-0059"),("Victor Q. Villarreal","QRI67PLW9OF",17,"molestie.arcu.Sed@urnasuscipit.co.uk",0,"010-3134-8922"),("Xena Strong","TNR25SVE6QK",18,"facilisis.eget@Nunc.co.uk",0,"010-1010-7343"),("Caleb Lyons","NMH42RWX4FB",19,"vehicula.et.rutrum@egestasurnajusto.co.uk",0,"010-5620-0472"),("Regan Nash","ISH57LTX1WZ",20,"nunc.nulla.vulputate@Cras.com",0,"010-9786-6976");
INSERT INTO People (name,password,username,email,isManager,telephoneNumber) VALUES ("Rafael Larsen","KJY56LSG8KZ",21,"molestie@magnaaneque.co.uk",0,"010-3144-2412"),("Britanney Q. Beard","AEF39BAX1OB",22,"fermentum.risus.at@velit.com",0,"010-4061-4225"),("Xerxes T. Johns","HLN06XQC8NO",23,"Pellentesque@lacinia.org",0,"010-1660-6944"),("Nora N. Velez","FCZ43DOH2CS",24,"eget.massa.Suspendisse@gravidasit.ca",0,"010-7046-0940"),("Chaney Ford","BZG59YQA4VL",25,"tellus.Phasellus@pedenecante.edu",0,"010-8935-4470"),("Forrest Woodward","IWR15ITC7HV",26,"eros.Proin@ante.com",0,"010-0643-1370"),("Serena Lindsay","SBF06XJB8IB",27,"Aliquam@porttitor.co.uk",0,"010-7766-1405"),("Brenda P. Mayer","EDH41ZWN0BL",28,"turpis.vitae@Nuncmaurissapien.net",0,"010-0532-7275"),("Hakeem D. Lowe","NXW03AKW7CP",29,"sed@etmagnisdis.edu",0,"010-8642-0738"),("Troy Guthrie","INE36YGL6KQ",30,"faucibus@Etiamvestibulum.ca",0,"010-9807-6415");
INSERT INTO People (name,password,username,email,isManager,telephoneNumber) VALUES ("Elliott Q. Lewis","UNA21NPV7DI",31,"in@acfacilisis.co.uk",0,"010-2026-6630"),("Zelenia G. Lamb","YXR69XBI9RV",32,"commodo.tincidunt@pedeCum.edu",0,"010-9520-3506"),("Taylor Taylor","LWZ52OMG1CH",33,"mollis.vitae@Morbi.org",0,"010-7315-9297"),("Rudyard Hamilton","HEU08LOB3PP",34,"massa.Integer.vitae@velit.edu",0,"010-1593-3573"),("Hannah P. Craft","DVI20HTK0YM",35,"amet@magnaSuspendisse.org",0,"010-9753-3720"),("Roth M. Clarke","LDT08LIU7XY",36,"eget.odio@purusmaurisa.co.uk",0,"010-5700-8024"),("Xanthus Higgins","PDH84FCW7RE",37,"sed.pede.nec@liberoInteger.edu",0,"010-3366-9499"),("Adria I. Puckett","LKT67RRN2EP",38,"non@Fuscediamnunc.org",0,"010-5460-3520"),("Cade Z. Leach","IYU36ETI0VM",39,"dui@eu.com",0,"010-1376-9353"),("Dakota Y. Decker","IUG96QVL8JF",40,"nibh@acurna.org",0,"010-0306-1778");
INSERT INTO People (name,password,username,email,isManager,telephoneNumber) VALUES ("Mufutau Tanner","NVF52QHF6NU",41,"metus.vitae.velit@euaugueporttitor.net",0,"010-2478-5629"),("Abigail T. Daniels","VTR78JMB2GG",42,"eu.placerat@molestie.ca",0,"010-0033-2361"),("Calvin Z. Porter","HTM11BRD9KY",43,"eu@eratsemper.net",0,"010-7879-1472"),("Griffith Z. Mcclain","UQX95AUW1TL",44,"risus.Donec@augueeutempor.edu",0,"010-9367-1420"),("Piper N. Jackson","ORF26NNS2AR",45,"Cras@Donecfeugiatmetus.ca",0,"010-7322-8663"),("Sacha K. Bryant","WJZ97NBT1FT",46,"arcu.imperdiet.ullamcorper@sedpedeCum.org",0,"010-7332-2166"),("Hamilton C. Bean","GEX85ZHB5IK",47,"in@nec.net",0,"010-6642-0101"),("Herrod Y. Stark","VOA04VYM0ER",48,"sociis.natoque.penatibus@Donectemporest.com",0,"010-1130-7356"),("Claudia Q. Noel","GLN59IGL0UR",49,"non.massa.non@Suspendissecommodotincidunt.com",0,"010-9556-4279"),("Beverly I. Ford","CJY84HLC8LJ",50,"odio@magnaaneque.ca",0,"010-6705-3938");
INSERT INTO People (name,password,username,email,isManager,telephoneNumber) VALUES ("Jeanette Pittman","LXJ40KAH4BN",51,"lectus.a@Phasellus.edu",0,"010-1830-1830"),("Uriah X. Reese","FGM63OOH1OT",52,"penatibus.et.magnis@eu.co.uk",0,"010-0944-5938"),("Jacob Gordon","EPE55KDC5ZN",53,"luctus.aliquet.odio@luctuset.co.uk",0,"010-6384-2916"),("Leah Q. Burt","JPQ74MUG1QB",54,"Ut.nec@Suspendisseacmetus.co.uk",0,"010-3612-7951"),("Brock Z. Mcintyre","JVV61LPG0DR",55,"nascetur.ridiculus.mus@aliquetmolestietellus.com",0,"010-3294-7595"),("Conan S. Baird","SAS69ODD4LO",56,"Phasellus@eget.co.uk",0,"010-4888-4333"),("Keegan Robertson","XPO83SSY5XC",57,"urna.Nullam.lobortis@eratvolutpatNulla.net",0,"010-2424-3230"),("Darryl Baker","MUP69WCV3BA",58,"euismod@viverraMaecenasiaculis.ca",0,"010-3505-9879"),("Harding K. Rojas","FGO11ZVR1UQ",59,"Nunc.sed.orci@disparturient.net",0,"010-3715-3609"),("Scarlett H. Branch","FPQ72JQG4TY",60,"facilisis@CrasinterdumNunc.edu",0,"010-1865-2604");
INSERT INTO People (name,password,username,email,isManager,telephoneNumber) VALUES ("Brandon Rich","ZQM35XKK2KK",61,"Sed.nunc.est@imperdietnecleo.edu",0,"010-7785-1679"),("Lavinia Salinas","NFT25WBI9SQ",62,"adipiscing.elit.Curabitur@lectusquismassa.edu",0,"010-1311-0881"),("Tyler H. Henderson","OUQ64DXQ1PM",63,"porttitor.eros.nec@euismodurna.net",0,"010-9301-7789"),("Roth Snyder","OJA04UHT5EO",64,"euismod.in@magnaLoremipsum.co.uk",0,"010-3123-2086"),("Erica M. Alvarez","WMB10REL2IX",65,"dictum.sapien@etmagnis.ca",0,"010-9946-6040"),("Nehru Lawrence","TJY62QDV5FK",66,"metus@adipiscing.org",0,"010-8178-8847"),("Ina P. Duffy","FXH93VGY4TP",67,"Phasellus.dapibus@dolorDonec.co.uk",0,"010-9858-7883"),("Yoshio Patterson","OFS55SPN7OC",68,"sapien@mifringilla.edu",0,"010-4816-3120"),("Tanner D. Cleveland","PRT33XJM5BK",69,"est.Mauris@convallisligula.com",0,"010-2717-0338"),("Harriet F. Mendez","VPI00XEI4XM",70,"mi.Aliquam.gravida@aliquam.org",0,"010-9720-3555");
INSERT INTO People (name,password,username,email,isManager,telephoneNumber) VALUES ("Fletcher Keller","HRX21KWE4AU",71,"sit@elitpede.edu",0,"010-7747-9147"),("Alexis Stewart","HHS22KVD4RM",72,"per.conubia.nostra@seddolor.com",0,"010-0114-8886"),("Wesley Marquez","RBU04SRT0CX",73,"nostra.per.inceptos@nec.ca",0,"010-6943-2933"),("Tanisha N. Hill","DUE23KMC6ZJ",74,"Mauris.ut.quam@idmagnaet.co.uk",0,"010-1271-4344"),("Cecilia Williams","NYI15BQV0IG",75,"gravida.sit.amet@Donecelementumlorem.ca",0,"010-7135-5794"),("Dustin Heath","FEQ57MTZ7ZQ",76,"tincidunt.nunc@vestibulum.com",0,"010-3055-5793"),("Quintessa Mcpherson","GNL62VBV2LO",77,"at@metusInlorem.org",0,"010-9959-4382"),("Jerry U. Harrison","DLX33JCN8HM",78,"lorem.fringilla.ornare@nuncsedpede.co.uk",0,"010-7994-4055"),("Alexa Z. Dennis","OKH98AWM5GI",79,"consequat@eueuismodac.com",0,"010-8017-9608"),("Dominic Hunter","TTX64JAM4UZ",80,"turpis@enimEtiamgravida.com",0,"010-5978-3635");
INSERT INTO People (name,password,username,email,isManager,telephoneNumber) VALUES ("Tamekah Shaw","CEY27OJE3GP",81,"lorem.luctus.ut@ridiculus.ca",0,"010-8517-6796"),("Dana Dalton","BRW12KMV6JK",82,"aliquam.eros@risusDonec.net",0,"010-3242-7243"),("Brendan H. Bishop","FKB30NID9ZM",83,"ipsum@porttitor.com",0,"010-1132-9895"),("Victor H. Douglas","FWB15SZK6EV",84,"eu.lacus@fermentum.co.uk",0,"010-7171-1747"),("Trevor Wilkins","IKE03TLF1SF",85,"rhoncus@mollislectuspede.ca",0,"010-8874-7886"),("Andrew Atkinson","YVO83JDY2IW",86,"ac.facilisis.facilisis@iaculisaliquetdiam.org",0,"010-7503-8726"),("Harriet F. Daniel","FDP45YRD2JH",87,"mi.felis.adipiscing@magnaa.org",0,"010-6195-9624"),("Asher J. Grimes","ZUO40QZE3LA",88,"Nunc.commodo@nequeSedeget.ca",0,"010-3310-6477"),("Keiko Dawson","PRN00DKT7QW",89,"posuere.vulputate.lacus@nectempus.com",0,"010-7934-4154"),("Barrett R. Burton","DVT58SAG7YO",90,"ipsum@accumsansedfacilisis.co.uk",0,"010-3393-1779");
INSERT INTO People (name,password,username,email,isManager,telephoneNumber) VALUES ("Faith Z. Battle","TFE54DHA1QT",91,"id.ante@elitpede.com",0,"010-1458-9229"),("Gary Lawrence","KQB28JZO1RT",92,"Vivamus.nibh.dolor@auctorvelit.net",0,"010-1493-8523"),("Troy T. Cardenas","SGF78HFT5EU",93,"nunc.sed@Etiam.ca",0,"010-5762-9053"),("Rae E. Mills","GRK81XTM0JM",94,"aliquet.vel.vulputate@Proinsedturpis.org",0,"010-5779-2586"),("Vanna Floyd","KQB87ZMV1KC",95,"mollis.lectus.pede@dapibusidblandit.edu",0,"010-7194-0604"),("Aiko B. Rush","SZX70FUY6YV",96,"a@adipiscing.edu",0,"010-9842-7059"),("Hilel N. Stephens","SSQ57ELV4SU",97,"egestas@mollisPhasellus.org",0,"010-9691-7241"),("Rogan W. Salas","GIJ62UAT5FH",98,"ligula.tortor.dictum@aliquet.com",0,"010-0555-0726"),("Martena Farley","WQA06SKK0ZT",99,"consectetuer@dolor.edu",0,"010-5906-5421"),("Xantha Jones","QRO36VIP4SW",100,"ultricies@Quisqueporttitor.edu",0,"010-4064-9029");

INSERT INTO admin (pid, click) VALUES(1, 0);


INSERT INTO Customer (ranking) VALUES ("E"),("F"),("F"),("F"),("E"),("A"),("F"),("C"),("F"),("A");
INSERT INTO Customer (ranking) VALUES ("A"),("A"),("A"),("B"),("D"),("E"),("C"),("C"),("E"),("D");
INSERT INTO Customer (ranking) VALUES ("F"),("F"),("B"),("B"),("D"),("F"),("D"),("E"),("F"),("B");
INSERT INTO Customer (ranking) VALUES ("B"),("E"),("C"),("E"),("F"),("F"),("C"),("B"),("F"),("A");
INSERT INTO Customer (ranking) VALUES ("F"),("D"),("F"),("A"),("B"),("F"),("F"),("A"),("E"),("C");
INSERT INTO Customer (ranking) VALUES ("E"),("B"),("F"),("C"),("C"),("B"),("F"),("B"),("E"),("C");
INSERT INTO Customer (ranking) VALUES ("B"),("D"),("F"),("F"),("A"),("D"),("D"),("C"),("B"),("C");
INSERT INTO Customer (ranking) VALUES ("E"),("B"),("F"),("C"),("F"),("D"),("F"),("F"),("C"),("A");
INSERT INTO Customer (ranking) VALUES ("D"),("C"),("F"),("E"),("C"),("B"),("E"),("C"),("E"),("C");
INSERT INTO Customer (ranking) VALUES ("E"),("A"),("E"),("A"),("F"),("A"),("F"),("B"),("E"),("A");


INSERT INTO Address (country,postal,city,street) VALUES ("United States","60436","Orlando","4120 Dolor. Street"),("United States","32024","Biloxi","P.O. Box 193, 2388 Tincidunt Rd."),("United States","32405","Naperville","Ap #132-923 Lorem Street"),("United States","97244","Toledo","P.O. Box 527, 7151 Ipsum Avenue"),("United States","83793","Reading","798-8063 Pede. Road"),("United States","42843","Bridgeport","P.O. Box 195, 6026 Velit. Av."),("United States","91847","Colorado Springs","Ap #927-3834 Quis Rd."),("United States","99953","Jackson","838-2460 Libero. Rd."),("United States","56234","Cedar Rapids","P.O. Box 554, 1851 Convallis Road"),("United States","18644","Reading","5060 Ac St.");
INSERT INTO Address (country,postal,city,street) VALUES ("United States","53459","Augusta","Ap #238-7032 Erat. Avenue"),("United States","21471","Montpelier","P.O. Box 677, 8814 Nibh Avenue"),("United States","69742","Waterbury","Ap #257-8495 Mattis. Rd."),("United States","63617","Las Vegas","Ap #823-2605 Volutpat. St."),("United States","86155","Gulfport","Ap #805-9477 Phasellus Avenue"),("United States","47862","Akron","3802 Sed Road"),("United States","12342","Columbus","753-7722 Lacus. Ave"),("United States","76437","Tallahassee","5953 Faucibus. St."),("United States","25532","Reno","P.O. Box 314, 9575 Et Rd."),("United States","31994","Lincoln","1361 Mi, Street");
INSERT INTO Address (country,postal,city,street) VALUES ("United States","28748","Rochester","P.O. Box 419, 5742 Quam. Street"),("United States","38855","Chesapeake","5195 Bibendum Rd."),("United States","55114","Covington","427-6538 Neque St."),("United States","44073","Norfolk","350-7828 Erat Av."),("United States","71238","Kansas City","236-6712 Ac, Rd."),("United States","88894","Baton Rouge","904 Cursus Street"),("United States","20796","Minneapolis","Ap #108-3788 Purus. St."),("United States","22363","Phoenix","9824 Inceptos Street"),("United States","76847","Burlington","7744 Proin Avenue"),("United States","31862","Lewiston","100-2321 Morbi St.");
INSERT INTO Address (country,postal,city,street) VALUES ("United States","70947","Baltimore","641-1168 Euismod Avenue"),("United States","34584","Tallahassee","P.O. Box 132, 5735 Ligula Street"),("United States","88882","Worcester","9493 Metus Avenue"),("United States","61131","Little Rock","5647 Lorem, St."),("United States","89527","Tuscaloosa","9606 Leo. Avenue"),("United States","52952","Rock Springs","P.O. Box 139, 2905 Tincidunt St."),("United States","60561","Bowling Green","Ap #492-253 Integer St."),("United States","24846","Wichita","Ap #628-2253 Nec Rd."),("United States","91770","Kansas City","Ap #335-7008 Velit. St."),("United States","12518","San Diego","169-440 In Road");
INSERT INTO Address (country,postal,city,street) VALUES ("United States","40364","Evansville","7889 Sem. Ave"),("United States","72763","Des Moines","P.O. Box 456, 156 At, Road"),("United States","93968","Shreveport","707-9899 Urna, Avenue"),("United States","73513","Baton Rouge","6204 Rutrum, Road"),("United States","56022","Iowa City","8135 Aliquam Road"),("United States","53095","Fairbanks","8072 Non Rd."),("United States","48354","Meridian","6055 Ligula Avenue"),("United States","77919","Pocatello","Ap #158-3354 Enim. Road"),("United States","45120","Independence","7566 Molestie Road"),("United States","76133","Ketchikan","P.O. Box 179, 171 Mauris Street");
INSERT INTO Address (country,postal,city,street) VALUES ("United States","32283","Meridian","2973 Duis Rd."),("United States","64037","Dallas","P.O. Box 331, 2583 Donec Road"),("United States","84765","Kapolei","P.O. Box 485, 7424 Felis Ave"),("United States","65512","Bear","Ap #591-8061 At St."),("United States","20966","Huntsville","Ap #775-7252 Mauris. Rd."),("United States","93106","Henderson","Ap #409-5340 Integer Rd."),("United States","89053","Miami","592-7034 Luctus Rd."),("United States","30568","Provo","Ap #251-5419 Quisque St."),("United States","61901","Stamford","750-3936 Odio Rd."),("United States","57128","Overland Park","Ap #674-8567 Parturient Rd.");
INSERT INTO Address (country,postal,city,street) VALUES ("United States","44397","Bloomington","Ap #528-5717 Diam Avenue"),("United States","36011","Allentown","1625 Convallis St."),("United States","82075","Des Moines","8283 Et Rd."),("United States","80438","Warren","1283 Lectus. Rd."),("United States","36141","Chandler","Ap #497-9968 Interdum. Street"),("United States","48035","Burlington","5299 Morbi Street"),("United States","18204","Idaho Falls","3712 Tristique Ave"),("United States","52089","Honolulu","Ap #210-1019 Accumsan Av."),("United States","66236","Norfolk","775-2681 Tincidunt St."),("United States","10857","Springfield","196-7655 Praesent Road");
INSERT INTO Address (country,postal,city,street) VALUES ("United States","94622","Seattle","259-6729 Pellentesque St."),("United States","67018","Newport News","P.O. Box 238, 6256 Sapien. Ave"),("United States","39604","Bear","719 Ridiculus Av."),("United States","11348","Nashville","2873 Ut Av."),("United States","76152","Omaha","Ap #389-6023 Nulla St."),("United States","99440","Oklahoma City","1949 Dolor St."),("United States","91342","Gaithersburg","Ap #869-8247 Sollicitudin Ave"),("United States","41977","Bridgeport","215-8849 Nonummy Av."),("United States","59754","Worcester","P.O. Box 467, 9766 Eu Rd."),("United States","27115","Tucson","Ap #955-1053 Curabitur St.");
INSERT INTO Address (country,postal,city,street) VALUES ("United States","44015","Columbus","P.O. Box 673, 9746 Lobortis, Av."),("United States","86070","Richmond","P.O. Box 219, 8134 Non Rd."),("United States","49137","Racine","Ap #184-7142 Dolor Rd."),("United States","95694","Topeka","7601 Nulla St."),("United States","50707","Knoxville","P.O. Box 459, 2950 Amet Rd."),("United States","85876","Rock Springs","Ap #311-5877 Sagittis Rd."),("United States","91575","Reading","6936 Odio, Rd."),("United States","13975","Nashville","P.O. Box 107, 193 Adipiscing Rd."),("United States","49564","Bloomington","9045 Id Road"),("United States","83079","Las Vegas","P.O. Box 568, 5323 Sed St.");
INSERT INTO Address (country,postal,city,street) VALUES ("United States","16054","South Burlington","P.O. Box 228, 1468 Neque. Av."),("United States","53776","Madison","P.O. Box 146, 9469 Nascetur Avenue"),("United States","14660","Little Rock","Ap #295-1461 Aenean Avenue"),("United States","24230","Pike Creek","P.O. Box 482, 3239 Hendrerit Rd."),("United States","73141","Chicago","P.O. Box 953, 2973 Dictum Av."),("United States","95703","Fort Collins","6115 Curabitur Street"),("United States","46461","Aurora","2379 Inceptos Av."),("United States","19785","Green Bay","P.O. Box 375, 5914 Lorem. Rd."),("United States","39051","Columbia","4148 Fringilla, Avenue"),("United States","15033","Independence","226-777 Mi, Rd.");





INSERT INTO Discount (ranking, rate) VALUES ("A",0.5);
INSERT INTO Discount (ranking, rate) VALUES ("B",0.6);
INSERT INTO Discount (ranking, rate) VALUES ("C",0.7);
INSERT INTO Discount (ranking, rate) VALUES ("D",0.8);
INSERT INTO Discount (ranking, rate) VALUES ("E",0.9);
INSERT INTO Discount (ranking, rate) VALUES ("F",1.2);


insert into Location (xValue, yValue) values (40.9128, -433.1308);
insert into Location (xValue, yValue) values (40.9143, -433.13);
insert into Location (xValue, yValue) values (40.914, -433.1288);
insert into Location (xValue, yValue) values (40.9148, -433.1296);
insert into Location (xValue, yValue) values (40.9127, -433.1296);
insert into Location (xValue, yValue) values (40.9146, -433.1294);
insert into Location (xValue, yValue) values (40.9125, -433.1292);
insert into Location (xValue, yValue) values (40.9121, -433.128);
insert into Location (xValue, yValue) values (40.9114, -433.13);
insert into Location (xValue, yValue) values (40.9128, -433.1296);
insert into Location (xValue, yValue) values (40.9125, -433.1307);
insert into Location (xValue, yValue) values (40.913, -433.1302);
insert into Location (xValue, yValue) values (40.9138, -433.128);
insert into Location (xValue, yValue) values (40.914, -433.1284);
insert into Location (xValue, yValue) values (40.9117, -433.1293);
insert into Location (xValue, yValue) values (40.9135, -433.1305);
insert into Location (xValue, yValue) values (40.9137, -433.1287);
insert into Location (xValue, yValue) values (40.9145, -433.1304);
insert into Location (xValue, yValue) values (40.9151, -433.1293);
insert into Location (xValue, yValue) values (40.9144, -433.1298);
insert into Location (xValue, yValue) values (40.9124, -433.1301);
insert into Location (xValue, yValue) values (40.912, -433.1288);
insert into Location (xValue, yValue) values (40.9123, -433.1305);
insert into Location (xValue, yValue) values (40.915, -433.1304);
insert into Location (xValue, yValue) values (40.9114, -433.1296);
insert into Location (xValue, yValue) values (40.9122, -433.1292);
insert into Location (xValue, yValue) values (40.9151, -433.1285);
insert into Location (xValue, yValue) values (40.9143, -433.1299);
insert into Location (xValue, yValue) values (40.9149, -433.1293);
insert into Location (xValue, yValue) values (40.9124, -433.1286);
insert into Location (xValue, yValue) values (40.9118, -433.1281);
insert into Location (xValue, yValue) values (40.9129, -433.1282);
insert into Location (xValue, yValue) values (40.9133, -433.1287);
insert into Location (xValue, yValue) values (40.9128, -433.1283);
insert into Location (xValue, yValue) values (40.9144, -433.1294);
insert into Location (xValue, yValue) values (40.9139, -433.1281);
insert into Location (xValue, yValue) values (40.914, -433.13);
insert into Location (xValue, yValue) values (40.915, -433.1282);
insert into Location (xValue, yValue) values (40.9136, -433.1291);
insert into Location (xValue, yValue) values (40.9136, -433.1295);
insert into Location (xValue, yValue) values (40.9143, -433.1298);
insert into Location (xValue, yValue) values (40.9134, -433.1298);
insert into Location (xValue, yValue) values (40.9132, -433.1283);
insert into Location (xValue, yValue) values (40.9149, -433.1301);
insert into Location (xValue, yValue) values (40.914, -433.1282);
insert into Location (xValue, yValue) values (40.9115, -433.1306);
insert into Location (xValue, yValue) values (40.9129, -433.1304);
insert into Location (xValue, yValue) values (40.9123, -433.1287);
insert into Location (xValue, yValue) values (40.913, -433.1303);
insert into Location (xValue, yValue) values (40.9135, -433.1294);
insert into Location (xValue, yValue) values (40.9114, -433.129);
insert into Location (xValue, yValue) values (40.9142, -433.128);
insert into Location (xValue, yValue) values (40.9139, -433.129);
insert into Location (xValue, yValue) values (40.9141, -433.13);
insert into Location (xValue, yValue) values (40.9132, -433.1289);
insert into Location (xValue, yValue) values (40.9143, -433.1288);
insert into Location (xValue, yValue) values (40.9118, -433.1298);
insert into Location (xValue, yValue) values (40.9135, -433.1297);
insert into Location (xValue, yValue) values (40.9151, -433.1301);
insert into Location (xValue, yValue) values (40.9116, -433.1301);
insert into Location (xValue, yValue) values (40.9125, -433.1297);
insert into Location (xValue, yValue) values (40.9127, -433.1307);
insert into Location (xValue, yValue) values (40.9152, -433.1295);
insert into Location (xValue, yValue) values (40.913, -433.1299);
insert into Location (xValue, yValue) values (40.9139, -433.1291);
insert into Location (xValue, yValue) values (40.9136, -433.1308);
insert into Location (xValue, yValue) values (40.9146, -433.1297);
insert into Location (xValue, yValue) values (40.9129, -433.1302);
insert into Location (xValue, yValue) values (40.9131, -433.1298);
insert into Location (xValue, yValue) values (40.9149, -433.1288);
insert into Location (xValue, yValue) values (40.9142, -433.1288);
insert into Location (xValue, yValue) values (40.9151, -433.1291);
insert into Location (xValue, yValue) values (40.9124, -433.1302);
insert into Location (xValue, yValue) values (40.9122, -433.1294);
insert into Location (xValue, yValue) values (40.9127, -433.1292);
insert into Location (xValue, yValue) values (40.9149, -433.1296);
insert into Location (xValue, yValue) values (40.9152, -433.1292);
insert into Location (xValue, yValue) values (40.9147, -433.1301);
insert into Location (xValue, yValue) values (40.9147, -433.129);
insert into Location (xValue, yValue) values (40.9115, -433.1307);
insert into Location (xValue, yValue) values (40.9137, -433.1286);
insert into Location (xValue, yValue) values (40.9114, -433.1301);
insert into Location (xValue, yValue) values (40.9125, -433.1293);
insert into Location (xValue, yValue) values (40.9132, -433.1308);
insert into Location (xValue, yValue) values (40.9152, -433.128);
insert into Location (xValue, yValue) values (40.9136, -433.1284);
insert into Location (xValue, yValue) values (40.9145, -433.1291);
insert into Location (xValue, yValue) values (40.9143, -433.1306);
insert into Location (xValue, yValue) values (40.9142, -433.1292);
insert into Location (xValue, yValue) values (40.9149, -433.1282);
insert into Location (xValue, yValue) values (40.912, -433.1289);
insert into Location (xValue, yValue) values (40.9148, -433.1288);
insert into Location (xValue, yValue) values (40.9142, -433.1292);
insert into Location (xValue, yValue) values (40.9132, -433.1307);
insert into Location (xValue, yValue) values (40.9129, -433.1287);
insert into Location (xValue, yValue) values (40.9118, -433.1289);
insert into Location (xValue, yValue) values (40.9115, -433.1304);
insert into Location (xValue, yValue) values (40.9132, -433.1297);
insert into Location (xValue, yValue) values (40.9137, -433.1295);
insert into Location (xValue, yValue) values (40.9131, -433.1301);
insert into Location (xValue, yValue) values (40.9149, -433.1291);
insert into Location (xValue, yValue) values (40.9151, -433.1295);
insert into Location (xValue, yValue) values (40.9133, -433.1288);
insert into Location (xValue, yValue) values (40.9127, -433.1285);
insert into Location (xValue, yValue) values (40.9137, -433.128);
insert into Location (xValue, yValue) values (40.9113, -433.1297);
insert into Location (xValue, yValue) values (40.9146, -433.1299);
insert into Location (xValue, yValue) values (40.9129, -433.1281);
insert into Location (xValue, yValue) values (40.9141, -433.1296);
insert into Location (xValue, yValue) values (40.9147, -433.1291);
insert into Location (xValue, yValue) values (40.9118, -433.1288);
insert into Location (xValue, yValue) values (40.9152, -433.1286);
insert into Location (xValue, yValue) values (40.914, -433.1297);
insert into Location (xValue, yValue) values (40.9138, -433.129);
insert into Location (xValue, yValue) values (40.9141, -433.1281);
insert into Location (xValue, yValue) values (40.9122, -433.1305);
insert into Location (xValue, yValue) values (40.9122, -433.1282);
insert into Location (xValue, yValue) values (40.9119, -433.1301);
insert into Location (xValue, yValue) values (40.9118, -433.1293);
insert into Location (xValue, yValue) values (40.9125, -433.1306);
insert into Location (xValue, yValue) values (40.9141, -433.1285);
insert into Location (xValue, yValue) values (40.9116, -433.1293);
insert into Location (xValue, yValue) values (40.9118, -433.1306);
insert into Location (xValue, yValue) values (40.9117, -433.1291);
insert into Location (xValue, yValue) values (40.9116, -433.1281);
insert into Location (xValue, yValue) values (40.9122, -433.128);
insert into Location (xValue, yValue) values (40.9137, -433.1296);
insert into Location (xValue, yValue) values (40.9149, -433.1302);
insert into Location (xValue, yValue) values (40.9151, -433.1291);
insert into Location (xValue, yValue) values (40.9138, -433.1289);
insert into Location (xValue, yValue) values (40.9132, -433.1295);
insert into Location (xValue, yValue) values (40.9123, -433.1284);
insert into Location (xValue, yValue) values (40.9117, -433.1285);
insert into Location (xValue, yValue) values (40.9138, -433.1307);
insert into Location (xValue, yValue) values (40.9148, -433.1282);
insert into Location (xValue, yValue) values (40.9149, -433.1281);
insert into Location (xValue, yValue) values (40.9115, -433.1298);
insert into Location (xValue, yValue) values (40.9146, -433.1296);
insert into Location (xValue, yValue) values (40.912, -433.1293);
insert into Location (xValue, yValue) values (40.9121, -433.1281);
insert into Location (xValue, yValue) values (40.9138, -433.1293);
insert into Location (xValue, yValue) values (40.915, -433.1283);
insert into Location (xValue, yValue) values (40.9122, -433.13);
insert into Location (xValue, yValue) values (40.9128, -433.1295);
insert into Location (xValue, yValue) values (40.9149, -433.1295);
insert into Location (xValue, yValue) values (40.9145, -433.1304);
insert into Location (xValue, yValue) values (40.9129, -433.1283);
insert into Location (xValue, yValue) values (40.9125, -433.1301);
insert into Location (xValue, yValue) values (40.9115, -433.1299);
insert into Location (xValue, yValue) values (40.9126, -433.1281);
insert into Location (xValue, yValue) values (40.9118, -433.1288);
insert into Location (xValue, yValue) values (40.9132, -433.13);
insert into Location (xValue, yValue) values (40.914, -433.1286);
insert into Location (xValue, yValue) values (40.9145, -433.128);
insert into Location (xValue, yValue) values (40.9118, -433.1307);
insert into Location (xValue, yValue) values (40.9146, -433.1288);
insert into Location (xValue, yValue) values (40.9122, -433.1304);
insert into Location (xValue, yValue) values (40.9114, -433.1304);
insert into Location (xValue, yValue) values (40.9125, -433.1285);
insert into Location (xValue, yValue) values (40.9119, -433.1285);
insert into Location (xValue, yValue) values (40.9116, -433.1284);
insert into Location (xValue, yValue) values (40.9132, -433.1306);
insert into Location (xValue, yValue) values (40.9114, -433.1305);
insert into Location (xValue, yValue) values (40.9149, -433.1298);
insert into Location (xValue, yValue) values (40.9135, -433.1284);
insert into Location (xValue, yValue) values (40.9133, -433.1296);
insert into Location (xValue, yValue) values (40.9138, -433.1281);
insert into Location (xValue, yValue) values (40.9133, -433.13);
insert into Location (xValue, yValue) values (40.9132, -433.1288);
insert into Location (xValue, yValue) values (40.9137, -433.1288);
insert into Location (xValue, yValue) values (40.9116, -433.1307);
insert into Location (xValue, yValue) values (40.9119, -433.13);
insert into Location (xValue, yValue) values (40.9131, -433.1305);
insert into Location (xValue, yValue) values (40.9113, -433.1308);
insert into Location (xValue, yValue) values (40.9127, -433.1291);
insert into Location (xValue, yValue) values (40.9151, -433.1305);
insert into Location (xValue, yValue) values (40.9149, -433.128);
insert into Location (xValue, yValue) values (40.9114, -433.1302);
insert into Location (xValue, yValue) values (40.915, -433.1305);
insert into Location (xValue, yValue) values (40.9113, -433.128);
insert into Location (xValue, yValue) values (40.9129, -433.1308);
insert into Location (xValue, yValue) values (40.9115, -433.1308);
insert into Location (xValue, yValue) values (40.9123, -433.1287);
insert into Location (xValue, yValue) values (40.9133, -433.1297);
insert into Location (xValue, yValue) values (40.9152, -433.1303);
insert into Location (xValue, yValue) values (40.9136, -433.1296);
insert into Location (xValue, yValue) values (40.9145, -433.129);
insert into Location (xValue, yValue) values (40.9148, -433.1293);
insert into Location (xValue, yValue) values (40.9142, -433.1299);
insert into Location (xValue, yValue) values (40.9144, -433.1296);
insert into Location (xValue, yValue) values (40.9113, -433.1297);
insert into Location (xValue, yValue) values (40.9126, -433.1303);
insert into Location (xValue, yValue) values (40.915, -433.1292);
insert into Location (xValue, yValue) values (40.9114, -433.1283);
insert into Location (xValue, yValue) values (40.9116, -433.1295);
insert into Location (xValue, yValue) values (40.9148, -433.1293);
insert into Location (xValue, yValue) values (40.9135, -433.1301);
insert into Location (xValue, yValue) values (40.9121, -433.1283);
insert into Location (xValue, yValue) values (40.9126, -433.1296);
insert into Location (xValue, yValue) values (40.9133, -433.13);
insert into Location (xValue, yValue) values (40.912, -433.1285);
insert into Location (xValue, yValue) values (40.9151, -433.1284);
insert into Location (xValue, yValue) values (40.9119, -433.1289);
insert into Location (xValue, yValue) values (40.9121, -433.1296);
insert into Location (xValue, yValue) values (40.9125, -433.1281);
insert into Location (xValue, yValue) values (40.9115, -433.1303);
insert into Location (xValue, yValue) values (40.9116, -433.1292);
insert into Location (xValue, yValue) values (40.9147, -433.1286);
insert into Location (xValue, yValue) values (40.9138, -433.13);
insert into Location (xValue, yValue) values (40.9128, -433.1303);
insert into Location (xValue, yValue) values (40.912, -433.1303);
insert into Location (xValue, yValue) values (40.9147, -433.1283);
insert into Location (xValue, yValue) values (40.9116, -433.1292);
insert into Location (xValue, yValue) values (40.9132, -433.1289);
insert into Location (xValue, yValue) values (40.9136, -433.1283);
insert into Location (xValue, yValue) values (40.9133, -433.1296);
insert into Location (xValue, yValue) values (40.9118, -433.1293);
insert into Location (xValue, yValue) values (40.9135, -433.1297);
insert into Location (xValue, yValue) values (40.9138, -433.1295);
insert into Location (xValue, yValue) values (40.9132, -433.1286);
insert into Location (xValue, yValue) values (40.9132, -433.1305);
insert into Location (xValue, yValue) values (40.9124, -433.1298);
insert into Location (xValue, yValue) values (40.9122, -433.1291);
insert into Location (xValue, yValue) values (40.9122, -433.1283);
insert into Location (xValue, yValue) values (40.9118, -433.129);
insert into Location (xValue, yValue) values (40.9148, -433.1291);
insert into Location (xValue, yValue) values (40.9133, -433.1305);
insert into Location (xValue, yValue) values (40.9115, -433.1303);
insert into Location (xValue, yValue) values (40.9151, -433.1287);
insert into Location (xValue, yValue) values (40.913, -433.1288);
insert into Location (xValue, yValue) values (40.912, -433.1284);
insert into Location (xValue, yValue) values (40.9144, -433.1297);
insert into Location (xValue, yValue) values (40.9139, -433.1294);
insert into Location (xValue, yValue) values (40.9134, -433.1288);
insert into Location (xValue, yValue) values (40.9122, -433.1291);
insert into Location (xValue, yValue) values (40.9148, -433.1303);
insert into Location (xValue, yValue) values (40.9131, -433.1297);
insert into Location (xValue, yValue) values (40.9148, -433.1306);
insert into Location (xValue, yValue) values (40.9128, -433.1293);
insert into Location (xValue, yValue) values (40.9116, -433.13);
insert into Location (xValue, yValue) values (40.9124, -433.1307);
insert into Location (xValue, yValue) values (40.9143, -433.1283);
insert into Location (xValue, yValue) values (40.9133, -433.1298);
insert into Location (xValue, yValue) values (40.9124, -433.1283);
insert into Location (xValue, yValue) values (40.9115, -433.1308);
insert into Location (xValue, yValue) values (40.9148, -433.1307);
insert into Location (xValue, yValue) values (40.9131, -433.1285);
insert into Location (xValue, yValue) values (40.9126, -433.1281);
insert into Location (xValue, yValue) values (40.9126, -433.1302);
insert into Location (xValue, yValue) values (40.9126, -433.1296);
insert into Location (xValue, yValue) values (40.9129, -433.1296);
insert into Location (xValue, yValue) values (40.9137, -433.1298);
insert into Location (xValue, yValue) values (40.9123, -433.1301);
insert into Location (xValue, yValue) values (40.9129, -433.1288);
insert into Location (xValue, yValue) values (40.9141, -433.1307);
insert into Location (xValue, yValue) values (40.9121, -433.1299);
insert into Location (xValue, yValue) values (40.9112, -433.1288);
insert into Location (xValue, yValue) values (40.9144, -433.1282);
insert into Location (xValue, yValue) values (40.9148, -433.1294);
insert into Location (xValue, yValue) values (40.9113, -433.13);
insert into Location (xValue, yValue) values (40.9145, -433.1281);
insert into Location (xValue, yValue) values (40.9114, -433.1297);
insert into Location (xValue, yValue) values (40.9117, -433.1304);
insert into Location (xValue, yValue) values (40.9112, -433.1295);
insert into Location (xValue, yValue) values (40.9132, -433.1295);
insert into Location (xValue, yValue) values (40.9152, -433.1287);
insert into Location (xValue, yValue) values (40.9149, -433.1296);
insert into Location (xValue, yValue) values (40.915, -433.1291);
insert into Location (xValue, yValue) values (40.9141, -433.1288);
insert into Location (xValue, yValue) values (40.9121, -433.1281);
insert into Location (xValue, yValue) values (40.9128, -433.1284);
insert into Location (xValue, yValue) values (40.9125, -433.1293);
insert into Location (xValue, yValue) values (40.9117, -433.1296);
insert into Location (xValue, yValue) values (40.9138, -433.1287);
insert into Location (xValue, yValue) values (40.9129, -433.128);
insert into Location (xValue, yValue) values (40.9152, -433.1302);
insert into Location (xValue, yValue) values (40.9116, -433.1287);
insert into Location (xValue, yValue) values (40.9145, -433.1295);
insert into Location (xValue, yValue) values (40.9136, -433.1305);
insert into Location (xValue, yValue) values (40.9138, -433.1298);
insert into Location (xValue, yValue) values (40.9117, -433.1284);
insert into Location (xValue, yValue) values (40.9116, -433.1302);
insert into Location (xValue, yValue) values (40.9136, -433.128);
insert into Location (xValue, yValue) values (40.9113, -433.1306);
insert into Location (xValue, yValue) values (40.9115, -433.129);
insert into Location (xValue, yValue) values (40.9116, -433.1287);
insert into Location (xValue, yValue) values (40.9131, -433.1296);
insert into Location (xValue, yValue) values (40.9113, -433.1289);
insert into Location (xValue, yValue) values (40.9143, -433.1298);
insert into Location (xValue, yValue) values (40.915, -433.1282);
insert into Location (xValue, yValue) values (40.9151, -433.1298);
insert into Location (xValue, yValue) values (40.9144, -433.1282);
insert into Location (xValue, yValue) values (40.9133, -433.1305);
insert into Location (xValue, yValue) values (40.9145, -433.1292);
insert into Location (xValue, yValue) values (40.9145, -433.1292);
insert into Location (xValue, yValue) values (40.9129, -433.1305);
insert into Location (xValue, yValue) values (40.9126, -433.1281);
insert into Location (xValue, yValue) values (40.9152, -433.1286);
insert into Location (xValue, yValue) values (40.9137, -433.1281);
insert into Location (xValue, yValue) values (40.9124, -433.1284);
