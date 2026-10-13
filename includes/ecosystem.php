<?php
// includes/ecosystem.php
$t = $translations[$lang];
?>
<section id="ecosystem" class="py-20 px-4 sm:px-6 max-w-7xl mx-auto border-t border-slate-800/80">
  <div class="text-center max-w-3xl mx-auto mb-12">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800/80 border border-slate-700/80 text-xs font-medium text-emerald-400 mb-3">
      <span><?= htmlspecialchars($t['ecosystem']['badge']) ?></span>
    </div>
    <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">
      <?= htmlspecialchars($t['ecosystem']['title']) ?>
    </h2>
    <p class="text-sm sm:text-base text-slate-400 mt-2">
      <?= htmlspecialchars($t['ecosystem']['subtitle']) ?>
    </p>

    <!-- Tab Toggle -->
    <div class="inline-flex p-1.5 rounded-xl bg-slate-900 border border-slate-800 mt-8">
      <button 
        type="button" 
        id="tab-btn-konfix" 
        class="flex items-center gap-2 text-xs sm:text-sm font-semibold px-5 py-2.5 rounded-lg transition-all bg-emerald-500 text-slate-950 shadow-md shadow-emerald-500/20">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        <span><?= htmlspecialchars($t['ecosystem']['tab_konfix']) ?></span>
      </button>

      <button 
        type="button" 
        id="tab-btn-catalog" 
        class="flex items-center gap-2 text-xs sm:text-sm font-semibold px-5 py-2.5 rounded-lg transition-all text-slate-400 hover:text-slate-200">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
        <span><?= htmlspecialchars($t['ecosystem']['tab_catalog']) ?></span>
      </button>
    </div>
  </div>

  <!-- View 1: KoNfiX Core & Desktop -->
  <div id="view-konfix" class="space-y-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($t['ecosystem']['konfix_features'] as $idx => $feat): ?>
        <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800 hover:border-emerald-500/40 transition-all group">
          <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 font-bold text-sm mb-4 group-hover:scale-105 transition-transform">
            0<?= $idx + 1 ?>
          </div>
          <h3 class="text-base font-semibold text-white mb-2 group-hover:text-emerald-300 transition-colors">
            <?= htmlspecialchars($feat['title']) ?>
          </h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            <?= htmlspecialchars($feat['desc']) ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Desktop Callout Banner -->
    <div class="p-6 rounded-2xl bg-gradient-to-r from-emerald-950/40 via-slate-900/80 to-slate-900 border border-emerald-500/30 flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="space-y-2 text-left">
        <div class="inline-flex items-center gap-2 px-2.5 py-0.5 rounded-full bg-emerald-500/20 text-emerald-400 text-xs font-mono font-medium">
          Tauri v2 • Native Standalone Desktop
        </div>
        <h4 class="text-lg font-bold text-white">Linux (.AppImage, .deb), Windows (NSIS .exe), macOS (.dmg)</h4>
        <p class="text-xs sm:text-sm text-slate-400 max-w-2xl">
          Echtes Multithreading mit Rust Tokio Core, hardwarebeschleunigtes Canvas-Rendering und lokaler KNXnet/IP Routing &amp; Tunneling Socket ohne Node.js Abhängigkeit.
        </p>
      </div>
      <div class="flex items-center gap-3 shrink-0">
        <a href="https://github.com/Sduniii/KoNfiX/releases" target="_blank" rel="noreferrer" class="px-5 py-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-semibold text-xs sm:text-sm shadow-lg shadow-emerald-500/20 transition-all">
          GitHub Releases
        </a>
      </div>
    </div>
  </div>

  <!-- View 2: KoNfiX-Catalog Cloud (db.konfix.sduni.de) -->
  <div id="view-catalog" class="space-y-8 hidden">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <?php foreach ($t['ecosystem']['catalog_features'] as $idx => $feat): ?>
        <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800 hover:border-sky-500/40 transition-all group">
          <div class="w-10 h-10 rounded-xl bg-sky-500/10 border border-sky-500/20 flex items-center justify-center text-sky-400 font-bold text-sm mb-4 group-hover:scale-105 transition-transform">
            0<?= $idx + 1 ?>
          </div>
          <h3 class="text-base font-semibold text-white mb-2 group-hover:text-sky-300 transition-colors">
            <?= htmlspecialchars($feat['title']) ?>
          </h3>
          <p class="text-xs sm:text-sm text-slate-400 leading-relaxed">
            <?= htmlspecialchars($feat['desc']) ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Live Cloud Banner -->
    <div class="p-6 rounded-2xl bg-gradient-to-r from-sky-950/40 via-slate-900/80 to-slate-900 border border-sky-500/30 flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="space-y-2 text-left">
        <div class="inline-flex items-center gap-2 px-2.5 py-0.5 rounded-full bg-sky-500/20 text-sky-400 text-xs font-mono font-medium">
          LIVE: https://db.konfix.sduni.de
        </div>
        <h4 class="text-lg font-bold text-white">Offene REST-Schnittstelle &amp; Öffentliche Produktdatenbank</h4>
        <p class="text-xs sm:text-sm text-slate-400 max-w-2xl">
          Automatisches Ingestion von .knxprod, .knxproj und .vd5. Direkter Download per curl oder REST-Client ohne Authentifizierungsschranken.
        </p>
      </div>
      <div class="flex items-center gap-3 shrink-0">
        <a href="https://db.konfix.sduni.de" target="_blank" rel="noreferrer" class="px-5 py-2.5 rounded-xl bg-sky-500 hover:bg-sky-400 text-slate-950 font-semibold text-xs sm:text-sm shadow-lg shadow-sky-500/20 transition-all">
          Cloud Datenbank öffnen →
        </a>
      </div>
    </div>
  </div>
</section>
