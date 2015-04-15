use psrivastava;

CREATE TABLE isll_users
(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) not null UNIQUE,
    name varchar(100),
    password varchar(100)
) ENGINE = InnoDB;

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
	interventionDescription text,
	results text,
	limitationsOfStudy  varchar(500),
	strengthsOfStudy  varchar(500),
	comments text,
	initials varchar(100), 
	foreign key (email) references isll_users(email)
) ENGINE = InnoDB;

create table isll_patients
(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
PatientId int unique,
PatientName varchar(100),
Consent tinyint,
DateOfConsent date,
Cohort int,
EligibilityTestResult tinyint
)ENGINE=InnoDB;

create table isll_students
(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
StudentId int primary key,
StudentName varchar(100),
Consent tinyint,
DateOfConsent date,
Cohort int,
EligibilityTestResult tinyint
)ENGINE=InnoDB;

create table ISLL_PatientToStudent
(
PatientToStudentId int primary key,
StudentId int,
PatientId int,
StartDate date,
NextAppointmentDate datetime,
foreign key (StudentId) references ISLL_Student(StudentId),
foreign key (PatientId) references ISLL_Patient(ParentId)
)ENGINE=InnoDB;

create table ISLL_Appointment
(
AppointmentId int primary key,
PatientToStudentId int,
AppointmentDate datetime,
foreign key (PatientToStudentId) references ISLL_PatientToStudent(PatientToStudentId)
)ENGINE=InnoDB;

create table isll_anxiety_tests
(
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
PatientId int,
DateofTest date,
Repetition varchar(10),
Q1Response int,
Q2Response int,
Q3Response int,
Q4Response int,
Q5Response int,
Q6Response int,
Q7Response int,
CalculatedScore int,
foreign key (PatientId) references isll_patient(PatientId)
)ENGINE=InnoDB;

create table ISLL_SelfEfficacyTest
(
TestId int primary key,
PatientId int,
DateofTest date,
Repetition varchar(10),
Q1Response varchar(10),
Q2Response varchar(10),
CalculatedScore int,
foreign key (PatientId) references ISLL_Patient(ParentId)
)ENGINE=InnoDB;

create table ISLL_ProficiencyTest
(
TestId int primary key,
StudentId int,
DateofTest date,
Repetition varchar(10),
Q1Response varchar(10),
Q2Response varchar(10),
CalculatedScore int,
foreign key (StudentId) references ISLL_Student(StudentId)
)ENGINE=InnoDB;

create view PatientStudentvw as
select
p.PatientId as PatientId, p.Consent as PatientConsent, p.Cohort as Cohort, p.EligibilityTestResult as PEligibilityTestResult,
s.StudentId as StudentId, s.Consent as StudentConsent, s.EligibilityTestResult as SEligibilityTestResult,
pt.CalculatedScore as ProficiencyScore, pt.DateOfTest as ProficiencyDate, pt.Repetition as ProficiencyRepetition, 
at1.DateOfTest as AnxietyTestDate, at1.Repetition as AnxietyTestRepetition, 
set1.DateOfTest as SelfEfficacyDate, set1.Repetition as SelfEfficacyRepetition
from ISLL_Student s
join ISLL_PatientToStudent p2s 
on s.StudentId = p2s.StudentId
join ISLL_Patient p
on p2s.PatientId = p.PatientId
join ISLL_ProficiencyTest pt on pt.StudentId = s.StudentId
join ISLL_AnxietyTest at1 on p.PatientId = at1.PatientId
join ISLL_SelfEfficacyTest set1 on p.PatientId = set1.PatientId
;


select * from PatientStudentvw;
select * from ISLL_Patient;
select * from ISLL_Student;
select * from ISLL_ProficiencyTest; 
select * from ISLL_SelfEfficacyTest;
select * from ISLL_AnxietyTest;
select * from ISLL_Appointment;
select * from ISLL_PatientToStudent;

insert into ISLL_Patients values (1, 1100, "Mike Thomas", 1, CURDATE(), 1, 1);
insert into ISLL_Patients values (2, 1101, "John Doe", 1, CURDATE(), 1, 1);
insert into ISLL_Patients values (3, 1202, "Jane Doe", 1, CURDATE(), 2, 1);

insert into ISLL_Students values (1, 110, "Ethan Hunt", 1, CURDATE(), 1, 1); 
insert into ISLL_Students values (2, 121, "Julia Roberts", 1, CURDATE(), 2, 1);

insert into ISLL_PatientToStudent values (1, 110, 1100, CURDATE(), CURDATE());
insert into ISLL_AnxietyTest values (1, 1100, CURDATE(), "begin", "0", "1", 0.34);
insert into ISLL_SelfEfficacyTest values (1, 1100, CURDATE(), "begin", "0", "1", 0.67);
insert into ISLL_ProficiencyTest values (1, 110, CURDATE(), "begin", "0", "1", 0.58);
insert into ISLL_Appointment values (1,1, CURDATE());

create table isll_Honduras_Data_Visit1_patients
(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	PatientId int Unique,
	village varchar(50),
	age float,
	clinicDate date,
	sex varchar(10),
	height float,
	weight float,
	glucose int,
	systolicBP int,
	diastolicBP int,
	concern varchar(100),
	treatment varchar(100),
	diabeticYears float,
	medications varchar(100),
	insulin varchar(50),
	physicianName varchar(100),
	physicianfrequency varchar(50),
	neuropathyRightFoot tinyint,
	neuropathyLeftFoot tinyint,
	neuropathyRightHand tinyint,
	neuropathyLeftHand tinyint,
	ulcerLocation varchar(50),
	lengthOfTimeOfUlcer varchar(50),
	treatmentOfUlcer varchar(50),
	breakfast varchar(50),
	lunch varchar(50),
	supper varchar(50),
	SmokePerDay varchar(50),
	DrinkPerDay varchar(50),
	ToiletFacility  varchar(50),
	WhereDoYouBathe  varchar(50),
	WaterAvailability  varchar(50),
	HelpAtHome varchar(50),
	CellPhone tinyint,
	CellPhoneCamera tinyint,
	CellPhoneTakenPicture tinyint,
	CellPhoneSentPicture tinyint,
	CellPhoneText tinyint
	
)ENGINE=InnoDB;