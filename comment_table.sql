CREATE TABLE dvcEvents (
    eventid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    date datetime NOT NULL,
    summary TEXT NOT NULL,
    message TEXT NOT NULL
);