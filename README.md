# E2_MF0943_3
La segunda prueba del modulo EMF0943_3
# Istalacion de las aplicaciones en rasbian
1- Conectar a rasbian mediante ssh.
2-crear carpeta de scripts.\n
3-Crear un script con la extension .sh.
4-Ejecutar el archivo script con el comando 'sudo sh script.sh'.
Y listo.
# documento con la batería de pruebas realizada para verificar el email
1- manipulando el campo type de html input a text para mandar un email sin @.
    el servidor devuelve un error de un email invalido.
2- manipulando el html para mandar el campo vacio:
    El servidor devuelve un error de que el campo no debe estar vacio.
3- Enviado un email sin .*:
    El servidor devuelve un error de email invalido.

4-enviado email existente en la base de datos:
    El servidor devuelve un error de email existe.
5- Enviando un email valido:
    El servidor registra el email y devulve un mensaje de satisfacción.