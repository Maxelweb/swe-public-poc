# docker run --run -d -p 29092:29092 rrr/gateway
FROM adoptopenjdk/openjdk11:x86_64-alpine-jre-11.0.6_10
COPY . /usr/src/simulator
EXPOSE 29092
WORKDIR /usr/src/simulator
CMD ["sh", "start.sh"]
