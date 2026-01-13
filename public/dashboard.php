    <?php require "includes/header.php"; ?>
        <main class="flex-grow w-full max-w-[1280px] mx-auto px-6 md:px-20 py-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-3">
                        <p class="text-[#111418] dark:text-white text-4xl font-black leading-tight tracking-tight">User
                            Management</p>
                        <div
                            class="flex h-6 items-center justify-center gap-x-1 rounded-full bg-primary/10 dark:bg-primary/20 px-3 border border-primary/30 mt-1">
                            <span class="material-symbols-outlined text-primary text-[14px]">verified_user</span>
                            <p class="text-primary text-[10px] font-bold uppercase tracking-wider">Admin</p>
                        </div>
                    </div>
                    <p class="text-[#617589] dark:text-gray-400 text-base font-normal">Manage application users, roles,
                        and access permissions.</p>
                </div>
                <div>
                    <button
                        class="flex items-center gap-2 cursor-pointer rounded-lg h-11 px-6 bg-primary text-white text-sm font-bold transition-transform hover:scale-[1.02] active:scale-[0.98]">
                        <span class="material-symbols-outlined text-[20px]">person_add</span>
                        <span>Add New User</span>
                    </button>
                </div>
            </div>
            <div
                class="bg-white dark:bg-[#1a252f] rounded-xl border border-[#e5e7eb] dark:border-[#2a343f] shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-[#f8f9fa] dark:bg-[#25303c] border-b border-[#e5e7eb] dark:border-[#2a343f]">
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#617589] dark:text-gray-400">
                                    ID</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#617589] dark:text-gray-400">
                                    Name</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#617589] dark:text-gray-400">
                                    Email</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#617589] dark:text-gray-400">
                                    Role</th>
                                <th
                                    class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-[#617589] dark:text-gray-400 text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#e5e7eb] dark:divide-[#2a343f]">
                            <tr class="hover:bg-gray-50 dark:hover:bg-[#1e2b38] transition-colors">
                                <td class="px-6 py-4 text-sm font-medium text-[#617589] dark:text-gray-400">#101</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold text-xs">
                                            JD</div>
                                        <span class="text-sm font-semibold text-[#111418] dark:text-white">John
                                            Doe</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-[#617589] dark:text-gray-400">john.doe@example.com
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2.5 py-1 text-[11px] font-bold uppercase rounded-full bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-400 border border-blue-200 dark:border-blue-800">Administrator</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button
                                            class="p-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-[#617589] dark:text-gray-400 transition-colors"
                                            title="Edit User">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg text-red-500 transition-colors"
                                            title="Delete User">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 dark:hover:bg-[#1e2b38] transition-colors">
                                <td class="px-6 py-4 text-sm font-medium text-[#617589] dark:text-gray-400">#102</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 font-bold text-xs">
                                            AS</div>
                                        <span class="text-sm font-semibold text-[#111418] dark:text-white">Alice
                                            Smith</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-[#617589] dark:text-gray-400">alice.s@company.com</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2.5 py-1 text-[11px] font-bold uppercase rounded-full bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800">Editor</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button
                                            class="p-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-[#617589] dark:text-gray-400 transition-colors"
                                            title="Edit User">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg text-red-500 transition-colors"
                                            title="Delete User">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 dark:hover:bg-[#1e2b38] transition-colors">
                                <td class="px-6 py-4 text-sm font-medium text-[#617589] dark:text-gray-400">#103</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 font-bold text-xs">
                                            BJ</div>
                                        <span class="text-sm font-semibold text-[#111418] dark:text-white">Bob
                                            Johnson</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-[#617589] dark:text-gray-400">bob.j@example.net</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2.5 py-1 text-[11px] font-bold uppercase rounded-full bg-gray-100 text-gray-700 dark:bg-gray-800 dark:text-gray-300 border border-gray-200 dark:border-gray-700">Viewer</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button
                                            class="p-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-[#617589] dark:text-gray-400 transition-colors"
                                            title="Edit User">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg text-red-500 transition-colors"
                                            title="Delete User">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 dark:hover:bg-[#1e2b38] transition-colors">
                                <td class="px-6 py-4 text-sm font-medium text-[#617589] dark:text-gray-400">#104</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="size-8 rounded-full bg-teal-100 flex items-center justify-center text-teal-600 font-bold text-xs">
                                            CW</div>
                                        <span class="text-sm font-semibold text-[#111418] dark:text-white">Charlie
                                            Wilson</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-[#617589] dark:text-gray-400">charlie.w@web.com</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="px-2.5 py-1 text-[11px] font-bold uppercase rounded-full bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-800">Editor</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button
                                            class="p-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-[#617589] dark:text-gray-400 transition-colors"
                                            title="Edit User">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button
                                            class="p-2 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg text-red-500 transition-colors"
                                            title="Delete User">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-6 py-4 bg-[#f8f9fa] dark:bg-[#25303c] border-t border-[#e5e7eb] dark:border-[#2a343f] flex items-center justify-between">
                    <p class="text-xs text-[#617589] dark:text-gray-400">Showing 1 to 4 of 24 users</p>
                    <div class="flex gap-2">
                        <button
                            class="px-3 py-1 border border-[#e5e7eb] dark:border-[#374151] rounded bg-white dark:bg-[#1a252f] text-xs font-medium hover:bg-gray-50 dark:hover:bg-[#2a343f] disabled:opacity-50"
                            disabled="">Previous</button>
                        <button
                            class="px-3 py-1 border border-primary rounded bg-primary text-white text-xs font-medium">1</button>
                        <button
                            class="px-3 py-1 border border-[#e5e7eb] dark:border-[#374151] rounded bg-white dark:bg-[#1a252f] text-xs font-medium hover:bg-gray-50 dark:hover:bg-[#2a343f]">2</button>
                        <button
                            class="px-3 py-1 border border-[#e5e7eb] dark:border-[#374151] rounded bg-white dark:bg-[#1a252f] text-xs font-medium hover:bg-gray-50 dark:hover:bg-[#2a343f]">Next</button>
                    </div>
                </div>
            </div>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="bg-white dark:bg-[#1a252f] p-4 rounded-lg border border-[#e5e7eb] dark:border-[#2a343f]">
                    <p class="text-[#617589] dark:text-gray-400 text-xs font-bold uppercase">Total Users</p>
                    <p class="text-2xl font-black mt-1">24</p>
                </div>
                <div class="bg-white dark:bg-[#1a252f] p-4 rounded-lg border border-[#e5e7eb] dark:border-[#2a343f]">
                    <p class="text-[#617589] dark:text-gray-400 text-xs font-bold uppercase">Admins</p>
                    <p class="text-2xl font-black mt-1 text-primary">3</p>
                </div>
                <div class="bg-white dark:bg-[#1a252f] p-4 rounded-lg border border-[#e5e7eb] dark:border-[#2a343f]">
                    <p class="text-[#617589] dark:text-gray-400 text-xs font-bold uppercase">Active Today</p>
                    <p class="text-2xl font-black mt-1 text-green-500">12</p>
                </div>
                <div class="bg-white dark:bg-[#1a252f] p-4 rounded-lg border border-[#e5e7eb] dark:border-[#2a343f]">
                    <p class="text-[#617589] dark:text-gray-400 text-xs font-bold uppercase">Pending Invites</p>
                    <p class="text-2xl font-black mt-1 text-orange-500">2</p>
                </div>
            </div>
        </main>
    <?php require "includes/footer.php"; ?>