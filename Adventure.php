<?php
$conn = new mysqli(

    "eu-cdbr-azure-west-c.cloudapp.net"
    "befd2db9fe76ad"
    "5a698004"
    "Adventure"
);

if ($conn->connect_error) {
    die("Connection has failed " . $conn->connect_error);
}

/* sql to create the ADVENTURE table */
$sql = "CREATE TABLE Adventure Populate (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
adventID       CHAR(4),
advent_name    VARCHAR(60) NOT NULL ,
advent_country VARCHAR(20) NOT NULL ,
tagID          CHAR (4),
userID         CHAR (4),

CONSTRAINT pk_adventID PRIMARY KEY adventID,
CONSTRAINT fk_tagID FOREIGN KEY (tagID) REFERENCES Tags (tagID)
CONSTRAINT fk_userID FOREIGN KEY (userID) REFERENCES Users (userID)

) ENGINE = MYISAM ;
";
INSERT INTO Adventures (aventID, advent_name, advent_country, tagID, userID) VALUES ('AD01', 'A trip to Spain','Spain', 'T001', 'U001');
 INSERT INTO Adventures (aventID, advent_name, advent_country, tagID, userID) VALUES ('AD02', 'A few days in Glasgow','Glasgow', 'Scotland', 'T002', 'U001');
 INSERT INTO Adventures (aventID, advent_name, advent_country, tagID, userID) VALUES ('AD03', 'Stoneheaven','Scotland', 'UK','T002', 'U001');
-INSERT INTO Adventures (aventID, advent_name, advent_country, tagID, userID) VALUES ('AD04', 'Prague, Czech Republic', 'T006', 'U002');
+INSERT INTO Adventures (aventID, advent_name, advent_country, tagID, userID) VALUES ('AD04', 'Prague', 'Prague, Czech Republic', 'T006', 'U002');
 INSERT INTO Adventures (aventID, advent_name, advent_country, tagID, userID) VALUES ('AD05', 'Enjoy the romance', 'Paris, France', 'T003', 'U002');
 INSERT INTO Adventures (aventID, advent_name, advent_country, tagID, userID) VALUES ('AD06', 'More from France', 'Rouen, France', 'T003', 'U002');
 INSERT INTO Adventures (aventID, advent_name, advent_country, tagID, userID) VALUES ('AD07', 'The city that never Sleeps', 'New York, USA', 'T005', 'U003');

if ($conn->query($sql) === TRUE) {
    echo "Table Adventure created";
} else {
    echo "Error found creating table " . $conn->error;
}

$conn->close();
?>