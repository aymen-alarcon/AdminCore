<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard Template</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<body
    class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white transition-colors duration-200">
    <div class="relative flex min-h-screen w-full flex-col">
        <header
            class="flex items-center justify-between border-b border-solid border-[#e5e7eb] dark:border-[#2a343f] bg-white dark:bg-[#1a252f] px-6 md:px-20 py-3 sticky top-0 z-50">
            <div class="flex items-center gap-4 text-[#111418] dark:text-white">
                <div class="size-8 text-primary">
                    <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd"
                            d="M24 18.4228L42 11.475V34.3663C42 34.7796 41.7457 35.1504 41.3601 35.2992L24 42V18.4228Z"
                            fill-rule="evenodd"></path>
                        <path clip-rule="evenodd"
                            d="M24 8.18819L33.4123 11.574L24 15.2071L14.5877 11.574L24 8.18819ZM9 15.8487L21 20.4805V37.6263L9 32.9945V15.8487ZM27 37.6263V20.4805L39 15.8487V32.9945L27 37.6263ZM25.354 2.29885C24.4788 1.98402 23.5212 1.98402 22.646 2.29885L4.98454 8.65208C3.7939 9.08038 3 10.2097 3 11.475V34.3663C3 36.0196 4.01719 37.5026 5.55962 38.098L22.9197 44.7987C23.6149 45.0671 24.3851 45.0671 25.0803 44.7987L42.4404 38.098C43.9828 37.5026 45 36.0196 45 34.3663V11.475C45 10.2097 44.2061 9.08038 43.0155 8.65208L25.354 2.29885Z"
                            fill-rule="evenodd"></path>
                    </svg>
                </div>
                <h2 class="text-lg font-bold leading-tight tracking-tight">AdminPanel</h2>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="flex min-w-[100px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold transition-opacity hover:opacity-90">
                    <span class="truncate">Logout</span>
                </button>
            </div>
        </header>
        <main class="flex-grow w-full max-w-[1280px] mx-auto px-6 md:px-20 py-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                <div class="flex flex-col gap-2">
                    <p class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-tight">Welcome
                        back, John Doe</p>
                </div>
            </div>
        </main>
        <footer
            class="mt-auto w-full border-t border-solid border-[#e5e7eb] dark:border-[#2a343f] bg-white dark:bg-[#1a252f] py-6 px-6 md:px-20">
            <div
                class="max-w-[1280px] mx-auto flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-[#617589] dark:text-gray-400">
                <div class="flex items-center gap-2">
                    <span class="font-bold text-[#111418] dark:text-white">AdminPanel</span>
                    <span>© 2023 Dashboard Template</span>
                </div>
                <div class="flex items-center gap-6">
                    <a class="hover:text-primary transition-colors" href="#">Documentation</a>
                    <a class="hover:text-primary transition-colors" href="#">Support</a>
                    <span class="px-2 py-0.5 bg-[#f0f2f4] dark:bg-[#2a343f] rounded text-[10px] font-bold">V
                        1.0.0</span>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>