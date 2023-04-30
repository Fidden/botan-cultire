import {createApp, h} from 'vue';
import {createPinia} from 'pinia';
import {createInertiaApp} from '@inertiajs/vue3';

const pinia = createPinia();

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./pages/**/*.vue', {eager: true})
        return pages[`./pages/${name}.vue`]
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .use(pinia)
            .mount(el)
    },
})
