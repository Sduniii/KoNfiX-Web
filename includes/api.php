<?php
// includes/api.php
$t = $translations[$lang];
?>
<section id="docs" class="py-20 px-4 sm:px-6 max-w-7xl mx-auto border-t border-slate-800/80">
  <div class="text-center max-w-3xl mx-auto mb-12">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800/80 border border-slate-700/80 text-xs font-medium text-sky-400 mb-3">
      <span><?= htmlspecialchars($t['api']['badge']) ?></span>
    </div>
    <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">
      <?= htmlspecialchars($t['api']['title']) ?>
    </h2>
    <p class="text-sm sm:text-base text-slate-400 mt-2">
      <?= htmlspecialchars($t['api']['subtitle']) ?>
    </p>

    <div class="flex items-center justify-center gap-3 mt-6">
      <a href="https://db.konfix.sduni.de/docs" target="_blank" rel="noreferrer" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-sky-500 hover:bg-sky-400 text-slate-950 font-semibold text-xs shadow-md transition-all">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
        <span>Interaktive Swagger UI öffnen ↗</span>
      </a>
      <a href="https://db.konfix.sduni.de/openapi.json" target="_blank" rel="noreferrer" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-slate-700 bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium text-xs transition-colors">
        <span>openapi.json</span>
      </a>
    </div>
  </div>

  <!-- API Endpoints Grid -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Endpoint 1: List Devices -->
    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
          <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 font-mono font-bold text-xs">GET</span>
          <span class="font-mono text-xs text-white">/api/v1/devices</span>
        </div>
        <span class="text-[11px] text-slate-400 font-mono">application/json</span>
      </div>
      <p class="text-xs text-slate-400">
        Geräte durchsuchen, filtern nach Hersteller, Kategorie oder Freitextsuche mit Paginierung.
      </p>

      <div class="relative bg-slate-950 p-3 rounded-xl border border-slate-800 font-mono text-[11px] text-slate-300">
        <pre id="code-api-list" class="overflow-x-auto"><code>curl -X GET "https://db.konfix.sduni.de/api/v1/devices?q=MDT&amp;category=actuator" \
  -H "Accept: application/json"</code></pre>
        <button 
          type="button" 
          data-copy-target="code-api-list"
          class="mt-2 w-full py-1.5 px-3 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 text-[10px] font-sans font-medium transition-colors">
          cURL kopieren
        </button>
      </div>
    </div>

    <!-- Endpoint 2: Binary Download -->
    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
          <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 font-mono font-bold text-xs">GET</span>
          <span class="font-mono text-xs text-white">/api/v1/download/{order_number}</span>
        </div>
        <span class="text-[11px] text-slate-400 font-mono">application/octet-stream</span>
      </div>
      <p class="text-xs text-slate-400">
        Direkter Download der originalen oder gepatchten .knxprod Binärdatei mit Content-Disposition Header.
      </p>

      <div class="relative bg-slate-950 p-3 rounded-xl border border-slate-800 font-mono text-[11px] text-slate-300">
        <pre id="code-api-download" class="overflow-x-auto"><code>curl -L -O "https://db.konfix.sduni.de/api/v1/download/AKS-0816.04"</code></pre>
        <button 
          type="button" 
          data-copy-target="code-api-download"
          class="mt-2 w-full py-1.5 px-3 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 text-[10px] font-sans font-medium transition-colors">
          cURL kopieren
        </button>
      </div>
    </div>

    <!-- Endpoint 3: Zero-Config Upload -->
    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
          <span class="px-2 py-0.5 rounded bg-sky-500/20 text-sky-400 font-mono font-bold text-xs">POST</span>
          <span class="font-mono text-xs text-white">/api/v1/upload</span>
        </div>
        <span class="text-[11px] text-slate-400 font-mono">multipart/form-data</span>
      </div>
      <p class="text-xs text-slate-400">
        Zero-Config Ingestion: Lädt .knxprod, .knxproj oder .vd5 hoch und parst Hardware-Definitionen vollautomatisch in SQLite.
      </p>

      <div class="relative bg-slate-950 p-3 rounded-xl border border-slate-800 font-mono text-[11px] text-slate-300">
        <pre id="code-api-upload" class="overflow-x-auto"><code>curl -X POST "https://db.konfix.sduni.de/api/v1/upload" \
  -F "file=@mein_geraet.knxprod"</code></pre>
        <button 
          type="button" 
          data-copy-target="code-api-upload"
          class="mt-2 w-full py-1.5 px-3 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 text-[10px] font-sans font-medium transition-colors">
          cURL kopieren
        </button>
      </div>
    </div>

    <!-- Endpoint 4: Service Health & SQLite Stats -->
    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-4">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
          <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 font-mono font-bold text-xs">GET</span>
          <span class="font-mono text-xs text-white">/api/v1/health</span>
        </div>
        <span class="text-[11px] text-slate-400 font-mono">application/json</span>
      </div>
      <p class="text-xs text-slate-400">
        Echtzeitstatus der Datenbank, Anzahl indexierter Geräte und Versionsinformationen.
      </p>

      <div class="relative bg-slate-950 p-3 rounded-xl border border-slate-800 font-mono text-[11px] text-slate-300">
        <pre id="code-api-health" class="overflow-x-auto"><code>curl -X GET "https://db.konfix.sduni.de/api/v1/health"</code></pre>
        <button 
          type="button" 
          data-copy-target="code-api-health"
          class="mt-2 w-full py-1.5 px-3 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 text-[10px] font-sans font-medium transition-colors">
          cURL kopieren
        </button>
      </div>
    </div>
  </div>
</section>
