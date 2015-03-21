use psrivastava;
drop table ISLL_ProficiencyTest;
drop table ISLL_SelfEfficacyTest;
drop table ISLL_AnxietyTest;
drop table ISLL_Appointment;
drop table ISLL_PatientToStudent;
drop table ISLL_Patient;
drop table ISLL_Student;
drop table ISLL_Users;
drop table isll_sys_reviews;


select * from EIG_Making_A_Difference_tbl;

create table isll_sys_reviews
(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(50),
	authorYear varchar(100),
	countryCity varchar(100),
	studyDesign text,
	description  text,
	primaryDisease varchar(500),
	coMorbidities varchar(500),
	dependentVariables text,
	ConceptualTheoreticalFramework varchar(500),
	interventionDescription varchar(100),
	results  varchar(500),
	limitationsOfStudy  varchar(500),
	strengthsOfStudy  varchar(500),
	comments text,
	foreign key (email) references isll_users(email)
) ENGINE = MyISAM;

select * from isll_sys_reviews
select * from isll_users
CREATE TABLE isll_users
(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) not null UNIQUE,
    name varchar(100),
    password varchar(100)
) ENGINE = MyISAM;