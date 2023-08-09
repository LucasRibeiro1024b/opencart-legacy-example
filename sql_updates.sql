ALTER TABLE oc_review ADD type tinyint(1) AFTER status;
ALTER TABLE oc_review ADD externallink varchar(255) AFTER type;
