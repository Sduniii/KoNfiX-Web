<?php
// includes/header.php
$t = $translations[$lang];
?>
<header class="sticky top-0 z-40 h-16 border-b border-slate-800 bg-slate-900/95 backdrop-blur-md px-4 sm:px-6 flex items-center justify-between select-none">
  <!-- Zone 1: Branding -->
  <div class="flex items-center gap-3">
    <a href="#" class="flex items-center gap-2.5 group">
      <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-emerald-500 to-sky-400 flex items-center justify-center font-black text-slate-950 text-sm shadow-md shadow-emerald-500/20 shrink-0 group-hover:scale-105 transition-transform">
        K
      </div>
      <div class="flex flex-col">
        <div class="flex items-center gap-1.5 leading-none">
          <span class="font-bold text-sm text-slate-100 tracking-tight">KoNfiX</span>
          <span class="text-[10px] font-mono tracking-wider bg-sky-500/10 text-sky-400 border border-sky-500/20 px-1.5 py-0.5 rounded font-semibold">
            v2026.10.5
          </span>
        </div>
        <span class="text-[11px] text-slate-400 font-medium hidden sm:inline-block mt-0.5">
          Visual KNX Configurator &amp; Catalog Cloud
        </span>
      </div>
    </a>
  </div>

  <!-- Zone 2: Navigation Links -->
  <nav class="hidden lg:flex items-center gap-1 bg-slate-950/60 p-1 rounded-xl border border-slate-800 text-xs font-medium text-slate-400">
    <a href="#workspaces" class="px-3 py-1.5 rounded-lg hover:text-slate-100 hover:bg-slate-800/80 transition-colors">
      <?= htmlspecialchars($t['nav']['workspaces']) ?>
    </a>
    <a href="#ecosystem" class="px-3 py-1.5 rounded-lg hover:text-slate-100 hover:bg-slate-800/80 transition-colors">
      <?= htmlspecialchars($t['nav']['ecosystem']) ?>
    </a>
    <a href="#demos" class="px-3 py-1.5 rounded-lg hover:text-slate-100 hover:bg-slate-800/80 transition-colors">
      <?= htmlspecialchars($t['nav']['demos']) ?>
    </a>
    <a href="#comparison" class="px-3 py-1.5 rounded-lg hover:text-slate-100 hover:bg-slate-800/80 transition-colors">
      <?= htmlspecialchars($t['nav']['comparison']) ?>
    </a>
    <a href="#quickstart" class="px-3 py-1.5 rounded-lg hover:text-slate-100 hover:bg-slate-800/80 transition-colors">
      <?= htmlspecialchars($t['nav']['quickstart']) ?>
    </a>
    <a href="#docs" class="px-3 py-1.5 rounded-lg hover:text-slate-100 hover:bg-slate-800/80 transition-colors">
      <?= htmlspecialchars($t['nav']['docs']) ?>
    </a>
    <a href="https://db.konfix.sduni.de" target="_blank" rel="noreferrer" class="px-3 py-1.5 rounded-lg text-sky-400 hover:text-sky-300 hover:bg-slate-800/80 transition-colors font-semibold">
      <?= htmlspecialchars($t['nav']['catalog_link']) ?> ↗
    </a>
  </nav>

  <!-- Zone 3: Controls -->
  <div class="flex items-center gap-2.5">
    <!-- Live Bus Status -->
    <div class="hidden sm:flex items-center gap-1.5 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs px-2.5 py-1 rounded-lg font-mono">
      <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
      <span>IP Secure: 192.168.1.120</span>
    </div>

    <!-- Language Switcher -->
    <a href="?lang=<?= $lang === 'de' ? 'en' : 'de' ?>" class="flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg border border-slate-700 bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white text-xs font-medium transition-colors" title="Switch Language">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-sky-400"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
      <span class="uppercase font-semibold text-[11px]"><?= $lang ?></span>
    </a>

    <!-- GitHub Link -->
    <a href="https://github.com/Sduniii/KoNfiX" target="_blank" rel="noreferrer" class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 border border-slate-700 text-slate-200 hover:text-white text-xs font-medium transition-colors">
      <svg width="14" height="14" viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
      <span class="hidden md:inline">GitHub</span>
    </a>
  </div>
</header>
