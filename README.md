# simple MQTT sending tool
mit diesem Modul kann an ein MQTT Topic ein string oder json gesendet werden ohne eine weitere MQTT Client instanz zu erstellen.

### Inhaltsverzeichnis

1. [Funktionsumfang](#1-funktionsumfang)
2. [Voraussetzungen](#2-voraussetzungen)
3. [Software-Installation](#3-software-installation)
4. [Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)
5. [PHP-Befehlsreferenz](#5-php-befehlsreferenz)

### 1. Funktionsumfang

* senden eines Strings oder array (über json) an ein MQTT Topic

### 2. Voraussetzungen

- IP-Symcon ab Version 7.1
- eingerichteter Symcon MQTT Server

### 3. Software-Installation

* Über den Module Store das 'simple MQTT sending tool'-Modul installieren.

### 4. Einrichten der Instanzen in IP-Symcon

 Unter 'Instanz hinzufügen' kann das 'simple MQTT sending tool'-Modul mithilfe des Schnellfilters gefunden werden.  
	- Weitere Informationen zum Hinzufügen von Instanzen in der [Dokumentation der Instanzen](https://www.symcon.de/service/dokumentation/konzepte/instanzen/#Instanz_hinzufügen)

### 5. PHP-Befehlsreferenz

`SMST_sendJson(integer $InstanzID, string $Topic, array $Payload);`
sendet ein Array an das Topic, dabei wird das json_encoding in der funktion vorgenommen.

Beispiel:
`SMST_sendJson(12345,'dummy/topic/set/',array("variable" => true));`

`SMST_sendString(integer $InstanzID, string $Topic, string $Payload);`
sendet einen String an das Topic

Beispiel:
`SMST_sendString(12345,'dummy/topic/set/','restart');`