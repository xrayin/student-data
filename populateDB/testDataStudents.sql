INSERT INTO classes (name, start_date, end_date, lecturers, locations, student_sets) VALUES ("classOne", CURDATE(), CURDATE(), "Mister Test", "Location Test", "Student group sets A B C" );
INSERT INTO classes (name, start_date, end_date, lecturers, locations, student_sets) VALUES ("classTwo", CURDATE(), CURDATE(), "Mister Test", "Location Test", "Student group sets A B C" );
INSERT INTO classes (name, start_date, end_date, lecturers, locations, student_sets) VALUES ("classThree", CURDATE(), CURDATE(), "Mister Test", "Location Test", "Student group sets A B C" );
INSERT INTO classes (name, start_date, end_date, lecturers, locations, student_sets) VALUES ("classFour", CURDATE(), CURDATE(), "Mister Test", "Location Test", "Student group sets A B C" );

INSERT INTO students (name, email) VALUES ("chi", "chi@school.nl");
INSERT INTO students (name, email) VALUES ("boeng", "boeng@school.nl");

INSERT INTO groups (name) VALUES ("groupOne");
INSERT INTO groups (name) VALUES ("groupTwo");
INSERT INTO groups (name) VALUES ("groupThree");
INSERT INTO groups (name) VALUES ("groupFour");

INSERT INTO subjects (name, class_id, student_id) VALUES ("subjectOne", 1, 1);
INSERT INTO subjects (name, class_id, student_id) VALUES ("subjectTwo", 2, 1);
INSERT INTO subjects (name, class_id, student_id) VALUES ("subjectThree", 3, 2);
INSERT INTO subjects (name, class_id, student_id) VALUES ("subjectFour", 4, 2);

INSERT INTO schedules (group_id, subject_id, student_id) VALUES (1, 1, 1);
INSERT INTO schedules (group_id, subject_id, student_id) VALUES (2, 2, 1);
INSERT INTO schedules (group_id, subject_id, student_id) VALUES (3, 3, 2);
INSERT INTO schedules (group_id, subject_id, student_id) VALUES (4, 4, 2);

INSERT INTO group_enrollments (student_id, group_id) VALUES (1, 1);
INSERT INTO group_enrollments (student_id, group_id) VALUES (1, 2);
INSERT INTO group_enrollments (student_id, group_id) VALUES (2, 3);
INSERT INTO group_enrollments (student_id, group_id) VALUES (2, 4);

INSERT INTO class_enrollments (group_id, class_id) VALUES (1, 1);
INSERT INTO class_enrollments (group_id, class_id) VALUES (1, 2);
INSERT INTO class_enrollments (group_id, class_id) VALUES (2, 3);
INSERT INTO class_enrollments (group_id, class_id) VALUES (2, 4);
INSERT INTO class_enrollments (group_id, class_id) VALUES (3, 1);
INSERT INTO class_enrollments (group_id, class_id) VALUES (3, 2);
INSERT INTO class_enrollments (group_id, class_id) VALUES (4, 3);
INSERT INTO class_enrollments (group_id, class_id) VALUES (4, 4);