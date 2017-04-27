@ECHO OFF
: Sets the proper date and time stamp with 24Hr Time for log file naming
: convention

start D:\Edunova\startsql.bat

SET HOUR=%time:~0,2%
SET dtStamp9=_%date:~-5,4%%date:~7,2%%date:~4,2%0%time:~1,1%%time:~3,2%%time:~6,2% 
SET dtStamp24=_%date:~-5,4%%date:~7,2%%date:~4,2%%time:~0,2%%time:~3,2%%time:~6,2%

if "%HOUR:~0,1%" == " " (SET dtStamp=%dtStamp9%) else (SET dtStamp=%dtStamp24%)

SET naziv=wp15Backup%dtStamp%.sql

C:\xampp\mysql\bin\mysqldump -uedunova -pedunova edunovawp15 > D:\Edunova\%naziv%

"C:\Program Files\WinRAR\WinRAR.exe" a -afzip D:\Edunova\%naziv%.zip D:\Edunova\%naziv%

DEL D:\Edunova\%naziv%

C:\xampp\mysql\bin\mysqladmin -uroot shutdown

:: ECHO %dtStamp%

:: PAUSE