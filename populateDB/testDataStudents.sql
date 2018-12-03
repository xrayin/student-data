-- INSERT INTO classes (name, start_date, end_date, lecturers, locations, student_sets) VALUES ("classOne", CURDATE(), CURDATE(), "Mister Test", "Location Test", "Student group sets A B C" );
-- INSERT INTO classes (name, start_date, end_date, lecturers, locations, student_sets) VALUES ("classTwo", CURDATE(), CURDATE(), "Mister Test", "Location Test", "Student group sets A B C" );
-- INSERT INTO students (name, email) VALUES ("chi", "chi@school.nl");
-- INSERT INTO students (name, email) VALUES ("boeng", "boeng@school.nl");
-- INSERT INTO groups (name, class_id, student_id) VALUES ("groupOne", 1, 1);
-- INSERT INTO groups (name, class_id, student_id) VALUES ("groupTwo", 2, 2);
-- INSERT INTO subjects (name, class_id, student_id) VALUES ("subjectOne", 1, 1);
-- INSERT INTO subjects (name, class_id, student_id) VALUES ("subjectTwo", 2, 2);
-- INSERT INTO schedules (group_id, subject_id, student_id) VALUES (1, 1, 1);
-- INSERT INTO schedules (group_id, subject_id, student_id) VALUES (2, 2, 2);

SELECT * FROM schedules;