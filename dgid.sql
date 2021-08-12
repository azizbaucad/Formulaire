drop table agent ;
Create TABLE `Agent`(
		`id_a` int(11) NOT NUll AUTO_INCREMENT ,
    	 `nom_u` varchar(255) ,
    	`prenom_u` varchar(255) ,
    	`image` varchar(255),
        PRIMARY KEy (`id_a`)
) ENGINE=INNODB DEFAULT CHARset=latin1 AUTO_INCREMENT = 1 ;

drop table centre ;
CREATE TABLE `centre` (
	`id_c` int(11) NOT NULL AUTO_INCREMENT ,
    `Nom_centre` varchar(255) NOT NULL ,
    PRIMARY KEY (`id_c`) ,
    KEy (`Nom_centre`)
) ENGINE=INNODB DEFAULT CHARset=latin1 AUTO_INCREMENT = 1 ;
drop table d_compte ;
CREATE TABLE `d_compte` (
  `id_cpt` int(11) NOT NULL AUTO_INCREMENT,
  `id_c` int(11) NOT NULL,
   `id_a` int(11) NOT NULL,
    `password` varchar(255) NOT NULL,
   PRIMARY KEY (`id_cpt`),
  KEY `id_c` (`id_c`),
  KEY `id_a` (`id_a`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- les fonctions associes au requetes ------------
Achat::GetAllPag(3) 
-- la fonction permettant de recuperer le nom dans compte
-- et de l'associer avec la date
   SELECT * from br b , compte c
where c.id_cpt = b.id_cpt
and c.nom_u like '$re'
-- Fait presque la meme chose qu celui en haut :
-- Les 2 requtes sont complémentaires
  Achat::GetAll(1)
  SELECT * from br b , compte c
where c.id_cpt=b.id_cpt
and c.nom_u like '$re'
--
  Achat::DeByIdA()
  Delete from br where id_br='$id'
  --
  Founisseur::afficherAll()
    Select * from compte
--
  Achat::AddAchat($fo ,$dt)
  INSERT into `br` (`id_br`,`id_cpt`,`date`)
  values ('','$fo','$dt') ;

  -----------------------------------la requete de concatenation-------------------
  CREATE TABLE Employee
(
  FirstName VARCHAR(20),
  LastName VARCHAR(20),
  FullName AS CONCAT(FirstName,' ',LastName)
)

INSERT INTO Employee VALUES ('Rocky','Jeo')

SELECT * FROM Employee

----------------------------------------------------------
CREATE TABLE detail_compte
(
  `id_cpt` int(11) NOT NULL AUTO_INCREMENT,
  `nom_u` varchar(255) ,
  `prenom_u` varchar(255) ,
  `Nom_centre` varchar(255),
  `password` varchar(255),
  `Login` varchar(255) AS CONCAT(`Nom_centre`,' ',`id_cpt`),
   PRIMARY KEy (`id_cpt`)
)ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=01 ;

INSERT INTO `detail_compte`(`id_cpt`, `nom_u`, `prenom_u`, `Nom_centre`,`password`,`Login`)
VALUES ('','ba','Aziz','PA','test'),
        ('','ka','Aziz','CA','Admin');


  ----La requte Final
----------------------------------------------------------------------
select * from compte , br , d_br 
where br.id_cpt=compte.id_cpt
And d_br.id_br=br.id_br
-------------------------- -------------------------------------------
drop TABLE compte ;
Create table compte AS SELECT d_compte.id_cpt , Concat(centre.Nom_centre , d_compte.id_a) as login , 
agent.nom_u , agent.prenom_u , d_compte.password , agent.image
from centre , agent , d_compte
where centre.id_c = d_compte.id_c
and d_compte.id_a = agent.id_a ;

INSERT INTO `agent`(`id_a`, `nom_u`, `prenom_u`, `image`)
VALUES ('','ba','Aziz','test'),
        ('','seck','Lamin','test'),
        ('','Diagne','Madieye','test'),
        ('','Fall','Cheikh','test');
        
INSERT INTO `centre`(`id_c`, `nom_centre`)
VALUES ('','PA'),
        ('','GW'),
        ('','DP'),
        ('','KL');
       
INSERT INTO `d_compte`(`id_cpt`, `id_c`, `id_a`, `password`)
VALUES ('',1,1,'test'),
        ('',2,2,'test'),
        ('',3,3,'test'),
        ('',3 ,3 ,'test');

----------------------------------------------------------------------------------------------------------


CREATE TABLE IF NOT EXISTS `compte_autorise` (
  `id_c` int(11) NOT NULL,
  `id_cpt` int(11) NOT NULL,
  PRIMARY KEY (`id_c`,`id_cpt`),
  KEY `id_cpt` (`id_cpt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `compte_autorise` (`id_c`, `id_cpt`) VALUES
(1, 24),
(1, 25),
(1, 26),
(2, 24),
(2, 26),
(2, 27),
(3, 25);

drop table `compte`;

CREATE TABLE IF NOT EXISTS `compte` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `nom_u` varchar(30) NOT NULL,
  `prenom_u` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=01 ;

INSERT INTO `compte` (`id_c`,`login`, `nom_u`, `prenom_u`, `password`) VALUES
(2, 'admin', 'Ndiaye', 'Cheikh', 'admin'),
(24, 'test', 'Ba', 'Aziz', 'test'),
(25, 'test', 'Dieye', 'Sadikh',  'test'),
(26, 'test', 'Fall', 'Ibou',  'test'),
(27, 'test', 'Ba', 'Laye',  'test');

drop table `centre`;
CREATE TABLE IF NOT EXISTS `centre` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cntre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=01 ;



INSERT INTO `centre` (`id_c`, `nom_centre`) VALUES
(1, 'PA'),
(2, 'DP'),
(3, 'GW');

----------------------------------------
SELECT compte.id_cpt, compte.nom_u , compte.prenom_u,  CONCAT(centre.Nom_centre,d_compte.id_cpt) as login
		
		                 FROM `compte` , `centre` , `d_compte` 
						 where centre.id_c=d_compte.id_c
						 And compte.id_cpt=d_compte.id_cpt
						 
						  And compte.id_cpt=$user

--------------------Rank requete------------------------------------------------------------------

SELECT    a.first_name,
      a.id,
      a.gender,
      
        count(b.id)+1 as rank , concat(a.gender,count(b.id)+1)
FROM  person a left join person b on a.id>b.id and a.gender=b.gender 
group by  a.first_name,
      a.id,
      a.gender
order by a.gender , a.id

---------------------------Rank Top---------------------------------------------------

SELECT    ca.id_cpt,
      
      ca.centre,
      
        count(cb.id_cpt)+1 as rank , concat(ca.centre,count(cb.id_cpt)+1)
FROM  compte ca left join compte cb on ca.id_cpt>cb.id_cpt and ca.centre=cb.centre
group by  ca.id_cpt,
      
      ca.centre
order by ca.centre , ca.id_cpt


---------------------------------------------------------------------

drop table `t1` ;
CREATE TABLE t1 (prefix CHAR(4) NOT NULL, id INT UNSIGNED AUTO_INCREMENT NOT NULL,  
PRIMARY KEY(prefix,id)) Engine = MyISAM;
INSERT INTO t1(prefix) VALUES ('PA'),('PA'),('KM'),('KM');
SELECT t1.prefix , t1.id , Concat(t1.prefix,t1.id) FROM t1;

