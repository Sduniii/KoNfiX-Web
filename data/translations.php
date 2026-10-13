<?php
// Mehrsprachige Texte für KoNfiX v2026.10.5 & KoNfiX-Catalog (db.konfix.sduni.de)
$translations = [
    'de' => [
        'meta' => [
            'title' => 'KoNfiX & KoNfiX-Catalog — Der visuelle KNX Konfigurator & Offene Gerätedatenbank',
            'description' => 'KoNfiX ist die moderne, visuelle Open-Source Alternative zu ETS. Mit 2D-CAD Hausplan, Tauri v2 Desktop-App, differenziellem Flashen und offenem REST-Gerätekatalog db.konfix.sduni.de.'
        ],
        'nav' => [
            'overview' => 'Übersicht',
            'workspaces' => 'Arbeitsbereiche',
            'ecosystem' => 'Ökosystem',
            'demos' => 'Live-Demos',
            'comparison' => 'ETS 6 Vergleich',
            'quickstart' => 'Schnellstart',
            'docs' => 'API Docs',
            'catalog_link' => 'Katalog Cloud',
            'github' => 'GitHub'
        ],
        'hero' => [
            'badge' => 'KoNfiX v2026.10.5 & Catalog Cloud — Offenes KNX Ökosystem',
            'title' => 'Visuelle KNX Projektierung &',
            'title_gradient' => 'Offene Gerätedatenbank',
            'subtitle' => 'Schluss mit unübersichtlichen Tabellenmatrizen und teuren Dongle-Lizenzen. KoNfiX vereint visuelle Blueprint-Verdrahtung, einen interaktiven 2D-CAD Hausplan, sub-sekündliches Differenzial-Flashen mit KNX Data Secure und den offenen Cloud-Katalog db.konfix.sduni.de.',
            'cta_primary' => 'Live-Demos ausprobieren',
            'cta_secondary' => 'Katalog-Cloud öffnen',
            'cta_desktop' => 'Tauri v2 Desktop-App',
            'stats' => [
                'devices' => '100+ Indexierte Geräte',
                'devices_sub' => 'db.konfix.sduni.de',
                'flash' => '1–2s Smart-Flashing',
                'flash_sub' => 'Differenzial-Engine',
                'ets' => '100% ETS 6.2 Schema 23',
                'ets_sub' => '.knxproj Roundtrip',
                'desktop' => 'Tauri v2 Desktop App',
                'desktop_sub' => '~35 MB RAM (Linux/Win/Mac)'
            ]
        ],
        'workspaces' => [
            'title' => 'Vier Primäre Arbeitsbereiche',
            'subtitle' => 'Vom architektonischen 2D-Grundriss bis zum 16x16 Linien-Scanner: Ein nahtloses Werkzeug für den gesamten Gebäudelebenszyklus.',
            'tabs' => [
                'canvas' => '1. Visual Blueprint Canvas',
                'cad' => '2. 2D-CAD Hausplan',
                'topology' => '3. Topologie & Koppler',
                'diagnostics' => '4. ETS Diagnose & Flasher'
            ],
            'canvas_desc' => 'Hardware-KOs per Maus verdrahten (React Flow). MDT Glastaster II, Dimmaktoren, Logikblöcke und Raumportale (AUS RAUM / NACH RAUM) mit 1-Klick Sprungnavigation und 24/7 cEMI-Busmonitor.',
            'cad_desc' => 'Interaktiver Architektur-CAD-Editor: Außen- und Innenwände mit 90°-Orthogonal-Snapping, DIN-Türen und -Fenster, automatische Raumflächenberechnung (m², Shoelace-Formel) und Live-KNX-Bedien-Widgets direkt im Plan.',
            'topology_desc' => 'Hierarchische Linienverwaltung (TP, IP, RF), deterministische 8192-Byte Filtertabellen-Berechnung, Erkennung blockierter Querverbindungen und 0–100% Topologie-Health-Score.',
            'diagnostics_desc' => '16x16 Linien-Scan aller 255 physikalischen Adressen, optische LED-Blink-Ortung, Adresskollisions-Audit und Programmierung ohne Tasterdruck über 6-Byte KNX Seriennummer.'
        ],
        'ecosystem' => [
            'badge' => 'Zwei Säulen • Ein Ganzheitliches Ökosystem',
            'title' => 'Das KoNfiX Ökosystem',
            'subtitle' => 'Erfahre, wie der visuelle Konfigurator und der offene Cloud-Katalog ineinandergreifen.',
            'tab_konfix' => 'KoNfiX (Configurator & Desktop)',
            'tab_catalog' => 'KoNfiX-Catalog (db.konfix.sduni.de)',
            'konfix_features' => [
                [
                    'title' => 'Visuelle Blueprint-Verdrahtung',
                    'desc' => 'Taster- und Aktorkanäle direkt per Maus verbinden. Gruppenadressen werden vollautomatisch im Hintergrund normgerecht generiert und vergeben.'
                ],
                [
                    'title' => 'Tauri v2 Native Desktop-App',
                    'desc' => 'OS-native Standalone-App für Linux (.AppImage/.deb), Windows (NSIS .exe) und macOS (.dmg). Nur 35–45 MB RAM mit In-Process Tokio Core.'
                ],
                [
                    'title' => '2D-CAD Hausplan mit Live-Widgets',
                    'desc' => 'Wände zeichnen, Räume erfassen und Leuchten/Jalousien direkt im Grundriss schalten. Synchronisiert über WebSocket in Echtzeit.'
                ],
                [
                    'title' => 'Differenzielles Flashen & Data Secure',
                    'desc' => 'Überträgt nur geänderte Bytes via A_Memory_Write in 1–2 Sekunden. Volle AN159 / ISO 22510 AES-128-CCM Authentifizierung auf Twisted Pair.'
                ],
                [
                    'title' => 'cEMI Busmonitor & 9600-Baud Rechner',
                    'desc' => '50.000 Telegramme Ringpuffer, sub-millisekündliches WebSocket-Streaming, physikalische TP-Buslastanalyse und vollständiger ETS XML/CSV Export.'
                ],
                [
                    'title' => 'Autonome NOAA Astro-Engine',
                    'desc' => 'Berechnet Sonnenstand (Azimut & Elevation) für beliebige Koordinaten in reinem Rust – autark ohne Internet für millimetergenaue Lamellennachführung.'
                ]
            ],
            'catalog_features' => [
                [
                    'title' => 'Zero-Config Hersteller-Upload',
                    'desc' => 'POST /api/v1/upload mit roher Binärdatei. Der Server entpackt das Archiv und extrahiert Hardware, KOs und Applikationen automatisch.'
                ],
                [
                    'title' => 'Multi-Format Ingestion (.knxprod, .knxproj, .vd5)',
                    'desc' => 'Unterstützt neben modernen .knxprod auch vollständige ETS-Projektarchive (.knxproj) und historische Legacy-Produktdatenbanken (.vd5).'
                ],
                [
                    'title' => 'Binär-Download via GET & POST',
                    'desc' => 'Download direkt als application/octet-stream per curl, Browser oder KoNfiX-Client mit integrierter SHA256-Integritätsprüfung.'
                ],
                [
                    'title' => '20x Schnellere Indizierung & YAML-Modelle',
                    'desc' => 'Relationale SQLite-Architektur mit Hashmaps und Massen-Inserts. Volle Kompatibilität zu offenen YAML-Katalogdefinitionen.'
                ]
            ]
        ],
        'demos' => [
            'badge' => 'Echtzeit-Technologie im Browser',
            'title' => 'Interaktive Live-Technologie Demos',
            'subtitle' => 'Teste die Kernfunktionen von KoNfiX und dem Gerätekatalog direkt im Browser.',
            'tabs' => [
                'wiring' => 'Blueprint-Verdrahtung',
                'catalog' => 'Gerätekatalog',
                'bus' => 'Live cEMI Busmonitor',
                'astro' => 'NOAA Astro-Tracking'
            ]
        ],
        'comparison' => [
            'badge' => 'Direkter Funktions- & Kostenvergleich',
            'title' => 'ETS 6 Professional vs. KoNfiX',
            'subtitle' => 'Warum Elektroplaner, Systemintegratoren und KNX-Entwickler auf KoNfiX setzen.',
            'headers' => ['Funktionsbereich', 'Klassische ETS 6', 'KoNfiX Ökosystem'],
            'rows' => [
                ['feature' => 'Lizenzmodell & Kosten', 'ets' => '1.000 €+ Anschaffung zzgl. Dongle & Upgrades', 'konfix' => '100% Kostenlos (AGPLv3 Open Source)'],
                ['feature' => 'Verdrahtungskonzept', 'ets' => 'Abstrakte Tabellenmatrizen & manuelle GA-Pflege', 'konfix' => 'Visuelle Blueprint-Kabel (React Flow)'],
                ['feature' => 'Architektur-Hausplan', 'ets' => 'Nicht vorhanden (erfordert CAD-Zusatztools)', 'konfix' => 'Integrierter 2D-CAD Editor & Live-Widgets'],
                ['feature' => 'Programmier-Geschwindigkeit', 'ets' => 'Vollständiger Transfer (oft 30–90s)', 'konfix' => 'Differenzielles Smart-Flash (1–2 Sekunden)'],
                ['feature' => 'KNX Data Secure (TP)', 'ets' => 'Schwerfällige Schlüsselverwaltung', 'konfix' => 'Echtzeit AES-128-CCM & FDSK-Assistent'],
                ['feature' => 'Gerätekatalog-Zugriff', 'ets' => 'Geschlossener proprietärer ETS Online-Katalog', 'konfix' => 'Offene REST-Cloud (db.konfix.sduni.de)'],
                ['feature' => 'Betriebssysteme', 'ets' => 'Nur Microsoft Windows', 'konfix' => 'Linux, macOS, Windows (Tauri v2) & Docker'],
                ['feature' => 'Simulation & Astro', 'ets' => 'Nicht integriert', 'konfix' => 'Autonome NOAA Astro-Engine & Live-Simulator']
            ]
        ],
        'quickstart' => [
            'badge' => 'Installation & Lokale Ausführung',
            'title' => 'In 60 Sekunden startklar',
            'subtitle' => 'Wähle deinen bevorzugten Startmodus für KoNfiX und den Gerätekatalog.'
        ],
        'api' => [
            'badge' => 'OpenAPI 3.1 & Swagger Spezifikation',
            'title' => 'REST API Dokumentation',
            'subtitle' => 'Offene Endpunkte auf https://db.konfix.sduni.de für curl, Python, Rust oder Postman.'
        ],
        'footer' => [
            'desc' => 'Das moderne, visuelle Open-Source Ökosystem für KNX Smart Home Engineering. Entwickelt mit Rust, React und Python.',
            'license' => 'Lizenziert unter GNU AGPLv3. Interoperabel mit ISO/IEC 14543-3, KNXnet/IP Secure und ETS 6.2 Schema 23.',
            'heart' => 'Gebaut für die freie Smart-Home-Community'
        ]
    ],
    'en' => [
        'meta' => [
            'title' => 'KoNfiX & KoNfiX-Catalog — The Visual KNX Configurator & Open Device Database',
            'description' => 'KoNfiX is the modern, visual open-source alternative to classical ETS. Featuring 2D-CAD architectural floorplan, Tauri v2 desktop app, differential flashing, and open REST database db.konfix.sduni.de.'
        ],
        'nav' => [
            'overview' => 'Overview',
            'workspaces' => 'Workspaces',
            'ecosystem' => 'Ecosystem',
            'demos' => 'Live Demos',
            'comparison' => 'ETS 6 Comparison',
            'quickstart' => 'Quickstart',
            'docs' => 'API Docs',
            'catalog_link' => 'Catalog Cloud',
            'github' => 'GitHub'
        ],
        'hero' => [
            'badge' => 'KoNfiX v2026.10.5 & Catalog Cloud — Open KNX Ecosystem',
            'title' => 'Visual KNX Engineering &',
            'title_gradient' => 'Open Device Database',
            'subtitle' => 'Ditch tedious spreadsheet matrices and expensive hardware dongles. KoNfiX unifies visual blueprint wiring, an interactive 2D-CAD floorplan, sub-second differential flashing with KNX Data Secure, and the open cloud catalog db.konfix.sduni.de.',
            'cta_primary' => 'Try Interactive Demos',
            'cta_secondary' => 'Open Catalog Cloud',
            'cta_desktop' => 'Tauri v2 Desktop App',
            'stats' => [
                'devices' => '100+ Indexed Devices',
                'devices_sub' => 'db.konfix.sduni.de',
                'flash' => '1–2s Smart-Flashing',
                'flash_sub' => 'Delta Flash Engine',
                'ets' => '100% ETS 6.2 Schema 23',
                'ets_sub' => '.knxproj Roundtrip',
                'desktop' => 'Tauri v2 Desktop App',
                'desktop_sub' => '~35 MB RAM (Linux/Win/Mac)'
            ]
        ],
        'workspaces' => [
            'title' => 'Four Primary Workspaces',
            'subtitle' => 'From architectural 2D floorplans to point-to-point line scanning: A unified suite for the entire building lifecycle.',
            'tabs' => [
                'canvas' => '1. Visual Blueprint Canvas',
                'cad' => '2. 2D-CAD Floorplan',
                'topology' => '3. Topology & Couplers',
                'diagnostics' => '4. ETS Diagnostics & Flasher'
            ],
            'canvas_desc' => 'Connect hardware communication objects directly (React Flow). MDT push buttons, dimmers, logic gates, and inter-room portals with 1-click jump navigation and 24/7 cEMI bus monitor.',
            'cad_desc' => 'Interactive architectural CAD editor: Exterior and interior walls with 90° orthogonal snapping, DIN doors and windows, automated room area calculation (sqm, Shoelace formula), and live KNX control widgets.',
            'topology_desc' => 'Hierarchical line management (TP, IP, RF), deterministic 8192-byte coupler filter bitmasks, cross-line routing validation, and 0–100% topology integrity score.',
            'diagnostics_desc' => '16x16 line scan across 255 individual addresses, optical LED locating, address collision detection, and buttonless programming via 6-byte KNX serial number.'
        ],
        'ecosystem' => [
            'badge' => 'Two Pillars • One Unified Ecosystem',
            'title' => 'The KoNfiX Ecosystem',
            'subtitle' => 'Discover how the visual configurator and the open cloud catalog work seamlessly together.',
            'tab_konfix' => 'KoNfiX (Configurator & Desktop)',
            'tab_catalog' => 'KoNfiX-Catalog (db.konfix.sduni.de)',
            'konfix_features' => [
                [
                    'title' => 'Visual Blueprint Wiring',
                    'desc' => 'Connect device channels visually. Group addresses are generated and linked in the background according to KNX standards.'
                ],
                [
                    'title' => 'Tauri v2 Native Desktop App',
                    'desc' => 'OS-native standalone application for Linux (.AppImage/.deb), Windows (NSIS .exe), and macOS (.dmg). Just 35–45 MB RAM with in-process Tokio core.'
                ],
                [
                    'title' => '2D-CAD Floorplan with Live Widgets',
                    'desc' => 'Draft walls, define room zones, and toggle lights or blinds directly on the architectural floorplan with real-time WebSocket sync.'
                ],
                [
                    'title' => 'Differential Flashing & Data Secure',
                    'desc' => 'Transfers only modified bytes via A_Memory_Write in 1–2 seconds. Full AN159 / ISO 22510 AES-128-CCM security on Twisted Pair.'
                ],
                [
                    'title' => 'cEMI Bus Monitor & 9600-Baud Calculator',
                    'desc' => '50,000 telegram ring buffer, sub-millisecond WebSocket streaming, physical TP bus load analysis, and complete ETS XML/CSV export.'
                ],
                [
                    'title' => 'Autonomous NOAA Astro Engine',
                    'desc' => 'Computes solar azimuth and elevation in pure Rust without cloud APIs for millimeter-accurate automated slat positioning.'
                ]
            ],
            'catalog_features' => [
                [
                    'title' => 'Zero-Config Manufacturer Upload',
                    'desc' => 'POST /api/v1/upload with raw binary file. The backend automatically unzips and indexes hardware, communication objects, and apps.'
                ],
                [
                    'title' => 'Multi-Format Ingestion (.knxprod, .knxproj, .vd5)',
                    'desc' => 'Supports modern .knxprod archives, complete ETS project files (.knxproj), and legacy product databases (.vd5).'
                ],
                [
                    'title' => 'Binary Download via GET & POST',
                    'desc' => 'Direct download as application/octet-stream via curl, browser, or KoNfiX client with SHA256 integrity verification.'
                ],
                [
                    'title' => '20x Faster Ingestion & YAML Models',
                    'desc' => 'Relational SQLite architecture with hashmaps and bulk inserts. Full compatibility with open YAML catalog definitions.'
                ]
            ]
        ],
        'demos' => [
            'badge' => 'Real-Time Technology in the Browser',
            'title' => 'Interactive Live Technology Demos',
            'subtitle' => 'Experience the core capabilities of KoNfiX and the device database directly in your browser.',
            'tabs' => [
                'wiring' => 'Blueprint Wiring',
                'catalog' => 'Device Catalog',
                'bus' => 'Live cEMI Bus Monitor',
                'astro' => 'NOAA Astro Tracking'
            ]
        ],
        'comparison' => [
            'badge' => 'Feature & Cost Benchmark',
            'title' => 'ETS 6 Professional vs. KoNfiX',
            'subtitle' => 'Why system integrators, electricians, and KNX engineers choose KoNfiX.',
            'headers' => ['Capability', 'Classical ETS 6', 'KoNfiX Ecosystem'],
            'rows' => [
                ['feature' => 'License & Cost', 'ets' => '$1,000+ plus dongle & upgrade fees', 'konfix' => '100% Free (AGPLv3 Open Source)'],
                ['feature' => 'Wiring Concept', 'ets' => 'Abstract table matrices & manual GA entry', 'konfix' => 'Visual Blueprint Wires (React Flow)'],
                ['feature' => 'Architectural Floorplan', 'ets' => 'Not included (requires 3rd party CAD)', 'konfix' => 'Integrated 2D-CAD Editor & Live Widgets'],
                ['feature' => 'Programming Speed', 'ets' => 'Full reprogramming (often 30–90s)', 'konfix' => 'Differential Smart-Flash (1–2 seconds)'],
                ['feature' => 'KNX Data Secure (TP)', 'ets' => 'Cumbersome key management', 'konfix' => 'Real-time AES-128-CCM & FDSK wizard'],
                ['feature' => 'Device Catalog Access', 'ets' => 'Closed proprietary ETS Online Catalog', 'konfix' => 'Open REST Cloud (db.konfix.sduni.de)'],
                ['feature' => 'Operating Systems', 'ets' => 'Microsoft Windows only', 'konfix' => 'Linux, macOS, Windows (Tauri v2) & Docker'],
                ['feature' => 'Simulation & Astro', 'ets' => 'Not included', 'konfix' => 'Autonomous NOAA Astro engine & Live Simulator']
            ]
        ],
        'quickstart' => [
            'badge' => 'Installation & Local Execution',
            'title' => 'Ready in 60 Seconds',
            'subtitle' => 'Choose your preferred startup mode for KoNfiX and the device catalog.'
        ],
        'api' => [
            'badge' => 'OpenAPI 3.1 & Swagger Specification',
            'title' => 'REST API Documentation',
            'subtitle' => 'Open endpoints on https://db.konfix.sduni.de for curl, Python, Rust, or Postman.'
        ],
        'footer' => [
            'desc' => 'The modern visual open-source ecosystem for KNX smart home engineering. Built with Rust, React, and Python.',
            'license' => 'Licensed under GNU AGPLv3. Interoperable with ISO/IEC 14543-3, KNXnet/IP Secure, and ETS 6.2 Schema 23.',
            'heart' => 'Crafted for the open smart home community'
        ]
    ]
];
