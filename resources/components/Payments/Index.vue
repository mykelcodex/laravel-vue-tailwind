<template>
    <div>
        <div>
            <h1 class="font-bold text-center text-xl text-gray-900">RCMS</h1>
        </div>
        <div class="border shadow bg-white sm:rounded-lg p-5">
            <form action="">
                <div>
                    <label for="id" class="font-semibold">Enter your ID</label>
                    <input
                        type="email"
                        name="email"
                        id="id"
                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="Enter your ID"
                    />
                </div>
                <button
                    type="button"
                    class="mt-4 w-full rounded bg-indigo-600 px-2 py-2 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                    Submit
                </button>
            </form>
        </div>
        <div class="overflow-hidden bg-white shadow sm:rounded-lg mt-10 border">
            <div class="px-4 py-6 sm:px-6">
                <h3 class="text-base font-semibold leading-7 text-gray-900">
                    Application Information
                </h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">
                    Personal details of your application.
                </p>
            </div>
            <div class="border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div
                        class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-24 sm:px-6"
                    >
                        <dt class="text-sm font-medium text-gray-500">
                            Company name
                        </dt>
                        <dd
                            class="font-semibold mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"
                        >
                            Dangote
                        </dd>
                    </div>
                    <div
                        class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-24 sm:px-6"
                    >
                        <dt class="text-sm font-medium text-gray-500">
                            Company ID
                        </dt>
                        <dd
                            class="font-semibold mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"
                        >
                            Backend Developer
                        </dd>
                    </div>
                    <div
                        class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-24 sm:px-6"
                    >
                        <dt class="text-sm font-medium text-gray-500">
                            Company Email address
                        </dt>
                        <dd
                            class="font-semibold mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"
                        >
                            margotfoster@example.com
                        </dd>
                    </div>
                    <div
                        class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-24 sm:px-6"
                    >
                        <dt class="text-sm font-medium text-gray-500">
                            Contact person name
                        </dt>
                        <dd
                            class="font-semibold mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"
                        >
                            $120,000
                        </dd>
                    </div>
                    <div
                        class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-24 sm:px-6"
                    >
                        <dt class="text-sm font-medium text-gray-500">
                            Contact person Email & Phone
                        </dt>
                        <dd
                            class="font-semibold mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"
                        >
                            $120,000
                        </dd>
                    </div>
                    <div
                        class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-24 sm:px-6"
                    >
                        <dt class="text-sm font-medium text-gray-500">
                            Address
                        </dt>
                        <dd
                            class="font-semibold mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"
                        >
                            Fugiat ipsum ipsum deserunt culpa aute sint do
                            nostrud anim incididunt cillum culpa consequat.
                        </dd>
                    </div>
                    <div
                        class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-24 sm:px-6"
                    >
                        <dt class="text-sm font-medium text-gray-500">
                            Violation
                        </dt>
                        <dd
                            class="font-semibold mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"
                        >
                            Inappropiate disposal of waste
                        </dd>
                    </div>
                    <div
                        class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-24 sm:px-6"
                    >
                        <dt class="text-sm font-medium text-gray-500">Fine</dt>
                        <dd
                            class="font-semibold mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0"
                        >
                            50,000
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:gap-4 sm:px-6">
                        <button
                            type="button"
                            class="w-full rounded bg-indigo-600 px-2 py-2 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        >
                            Pay
                        </button>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</template>

<script setup></script>

<style lang="scss" scoped></style>
