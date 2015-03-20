use psrivastava;

CREATE TABLE isll_users
(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) not null UNIQUE,
    name varchar(30),
    password varchar(30)
) ENGINE = MyISAM;

create table isll_sys_reviews
(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	email VARCHAR(50),
	authorYear varchar(50),
	countryCity varchar(50),
	studyDesign varchar(50),
	description  varchar(50),
	primaryDisease varchar(50),
	coMorbidities varchar(50),
	dependentVariables varchar(50),
	ConceptualTheoreticalFramework varchar(50),
	interventionDescription varchar(50),
	results  varchar(50),
	limitationsOfStudy  varchar(50),
	strengthsOfStudy  varchar(50),
	comments varchar(50),
	foreign key (email) references isll_users(email)
) ENGINE = MyISAM;

create table ISLL_Patient
(
PatientId int primary key,
PatientName varchar(100),
Consent bit,
DateOfConsent date,
Cohort int,
EligibilityTestResult bit
)ENGINE=MyISAM;

create table ISLL_Student
(
StudentId int primary key,
StudentName varchar(100),
Consent bit,
DateOfConsent date,
Cohort int,
EligibilityTestResult bit
)ENGINE=MyISAM;

create table ISLL_PatientToStudent
(
PatientToStudentId int primary key,
StudentId int,
PatientId int,
StartDate date,
NextAppointmentDate datetime,
foreign key (StudentId) references ISLL_Student(StudentId),
foreign key (PatientId) references ISLL_Patient(ParentId)
)ENGINE=MyISAM;

create table ISLL_Appointment
(
AppointmentId int primary key,
PatientToStudentId int,
AppointmentDate datetime,
foreign key (PatientToStudentId) references ISLL_PatientToStudent(PatientToStudentId)
)ENGINE=MyISAM;

create table ISLL_AnxietyTest
(
TestId int primary key,
PatientId int,
DateofTest date,
Repetition varchar(10),
Q1Response varchar(10),
Q2Response varchar(10),
CalculatedScore int,
foreign key (PatientId) references ISLL_Patient(ParentId)
)ENGINE=MyISAM;

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
)ENGINE=MyISAM;

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
)ENGINE=MyISAM;

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

insert into ISLL_Patient values (1100, "Mike Thomas", 1, CURDATE(), 1, 1);
insert into ISLL_Patient values (1101, "John Doe", 1, CURDATE(), 1, 1);
insert into ISLL_Patient values (1202, "Jane Doe", 1, CURDATE(), 2, 1);

insert into ISLL_Student values (110, "Ethan Hunt", 1, CURDATE(), 1, 1); 
insert into ISLL_Student values (121, "Julia Roberts", 1, CURDATE(), 2, 1);

insert into ISLL_PatientToStudent values (1, 110, 1100, CURDATE(), CURDATE());
insert into ISLL_AnxietyTest values (1, 1100, CURDATE(), "begin", "0", "1", 0.34);
insert into ISLL_SelfEfficacyTest values (1, 1100, CURDATE(), "begin", "0", "1", 0.67);
insert into ISLL_ProficiencyTest values (1, 110, CURDATE(), "begin", "0", "1", 0.58);
insert into ISLL_Appointment values (1,1, CURDATE());
