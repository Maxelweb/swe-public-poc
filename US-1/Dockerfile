FROM adoptopenjdk/openjdk11:x86_64-alpine-jre-11.0.6_10
EXPOSE 80
COPY ./java /usr/src/simulator
RUN apk update && apk upgrade
RUN apk add --no-cache apache2 php7 php7-apache2 
COPY ./site /var/www/localhost/htdocs/
# RUN rc-service apache2 start
WORKDIR /usr/src/simulator
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
CMD ["java", "-jar", "usdevice1.jar"]
CMD ["java", "-jar", "usgateway1.jar"]

