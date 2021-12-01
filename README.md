# Path Traversal
## Betekenis
'Path traversal', ook wel 'dot-dot-slash', 'directory traversal', 'directory climbing' of 'backtracking' genoemd, is een aanval waarmee de aanvaller door een vulnerability toegang heeft tot het bestandssysteem van een applicatie. Dit kan gevaarlijk zijn als er belangrijke informatie op het bestandssysteem van de applicatie staat. Denk aan configuratiebestanden, logs en mogelijk bestanden die persoonlijke informatie bevatten.

## Beveiliging
De vulnerability die in dit geval de path traversal exploit mogelijk maakt kan verholpen worden door na te gaan of het draaiende script toegang heeft tot bestanden die het opvraagt. Het is namelijk niet wenselijk dat een gebruiker toegang zou hebben tot bestanden die zich buiten de root-folder van de applicatie bevinden.

# Applicatie
## Setup
1. Haal het project op door het te clonen.
2. Navigeer in een terminal naar de root-folder van het project.
3. Start de Docker-container met `docker-compose up -d`.
4. Stop de container met `docker-compose stop` of `docker-compose down` als je de container nog eens wilt draaien.

## Aanval uitvoeren
De demo-applicatie is niet beveiligd tegen een eventuele path traversal-aanval. In dit voorbeeld wordt een .log-bestand uitgelezen door middel van zo'n aanval. Deze aanval kan uitgevoerd worden door in de browser de URL '`localhost:8080/?file=../../log/dpkg.log`' in te voeren. Het 'dpkg.log'-bestand zou niet toegankelijk moeten zijn voor de algemene gebruiker, maar in dit voorbeeld is dit wel het geval.

### Demo URLs voor path traversal
Path traversal kan gedaan worden met relatieve en absolute paths.

'Relative path traversal': `localhost:8080/?file=../../log/dpkg.log`<br />
'Absolute path traversal': `localhost:8080/?file=/var/log/dpkg.log`

## Beveiliging
Zie het volgende pull request: https://github.com/cassis163/sbd-path-traversal-demo/pull/1
