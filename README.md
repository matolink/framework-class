i followed this tutorial for making the docker container
`https://www.twilio.com/blog/get-started-docker-laravel`
so basically the steps are taken from here
first time run
`docker-compose up -d --build`
after that run 
`docker exec -ti php-apache (or your container name) /bin/bash`
then run
`composer create/project laravel/laravel`
actually it turned out that the tutorial was really crappy so i had to use the container for DB and my pc as a webserver, this little link helped me to get throught login.
`https://stackoverflow.com/questions/53257296/creating-users-table-in-laravel`
