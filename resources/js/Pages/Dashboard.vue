<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, Link} from '@inertiajs/vue3';


</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        Hello, <strong>{{ $page.props.auth.user.name }}</strong>, your role is
                        <strong>{{ $page.props.auth.user.role }}</strong>!
                        <Link
                            href="mail-sender"
                            class="link"
                        >
                            Now you can <strong><u>send an email</u></strong>
                        </Link>
                        <span
                            v-if="$page.props.auth.user.role==='Administrator'"><strong>with attachment</strong></span>!
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
