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
	pid INTEGER NOT NULL,
  name VARCHAR(20),
  password INTEGER,
  email VARCHAR(256),
  isManager  BOOLEAN,
  telephoneNumber INTEGER,
  PRIMARY KEY (pid)
);
CREATE TABLE Customer (
	pid INTEGER NOT NULL,
  ranking VARCHAR(32),
  address VARCHAR(32),
  fax  REAL,
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
INSERT INTO `Vehicle` (`vid`,`model`,`maker`,`price`,`isrent`) VALUES (91,"Road King","Fiat","23241.55","0"),(92,"Bonneville","Vauxhall","16460.13","0"),(93,"Bonneville","Citroën","17376.71","0"),(94,"Katana","GMC","8692.36","0"),(95,"Black Bird","BMW","13630.77","0"),(96,"Bullet","JLR","11690.68","0"),(97,"Black Bird","GMC","26071.86","0"),(98,"Super Glide","Jeep","22931.58","0"),(99,"Bonneville","Porsche","26567.52","0"),(100,"Bonneville","Dodge","21058.30","0");


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
