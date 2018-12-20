@ECHO OFF 
cd ..

SET /P project="Veuillez entrer le nom de votre Projet : "
@ECHO ON


composer create-project symfony/website-skeleton %project%









pause