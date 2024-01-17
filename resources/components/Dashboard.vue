<template>
    <div>
        <header
            class="absolute inset-x-0 top-0 z-50 flex h-16 border-b border-gray-900/10"
        >
            <div
                class="mx-auto flex w-full max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8"
            >
                <div class="flex flex-1 items-center gap-x-6">
                    <button type="button" class="-m-3 p-3 md:hidden">
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="h-5 w-5 text-gray-900"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                    <img
                        class="h-8 w-auto"
                        src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="Your Company"
                    />
                </div>
                <nav
                    class="hidden md:flex md:gap-x-11 md:text-sm md:font-semibold md:leading-6 md:text-gray-700"
                >
                    <a href="#">Dashboard</a>
                    <a href="#">Users</a>
                    <a href="#">Reports</a>
                    <a href="#">Payments</a>
                    <a href="#">Violations</a>
                </nav>
                <div class="flex flex-1 items-center justify-end gap-x-8">
                    <button
                        type="button"
                        class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500"
                    >
                        <span class="sr-only">View notifications</span>
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"
                            />
                        </svg>
                    </button>
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your profile</span>
                        <img
                            class="h-8 w-8 rounded-full bg-gray-800"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                        />
                    </a>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 left-0 z-50 w-full overflow-y-auto bg-white px-4 pb-6 sm:max-w-sm sm:px-6 sm:ring-1 sm:ring-gray-900/10"
                >
                    <div class="-ml-0.5 flex h-16 items-center gap-x-6">
                        <button
                            type="button"
                            class="-m-2.5 p-2.5 text-gray-700"
                        >
                            <span class="sr-only">Close menu</span>
                            <svg
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        </button>
                        <div class="-ml-0.5">
                            <a href="#" class="-m-1.5 block p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img
                                    class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                    alt=""
                                />
                            </a>
                        </div>
                    </div>
                    <div class="mt-2 space-y-2">
                        <a
                            href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >Dashboard</a
                        >
                        <a
                            href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >Invoices</a
                        >
                        <a
                            href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >Clients</a
                        >
                        <a
                            href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >Expenses</a
                        >
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="relative isolate overflow-hidden pt-16">
                <!-- Secondary navigation -->
                <header class="pb-4 pt-6 sm:pb-6">
                    <div
                        class="mx-auto flex max-w-7xl flex-wrap items-center gap-6 px-4 sm:flex-nowrap sm:px-6 lg:px-8"
                    >
                        <h1
                            class="text-base font-semibold leading-7 text-gray-900"
                        >
                            Dashboard
                        </h1>
                        <div
                            class="order-last flex w-full gap-x-8 text-sm font-semibold leading-6 sm:order-none sm:w-auto sm:border-l sm:border-gray-200 sm:pl-6 sm:leading-7"
                        >
                            <a href="#" class="text-indigo-600">Last 7 days</a>
                            <a href="#" class="text-gray-700">Last 30 days</a>
                            <a href="#" class="text-gray-700">All-time</a>
                        </div>
                        <a
                            href="#"
                            class="ml-auto flex items-center gap-x-1 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        >
                            <svg
                                class="-ml-1.5 h-5 w-5"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    d="M10.75 6.75a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z"
                                />
                            </svg>
                            New Report
                        </a>
                    </div>
                </header>

                <!-- Stats -->
                <div
                    class="border-b border-b-gray-900/10 lg:border-t lg:border-t-gray-900/5"
                >
                    <dl
                        class="mx-auto grid max-w-7xl grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 lg:px-2 xl:px-0"
                    >
                        <div
                            class="flex items-baseline flex-wrap justify-between gap-y-2 gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8"
                        >
                            <dt
                                class="text-sm font-medium leading-6 text-gray-500"
                            >
                                Total Reports
                            </dt>
                            <dd
                                class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900"
                            >
                                5,000
                            </dd>
                        </div>
                        <div
                            class="flex items-baseline flex-wrap justify-between gap-y-2 gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8 sm:border-l"
                        >
                            <dt
                                class="text-sm font-medium leading-6 text-gray-500"
                            >
                                Pending Reports
                            </dt>
                            <dd
                                class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900"
                            >
                                27
                            </dd>
                        </div>
                        <div
                            class="flex items-baseline flex-wrap justify-between gap-y-2 gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8 lg:border-l"
                        >
                            <dt
                                class="text-sm font-medium leading-6 text-gray-500"
                            >
                                Processed Reports
                            </dt>
                            <dd
                                class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900"
                            >
                                670
                            </dd>
                        </div>
                        <div
                            class="flex items-baseline flex-wrap justify-between gap-y-2 gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8 sm:border-l"
                        >
                            <dt
                                class="text-sm font-medium leading-6 text-gray-500"
                            >
                                Out
                            </dt>
                            <dd
                                class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900"
                            >
                                $30,156.00
                            </dd>
                        </div>
                    </dl>
                </div>

                <div
                    class="absolute left-0 top-full -z-10 mt-96 origin-top-left translate-y-40 -rotate-90 transform-gpu opacity-20 blur-3xl sm:left-1/2 sm:-ml-96 sm:-mt-10 sm:translate-y-0 sm:rotate-0 sm:transform-gpu sm:opacity-50"
                    aria-hidden="true"
                >
                    <div
                        class="aspect-[1154/678] w-[72.125rem] bg-gradient-to-br from-[#FF80B5] to-[#9089FC]"
                        style="
                            clip-path: polygon(
                                100% 38.5%,
                                82.6% 100%,
                                60.2% 37.7%,
                                52.4% 32.1%,
                                47.5% 41.8%,
                                45.2% 65.6%,
                                27.5% 23.4%,
                                0.1% 35.3%,
                                17.9% 0%,
                                27.7% 23.4%,
                                76.2% 2.5%,
                                74.2% 56%,
                                100% 38.5%
                            );
                        "
                    ></div>
                </div>
            </div>

            <div class="space-y-16 py-8 xl:space-y-20">
                <!-- Recent activity table -->
                <div>
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <h2
                            class="mx-auto max-w-2xl text-base font-semibold leading-6 text-gray-900 lg:mx-0 lg:max-w-none"
                        >
                            Recent reports
                        </h2>
                    </div>
                    <div class="mt-6 border-t border-gray-100">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <div
                                class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none"
                            >
                                <div>
                                    <div class="mt-8 flow-root">
                                        <div
                                            class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8"
                                        >
                                            <div
                                                class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8"
                                            >
                                                <div
                                                    class="shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg"
                                                >
                                                    <table
                                                        class="min-w-full divide-y divide-gray-300"
                                                    >
                                                        <thead
                                                            class="bg-gray-50"
                                                        >
                                                            <tr>
                                                                <th
                                                                    scope="col"
                                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6"
                                                                >
                                                                    Agent name
                                                                </th>
                                                                <th
                                                                    scope="col"
                                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                                                >
                                                                    Company
                                                                </th>
                                                                <th
                                                                    scope="col"
                                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                                                >
                                                                    Violation
                                                                </th>
                                                                <th
                                                                    scope="col"
                                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                                                >
                                                                    Status
                                                                </th>
                                                                <th
                                                                    scope="col"
                                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                                                >
                                                                    Date
                                                                </th>
                                                                <th
                                                                    scope="col"
                                                                    class="relative py-3.5 pl-3 pr-4 sm:pr-6"
                                                                >
                                                                    <span
                                                                        class="sr-only"
                                                                        >View</span
                                                                    >
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody
                                                            class="divide-y divide-gray-200"
                                                        >
                                                            <tr
                                                                v-for="i in 20"
                                                                :key="i"
                                                            >
                                                                <td
                                                                    class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6"
                                                                >
                                                                    Lindsay
                                                                    Walton
                                                                    <span
                                                                        class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10"
                                                                        >GHUDNIFI12</span
                                                                    >
                                                                </td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                                                >
                                                                    Front-end
                                                                    Developer
                                                                    <span
                                                                        class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10"
                                                                        >GHUDNIFI12</span
                                                                    >
                                                                </td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                                                >
                                                                    Liotering
                                                                </td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                                                >
                                                                    <span
                                                                        class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20"
                                                                        >Processed</span
                                                                    >
                                                                </td>
                                                                <td
                                                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                                                >
                                                                    02/04/2023
                                                                    11:20 PM
                                                                </td>
                                                                <td
                                                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6"
                                                                >
                                                                    <a
                                                                        href="#"
                                                                        class="text-indigo-600 hover:text-indigo-900"
                                                                        >View<span
                                                                            class="sr-only"
                                                                            >,
                                                                            Lindsay
                                                                            Walton</span
                                                                        ></a
                                                                    >
                                                                </td>
                                                            </tr>

                                                            <!-- More people... -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
export default {
    setup() {
        return {};
    },
};
</script>

<style lang="scss" scoped></style>
