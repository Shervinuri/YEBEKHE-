<?php
// The complete and updated list of VPN clients as a PHP associative array.
// This data will be used by the front-end JavaScript to dynamically build the UI.
$vpn_clients_data = [
  "clash" => [
    "windows" => [
      ["name" => "Clash Verge (Rev) - x64 Installer", "url" => "https://github.com/clash-verge-rev/clash-verge-rev/releases/latest/download/Clash.Verge_1.6.8_x64-setup.exe"],
      ["name" => "Clash Verge (Rev) - ARM64 Installer", "url" => "https://github.com/clash-verge-rev/clash-verge-rev/releases/latest/download/Clash.Verge_1.6.8_arm64-setup.msi"],
      ["name" => "Clash for Windows - x64 Installer", "url" => "https://github.com/Fndroid/clash_for_windows_pkg/releases/latest/download/Clash.for.Windows.Setup.0.20.39.exe"]
    ],
    "macos" => [
      ["name" => "Clash Verge (Rev) - Apple Silicon", "url" => "https://github.com/clash-verge-rev/clash-verge-rev/releases/latest/download/Clash.Verge_1.6.8_aarch64.dmg"],
      ["name" => "Clash Verge (Rev) - Intel", "url" => "https://github.com/clash-verge-rev/clash-verge-rev/releases/latest/download/Clash.Verge_1.6.8_x64.dmg"],
      ["name" => "ClashX - Universal", "url" => "https://github.com/yichengchen/clashX/releases/latest/download/ClashX.dmg"]
    ],
    "android" => [
      ["name" => "Clash for Android (CFA) - arm64-v8a", "url" => "https://github.com/Kr328/ClashForAndroid/releases/latest/download/cfa-2.5.12-premium-arm64-v8a-release.apk"],
      ["name" => "Clash for Android (CFA) - armeabi-v7a", "url" => "https://github.com/Kr328/ClashForAndroid/releases/latest/download/cfa-2.5.12-premium-armeabi-v7a-release.apk"]
    ],
    "ios" => [
      ["name" => "Stash (Recommended)", "url" => "https://apps.apple.com/us/app/stash/id1596063349"],
      ["name" => "Shadowrocket", "url" => "https://apps.apple.com/us/app/shadowrocket/id932747118"]
    ],
    "linux" => [
      ["name" => "Clash Verge (Rev) - amd64 (.deb)", "url" => "https://github.com/clash-verge-rev/clash-verge-rev/releases/latest/download/clash-verge_1.6.8_amd64.deb"],
      ["name" => "Clash Verge (Rev) - amd64 (.AppImage)", "url" => "https://github.com/clash-verge-rev/clash-verge-rev/releases/latest/download/Clash.Verge_1.6.8_amd64.AppImage"]
    ]
  ],
  "sing-box" => [
    "windows" => [
      ["name" => "Hiddify-Next - x64 Installer", "url" => "https://github.com/hiddify/hiddify-next/releases/latest/download/Hiddify-Windows-x64-Setup.exe"],
      ["name" => "NekoRay - x64", "url" => "https://github.com/MatsuriDayo/nekoray/releases/latest/download/nekoray-3.28-2024-03-10-windows64.zip"]
    ],
    "macos" => [
      ["name" => "Hiddify-Next - Universal", "url" => "https://github.com/hiddify/hiddify-next/releases/latest/download/Hiddify-MacOS.dmg"]
    ],
    "android" => [
      ["name" => "Hiddify-Next - Universal", "url" => "https://github.com/hiddify/hiddify-next/releases/latest/download/Hiddify-Android-universal.apk"],
      ["name" => "NekoBox - Universal", "url" => "https://github.com/MatsuriDayo/NekoBoxForAndroid/releases/latest/download/NB4A-1.2.8-foss.apk"]
    ],
    "ios" => [
      ["name" => "Streisand (Recommended)", "url" => "https://apps.apple.com/us/app/streisand/id6450534064"],
      ["name" => "FoXray", "url" => "https://apps.apple.com/us/app/foxray/id6448898396"],
      ["name" => "Stash", "url" => "https://apps.apple.com/us/app/stash/id1596063349"]
    ],
    "linux" => [
      ["name" => "Hiddify-Next - x64 (.AppImage)", "url" => "https://github.com/hiddify/hiddify-next/releases/latest/download/Hiddify-Linux-x64.AppImage"],
      ["name" => "NekoRay - x64", "url" => "https://github.com/MatsuriDayo/nekoray/releases/latest/download/nekoray-3.28-2024-03-10-linux64.zip"]
    ]
  ],
  "v2ray" => [
    "windows" => [
      ["name" => "v2rayN (with Xray core)", "url" => "https://github.com/2dust/v2rayN/releases/latest/download/v2rayN-With-Core.zip"]
    ],
    "macos" => [
      ["name" => "V2RayU - Universal", "url" => "https://github.com/yanue/V2rayU/releases/latest/download/V2rayU.dmg"]
    ],
    "android" => [
      ["name" => "v2rayNG - arm64-v8a", "url" => "https://github.com/2dust/v2rayNG/releases/latest/download/v2rayNG_1.8.19_arm64-v8a.apk"],
      ["name" => "v2rayNG - armeabi-v7a", "url" => "https://github.com/2dust/v2rayNG/releases/latest/download/v2rayNG_1.8.19_armeabi-v7a.apk"]
    ],
    "ios" => [
      ["name" => "Shadowrocket (Classic)", "url" => "https://apps.apple.com/us/app/shadowrocket/id932747118"],
      ["name" => "FoXray", "url" => "https://apps.apple.com/us/app/foxray/id6448898396"],
      ["name" => "Stash", "url" => "https://apps.apple.com/us/app/stash/id1596063349"]
    ],
    "linux" => [
      ["name" => "Qv2ray (.AppImage) (Archived)", "url" => "https://github.com/Qv2ray/Qv2ray/releases/download/v2.7.0/Qv2ray.v2.7.0.linux-x64.AppImage"]
    ]
  ],
  "surfboard" => [
    "android" => [
      ["name" => "Surfboard (Google Play)", "url" => "https://play.google.com/store/apps/details?id=com.getsurfboard"],
      ["name" => "Surfboard (Github Release)", "url" => "https://github.com/getsurfboard/surfboard/releases/latest/download/surfboard-2.22.0.apk"]
    ],
    "ios" => [
        ["name" => "Not Available (Use Shadowrocket or Stash)", "url" => "#"]
    ]
  ]
];
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>راهنمای دانلود کلاینت</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Vazirmatn for Persian UI -->
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        /* Custom styles for a smooth transition */
        .step {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }
        .step.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .btn {
            @apply w-full p-4 bg-white border border-gray-200 rounded-xl shadow-sm text-center text-gray-700 font-semibold transition-all duration-200 ease-in-out;
            @apply hover:shadow-md hover:border-blue-500 hover:text-blue-600 hover:scale-105;
        }
        .btn-download {
             @apply w-full p-4 bg-blue-500 text-white rounded-xl shadow-sm font-semibold transition-all duration-200 ease-in-out flex items-center justify-center gap-2;
             @apply hover:bg-blue-600 hover:shadow-lg;
        }
        .btn-back {
            @apply text-sm text-gray-500 hover:text-gray-800 transition-colors;
        }
    </style>
</head>
<body class="bg-gray-50">

    <div class="min-h-screen flex flex-col items-center justify-center p-4">
        
        <div class="w-full max-w-md mx-auto bg-white rounded-2xl shadow-lg p-6 md:p-8 space-y-6">
            
            <!-- Header section with a back button -->
            <div class="flex items-center justify-between">
                <h1 id="header-title" class="text-xl font-bold text-gray-800">سیستم عامل خود را انتخاب کنید</h1>
                <button id="back-button" class="btn-back" style="display: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </button>
            </div>

            <!-- Step 1: OS Selection -->
            <div id="step-os" class="step active">
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    <button class="btn" data-os="windows">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-auto mb-2" viewBox="0 0 48 48"><path fill="#00adef" d="M23.002 23.002h23v23h-23zM23.002 2.002h23v23h-23zM2.002 23.002h23v23h-23zM2.002 2.002h23v23h-23z"/></svg>
                        ویندوز
                    </button>
                    <button class="btn" data-os="macos">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-auto mb-2" viewBox="0 0 48 48"><path fill="#808080" d="M24.613 3.313c-5.442 0-8.538 3.344-10.834 3.344-2.39 0-4.881-3.213-8.016-3.213-5.346 0-10.11 4.29-10.11 11.438 0 8.27 6.918 14.11 10.354 14.11 2.02 0 4.35-2.95 7.15-2.95 2.705 0 5.488 3.21 7.824 3.21 3.488 0 8.78-5.24 8.78-12.28 0-5.43-3.64-8.69-7.148-8.69zm-1.562 29.25c-1.354.045-2.902.945-4.14.945-1.28 0-3.32-.99-4.86-.99-2.95 0-6.12 3.3-8.06 3.3-1.89 0-4.22-3.04-4.22-6.43 0-2.18 1.22-4.22 4.08-5.52 1.08-.49 2.37-.81 3.66-.72 1.24-.09 3.57.99 4.86.99 1.33 0 3.21-.99 4.9-.99 2.81 0 5.71 3.12 7.48 3.12 1.73 0 3.62-2.72 3.62-5.43 0-1.26-.54-2.43-1.53-3.32-3.62-3.26-6.89-3.44-8.82-3.44-3.26 0-6.44 1.48-8.06 1.48s-3.35-1.48-6.44-1.48c-4.48 0-8.19 3.48-8.19 8.35 0 5.42 4.17 9.57 8.52 9.57 2.95 0 5.52-2.81 7.48-2.81s4.17 2.81 7.14 2.81c4.26 0 7.82-4.14 7.82-8.56 0-3.95-2.81-7.14-6.44-7.14z"/></svg>
                        مک
                    </button>
                    <button class="btn" data-os="linux">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-auto mb-2" viewBox="0 0 48 48"><path fill="#f7931e" d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-4.34 29.56c-1.24.83-2.67 1.33-4.16 1.33-2.33 0-4.34-1.17-5.5-3.08l2.08-1.25c.75 1.17 1.83 1.92 3.25 1.92 1.17 0 2.17-.5 2.17-1.42 0-.92-.83-1.33-2.17-1.83l-1.5-.58c-2.33-.92-3.83-2.25-3.83-4.75 0-2.5 1.92-4.33 4.58-4.33 1.5 0 2.83.5 3.75 1.17l-1.83 1.5c-.67-.5-.92-.83-1.92-.83-1.08 0-1.75.5-1.75 1.25 0 .83.67 1.25 1.92 1.67l1.5.58c2.83 1.08 4.25 2.5 4.25 4.92 0 2.91-2.09 4.66-5.17 4.66zM36 26h-6v-4h4c1.1 0 2-.9 2-2v-2c0-1.1-.9-2-2-2h-4V8h-4v10h-4v4h4v4h-4c-1.1 0-2 .9-2 2v2c0 1.1.9 2 2 2h4v10h4V30h4v-4z"/></svg>
                        لینوکس
                    </button>
                    <button class="btn" data-os="android">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-auto mb-2" viewBox="0 0 48 48"><path fill="#a4c639" d="M11.233 28.35a3.83 3.83 0 1 1 7.66 0 3.83 3.83 0 0 1-7.66 0zm21.7 0a3.83 3.83 0 1 1 7.66 0 3.83 3.83 0 0 1-7.66 0zM12.3 12.3l4.018 4.018a19.818 19.818 0 0 1 15.364 0L35.7 12.3A22.84 22.84 0 0 0 24 9.167a22.84 22.84 0 0 0-11.7 3.133z"/><path fill="#a4c639" d="M8.167 21.433c-1.05 0-1.917.867-1.917 1.917v9.167c0 3.183 2.583 5.75 5.75 5.75h2.833V21.433H8.167zm25.75 15.084h2.833c3.183 0 5.75-2.567 5.75-5.75v-9.167c0-1.05-.867-1.917-1.917-1.917H33.917v16.834z"/></svg>
                        اندروید
                    </button>
                    <button class="btn" data-os="ios">
                         <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mx-auto mb-2" viewBox="0 0 48 48"><path fill="#808080" d="M24.613 3.313c-5.442 0-8.538 3.344-10.834 3.344-2.39 0-4.881-3.213-8.016-3.213-5.346 0-10.11 4.29-10.11 11.438 0 8.27 6.918 14.11 10.354 14.11 2.02 0 4.35-2.95 7.15-2.95 2.705 0 5.488 3.21 7.824 3.21 3.488 0 8.78-5.24 8.78-12.28 0-5.43-3.64-8.69-7.148-8.69z"/></svg>
                        آیفون (iOS)
                    </button>
                </div>
            </div>

            <!-- Step 2: Client Selection -->
            <div id="step-client" class="step">
                <div id="client-container" class="grid grid-cols-2 gap-4">
                    <!-- Client buttons will be injected here -->
                </div>
            </div>

            <!-- Step 3: Download Links -->
            <div id="step-download" class="step">
                <div id="download-container" class="space-y-3">
                    <!-- Download links will be injected here -->
                </div>
            </div>

        </div>
        <footer class="text-center mt-6 text-sm text-gray-400">
       YEBEKHE 
        </footer>
    </div>

    <script>
        // Pass PHP data to JavaScript
        const vpnData = <?php echo json_encode($vpn_clients_data); ?>;
        
        // State management
        let currentState = {
            step: 1,
            os: null,
            client: null
        };

        // DOM Elements
        const steps = {
            1: document.getElementById('step-os'),
            2: document.getElementById('step-client'),
            3: document.getElementById('step-download')
        };
        const headerTitle = document.getElementById('header-title');
        const backButton = document.getElementById('back-button');
        const osButtons = document.querySelectorAll('#step-os .btn');
        const clientContainer = document.getElementById('client-container');
        const downloadContainer = document.getElementById('download-container');

        // --- UI Update Functions ---

        function updateUI() {
            // Hide all steps first
            Object.values(steps).forEach(stepEl => stepEl.classList.remove('active'));
            
            // Show the current step
            if (steps[currentState.step]) {
                steps[currentState.step].classList.add('active');
            }

            // Update header and back button visibility
            backButton.style.display = currentState.step > 1 ? 'block' : 'none';
            switch (currentState.step) {
                case 1:
                    headerTitle.textContent = 'سیستم عامل خود را انتخاب کنید';
                    break;
                case 2:
                    headerTitle.textContent = 'نوع کلاینت را انتخاب کنید';
                    break;
                case 3:
                    headerTitle.textContent = 'نسخه مورد نظر را دانلود کنید';
                    break;
            }
        }

        function populateClients(os) {
            clientContainer.innerHTML = ''; // Clear previous buttons
            const availableClients = new Set();
            Object.keys(vpnData).forEach(clientName => {
                if (vpnData[clientName][os] && vpnData[clientName][os].length > 0) {
                    availableClients.add(clientName);
                }
            });

            if (availableClients.size === 0) {
                clientContainer.innerHTML = `<p class="text-center text-gray-500 col-span-2">کلاینتی برای این سیستم عامل یافت نشد.</p>`;
            } else {
                availableClients.forEach(clientName => {
                    const button = document.createElement('button');
                    button.className = 'btn';
                    button.textContent = clientName.charAt(0).toUpperCase() + clientName.slice(1);
                    button.dataset.client = clientName;
                    clientContainer.appendChild(button);
                });
            }
        }
        
        function populateDownloads(os, client) {
            downloadContainer.innerHTML = ''; // Clear previous links
            const downloads = vpnData[client]?.[os] || [];

            if (downloads.length === 0) {
                downloadContainer.innerHTML = `<p class="text-center text-gray-500">نسخه‌ای برای این انتخاب یافت نشد.</p>`;
            } else {
                downloads.forEach(item => {
                    const link = document.createElement('a');
                    link.href = item.url;
                    link.className = 'btn-download';
                    link.target = '_blank'; // Open in new tab
                    link.rel = 'noopener noreferrer';
                    
                    const downloadIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>`;
                    link.innerHTML = `<span>${item.name}</span>${downloadIcon}`;
                    
                    // For App Store links, don't treat as direct download
                    if(item.url.includes('apps.apple.com') || item.url.includes('play.google.com')){
                        link.innerHTML = `<span>${item.name}</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>`;
                    }
                     if(item.url === '#'){
                        link.classList.remove('btn-download');
                        link.classList.add('bg-gray-300', 'cursor-not-allowed', 'hover:bg-gray-300');
                        link.removeAttribute('href');
                        link.innerHTML = `<span>${item.name}</span>`;
                    }

                    downloadContainer.appendChild(link);
                });
            }
        }


        // --- Event Listeners ---

        osButtons.forEach(button => {
            button.addEventListener('click', () => {
                currentState.step = 2;
                currentState.os = button.dataset.os;
                populateClients(currentState.os);
                updateUI();
            });
        });

        clientContainer.addEventListener('click', (e) => {
            if (e.target && e.target.matches('button.btn')) {
                currentState.step = 3;
                currentState.client = e.target.dataset.client;
                populateDownloads(currentState.os, currentState.client);
                updateUI();
            }
        });

        backButton.addEventListener('click', () => {
            if (currentState.step > 1) {
                currentState.step--;
                // Clear the subsequent state
                if (currentState.step === 1) {
                    currentState.os = null;
                    currentState.client = null;
                } else if (currentState.step === 2) {
                    currentState.client = null;
                }
                updateUI();
            }
        });

        // Initial UI setup
        updateUI();

    </script>
</body>
</html>
