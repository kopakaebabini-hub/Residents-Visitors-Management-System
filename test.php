<?php
mail('kopakaebabini@yahoo.com', 'test', 'tecket pls','From: kopakaebabini@gmail.com')
  ?>
  SELECT tblstudent.std_email
FROM tblvisitor
INNER JOIN tblstudent ON tblvisitor.Student_num=tblstudent.Student_num
AND tblvisitor.outtime IS NULL AND TIME(CURTIME())<='23:50:00'