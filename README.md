# ⚡ KoNfiX & KoNfiX-Catalog — Offizielle Ökosystem-Website

Professionelle, moderne und responsive Website für das **KoNfiX KNX-Ökosystem**:
- **KoNfiX v2026.10.5**: Der visuelle KNX-Konfigurator (Tauri v2 Desktop-App, 2D-CAD Architektur-Hausplan, React Flow Blueprint-Editor, Differenzielles Smart-Flashing, KNX Data Secure, cEMI-Busmonitor, autonome NOAA-Astro-Engine).
- **KoNfiX-Catalog**: Die offene REST-Online-Gerätedatenbank für `.knxprod`-, `.knxproj`- und `.vd5`-Dateien auf **[db.konfix.sduni.de](https://db.konfix.sduni.de)**.

Gestaltet im authentischen, modernen **KoNfiX Dark-Mode Designsystem** (Slate 900 `#0f172a`, Emerald `#10b981`, Sky `#38bdf8`, Inter & JetBrains Mono Typografie).

---

## 🏗️ 100% PHP-Architektur (Zero Node.js Dependency)

Die Website wurde vollständig auf ein schlankes, modulares **PHP-Design** umgestellt, um direkt auf Standard-Webspaces (Plesk, Netcup, cPanel, Apache, LiteSpeed oder Nginx + PHP-FPM) ohne Node.js-Runtime lauffähig zu sein:

- **Kein Build-Step erforderlich**: Vorab kompiliertes, modernes Tailwind-CSS (`assets/css/style.css`) und Vanilla-JS (`assets/js/main.js`).
- **Modulare Struktur**:
  - `index.php`: Haupt-Controller & HTML-Shell mit Sprach-Erkennung (`$_GET['lang']`, Cookie, Browser-Header).
  - `data/translations.php`: Vollständiges deutsches (`de`) und englisches (`en`) Wörterbuch.
  - `data/devices.php`: Reale KNX-Gerätedaten (MDT, OpenKNX, Gira, Theben) mit Download-Links auf `https://db.konfix.sduni.de`.
  - `includes/`: Modulare Partials (`header.php`, `hero.php`, `ecosystem.php`, `demos.php`, `comparison.php`, `quickstart.php`, `api.php`, `footer.php`).
  - `.htaccess`: Gzip-Kompression, Browser-Caching und Sicherheits-Header für Apache.

---

## 🚀 Kernfunktionen der Website

1. **Interaktive 4-Workspace Galerie**:
   - Umschalten zwischen allen 4 Screenshots aus KoNfiX:
     - *Workspace 1*: Visual Blueprint Canvas (`assets/images/hero_canvas.png`)
     - *Workspace 2*: 2D-CAD Architektur-Hausplan mit Live-Widgets (`assets/images/cad_floorplan.png`)
     - *Workspace 3*: Topologie & Koppler-Filtertabellen (`assets/images/topology_workspace.png`)
     - *Workspace 4*: 16x16 Linien-Diagnose & Flasher (`assets/images/ets_diagnostics.png`)
2. **Ökosystem-Showcase**:
   - Tab-Wechsler zwischen **KoNfiX** (Configurator & Tauri v2 Desktop) und **KoNfiX-Catalog** ([db.konfix.sduni.de](https://db.konfix.sduni.de)).
3. **4 Interaktive Live-Demos (Vanilla JS)**:
   - **Blueprint-Verdrahtung**: Interaktive Verbindung zwischen Glastaster und Schaltaktor; Klick auf den Taster sendet ein cEMI-Telegramm über die simulierte Busleitung und schaltet das Relais.
   - **Gerätekatalog-Explorer**: Durchsuchbare Datenbank realer Geräte (MDT AKS-0816.04, AKU-1616.03, OFM-BME280, AKU-B2UP.03, Gira, Theben) inkl. Spezifikationen und 1-Klick `curl`-Download-Kopierer.
   - **cEMI Live-Busmonitor**: Virtuelles Echtzeit-Dashboard mit physikalischem 9600-Baud Buslast-Rechner und Telegramm-Injektion.
   - **NOAA-Astro-Tracker**: 24h-Zeitschieberegler mit Sonnenstands-Bogen (Azimut/Elevation) und millimetergenauer Lamellennachführung.
4. **ETS 6 Professional Vergleichsmatrix**:
   - Transparente Gegenüberstellung von Lizenzkosten, visueller Verdrahtung, CAD-Grundriss, Flash-Geschwindigkeit und Offenheit.
5. **Schnellstart & REST-API**:
   - Native Desktop-App (Linux, Windows, macOS), Docker Compose und Self-Host Catalog.
   - cURL-Befehle und Swagger-Links direkt zu `https://db.konfix.sduni.de`.
6. **Zweisprachig (DE / EN)**:
   - Persistenter Sprachumschalter mit Cookie-Speicherung.

---

## 🌐 Deployment auf Webspace / Hosting

Einfach alle Dateien dieses Repositorys per FTP, SFTP oder Git in das `public_html` / `httpdocs` Verzeichnis deines Webhostings (z.B. Netcup, Strato, Hetzner, IONOS, Plesk) kopieren.

Mindestanforderung: **PHP 7.4+ oder PHP 8.x** mit aktiviertem Apache/Nginx.
Kein `npm install`, kein `node`, kein Build-Schritt notwendig!
