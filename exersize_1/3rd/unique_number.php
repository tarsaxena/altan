<?php

/*========================Using Linux==============*/

#!/bin/bash
# Syntax: $0 filename   
# The input is assumed to be a .tsv file

FILE="$1"

cols=$(sed -n 1p $FILE | tr -cd '\t' | wc -c)
cols=$((cols + 2 ))
i=0
for ((i=1; i < $cols; i++))
do
  echo Column $i ::
  cut -f $i < "$FILE" | sort | uniq -c
  echo
done

/*========================Using mysql==============*/

CREATE TABLE `incr` (
  `Id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
Secondly create a stored procedure like this:

DELIMITER ;;
CREATE PROCEDURE dowhile()
BEGIN
  DECLARE v1 INT DEFAULT 5;
  WHILE v1 > 0 DO
    INSERT incr VALUES (NULL);
    SET v1 = v1 - 1;
  END WHILE;
END;;
DELIMITER ;
Lastly call the SP:

CALL dowhile();
SELECT * FROM incr;




?>