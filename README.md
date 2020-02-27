# swe-public-poc

Cartella di test per il reperimento delle istanze Gateway - Device


## Requisiti minimi

- VPS con almeno 256MB di ram
- Docker installato
- `docker-compose` installato
- `git`


## Installazione di base

1. Avviare **Kafka** con **Zookeeper** dalla repository `Maxelweb/swe-kafka-db` con il comando `docker-compose up -d`
	- Assicurarsi che al posto di `localhost` vi sia 
2. Accedere su un server remoto tramite SSH con **Docker** e **docker-compose** già installato
	- Nel caso installare `docker-compose`
3. Assicurarsi di aprire le porte del firewall con `sudo ufw allow 80` e `sudo ufw allow 29092`
	- Se state per impazzire usate `sudo ufw disable` :wink:
4. Clonare la repository corrente `git clone https://github.com/Maxelweb/swe-public-poc`
5. Spostarsi sulla repository `cd swe-public-poc`
6. Spostarsi sulla cartella desiderata in base al server remoto che si vuole configurare `US_1`, `SG_2` o `DE_3`
7. Eseguire il comando `docker-compose up -d`
	- Per stoppare i container usare `docker-compose down`
	- Per verificare che tutto funzioni digitare il seguente URL su un browser internet `http://server-ip-address/`
8. Enjoy :smiley:


## Note aggiuntive

- Attualmente i gateway sono configurati per comunicare con un server kafka che ha un indirizzo host pre-configurato.
- Ciascun sensore genera dei dati casuali con un valore statico `x` e un offset di `+2` o `-2`.
- I dispositivi simulati sono configurati nel seguente modo:
	- **US devices** --> Range dei dati nei sensori: [3-12]
	- **SG devices** --> Range dei dati nei sensori: [13-22]
	- **DE devices** --> Range dei dati nei sensori: [28-37]

## Riferimenti

Progetto ThiReMa di [RedRoundRobin](https://www.redroundrobin.site)