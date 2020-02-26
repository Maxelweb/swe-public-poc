FROM openjdk:11-alpine
COPY ./java /usr/src/simulator
RUN apk add apache2 php5-apache2
COPY ./site /var/www/localhost/htdocs/
WORKDIR /usr/src/simulator
CMD ["java", "-jar" "usgateway1.jar"]
CMD ["java", "-jar" "usdevice1.jar"]
