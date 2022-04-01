
![Logo](https://user-images.githubusercontent.com/80313417/161331682-bf0dbc1c-3f2c-4959-b344-cf0aeb90516b.png)


# Education-Manager - Der erste kostenlose Schulmanager für Schulen

Der erste kostenlose Schulmanager für Schulen bekamm beim Niederbayrischen Regionalwettbewerb Jugend forscht in Bereich Mathematik/Informatik den ersten Platz verliehen.

Jetzt wird das Projekt zum Download bereit gestellt, sodass Schulen den Schulmanager kostenlos benutzen können. 

## Installation
- Projekt herunterladen 
- Auf den Webserver extrahieren 
- In phpmyadmin eine Datenbank mit educationmanager anlegen und database.sql importieren.
- admin/config.php konfigurieren
- Ins Admin Panel einlogen

## Screenshots
![Panel Vorschau](https://user-images.githubusercontent.com/80313417/161330455-7eab4127-81c8-4e49-bdb3-2a960895cfb0.png)
![Admin Panel Vorschau](https://user-images.githubusercontent.com/80313417/161335267-5c61ab69-af75-4c55-b840-8eb9486b3d39.png)

## FAQ

#### Gibt es Systemvoraussetzungen?

Der Education-Manager kann auf jeden beliebigen Betriebsystem aufgesetzt werden, Man benötigt aber einen Apache Webserver (PHP fähig), MySQL Datenbank sowie einen Proxy-Manager zur sicheren Freigaben 

#### Wird das System noch weiterentwickelt? 

Ja, das System wird laufend verbessert.

#### Kann man zusaätzliche Module anfordern?

Ja man kann zusaätzliche Module anfordern, einfach eine E-Mail an info@julianzillner.de schicken. Und die Modulidee vorstellen.

#### Wie kann man das Corona Lokal Modul konfigurieren?
Beim admin/config.php File muss bei Corona-ID, die ID des gewünschten Landkreises eingegeben werdern oder Stadtkreis.
Man findet die ID unter der Seite:
https://npgeo-corona-npgeo-de.hub.arcgis.com/datasets/917fc37a709542548cc3be077a786c17_0/explore?location=51.159939%2C10.714458%2C6.26

Man muss darfür den gewünschten Lanrkeis oder Stadtkreis anklicken und dann aus der Tabelle die Object-ID entnehmen. 


## Autor

- [@julianzillner](https://www.github.com/julianzillner)


## Support

Für den Support eine E-Mail an info@julianzillner.de


## License

[GNU](https://raw.githubusercontent.com/Education-Manager-DE/Education-Manager/main/LICENSE)

