<?php
/**
 * Dynamic version resolver for KoNfiX.
 * Fetches the latest release tag from GitHub API with local file caching (1 hour TTL).
 */

function get_latest_konfix_version(): string {
    $cache_file = __DIR__ . '/version_cache.json';
    $cache_ttl = 3600; // 1 hour TTL
    $default_fallback = 'v2026.10.6';

    // 1. Try reading fresh cache
    if (file_exists($cache_file)) {
        $raw = @file_get_contents($cache_file);
        if ($raw) {
            $data = @json_decode($raw, true);
            if (is_array($data) && !empty($data['version']) && !empty($data['cached_at'])) {
                if ((time() - (int)$data['cached_at']) < $cache_ttl) {
                    return $data['version'];
                }
            }
        }
    }

    // 2. Try fetching from GitHub Releases API
    $api_url = 'https://api.github.com/repos/Sduniii/KoNfiX/releases/latest';
    $version = null;

    if (function_exists('curl_init')) {
        $ch = curl_init($api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'KoNfiX-Website/1.0');
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($http_code === 200 && $response) {
            $json = @json_decode($response, true);
            if (!empty($json['tag_name'])) {
                $version = trim($json['tag_name']);
            }
        }
    }

    // Fallback: file_get_contents with stream_context
    if (!$version) {
        $opts = [
            'http' => [
                'method' => 'GET',
                'header' => "User-Agent: KoNfiX-Website/1.0\r\n",
                'timeout' => 3
            ]
        ];
        $context = stream_context_create($opts);
        $response = @file_get_contents($api_url, false, $context);
        if ($response) {
            $json = @json_decode($response, true);
            if (!empty($json['tag_name'])) {
                $version = trim($json['tag_name']);
            }
        }
    }

    // 3. Fallback: local development sibling repository
    if (!$version) {
        $local_tauri = __DIR__ . '/../../KoNfiX/src-tauri/tauri.conf.json';
        if (file_exists($local_tauri)) {
            $local_data = @json_decode(@file_get_contents($local_tauri), true);
            if (!empty($local_data['version'])) {
                $version = 'v' . ltrim(trim($local_data['version']), 'v');
            }
        }
    }

    // 4. Save to cache if a valid version was found
    if ($version) {
        $cache_payload = json_encode([
            'version' => $version,
            'cached_at' => time()
        ], JSON_PRETTY_PRINT);
        @file_put_contents($cache_file, $cache_payload);
        return $version;
    }

    // 5. Stale cache fallback (even if older than 1h)
    if (file_exists($cache_file)) {
        $raw = @file_get_contents($cache_file);
        if ($raw) {
            $data = @json_decode($raw, true);
            if (!empty($data['version'])) {
                return $data['version'];
            }
        }
    }

    return $default_fallback;
}
