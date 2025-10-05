<?php $shopName = "Lunara"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $shopName ?> | Road Map</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="max-w-4xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Road map</h1>
        <p class="text-gray-600 mb-6">High-level plan and status for upcoming features.</p>
        <div class="mb-6 flex items-center space-x-2">
            <span class="font-semibold">Filter:</span>
            <select class="border rounded px-2 py-1 text-sm">
                <option>All</option>
                <option>Planned</option>
                <option>In Progress</option>
                <option>Backlog</option>
                <option>Done</option>
            </select>
            <span class="ml-auto text-xs text-gray-400">This is a UI-only roadmap for planning.</span>
        </div>
        <!-- Features -->
        <div class="space-y-4">
            <!-- Card: Services CRUD -->
            <div class="bg-white rounded-xl shadow p-5 border border-gray-100">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-bold text-lg">Services CRUD</span>
                    <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">In Progress</span>
                </div>
                <div class="text-gray-700 mb-1">Add, update, and deactivate service packages (pricing, description, tags).</div>
                <div class="text-xs text-gray-500 mb-2">Priority: High</div>
                <details class="text-sm">
                    <summary class="cursor-pointer text-pink-600">Implementation pipeline</summary>
                </details>
            </div>
            <!-- Card: Client service request (no account) -->
            <div class="bg-white rounded-xl shadow p-5 border border-gray-100">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-bold text-lg">Client service request (no account)</span>
                    <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Planned</span>
                </div>
                <div class="text-gray-700 mb-1">Allow anonymous users to request a service; capture contact details and preferences.</div>
                <div class="text-xs text-gray-500 mb-2">Priority: High</div>
                <details class="text-sm">
                    <summary class="cursor-pointer text-pink-600">Implementation pipeline</summary>
                </details>
            </div>
            <!-- Card: Client service request (with account) -->
            <div class="bg-white rounded-xl shadow p-5 border border-gray-100">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-bold text-lg">Client service request (with account)</span>
                    <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Planned</span>
                </div>
                <div class="text-gray-700 mb-1">Authenticated requests with tracking/history for the client (requires accounts).</div>
                <div class="text-xs text-gray-500 mb-2">Priority: High</div>
                <details class="text-sm">
                    <summary class="cursor-pointer text-pink-600">Implementation pipeline</summary>
                </details>
            </div>
            <!-- Card: Obituary & Memorial pages -->
            <div class="bg-white rounded-xl shadow p-5 border border-gray-100">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-bold text-lg">Obituary & Memorial pages</span>
                    <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full">Backlog</span>
                </div>
                <div class="text-gray-700 mb-1">Clients with accounts can create memorial pages, upload images and moderate guestbook entries.</div>
                <div class="text-xs text-gray-500 mb-2">Priority: Medium</div>
                <details class="text-sm">
                    <summary class="cursor-pointer text-pink-600">Implementation pipeline</summary>
                </details>
            </div>
            <!-- Card: Email verification -->
            <div class="bg-white rounded-xl shadow p-5 border border-gray-100">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-bold text-lg">Email verification</span>
                    <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Planned</span>
                </div>
                <div class="text-gray-700 mb-1">Send verification emails on signup and allow re-sending; gate sensitive actions until verified.</div>
                <div class="text-xs text-gray-500 mb-2">Priority: Medium</div>
                <details class="text-sm">
                    <summary class="cursor-pointer text-pink-600">Implementation pipeline</summary>
                </details>
            </div>
            <!-- Card: Account information updates -->
            <div class="bg-white rounded-xl shadow p-5 border border-gray-100">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-bold text-lg">Account information updates</span>
                    <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Planned</span>
                </div>
                <div class="text-gray-700 mb-1">Allow users to update profile data, contact details and change password.</div>
                <div class="text-xs text-gray-500 mb-2">Priority: Medium</div>
                <details class="text-sm">
                    <summary class="cursor-pointer text-pink-600">Implementation pipeline</summary>
                </details>
            </div>
            <!-- Card: Assign manager to employee -->
            <div class="bg-white rounded-xl shadow p-5 border border-gray-100">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-bold text-lg">Assign manager to employee</span>
                    <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full">Backlog</span>
                </div>
                <div class="text-gray-700 mb-1">UI + data relation: set an employee's manager (for approvals and notifications).</div>
                <div class="text-xs text-gray-500 mb-2">Priority: Low</div>
                <details class="text-sm">
                    <summary class="cursor-pointer text-pink-600">Implementation pipeline</summary>
                </details>
            </div>
            <!-- Card: Update work status for employee -->
            <div class="bg-white rounded-xl shadow p-5 border border-gray-100">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-bold text-lg">Update work status for employee</span>
                    <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full">Backlog</span>
                </div>
                <div class="text-gray-700 mb-1">Employees can update job status (on-duty, off-duty, on-call) and managers can view history.</div>
                <div class="text-xs text-gray-500 mb-2">Priority: Low</div>
                <details class="text-sm">
                    <summary class="cursor-pointer text-pink-600">Implementation pipeline</summary>
                </details>
            </div>
            <!-- Card: Employee leave requests and approvals -->
            <div class="bg-white rounded-xl shadow p-5 border border-gray-100">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-bold text-lg">Employee leave requests and approvals</span>
                    <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full">Backlog</span>
                </div>
                <div class="text-gray-700 mb-1">Request leave flow with manager approvals and admin oversight.</div>
                <div class="text-xs text-gray-500 mb-2">Priority: Low</div>
                <details class="text-sm">
                    <summary class="cursor-pointer text-pink-600">Implementation pipeline</summary>
                </details>
            </div>
            <!-- Card: Platform: middleware, & image upload -->
            <div class="bg-white rounded-xl shadow p-5 border border-gray-100">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-bold text-lg">Platform: middleware, & image upload</span>
                    <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full">Backlog</span>
                </div>
                <div class="text-gray-700 mb-1">Shared infra pieces: authorization middleware, and secure image upload handling for obituaries and profiles.</div>
                <div class="text-xs text-gray-500 mb-2">Priority: High</div>
                <details class="text-sm">
                    <summary class="cursor-pointer text-pink-600">Implementation pipeline</summary>
                </details>
            </div>
        </div>
        <!-- Completed Section -->
        <hr class="my-8">
        <h2 class="text-lg font-bold text-gray-700 mb-4">Completed</h2>
        <div class="bg-white rounded-xl shadow p-5 border border-gray-100">
            <div class="flex justify-between items-center mb-2">
                <span class="font-bold text-lg">Employee & Admin accounts (RBAC)</span>
                <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Done</span>
            </div>
            <div class="text-gray-700 mb-1">Create employee and admin accounts, role assignment, and admin ability to deactivate any account.</div>
            <div class="text-xs text-gray-500 mb-2">Priority: High</div>
            <details class="text-sm">
                <summary class="cursor-pointer text-pink-600">Implementation pipeline</summary>
            </details>
        </div>
    </div>
</body>

</html>