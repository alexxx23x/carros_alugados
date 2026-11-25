
@echo off
title Servidor PHP Local

echo =====================================
echo       SERVIDOR PHP LOCAL
echo =====================================
echo.

cd /d "%~dp0"

echo Iniciando servidor PHP...
echo.
echo Acesse: http://localhost:8000
echo.
echo Para encerrar, pressione CTRL + C.
echo.

php -S localhost:8000

pause
