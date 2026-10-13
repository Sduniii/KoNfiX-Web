// KoNfiX & KoNfiX-Catalog Interactive JavaScript Suite (Vanilla JS, 0 dependencies)

document.addEventListener('DOMContentLoaded', () => {
    initWorkspaceGallery();
    initEcosystemTabs();
    initDemoTabs();
    initWiringDemo();
    initCatalogExplorer();
    initBusMonitor();
    initAstroTracker();
    initCopyButtons();
});

/* ========================================================================= */
/* 1. WORKSPACE GALLERY SWITCHER                                             */
/* ========================================================================= */
function initWorkspaceGallery() {
    const tabs = document.querySelectorAll('[data-workspace-tab]');
    const image = document.getElementById('workspace-hero-image');
    const badge = document.getElementById('workspace-badge');
    const desc = document.getElementById('workspace-desc');

    if (!tabs.length || !image) return;

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => {
                t.classList.remove('bg-emerald-500', 'text-slate-950', 'shadow-md');
                t.classList.add('text-slate-400');
            });
            tab.classList.remove('text-slate-400');
            tab.classList.add('bg-emerald-500', 'text-slate-950', 'shadow-md');

            const imgSrc = tab.getAttribute('data-img');
            const badgeText = tab.getAttribute('data-badge');
            const descText = tab.getAttribute('data-desc');

            image.style.opacity = '0.3';
            setTimeout(() => {
                image.src = imgSrc;
                image.style.opacity = '1';
                if (badge) badge.textContent = badgeText;
                if (desc) desc.textContent = descText;
            }, 120);
        });
    });
}

/* ========================================================================= */
/* 2. ECOSYSTEM TABS (KoNfiX vs Catalog)                                      */
/* ========================================================================= */
function initEcosystemTabs() {
    const btnKonfix = document.getElementById('tab-btn-konfix');
    const btnCatalog = document.getElementById('tab-btn-catalog');
    const viewKonfix = document.getElementById('view-konfix');
    const viewCatalog = document.getElementById('view-catalog');

    if (!btnKonfix || !btnCatalog || !viewKonfix || !viewCatalog) return;

    btnKonfix.addEventListener('click', () => {
        btnKonfix.className = 'flex items-center gap-2 text-xs sm:text-sm font-semibold px-5 py-2.5 rounded-lg transition-all bg-emerald-500 text-slate-950 shadow-md shadow-emerald-500/20';
        btnCatalog.className = 'flex items-center gap-2 text-xs sm:text-sm font-semibold px-5 py-2.5 rounded-lg transition-all text-slate-400 hover:text-slate-200';
        viewKonfix.classList.remove('hidden');
        viewCatalog.classList.add('hidden');
    });

    btnCatalog.addEventListener('click', () => {
        btnCatalog.className = 'flex items-center gap-2 text-xs sm:text-sm font-semibold px-5 py-2.5 rounded-lg transition-all bg-sky-500 text-slate-950 shadow-md shadow-sky-500/20';
        btnKonfix.className = 'flex items-center gap-2 text-xs sm:text-sm font-semibold px-5 py-2.5 rounded-lg transition-all text-slate-400 hover:text-slate-200';
        viewCatalog.classList.remove('hidden');
        viewKonfix.classList.add('hidden');
    });
}

/* ========================================================================= */
/* 3. DEMO TABS                                                              */
/* ========================================================================= */
function initDemoTabs() {
    const demoTabs = document.querySelectorAll('[data-demo-target]');
    const demoPanes = document.querySelectorAll('[data-demo-pane]');

    if (!demoTabs.length) return;

    demoTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-demo-target');
            demoTabs.forEach(t => {
                t.classList.remove('bg-emerald-500', 'bg-sky-500', 'bg-amber-400', 'bg-teal-400', 'text-slate-950');
                t.classList.add('text-slate-400');
            });

            tab.classList.remove('text-slate-400');
            tab.classList.add('bg-emerald-500', 'text-slate-950');

            demoPanes.forEach(pane => {
                if (pane.id === target) {
                    pane.classList.remove('hidden');
                } else {
                    pane.classList.add('hidden');
                }
            });
        });
    });
}

/* ========================================================================= */
/* 4. BLUEPRINT WIRING DEMO                                                  */
/* ========================================================================= */
function initWiringDemo() {
    const triggerBtn = document.getElementById('demo-wire-trigger-btn');
    const toggleWireBtn = document.getElementById('demo-wire-toggle-btn');
    const wireContainer = document.getElementById('demo-wire-line');
    const pulseLight = document.getElementById('demo-wire-pulse');
    const bulb = document.getElementById('demo-wire-bulb');
    const relayStatus = document.getElementById('demo-wire-relay-status');
    const traceLog = document.getElementById('demo-wire-trace-log');

    if (!triggerBtn) return;

    let isConnected = true;
    let isSwitchedOn = false;

    function addTrace(msg) {
        if (!traceLog) return;
        const entry = document.createElement('div');
        entry.className = 'truncate text-slate-400';
        entry.innerHTML = `<span class="text-emerald-400 mr-2">›</span>${msg}`;
        traceLog.insertBefore(entry, traceLog.firstChild);
        if (traceLog.children.length > 5) {
            traceLog.removeChild(traceLog.lastChild);
        }
    }

    triggerBtn.addEventListener('click', () => {
        if (!isConnected) {
            addTrace('WARNUNG: Kein Kabel zwischen Taster und Aktor verbunden!');
            return;
        }

        if (pulseLight) pulseLight.classList.remove('hidden');
        isSwitchedOn = !isSwitchedOn;
        addTrace(`TX: cEMI GroupValue_Write -> GA 1/0/1 = ${isSwitchedOn ? '1 (EIN)' : '0 (AUS)'}`);

        setTimeout(() => {
            if (pulseLight) pulseLight.classList.add('hidden');
            if (relayStatus) {
                relayStatus.innerHTML = isSwitchedOn 
                    ? '<span class="text-emerald-400 font-bold">● GESCHLOSSEN (1)</span>' 
                    : '<span class="text-slate-500">○ OFFEN (0)</span>';
            }
            if (bulb) {
                bulb.className = isSwitchedOn 
                    ? 'w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300 bg-amber-400 text-slate-950 shadow-lg shadow-amber-400/40' 
                    : 'w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300 bg-slate-800 text-slate-500';
            }
            triggerBtn.className = isSwitchedOn
                ? 'w-full py-3 px-4 rounded-lg font-medium text-xs transition-all flex items-center justify-center gap-2 bg-emerald-500 text-slate-950 font-semibold shadow-lg shadow-emerald-500/20'
                : 'w-full py-3 px-4 rounded-lg font-medium text-xs transition-all flex items-center justify-center gap-2 bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700';
            addTrace(`RX: MDT AKS-0816.04 Ch A Relais ${isSwitchedOn ? 'GESCHLOSSEN (Licht EIN)' : 'OFFEN (Licht AUS)'}`);
        }, 400);
    });

    if (toggleWireBtn) {
        toggleWireBtn.addEventListener('click', () => {
            isConnected = !isConnected;
            if (isConnected) {
                toggleWireBtn.textContent = 'Kabel trennen';
                if (wireContainer) wireContainer.innerHTML = '<div class="absolute inset-0 bg-emerald-500/60"></div>';
                addTrace('CONNECT: Auto-GA verbindet Taster mit Kanal A (GA 1/0/1)');
            } else {
                toggleWireBtn.textContent = 'Kabel verbinden';
                if (wireContainer) wireContainer.innerHTML = '<div class="text-xs font-mono text-slate-500 bg-slate-900/80 px-3 py-1.5 rounded-lg border border-dashed border-slate-700">Kein Kabel verbunden</div>';
                isSwitchedOn = false;
                if (bulb) bulb.className = 'w-10 h-10 rounded-xl flex items-center justify-center transition-all duration-300 bg-slate-800 text-slate-500';
                if (relayStatus) relayStatus.innerHTML = '<span class="text-slate-500">○ OFFEN (0)</span>';
                addTrace('DISCONNECT: Kabel unlinked');
            }
        });
    }
}

/* ========================================================================= */
/* 5. CATALOG POKÉDEX EXPLORER                                               */
/* ========================================================================= */
function initCatalogExplorer() {
    const searchInput = document.getElementById('catalog-search-input');
    const filterBtns = document.querySelectorAll('[data-cat-filter]');
    const listItems = document.querySelectorAll('[data-device-item]');
    const detailTitle = document.getElementById('cat-detail-title');
    const detailOrder = document.getElementById('cat-detail-order');
    const detailDesc = document.getElementById('cat-detail-desc');
    const detailKOs = document.getElementById('cat-detail-kos');
    const detailParams = document.getElementById('cat-detail-params');
    const detailMa = document.getElementById('cat-detail-ma');
    const detailKb = document.getElementById('cat-detail-kb');
    const detailSha = document.getElementById('cat-detail-sha');
    const copyCurlBtn = document.getElementById('cat-copy-curl-btn');

    let currentOrderNumber = 'AKS-0816.04';

    function filterDevices() {
        const query = searchInput ? searchInput.value.toLowerCase() : '';
        const activeFilterBtn = document.querySelector('[data-cat-filter].active');
        const activeCat = activeFilterBtn ? activeFilterBtn.getAttribute('data-cat-filter') : 'all';

        listItems.forEach(item => {
            const name = item.getAttribute('data-name').toLowerCase();
            const order = item.getAttribute('data-order').toLowerCase();
            const cat = item.getAttribute('data-category');

            const matchesQuery = name.includes(query) || order.includes(query);
            const matchesCat = (activeCat === 'all' || cat === activeCat);

            if (matchesQuery && matchesCat) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterDevices);
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-sky-500', 'text-slate-950', 'font-semibold');
                b.classList.add('bg-slate-800', 'text-slate-300');
            });
            btn.classList.add('active', 'bg-sky-500', 'text-slate-950', 'font-semibold');
            btn.classList.remove('bg-slate-800', 'text-slate-300');
            filterDevices();
        });
    });

    listItems.forEach(item => {
        item.addEventListener('click', () => {
            listItems.forEach(i => i.classList.remove('bg-sky-500/10', 'border-sky-500/40'));
            item.classList.add('bg-sky-500/10', 'border-sky-500/40');

            currentOrderNumber = item.getAttribute('data-order');
            if (detailTitle) detailTitle.textContent = item.getAttribute('data-name');
            if (detailOrder) detailOrder.textContent = `Bestellnummer: ${currentOrderNumber}`;
            if (detailDesc) detailDesc.textContent = item.getAttribute('data-desc');
            if (detailKOs) detailKOs.textContent = `${item.getAttribute('data-kos')} KOs`;
            if (detailParams) detailParams.textContent = `${item.getAttribute('data-params')} Bytes`;
            if (detailMa) detailMa.textContent = `${item.getAttribute('data-ma')} mA`;
            if (detailKb) detailKb.textContent = `${item.getAttribute('data-kb')} KB`;
            if (detailSha) detailSha.textContent = item.getAttribute('data-sha');
        });
    });

    if (copyCurlBtn) {
        copyCurlBtn.addEventListener('click', () => {
            const curl = `curl -L -O "https://db.konfix.sduni.de/api/v1/download/${encodeURIComponent(currentOrderNumber)}"`;
            navigator.clipboard.writeText(curl).then(() => {
                const oldText = copyCurlBtn.textContent;
                copyCurlBtn.textContent = 'curl kopiert!';
                setTimeout(() => copyCurlBtn.textContent = oldText, 2000);
            });
        });
    }
}

/* ========================================================================= */
/* 6. LIVE cEMI BUS MONITOR                                                  */
/* ========================================================================= */
function initBusMonitor() {
    const tableBody = document.getElementById('bus-table-body');
    const loadPercent = document.getElementById('bus-load-percent');
    const loadBar = document.getElementById('bus-load-bar');
    const btnPause = document.getElementById('bus-btn-pause');
    const btnInject = document.getElementById('bus-btn-inject');
    const btnClear = document.getElementById('bus-btn-clear');

    if (!tableBody) return;

    let isStreaming = true;

    const mockFeeds = [
        { dest: '1/0/1', dpt: 'DPT 1.001', raw: '$00', desc: 'Wohnzimmer Licht = 0 (AUS)' },
        { dest: '4/1/2', dpt: 'DPT 9.004', raw: '$0F $40', desc: 'Helligkeitssensor = 38,400 Lux' },
        { dest: '3/0/1', dpt: 'DPT 18.001', raw: '$03', desc: 'Lichtszene 3 (Abendstimmung)' },
        { dest: '1/2/4', dpt: 'DPT 14.056', raw: '$42 $28 $00 $00', desc: 'Energiezähler = 42.0 kWh' },
    ];

    function addRow(t) {
        const tr = document.createElement('tr');
        tr.className = 'hover:bg-slate-900/60 transition-colors border-b border-slate-800/60';
        tr.innerHTML = `
            <td class="p-3 pl-6 text-slate-400">${t.timestamp}</td>
            <td class="p-3 text-sky-400 font-semibold">${t.source}</td>
            <td class="p-3 text-amber-400 font-semibold">${t.destination}</td>
            <td class="p-3 text-slate-300"><span class="bg-slate-800 px-1.5 py-0.5 rounded text-[10px] border border-slate-700">${t.dpt}</span></td>
            <td class="p-3 text-slate-400">${t.raw}</td>
            <td class="p-3 pr-6 text-emerald-300 font-medium truncate">${t.desc}</td>
        `;
        tableBody.insertBefore(tr, tableBody.firstChild);
        if (tableBody.children.length > 20) {
            tableBody.removeChild(tableBody.lastChild);
        }
    }

    const timer = setInterval(() => {
        if (!isStreaming) return;
        const now = new Date();
        const timeStr = `${String(now.getHours()).padStart(2, '0')}:${String(now.getMinutes()).padStart(2, '0')}:${String(now.getSeconds()).padStart(2, '0')}.${String(now.getMilliseconds()).padStart(3, '0')}`;
        const item = mockFeeds[Math.floor(Math.random() * mockFeeds.length)];
        
        addRow({
            timestamp: timeStr,
            source: `1.1.${Math.floor(Math.random() * 40) + 1}`,
            destination: item.dest,
            dpt: item.dpt,
            raw: item.raw,
            desc: item.desc
        });

        const load = (Math.random() * 7 + 4).toFixed(1);
        if (loadPercent) loadPercent.textContent = `${load}%`;
        if (loadBar) loadBar.style.width = `${Math.min(load * 3.5, 100)}%`;
    }, 2600);

    if (btnInject) {
        btnInject.addEventListener('click', () => {
            const now = new Date();
            const timeStr = `${String(now.getHours()).padStart(2, '0')}:${String(now.getMinutes()).padStart(2, '0')}:${String(now.getSeconds()).padStart(2, '0')}.${String(now.getMilliseconds()).padStart(3, '0')}`;
            addRow({
                timestamp: timeStr,
                source: '1.1.250',
                destination: '0/0/1',
                dpt: 'DPT 1.001',
                raw: '$01',
                desc: 'MANUELL: Zentral-Aus Broadcast'
            });
            if (loadPercent) loadPercent.textContent = '19.2%';
            if (loadBar) loadBar.style.width = '65%';
        });
    }

    if (btnPause) {
        btnPause.addEventListener('click', () => {
            isStreaming = !isStreaming;
            btnPause.textContent = isStreaming ? 'Pause' : 'Start';
        });
    }

    if (btnClear) {
        btnClear.addEventListener('click', () => {
            tableBody.innerHTML = '';
        });
    }
}

/* ========================================================================= */
/* 7. NOAA SOLAR ASTRO TRACKER                                               */
/* ========================================================================= */
function initAstroTracker() {
    const slider = document.getElementById('astro-time-slider');
    const timeDisplay = document.getElementById('astro-time-display');
    const sunBox = document.getElementById('astro-sun-box');
    const sunMetrics = document.getElementById('astro-sun-metrics');
    const slatAngleDisplay = document.getElementById('astro-slat-angle');
    const slatElements = document.querySelectorAll('.astro-slat-blade');
    const outAzimuth = document.getElementById('astro-out-azimuth');
    const outElevation = document.getElementById('astro-out-elevation');
    const outSlat = document.getElementById('astro-out-slat');

    if (!slider) return;

    slider.addEventListener('input', () => {
        const hour = parseInt(slider.value, 10);
        if (timeDisplay) timeDisplay.textContent = `Simulierte Zeit: ${String(hour).padStart(2, '0')}:00 Uhr`;

        const isDay = hour >= 6 && hour <= 19;
        const sunProgress = Math.max(0, Math.min(1, (hour - 6) / 13));
        const azimuth = isDay ? Math.round(80 + sunProgress * 200) : (hour > 19 ? 310 : 40);
        const elevation = isDay ? Math.round(Math.sin(sunProgress * Math.PI) * 60) : -15;
        const slatAngle = isDay && elevation > 20 ? Math.min(100, Math.round((elevation / 60) * 85)) : 0;

        if (sunBox) {
            if (isDay) {
                sunBox.style.transform = `translateX(${(sunProgress - 0.5) * 200}px) translateY(${(1 - Math.sin(sunProgress * Math.PI)) * 25}px)`;
                if (sunMetrics) sunMetrics.textContent = `${azimuth}° Azimut / ${elevation}° Elevation`;
            } else {
                sunBox.style.transform = 'none';
                if (sunMetrics) sunMetrics.textContent = 'Sonne unter Horizont (-15°)';
            }
        }

        if (slatAngleDisplay) slatAngleDisplay.textContent = `Lamelle: ${slatAngle}%`;
        slatElements.forEach(blade => {
            blade.style.transform = `rotate(${isDay ? slatAngle * 0.45 : 0}deg)`;
            blade.style.opacity = isDay && slatAngle > 0 ? '1' : '0.3';
        });

        if (outAzimuth) outAzimuth.textContent = `${azimuth}°`;
        if (outElevation) outElevation.textContent = `${elevation}°`;
        if (outSlat) outSlat.textContent = `${slatAngle}%`;
    });
}

/* ========================================================================= */
/* 8. COPY TO CLIPBOARD BUTTONS                                              */
/* ========================================================================= */
function initCopyButtons() {
    const copyBtns = document.querySelectorAll('[data-copy-target]');
    copyBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-copy-target');
            const targetEl = document.getElementById(targetId);
            if (!targetEl) return;

            const text = targetEl.textContent || targetEl.innerText;
            navigator.clipboard.writeText(text).then(() => {
                const orig = btn.textContent;
                btn.textContent = 'Kopiert!';
                setTimeout(() => btn.textContent = orig, 2000);
            });
        });
    });
}
