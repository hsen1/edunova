@ECHO OFF
: The script checks if mysql services is strated, if not it will start the service

tasklist /FI "IMAGENAME eq mysqld.exe" | find /I /N "mysql.exe" || "C:\xampp\mysql\bin\mysqld.exe"

EXIT