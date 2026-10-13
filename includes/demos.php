<?php
// includes/demos.php
$t = $translations[$lang];
?>
<section id="demos" class="py-20 px-4 sm:px-6 max-w-7xl mx-auto border-t border-slate-800/80">
  <div class="text-center max-w-3xl mx-auto mb-10">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800/80 border border-slate-700/80 text-xs font-medium text-emerald-400 mb-3">
      <span><?= htmlspecialchars($t['demos']['badge']) ?></span>
    </div>
    <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">
      <?= htmlspecialchars($t['demos']['title']) ?>
    </h2>
    <p class="text-sm sm:text-base text-slate-400 mt-2">
      <?= htmlspecialchars($t['demos']['subtitle']) ?>
    </p>

    <!-- Demo Navigation Tabs -->
    <div class="flex flex-wrap items-center justify-center gap-2 mt-8">
      <button 
        type="button" 
        data-demo-target="demo-wiring"
        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all bg-emerald-500 text-slate-950 shadow-md">
        <?= htmlspecialchars($t['demos']['tabs']['wiring']) ?>
      </button>

      <button 
        type="button" 
        data-demo-target="demo-catalog"
        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all text-slate-400 hover:text-white hover:bg-slate-800">
        <?= htmlspecialchars($t['demos']['tabs']['catalog']) ?>
      </button>

      <button 
        type="button" 
        data-demo-target="demo-bus"
        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all text-slate-400 hover:text-white hover:bg-slate-800">
        <?= htmlspecialchars($t['demos']['tabs']['bus']) ?>
      </button>

      <button 
        type="button" 
        data-demo-target="demo-astro"
        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-semibold transition-all text-slate-400 hover:text-white hover:bg-slate-800">
        <?= htmlspecialchars($t['demos']['tabs']['astro']) ?>
      </button>
    </div>
  </div>

  <!-- PANE 1: Blueprint Wiring Sandbox -->
  <div id="demo-wiring" data-demo-pane class="bg-slate-900 rounded-2xl border border-slate-800 p-6 shadow-2xl relative overflow-hidden">
    <div class="flex flex-wrap items-center justify-between gap-4 pb-6 border-b border-slate-800">
      <div>
        <h3 class="text-base font-bold text-white flex items-center gap-2">
          <span>Interactive Blueprint Wiring Simulation</span>
          <span class="text-[10px] font-mono bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-2 py-0.5 rounded-full">React Flow Engine</span>
        </h3>
        <p class="text-xs text-slate-400 mt-1">Klicke auf den Taster, um ein virtuelles cEMI GroupValue_Write Telegramm (GA 1/0/1) über das virtuelle Kabel an den Relais-Aktor zu senden.</p>
      </div>
      <div>
        <button 
          type="button" 
          id="demo-wire-toggle-btn"
          class="px-3.5 py-1.5 rounded-lg border border-slate-700 bg-slate-800 hover:bg-slate-700 text-xs font-medium text-slate-300 transition-colors">
          Kabel trennen
        </button>
      </div>
    </div>

    <!-- Canvas Simulation Area -->
    <div class="my-6 p-6 sm:p-10 rounded-xl bg-slate-950/80 border border-slate-800/80 relative min-h-[300px] flex flex-col md:flex-row items-center justify-between gap-8">
      <!-- Device Node 1: Push Button -->
      <div class="w-full md:w-64 p-4 rounded-xl bg-slate-900 border border-slate-700 shadow-xl relative z-10 space-y-3">
        <div class="flex items-center justify-between border-b border-slate-800 pb-2">
          <span class="text-xs font-bold text-white">MDT Glastaster II</span>
          <span class="text-[10px] font-mono text-emerald-400 bg-emerald-500/10 px-1.5 py-0.5 rounded">1.1.1</span>
        </div>
        <div class="text-[11px] text-slate-400">Taste 1 • Wippe Links-Oben</div>
        <button 
          type="button" 
          id="demo-wire-trigger-btn"
          class="w-full py-3 px-4 rounded-lg font-medium text-xs transition-all flex items-center justify-center gap-2 bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700">
          <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
          <span>Taster Drücken (Toggle)</span>
        </button>
        <div class="text-[10px] font-mono text-slate-500 flex justify-between">
          <span>KO 1: Schalten</span>
          <span class="text-emerald-400">GA 1/0/1</span>
        </div>
      </div>

      <!-- Virtual Wire Connection -->
      <div class="flex-1 w-full md:w-auto h-12 md:h-2 flex items-center justify-center relative">
        <div id="demo-wire-line" class="w-full h-1 bg-slate-800 relative flex items-center justify-center">
          <div class="absolute inset-0 bg-emerald-500/60"></div>
          <div id="demo-wire-pulse" class="hidden absolute w-3 h-3 rounded-full bg-emerald-300 shadow-lg shadow-emerald-400 animate-ping"></div>
        </div>
      </div>

      <!-- Device Node 2: Actuator Channel -->
      <div class="w-full md:w-64 p-4 rounded-xl bg-slate-900 border border-slate-700 shadow-xl relative z-10 space-y-3">
        <div class="flex items-center justify-between border-b border-slate-800 pb-2">
          <span class="text-xs font-bold text-white">MDT AKS-0816.04</span>
          <span class="text-[10px] font-mono text-sky-400 bg-sky-500/10 px-1.5 py-0.5 rounded">1.1.10</span>
        </div>
        <div class="flex items-center justify-between">
          <span class="text-[11px] text-slate-400">Kanal A Relais:</span>
          <span id="demo-wire-relay-status" class="text-xs font-mono"><span class="text-slate-500">○ OFFEN (0)</span></span>
        </div>
        <div class="flex items-center gap-3 p-2 bg-slate-950/60 rounded-lg border border-slate-800">
          <div id="demo-wire-bulb" class="w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300 bg-slate-800 text-slate-500">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/><circle cx="12" cy="12" r="4"/></svg>
          </div>
          <div class="text-xs">
            <div class="font-medium text-slate-200">Deckenlicht Büro</div>
            <div class="text-[10px] text-slate-500 font-mono">DPT 1.001 (1 Bit)</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Live Execution Trace Log -->
    <div class="bg-slate-950 rounded-xl border border-slate-800 p-3.5">
      <div class="text-[11px] font-mono font-semibold text-slate-400 mb-2 flex items-center gap-2">
        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
        <span>Virtual Bus Trace Log:</span>
      </div>
      <div id="demo-wire-trace-log" class="font-mono text-[11px] space-y-1 max-h-24 overflow-y-auto">
        <div class="truncate text-slate-400"><span class="text-emerald-400 mr-2">›</span>System bereit. Klicke auf den Taster für Telegrammübertragung.</div>
      </div>
    </div>
  </div>

  <!-- PANE 2: Device Catalog Pokédex Explorer -->
  <div id="demo-catalog" data-demo-pane class="bg-slate-900 rounded-2xl border border-slate-800 p-6 shadow-2xl relative overflow-hidden hidden">
    <div class="flex flex-wrap items-center justify-between gap-4 pb-6 border-b border-slate-800">
      <div>
        <h3 class="text-base font-bold text-white flex items-center gap-2">
          <span>Offener KNX Gerätekatalog</span>
          <span class="text-[10px] font-mono bg-sky-500/10 text-sky-400 border border-sky-500/20 px-2 py-0.5 rounded-full">https://db.konfix.sduni.de</span>
        </h3>
        <p class="text-xs text-slate-400 mt-1">Volltextsuche, Parameter-Speicher, Maskenversionen und direkter Binär-Download via REST API.</p>
      </div>
      <div class="flex items-center gap-2">
        <a href="https://db.konfix.sduni.de" target="_blank" rel="noreferrer" class="px-3.5 py-1.5 rounded-lg bg-sky-500 hover:bg-sky-400 text-slate-950 text-xs font-semibold shadow-md transition-all">
          Cloud Webapp öffnen ↗
        </a>
      </div>
    </div>

    <!-- Search & Filters -->
    <div class="flex flex-col sm:flex-row items-center gap-3 my-6">
      <div class="relative w-full sm:flex-1">
        <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-500" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        <input 
          id="catalog-search-input"
          type="text" 
          placeholder="Hersteller, Name oder Bestellnummer filtern (z.B. MDT, BME280, 216800)..."
          class="w-full pl-10 pr-4 py-2.5 bg-slate-950 border border-slate-800 rounded-xl text-xs text-slate-200 placeholder-slate-500 focus:outline-none focus:border-sky-500 transition-colors"
        />
      </div>
      <div class="flex items-center gap-1.5 w-full sm:w-auto">
        <button type="button" data-cat-filter="all" class="active px-3 py-2 rounded-lg text-xs transition-all bg-sky-500 text-slate-950 font-semibold">Alle</button>
        <button type="button" data-cat-filter="actuator" class="px-3 py-2 rounded-lg text-xs transition-all bg-slate-800 text-slate-300 hover:bg-slate-700">Aktoren</button>
        <button type="button" data-cat-filter="sensor" class="px-3 py-2 rounded-lg text-xs transition-all bg-slate-800 text-slate-300 hover:bg-slate-700">Sensoren</button>
      </div>
    </div>

    <!-- Catalog Split View -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
      <!-- List Items Column -->
      <div class="lg:col-span-7 space-y-2 max-h-[380px] overflow-y-auto pr-1">
        <?php foreach ($catalog_devices as $idx => $d): ?>
          <div 
            data-device-item
            data-name="<?= htmlspecialchars($d['name']) ?>"
            data-order="<?= htmlspecialchars($d['order_number']) ?>"
            data-category="<?= htmlspecialchars($d['category']) ?>"
            data-desc="<?= htmlspecialchars($d['description']) ?>"
            data-kos="<?= htmlspecialchars($d['com_objects_count']) ?>"
            data-params="<?= htmlspecialchars($d['parameters_count']) ?>"
            data-ma="<?= htmlspecialchars($d['bus_current_ma']) ?>"
            data-kb="<?= htmlspecialchars($d['file_size_kb']) ?>"
            data-sha="<?= htmlspecialchars($d['sha256']) ?>"
            class="p-3.5 rounded-xl border border-slate-800 bg-slate-950/60 hover:bg-slate-800/80 cursor-pointer transition-all flex items-center justify-between <?= $idx === 0 ? 'bg-sky-500/10 border-sky-500/40' : '' ?>">
            <div class="space-y-1">
              <div class="flex items-center gap-2">
                <span class="text-xs font-semibold text-white"><?= htmlspecialchars($d['name']) ?></span>
                <span class="text-[10px] font-mono px-1.5 py-0.5 rounded bg-slate-800 text-slate-400"><?= htmlspecialchars($d['manufacturer']) ?></span>
              </div>
              <div class="text-[11px] font-mono text-sky-400"><?= htmlspecialchars($d['order_number']) ?></div>
            </div>
            <div class="text-right">
              <div class="text-xs font-mono text-slate-300"><?= htmlspecialchars($d['com_objects_count']) ?> KOs</div>
              <div class="text-[10px] font-mono text-slate-500"><?= htmlspecialchars($d['bus_current_ma']) ?> mA</div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Detail Card Column -->
      <div class="lg:col-span-5 p-5 rounded-xl bg-slate-950 border border-slate-800 flex flex-col justify-between space-y-4">
        <div class="space-y-3">
          <div class="border-b border-slate-800 pb-3">
            <h4 id="cat-detail-title" class="text-sm font-bold text-white"><?= htmlspecialchars($catalog_devices[0]['name']) ?></h4>
            <div id="cat-detail-order" class="text-xs font-mono text-sky-400 mt-0.5">Bestellnummer: <?= htmlspecialchars($catalog_devices[0]['order_number']) ?></div>
          </div>
          <p id="cat-detail-desc" class="text-xs text-slate-400 leading-relaxed">
            <?= htmlspecialchars($catalog_devices[0]['description']) ?>
          </p>

          <div class="grid grid-cols-2 gap-2 pt-2">
            <div class="bg-slate-900 p-2 rounded-lg border border-slate-800">
              <div class="text-[10px] text-slate-500">Kommunikationsobjekte</div>
              <div id="cat-detail-kos" class="text-xs font-mono font-bold text-emerald-400"><?= htmlspecialchars($catalog_devices[0]['com_objects_count']) ?> KOs</div>
            </div>
            <div class="bg-slate-900 p-2 rounded-lg border border-slate-800">
              <div class="text-[10px] text-slate-500">Parameterbereich</div>
              <div id="cat-detail-params" class="text-xs font-mono font-bold text-sky-400"><?= htmlspecialchars($catalog_devices[0]['parameters_count']) ?> Bytes</div>
            </div>
            <div class="bg-slate-900 p-2 rounded-lg border border-slate-800">
              <div class="text-[10px] text-slate-500">Busstromverbrauch</div>
              <div id="cat-detail-ma" class="text-xs font-mono font-bold text-amber-400"><?= htmlspecialchars($catalog_devices[0]['bus_current_ma']) ?> mA</div>
            </div>
            <div class="bg-slate-900 p-2 rounded-lg border border-slate-800">
              <div class="text-[10px] text-slate-500">Kompression (.knxprod)</div>
              <div id="cat-detail-kb" class="text-xs font-mono font-bold text-teal-400"><?= htmlspecialchars($catalog_devices[0]['file_size_kb']) ?> KB</div>
            </div>
          </div>

          <div class="pt-2">
            <div class="text-[10px] text-slate-500 font-mono mb-1">SHA-256 Integritäts-Hash:</div>
            <div id="cat-detail-sha" class="text-[10px] font-mono text-slate-400 bg-slate-900 p-2 rounded-lg border border-slate-800 truncate">
              <?= htmlspecialchars($catalog_devices[0]['sha256']) ?>
            </div>
          </div>
        </div>

        <div class="pt-3 border-t border-slate-800">
          <button 
            type="button" 
            id="cat-copy-curl-btn"
            class="w-full py-2.5 px-4 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 text-xs font-semibold flex items-center justify-center gap-2 transition-all">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
            <span>cURL Download-Befehl kopieren</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- PANE 3: Live cEMI Bus Monitor -->
  <div id="demo-bus" data-demo-pane class="bg-slate-900 rounded-2xl border border-slate-800 p-6 shadow-2xl relative overflow-hidden hidden">
    <div class="flex flex-wrap items-center justify-between gap-4 pb-4 border-b border-slate-800">
      <div>
        <h3 class="text-base font-bold text-white flex items-center gap-2">
          <span>Echtzeit cEMI Busmonitor &amp; 9600-Baud Simulator</span>
          <span class="text-[10px] font-mono bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-2 py-0.5 rounded-full">WebSocket Stream</span>
        </h3>
        <p class="text-xs text-slate-400 mt-1">Echtzeitdecodierung von KNXnet/IP Routing Telegrammen mit DPT-Payload Parsing und Buslast-Berechnung.</p>
      </div>

      <div class="flex items-center gap-2">
        <button type="button" id="bus-btn-pause" class="px-3 py-1.5 rounded-lg border border-slate-700 bg-slate-800 hover:bg-slate-700 text-xs text-slate-300 transition-colors">Pause</button>
        <button type="button" id="bus-btn-inject" class="px-3 py-1.5 rounded-lg bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-semibold text-xs transition-colors">Telegramm senden</button>
        <button type="button" id="bus-btn-clear" class="px-3 py-1.5 rounded-lg border border-slate-700 bg-slate-800 hover:bg-slate-700 text-xs text-slate-300 transition-colors">Leeren</button>
      </div>
    </div>

    <!-- Bus Load Gauge Bar -->
    <div class="my-4 p-3 rounded-xl bg-slate-950 border border-slate-800 flex items-center justify-between gap-4">
      <div class="text-xs font-mono text-slate-400 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
        <span>TP1 Buslast (9600 Baud):</span>
        <span id="bus-load-percent" class="text-white font-bold">8.4%</span>
      </div>
      <div class="flex-1 max-w-xs h-2 bg-slate-800 rounded-full overflow-hidden">
        <div id="bus-load-bar" class="h-full bg-emerald-500 transition-all duration-500" style="width: 25%;"></div>
      </div>
      <div class="text-[11px] font-mono text-slate-500 hidden sm:block">
        Normbereich: &lt; 50%
      </div>
    </div>

    <!-- Bus Telegram Table Viewport -->
    <div class="rounded-xl border border-slate-800 bg-slate-950 overflow-x-auto max-h-[340px]">
      <table class="w-full text-left border-collapse text-xs font-mono">
        <thead>
          <tr class="border-b border-slate-800 bg-slate-900/90 text-slate-400 text-[11px]">
            <th class="p-3 pl-6">Zeitstempel</th>
            <th class="p-3">Quell-PA</th>
            <th class="p-3">Ziel-GA</th>
            <th class="p-3">DPT</th>
            <th class="p-3">Rohdaten</th>
            <th class="p-3 pr-6">Dekodierter Wert</th>
          </tr>
        </thead>
        <tbody id="bus-table-body">
          <tr class="hover:bg-slate-900/60 transition-colors border-b border-slate-800/60">
            <td class="p-3 pl-6 text-slate-400">12:34:01.102</td>
            <td class="p-3 text-sky-400 font-semibold">1.1.5</td>
            <td class="p-3 text-amber-400 font-semibold">1/0/1</td>
            <td class="p-3 text-slate-300"><span class="bg-slate-800 px-1.5 py-0.5 rounded text-[10px] border border-slate-700">DPT 1.001</span></td>
            <td class="p-3 text-slate-400">$01</td>
            <td class="p-3 pr-6 text-emerald-300 font-medium">Wohnzimmer Licht = 1 (EIN)</td>
          </tr>
          <tr class="hover:bg-slate-900/60 transition-colors border-b border-slate-800/60">
            <td class="p-3 pl-6 text-slate-400">12:34:00.840</td>
            <td class="p-3 text-sky-400 font-semibold">1.1.20</td>
            <td class="p-3 text-amber-400 font-semibold">2/1/0</td>
            <td class="p-3 text-slate-300"><span class="bg-slate-800 px-1.5 py-0.5 rounded text-[10px] border border-slate-700">DPT 9.001</span></td>
            <td class="p-3 text-slate-400">$0C $4A</td>
            <td class="p-3 pr-6 text-emerald-300 font-medium">Büro Raumtemperatur = 21.8 °C</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- PANE 4: NOAA Solar Astro Tracker -->
  <div id="demo-astro" data-demo-pane class="bg-slate-900 rounded-2xl border border-slate-800 p-6 shadow-2xl relative overflow-hidden hidden">
    <div class="flex flex-wrap items-center justify-between gap-4 pb-6 border-b border-slate-800">
      <div>
        <h3 class="text-base font-bold text-white flex items-center gap-2">
          <span>Autonome NOAA Solar-Astro Engine</span>
          <span class="text-[10px] font-mono bg-amber-500/10 text-amber-400 border border-amber-500/20 px-2 py-0.5 rounded-full">Offline Rust Algorithmus</span>
        </h3>
        <p class="text-xs text-slate-400 mt-1">Berechnung von Sonnenazimut &amp; Elevation ohne Internetverbindung zur millimetergenauen Lamellennachführung.</p>
      </div>
      <div>
        <div id="astro-time-display" class="text-xs font-mono text-amber-400 bg-amber-500/10 px-3 py-1.5 rounded-lg border border-amber-500/20">
          Simulierte Zeit: 12:00 Uhr
        </div>
      </div>
    </div>

    <!-- Time Slider Controller -->
    <div class="my-6 space-y-2">
      <div class="flex justify-between text-xs text-slate-400 font-mono">
        <span>00:00 (Nacht)</span>
        <span>06:00 (Aufgang)</span>
        <span>12:00 (Zenit)</span>
        <span>18:00 (Untergang)</span>
        <span>23:00 (Nacht)</span>
      </div>
      <input 
        id="astro-time-slider"
        type="range" 
        min="0" 
        max="23" 
        value="12" 
        class="w-full h-2 bg-slate-950 rounded-lg appearance-none cursor-pointer accent-amber-400"
      />
    </div>

    <!-- Astro Visual Simulation -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
      <!-- Sun Arc Visualizer -->
      <div class="md:col-span-7 h-48 bg-slate-950 rounded-xl border border-slate-800 relative flex items-center justify-center overflow-hidden">
        <div class="absolute bottom-0 left-0 right-0 h-10 bg-slate-900 border-t border-slate-800 flex items-center justify-between px-4 text-[10px] font-mono text-slate-500">
          <span>OSTEN (080°)</span>
          <span>SÜDEN (180°)</span>
          <span>WESTEN (280°)</span>
        </div>
        <!-- Horizon Arch Guide -->
        <div class="absolute w-72 h-72 rounded-full border border-dashed border-slate-800/80 -bottom-36 pointer-events-none"></div>
        
        <!-- Sun Marker -->
        <div id="astro-sun-box" class="absolute flex flex-col items-center transition-all duration-300">
          <div class="w-10 h-10 rounded-full bg-amber-400 shadow-xl shadow-amber-400/50 flex items-center justify-center text-slate-950 font-bold">
            ☀️
          </div>
          <div id="astro-sun-metrics" class="text-[10px] font-mono text-amber-300 mt-1 whitespace-nowrap bg-slate-900/80 px-2 py-0.5 rounded border border-slate-800">
            180° Azimut / 60° Elevation
          </div>
        </div>
      </div>

      <!-- Slat Angle Visualizer -->
      <div class="md:col-span-5 p-5 rounded-xl bg-slate-950 border border-slate-800 space-y-4">
        <div class="flex items-center justify-between border-b border-slate-800 pb-2">
          <span class="text-xs font-semibold text-white">Raffstore-Lamellennachführung</span>
          <span id="astro-slat-angle" class="text-xs font-mono font-bold text-amber-400">Lamelle: 85%</span>
        </div>

        <!-- Blind Slats Simulation Graphic -->
        <div class="h-28 flex flex-col justify-around px-8 py-2 bg-slate-900 rounded-lg border border-slate-800">
          <div class="astro-slat-blade h-1.5 bg-amber-400/80 rounded transition-all duration-300 transform origin-left" style="transform: rotate(38deg);"></div>
          <div class="astro-slat-blade h-1.5 bg-amber-400/80 rounded transition-all duration-300 transform origin-left" style="transform: rotate(38deg);"></div>
          <div class="astro-slat-blade h-1.5 bg-amber-400/80 rounded transition-all duration-300 transform origin-left" style="transform: rotate(38deg);"></div>
          <div class="astro-slat-blade h-1.5 bg-amber-400/80 rounded transition-all duration-300 transform origin-left" style="transform: rotate(38deg);"></div>
        </div>

        <div class="grid grid-cols-3 gap-2 pt-1 text-center font-mono text-[11px]">
          <div class="bg-slate-900 p-2 rounded border border-slate-800">
            <div class="text-[10px] text-slate-500">Azimut</div>
            <div id="astro-out-azimuth" class="text-white font-bold">180°</div>
          </div>
          <div class="bg-slate-900 p-2 rounded border border-slate-800">
            <div class="text-[10px] text-slate-500">Elevation</div>
            <div id="astro-out-elevation" class="text-amber-400 font-bold">60°</div>
          </div>
          <div class="bg-slate-900 p-2 rounded border border-slate-800">
            <div class="text-[10px] text-slate-500">Lamelle</div>
            <div id="astro-out-slat" class="text-emerald-400 font-bold">85%</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
