import { createApp, h } from 'vue'
import 'flowbite';
import { createInertiaApp, Link } from '@inertiajs/vue3'
import AppHead from '../js/Components/Partials/AppHead.vue'


createInertiaApp({
    progress: {
        color: 'red',
    },
    resolve: name => {
        const pages =
            import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },

    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .mixin({ methods: { route: window.route } })
            .use(plugin)
            .component('Link', Link)
            .component('AppHead', AppHead)
            .mount(el)
    },
})