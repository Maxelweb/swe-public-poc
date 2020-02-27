# WEBSITE (note: use network host)
# sudo docker run --rm -d --network host -p 80:80 image_name
# ===================================
FROM ulsmith/alpine-apache-php7
EXPOSE 80
ADD . /app/public
RUN chown -R apache:apache /app

