<?php
// includes/footer.php
$t = $translations[$lang];
?>
<footer class="border-t border-slate-800 bg-slate-950 py-14 px-4 sm:px-6">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
    <div class="space-y-3 max-w-md">
      <div class="flex items-center gap-3">
        <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-emerald-500 to-sky-500 p-0.5 flex items-center justify-center">
          <div class="w-full h-full bg-slate-950 rounded-[7px] flex items-center justify-center">
            <span class="text-xs font-black tracking-tighter bg-gradient-to-r from-emerald-400 to-sky-400 bg-clip-text text-transparent">KX</span>
          </div>
        </div>
        <span class="text-base font-bold text-white tracking-tight">KoNfiX &amp; KoNfiX-Catalog</span>
        <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/20"><?= htmlspecialchars($konfix_version) ?></span>
      </div>
      <p class="text-xs text-slate-400 leading-relaxed">
        <?= htmlspecialchars($t['footer']['desc']) ?>
      </p>
      <p class="text-[11px] text-slate-500">
        <?= htmlspecialchars($t['footer']['license']) ?>
      </p>
    </div>

    <!-- Quick Links Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-8 text-xs font-medium">
      <div class="space-y-2.5">
        <div class="text-[11px] font-bold uppercase tracking-wider text-slate-300">Software</div>
        <ul class="space-y-2 text-slate-400">
          <li><a href="#workspaces" class="hover:text-emerald-400 transition-colors">Arbeitsbereiche</a></li>
          <li><a href="#ecosystem" class="hover:text-emerald-400 transition-colors">Ökosystem</a></li>
          <li><a href="#demos" class="hover:text-emerald-400 transition-colors">Live-Demos</a></li>
          <li><a href="#quickstart" class="hover:text-emerald-400 transition-colors">Schnellstart</a></li>
        </ul>
      </div>

      <div class="space-y-2.5">
        <div class="text-[11px] font-bold uppercase tracking-wider text-slate-300">Katalog Cloud</div>
        <ul class="space-y-2 text-slate-400">
          <li><a href="https://db.konfix.sduni.de" target="_blank" rel="noreferrer" class="hover:text-sky-400 transition-colors">db.konfix.sduni.de ↗</a></li>
          <li><a href="https://db.konfix.sduni.de/docs" target="_blank" rel="noreferrer" class="hover:text-sky-400 transition-colors">Swagger API Docs ↗</a></li>
          <li><a href="#comparison" class="hover:text-sky-400 transition-colors">ETS 6 Vergleich</a></li>
          <li><a href="https://db.konfix.sduni.de/openapi.json" target="_blank" rel="noreferrer" class="hover:text-sky-400 transition-colors">OpenAPI Spezifikation</a></li>
        </ul>
      </div>

      <div class="space-y-2.5">
        <div class="text-[11px] font-bold uppercase tracking-wider text-slate-300">Quellcode</div>
        <ul class="space-y-2 text-slate-400">
          <li><a href="https://github.com/Sduniii/KoNfiX" target="_blank" rel="noreferrer" class="hover:text-white transition-colors">KoNfiX GitHub ↗</a></li>
          <li><a href="https://github.com/Sduniii/KoNfiX-Catalog" target="_blank" rel="noreferrer" class="hover:text-white transition-colors">KoNfiX-Catalog GitHub ↗</a></li>
          <li><a href="https://github.com/Sduniii/KoNfiX/releases" target="_blank" rel="noreferrer" class="hover:text-white transition-colors">Desktop Releases</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="max-w-7xl mx-auto mt-12 pt-6 border-t border-slate-900 flex flex-col sm:flex-row items-center justify-between text-[11px] text-slate-500 gap-3">
    <div>
      &copy; <?= date('Y') ?> KoNfiX Project. <?= htmlspecialchars($t['footer']['heart']) ?>.
    </div>
    <div class="flex items-center gap-4">
      <a href="#top" class="hover:text-slate-300 transition-colors flex items-center gap-1">
        <span>Nach oben</span>
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
      </a>
    </div>
  </div>
</footer>
