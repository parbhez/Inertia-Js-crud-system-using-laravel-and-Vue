<template>
    <AppHead title="About" />

    <app-layout>
        <div><h1>Welcome About</h1></div>

        <div><h1>Access HTML by Welcome Share App Name : {{ $page.props.appName }}</h1></div>
        <div><h1>Access setup method by Welcome Share App Name : {{ myname }}</h1></div>

        <div><h1>Access custom share data HTML by Welcome Share App Name : {{ $page.props.name.creator }}</h1></div>
        <div><h1>Access custom share data setup method by Welcome Share App Name : {{ mycreator }}</h1></div>
    </app-layout>
</template>

<script>
import AppLayout from "../Layouts/App.vue";
import { usePage } from '@inertiajs/vue3'
export default {
    components: {
        AppLayout,
    },

    setup(){
        const myname = usePage().props.appName;
        const mycreator = usePage().props.name.creator;
        return{ myname,mycreator };
    },
};
</script>
