<?php
// includes/comparison.php
$t = $translations[$lang];
?>
<section id="comparison" class="py-20 px-4 sm:px-6 max-w-7xl mx-auto border-t border-slate-800/80">
  <div class="text-center max-w-3xl mx-auto mb-12">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-800/80 border border-slate-700/80 text-xs font-medium text-emerald-400 mb-3">
      <span><?= htmlspecialchars($t['comparison']['badge']) ?></span>
    </div>
    <h2 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">
      <?= htmlspecialchars($t['comparison']['title']) ?>
    </h2>
    <p class="text-sm sm:text-base text-slate-400 mt-2">
      <?= htmlspecialchars($t['comparison']['subtitle']) ?>
    </p>
  </div>

  <!-- Comparison Table Container -->
  <div class="rounded-2xl border border-slate-800 bg-slate-900/60 overflow-hidden shadow-2xl">
    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse">
        <thead>
          <tr class="border-b border-slate-800 bg-slate-950/80 text-xs uppercase tracking-wider font-semibold">
            <th class="py-4 px-6 text-slate-400 w-1/3"><?= htmlspecialchars($t['comparison']['headers'][0]) ?></th>
            <th class="py-4 px-6 text-slate-400 w-1/3"><?= htmlspecialchars($t['comparison']['headers'][1]) ?></th>
            <th class="py-4 px-6 text-emerald-400 w-1/3 bg-emerald-500/5 border-l border-emerald-500/20">
              <span class="flex items-center gap-2">
                <span><?= htmlspecialchars($t['comparison']['headers'][2]) ?></span>
                <span class="text-[10px] bg-emerald-500/20 text-emerald-300 px-2 py-0.5 rounded-full font-mono normal-case">Empfohlen</span>
              </span>
            </th>
          </tr>
        </thead>
        <tbody class="divide-y divide-slate-800 text-xs sm:text-sm">
          <?php foreach ($t['comparison']['rows'] as $idx => $row): ?>
            <tr class="hover:bg-slate-900/40 transition-colors">
              <td class="py-4 px-6 font-medium text-white">
                <?= htmlspecialchars($row['feature']) ?>
              </td>
              <td class="py-4 px-6 text-slate-400 flex items-start gap-2">
                <span class="text-rose-400 text-sm leading-none shrink-0 mt-0.5">✕</span>
                <span><?= htmlspecialchars($row['ets']) ?></span>
              </td>
              <td class="py-4 px-6 text-slate-200 bg-emerald-500/5 border-l border-emerald-500/20 font-medium">
                <div class="flex items-start gap-2">
                  <span class="text-emerald-400 text-sm leading-none shrink-0 mt-0.5">✓</span>
                  <span class="text-emerald-300"><?= htmlspecialchars($row['konfix']) ?></span>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Footnote -->
    <div class="p-4 bg-slate-950/60 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-2">
      <div class="flex items-center gap-2">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
        <span>Voller .knxproj Roundtrip-Export garantiert nahtlose Koexistenz mit Bestandsanlagen und Partnerbetrieben.</span>
      </div>
      <div class="font-mono text-[11px] text-slate-400">
        KNX Association Mitgliedschaft oder ETS Dongle NICHT erforderlich.
      </div>
    </div>
  </div>
</section>
