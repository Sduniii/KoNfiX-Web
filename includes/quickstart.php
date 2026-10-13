<?php
// includes/quickstart.php
$t = $translations[$lang];
?>
<section id="quickstart" class="py-20 px-4 sm:px-6 max-w-7xl mx-auto border-t border-slate-800/80">
  <div class="text-center max-w-3xl mx-auto mb-12">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800/80 border border-slate-700/80 text-xs font-medium text-emerald-400 mb-3">
      <span><?= htmlspecialchars($t['quickstart']['badge']) ?></span>
    </div>
    <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">
      <?= htmlspecialchars($t['quickstart']['title']) ?>
    </h2>
    <p class="text-sm sm:text-base text-slate-400 mt-2">
      <?= htmlspecialchars($t['quickstart']['subtitle']) ?>
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Card 1: Tauri v2 Desktop -->
    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 flex flex-col justify-between space-y-4 hover:border-emerald-500/40 transition-colors">
      <div class="space-y-3">
        <div class="flex items-center justify-between">
          <span class="text-xs font-mono font-semibold px-2.5 py-1 rounded-lg bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
            Native Desktop
          </span>
          <span class="text-[11px] text-slate-500 font-mono"><?= htmlspecialchars($konfix_version) ?></span>
        </div>
        <h3 class="text-base font-bold text-white">Tauri v2 Desktop App</h3>
        <p class="text-xs text-slate-400 leading-relaxed">
          Standalone-App für Linux, Windows und macOS. Startet mit In-Process Tokio Core und benötigt nur ~35 MB Arbeitsspeicher.
        </p>

        <div class="relative bg-slate-950 p-3 rounded-xl border border-slate-800 font-mono text-[11px] text-emerald-300">
          <div class="text-slate-500 select-none mb-1"># Schnellstart Shell-Skript:</div>
          <pre id="code-quick-desktop" class="overflow-x-auto"><code>git clone https://github.com/Sduniii/KoNfiX.git
cd KoNfiX
./start-desktop.sh</code></pre>
          <button 
            type="button" 
            data-copy-target="code-quick-desktop"
            class="mt-2 w-full py-1.5 px-3 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 text-[10px] font-sans font-medium transition-colors">
            Befehle kopieren
          </button>
        </div>
      </div>

      <div class="pt-2">
        <a href="https://github.com/Sduniii/KoNfiX/releases" target="_blank" rel="noreferrer" class="w-full py-2.5 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-semibold text-xs flex items-center justify-center gap-2 transition-all shadow-md shadow-emerald-500/10">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          <span>Binaries herunterladen (.deb, .exe, .dmg)</span>
        </a>
      </div>
    </div>

    <!-- Card 2: Docker Container -->
    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 flex flex-col justify-between space-y-4 hover:border-sky-500/40 transition-colors">
      <div class="space-y-3">
        <div class="flex items-center justify-between">
          <span class="text-xs font-mono font-semibold px-2.5 py-1 rounded-lg bg-sky-500/10 text-sky-400 border border-sky-500/20">
            Headless Server
          </span>
          <span class="text-[11px] text-slate-500 font-mono">Docker Compose</span>
        </div>
        <h3 class="text-base font-bold text-white">Docker &amp; Home Server</h3>
        <p class="text-xs text-slate-400 leading-relaxed">
          Ideal für Proxmox, TrueNAS, Raspberry Pi 5 oder Synology NAS zur 24/7 KNX-Projektierung im lokalen Firmen- oder Heimnetzwerk.
        </p>

        <div class="relative bg-slate-950 p-3 rounded-xl border border-slate-800 font-mono text-[11px] text-sky-300">
          <div class="text-slate-500 select-none mb-1"># Docker-Container starten:</div>
          <pre id="code-quick-docker" class="overflow-x-auto"><code>git clone https://github.com/Sduniii/KoNfiX.git
cd KoNfiX
docker compose up -d</code></pre>
          <button 
            type="button" 
            data-copy-target="code-quick-docker"
            class="mt-2 w-full py-1.5 px-3 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 text-[10px] font-sans font-medium transition-colors">
            Befehle kopieren
          </button>
        </div>
      </div>

      <div class="pt-2">
        <a href="https://github.com/Sduniii/KoNfiX" target="_blank" rel="noreferrer" class="w-full py-2.5 px-4 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 font-semibold text-xs flex items-center justify-center gap-2 transition-all">
          <span>Docker Dokumentation ansehen →</span>
        </a>
      </div>
    </div>

    <!-- Card 3: Catalog Cloud & Self-Host -->
    <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 flex flex-col justify-between space-y-4 hover:border-teal-500/40 transition-colors">
      <div class="space-y-3">
        <div class="flex items-center justify-between">
          <span class="text-xs font-mono font-semibold px-2.5 py-1 rounded-lg bg-teal-500/10 text-teal-400 border border-teal-500/20">
            Katalog Cloud &amp; Self-Host
          </span>
          <span class="text-[11px] text-slate-500 font-mono">SQLite / FastAPI</span>
        </div>
        <h3 class="text-base font-bold text-white">KoNfiX-Catalog</h3>
        <p class="text-xs text-slate-400 leading-relaxed">
          Nutze direkt die offizielle Instanz auf <strong class="text-sky-300">db.konfix.sduni.de</strong> oder hoste deinen eigenen internen Firmenkatalog.
        </p>

        <div class="relative bg-slate-950 p-3 rounded-xl border border-slate-800 font-mono text-[11px] text-teal-300">
          <div class="text-slate-500 select-none mb-1"># Eigene Katalog-Instanz:</div>
          <pre id="code-quick-catalog" class="overflow-x-auto"><code>git clone https://github.com/Sduniii/KoNfiX-Catalog.git
cd KoNfiX-Catalog
pip install -r requirements.txt
uvicorn src.server:app --port 8000</code></pre>
          <button 
            type="button" 
            data-copy-target="code-quick-catalog"
            class="mt-2 w-full py-1.5 px-3 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 text-[10px] font-sans font-medium transition-colors">
            Befehle kopieren
          </button>
        </div>
      </div>

      <div class="pt-2">
        <a href="https://db.konfix.sduni.de" target="_blank" rel="noreferrer" class="w-full py-2.5 px-4 rounded-xl bg-teal-500 hover:bg-teal-400 text-slate-950 font-semibold text-xs flex items-center justify-center gap-2 transition-all shadow-md shadow-teal-500/10">
          <span>db.konfix.sduni.de Cloud öffnen</span>
        </a>
      </div>
    </div>
  </div>
</section>
