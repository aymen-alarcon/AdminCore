<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login - PHP MVC Application</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
                        "display": ["Inter"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#111418] dark:text-white transition-colors duration-300">
    <div class="flex min-h-screen flex-col">
        <header
            class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#dbe0e6] dark:border-[#2a343d] bg-white dark:bg-[#1a252f] px-10 py-3">
            <div class="flex items-center gap-4">
                <div class="text-primary size-6">
                    <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 4H17.3334V17.3334H30.6666V30.6666H44V44H4V4Z"></path>
                    </svg>
                </div>
                <h2 class="text-[#111418] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">
                    AuthSystem MVC</h2>
            </div>
            <div class="flex items-center gap-4">
                <a class="text-sm font-medium hover:text-primary" href="#">Help</a>
            </div>
        </header>
        <main class="flex flex-1 items-center justify-center p-6">
            <div
                class="w-full max-w-[480px] rounded-xl border border-[#dbe0e6] dark:border-[#2a343d] bg-white dark:bg-[#1a252f] p-8 shadow-sm">
                <div class="mb-8">
                    <h1
                        class="text-[#111418] dark:text-white tracking-light text-[32px] font-bold leading-tight text-center">
                        Welcome Back</h1>
                    <p class="text-[#617589] dark:text-gray-400 text-center text-base mt-2">Login to manage your
                        dashboard</p>
                </div>
                <div class="mb-6">
                    <div
                        class="flex flex-col items-start justify-between gap-4 rounded-lg border border-red-200 bg-red-50 dark:bg-red-900/20 dark:border-red-800/50 p-4">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-red-500">error</span>
                            <div class="flex flex-col gap-1">
                                <p class="text-red-800 dark:text-red-200 text-sm font-bold leading-tight">Invalid
                                    credentials</p>
                                <p class="text-red-700 dark:text-red-300 text-xs font-normal leading-normal">Please
                                    check your email and password and try again.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="/login" class="space-y-6" method="POST">
                    <div class="flex flex-col gap-1">
                        <label class="flex flex-col">
                            <p class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal pb-2">Email
                                Address</p>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-[#3a444d] bg-white dark:bg-[#101922] h-12 placeholder:text-[#617589] p-[15px] text-base font-normal leading-normal transition-all"
                                name="email" placeholder="Enter your email" required="" type="email" />
                        </label>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="flex flex-col">
                            <div class="flex justify-between items-center pb-2">
                                <p class="text-[#111418] dark:text-gray-200 text-sm font-medium leading-normal">Password
                                </p>
                                <a class="text-xs text-primary hover:underline" href="#">Forgot password?</a>
                            </div>
                            <input
                                class="form-input flex w-full min-w-0 flex-1 rounded-lg text-[#111418] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#dbe0e6] dark:border-[#3a444d] bg-white dark:bg-[#101922] h-12 placeholder:text-[#617589] p-[15px] text-base font-normal leading-normal transition-all"
                                name="password" placeholder="••••••••" required="" type="password" />
                        </label>
                    </div>
                    <div class="flex items-center gap-2 px-1">
                        <input
                            class="size-4 rounded border-[#dbe0e6] dark:border-[#3a444d] text-primary focus:ring-primary bg-white dark:bg-[#101922]"
                            id="remember" type="checkbox" />
                        <label class="text-sm text-[#617589] dark:text-gray-400" for="remember">Remember me for 30
                            days</label>
                    </div>
                    <button
                        class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary hover:bg-primary/90 text-white text-base font-bold leading-normal transition-colors"
                        type="submit">
                        <span class="truncate">Sign In</span>
                    </button>
                </form>
                <div class="mt-8 border-t border-[#f0f2f4] dark:border-[#2a343d] pt-6 text-center">
                    <p class="text-[#617589] dark:text-gray-400 text-sm">
                        Don't have an account?
                        <a class="text-primary font-bold hover:underline ml-1" href="/register">Create an account</a>
                    </p>
                </div>
            </div>
        </main>
        <footer
            class="py-6 px-10 border-t border-[#dbe0e6] dark:border-[#2a343d] flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-[#617589] text-xs">© 2024 AuthSystem MVC. All rights reserved.</p>
            <div class="flex gap-6">
                <a class="text-[#617589] text-xs hover:text-primary" href="#">Privacy Policy</a>
                <a class="text-[#617589] text-xs hover:text-primary" href="#">Terms of Service</a>
            </div>
        </footer>
    </div>
</body>
</html>