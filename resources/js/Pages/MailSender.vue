<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {useForm} from '@inertiajs/vue3';
import TextArea from "@/Components/TextArea.vue";


const form = useForm({
    subject: "",
    body: "",
    email: "",
    file: null,
    fileName: "",
});

</script>

<template>
    <AuthenticatedLayout>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mail sender
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                Feel free to send an email to anybody what you
                                want! 😀
                            </h2>
                        </header>

                        <form
                            class="mt-6 space-y-6"
                            @submit.prevent="form.post(route('mail-send'),)"
                        >
                            <div>
                                <InputLabel
                                    for="name"
                                    value="E-mail address"
                                />

                                <TextInput
                                    id="subject"
                                    v-model="form.email"
                                    type="text"
                                    class="mt-1 block w-full"
                                    autofocus
                                    autocomplete="email"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.email"
                                />
                            </div>
                            <div>
                                <InputLabel
                                    for="name"
                                    value="Subject"
                                />

                                <TextInput
                                    id="subject"
                                    v-model="form.subject"
                                    type="text"
                                    class="mt-1 block w-full"
                                    autofocus
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.subject"
                                />
                            </div>
                            <div>
                                <InputLabel
                                    for="name"
                                    value="Body"
                                />
                                <small>(You should use basic markdown syntax)</small>

                                <TextArea
                                    id="body"
                                    v-model="form.body"
                                    type="text"
                                    class="mt-1 block w-full h-80"
                                    autofocus
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.body"
                                />
                            </div>

                            <div v-if="Boolean($page.props.auth.user.is_admin)">
                                <InputLabel
                                    for="file"
                                    value="File to upload"
                                />

                                <TextInput
                                    id="file"
                                    ref="file"
                                    type="file"
                                    v-model="form.fileName"
                                    @input="form.file = $event.target.files[0]"
                                    class="mt-1 block w-full"
                                    autofocus
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.file"
                                />
                            </div>


                            <div class="flex items-center gap-4">
                                <PrimaryButton :disabled="form.processing">
                                    Send
                                </PrimaryButton>

                                <Transition
                                    enter-active-class="transition ease-in-out"
                                    enter-from-class="opacity-0"
                                    leave-active-class="transition ease-in-out"
                                    leave-to-class="opacity-0"
                                >
                                    <p
                                        v-if="form.recentlySuccessful"
                                        class="text-sm text-gray-600"
                                    >

                                        Email successfully
                                        sent.
                                    </p>

                                </Transition>
                                <Transition
                                    enter-active-class="transition ease-in-out"
                                    enter-from-class="opacity-0"
                                    leave-active-class="transition ease-in-out"
                                    leave-to-class="opacity-0"
                                >
                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.mailSend"
                                    />
                                </Transition>

                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
