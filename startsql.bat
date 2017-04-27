@ECHO OFF

:: Starting mysql server
tasklist /FI "IMAGENAME eq mysqld.exe" | find /I /N "mysql.exe" || "C:\xampp\mysql\bin\mysqld.exe"

EXIT