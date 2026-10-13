<?php
// includes/hero.php
$t = $translations[$lang];
?>
<section class="relative pt-12 sm:pt-20 pb-20 px-4 sm:px-6 max-w-7xl mx-auto overflow-hidden">
  <!-- Radial Glow Background -->
  <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[850px] h-[360px] bg-gradient-to-tr from-emerald-500/10 via-sky-500/10 to-transparent blur-3xl pointer-events-none -z-10"></div>

  <!-- Hero Headline & Copy -->
  <div class="text-center max-w-4xl mx-auto space-y-6">
    <!-- Announcement Badge -->
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800/80 border border-slate-700/80 shadow-sm text-xs font-medium text-slate-300">
      <span class="flex h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
      <span class="text-slate-200"><?= htmlspecialchars(str_replace('{version}', $konfix_version, $t['hero']['badge'])) ?></span>
      <span class="text-emerald-400 font-semibold ml-1">Release <?= htmlspecialchars($konfix_version) ?> →</span>
    </div>

    <!-- Main Title -->
    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
      <?= htmlspecialchars($t['hero']['title']) ?>
      <span class="bg-gradient-to-r from-emerald-400 via-teal-300 to-sky-400 bg-clip-text text-transparent">
        <?= htmlspecialchars($t['hero']['title_gradient']) ?>
      </span>
    </h1>

    <!-- Subtitle -->
    <p class="text-base sm:text-lg text-slate-400 max-w-2xl mx-auto leading-relaxed">
      <?= htmlspecialchars($t['hero']['subtitle']) ?>
    </p>

    <!-- CTAs -->
    <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
      <a href="#demos" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-semibold shadow-lg shadow-emerald-500/20 transition-all active:scale-[0.98]">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"/></svg>
        <span><?= htmlspecialchars($t['hero']['cta_primary']) ?></span>
      </a>

      <a href="https://db.konfix.sduni.de" target="_blank" rel="noreferrer" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-sky-500 hover:bg-sky-400 text-slate-950 font-semibold shadow-lg shadow-sky-500/20 transition-all active:scale-[0.98]">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
        <span><?= htmlspecialchars($t['hero']['cta_secondary']) ?></span>
      </a>

      <a href="https://github.com/Sduniii/KoNfiX/releases" target="_blank" rel="noreferrer" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl border border-slate-700 hover:border-slate-500 bg-slate-800/80 hover:bg-slate-800 text-slate-200 transition-all active:scale-[0.98]">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        <span><?= htmlspecialchars($t['hero']['cta_desktop']) ?></span>
      </a>
    </div>

    <!-- Value Stats -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-6 max-w-3xl mx-auto text-left">
      <div class="bg-slate-900/60 border border-slate-800 p-3.5 rounded-xl">
        <div class="text-xs font-semibold text-emerald-400 flex items-center gap-1.5 mb-0.5">
          <?= htmlspecialchars($t['hero']['stats']['devices']) ?>
        </div>
        <div class="text-[11px] text-slate-400 font-mono"><?= htmlspecialchars($t['hero']['stats']['devices_sub']) ?></div>
      </div>

      <div class="bg-slate-900/60 border border-slate-800 p-3.5 rounded-xl">
        <div class="text-xs font-semibold text-sky-400 flex items-center gap-1.5 mb-0.5">
          <?= htmlspecialchars($t['hero']['stats']['flash']) ?>
        </div>
        <div class="text-[11px] text-slate-400 font-mono"><?= htmlspecialchars($t['hero']['stats']['flash_sub']) ?></div>
      </div>

      <div class="bg-slate-900/60 border border-slate-800 p-3.5 rounded-xl">
        <div class="text-xs font-semibold text-amber-400 flex items-center gap-1.5 mb-0.5">
          <?= htmlspecialchars($t['hero']['stats']['ets']) ?>
        </div>
        <div class="text-[11px] text-slate-400 font-mono"><?= htmlspecialchars($t['hero']['stats']['ets_sub']) ?></div>
      </div>

      <div class="bg-slate-900/60 border border-slate-800 p-3.5 rounded-xl">
        <div class="text-xs font-semibold text-teal-400 flex items-center gap-1.5 mb-0.5">
          <?= htmlspecialchars($t['hero']['stats']['desktop']) ?>
        </div>
        <div class="text-[11px] text-slate-400 font-mono"><?= htmlspecialchars($t['hero']['stats']['desktop_sub']) ?></div>
      </div>
    </div>
  </div>

  <!-- Interactive 4-Workspace Showcase Gallery -->
  <div id="workspaces" class="mt-14 max-w-5xl mx-auto">
    <!-- Showcase Tabs -->
    <div class="flex flex-wrap items-center justify-center gap-2 mb-4">
      <button 
        type="button" 
        data-workspace-tab="canvas"
        data-img="assets/images/hero_canvas.png"
        data-badge="Workspace 1: Logic &amp; Blueprint Canvas"
        data-desc="<?= htmlspecialchars($t['workspaces']['canvas_desc']) ?>"
        class="px-4 py-2 rounded-xl text-xs font-semibold transition-all bg-emerald-500 text-slate-950 shadow-md">
        <?= htmlspecialchars($t['workspaces']['tabs']['canvas']) ?>
      </button>

      <button 
        type="button" 
        data-workspace-tab="cad"
        data-img="assets/images/cad_floorplan.png"
        data-badge="Workspace 2: 2D-CAD Architectural Floorplan"
        data-desc="<?= htmlspecialchars($t['workspaces']['cad_desc']) ?>"
        class="px-4 py-2 rounded-xl text-xs font-semibold transition-all text-slate-400 hover:text-white hover:bg-slate-800">
        <?= htmlspecialchars($t['workspaces']['tabs']['cad']) ?>
      </button>

      <button 
        type="button" 
        data-workspace-tab="topology"
        data-img="assets/images/topology_workspace.png"
        data-badge="Workspace 3: Topology &amp; Coupler Filter Tables"
        data-desc="<?= htmlspecialchars($t['workspaces']['topology_desc']) ?>"
        class="px-4 py-2 rounded-xl text-xs font-semibold transition-all text-slate-400 hover:text-white hover:bg-slate-800">
        <?= htmlspecialchars($t['workspaces']['tabs']['topology']) ?>
      </button>

      <button 
        type="button" 
        data-workspace-tab="diagnostics"
        data-img="assets/images/ets_diagnostics.png"
        data-badge="Workspace 4: 16x16 Line Scanner &amp; Flasher"
        data-desc="<?= htmlspecialchars($t['workspaces']['diagnostics_desc']) ?>"
        class="px-4 py-2 rounded-xl text-xs font-semibold transition-all text-slate-400 hover:text-white hover:bg-slate-800">
        <?= htmlspecialchars($t['workspaces']['tabs']['diagnostics']) ?>
      </button>
    </div>

    <!-- App Window Frame -->
    <div class="relative rounded-2xl border border-slate-700/80 bg-slate-900 shadow-2xl shadow-emerald-950/20 overflow-hidden ring-1 ring-slate-800">
      <!-- Window Titlebar -->
      <div class="h-10 bg-slate-950 px-4 flex items-center justify-between border-b border-slate-800 select-none">
        <div class="flex items-center gap-2">
          <div class="flex gap-1.5">
            <span class="w-3 h-3 rounded-full bg-rose-500/80 inline-block"></span>
            <span class="w-3 h-3 rounded-full bg-amber-500/80 inline-block"></span>
            <span class="w-3 h-3 rounded-full bg-emerald-500/80 inline-block"></span>
          </div>
          <span id="workspace-badge" class="text-xs text-slate-300 font-medium ml-2 font-mono">
            Workspace 1: Logic &amp; Blueprint Canvas
          </span>
        </div>

        <div class="flex items-center gap-2">
          <span class="text-[11px] font-mono bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-2 py-0.5 rounded-full">
            ● In-Process Tokio Core :8080
          </span>
        </div>
      </div>

      <!-- Screenshot Viewport -->
      <div class="relative group overflow-hidden bg-slate-950">
        <img
          id="workspace-hero-image"
          src="assets/images/hero_canvas.png"
          alt="KoNfiX Workspace Screenshot"
          class="w-full h-auto object-cover transition-opacity duration-300"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent pointer-events-none"></div>

        <!-- Description Floating Bar -->
        <div class="absolute bottom-4 left-4 right-4 bg-slate-900/90 backdrop-blur-md p-3.5 rounded-xl border border-slate-700/80 text-xs">
          <p id="workspace-desc" class="text-slate-300 leading-relaxed font-normal">
            <?= htmlspecialchars($t['workspaces']['canvas_desc']) ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
