
//query is not provide to me so i will crate a sql query myself....


sytex
CREATE VIEW view_name AS
SELECT column1, column2, ...
FROM table_name
WHERE condition;



CREATE VIEW copy_image
AS 
SELECT 
    title, 
    alt, 
    thumb_img
FROM
    images