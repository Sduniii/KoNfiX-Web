# KoNfiX Website

Website für das KoNfiX KNX-Ökosystem (KoNfiX & KoNfiX-Catalog).

## Übersicht

- KoNfiX: Visueller KNX-Konfigurator mit 2D-CAD Hausplan, Blueprint-Verdrahtung, differenziellem Flashen und Tauri v2 Desktop-App.
- KoNfiX-Catalog: Offene REST-Gerätedatenbank auf https://db.konfix.sduni.de.

## Voraussetzungen

- Webserver (Apache, Nginx oder LiteSpeed)
- PHP 7.4 oder höher (PHP 8.x empfohlen)
- Keine Node.js-Laufzeitumgebung oder Build-Schritte erforderlich

## Deployment

Dateien direkt in das Web-Verzeichnis des Webservers (z. B. `public_html` oder `httpdocs`) kopieren oder per Git klonen:

```bash
git clone git@github.com:Sduniii/KoNfiX-Web.git /pfad/zum/webspace
```

Alternativ alle Dateien per SFTP/FTP auf den Webspace hochladen.

## Struktur

- `index.php`: Einstiegspunkt und Controller mit Sprachumschaltung (DE / EN)
- `includes/`: Modulare Seitenabschnitte (Header, Hero, Demos, Vergleich, API, Footer)
- `data/`: Wörterbücher (`translations.php`) und Gerätedaten (`devices.php`)
- `assets/`: Standalone CSS, JavaScript und Screenshots
- `.htaccess`: Caching, Komprimierung und Sicherheitsheader für Apache

## Lizenz

GNU Affero General Public License Version 3 (AGPLv3). Siehe `LICENSE`.
