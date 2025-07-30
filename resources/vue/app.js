import {createApp, h} from 'vue'
import {createInertiaApp} from '@inertiajs/vue3'

import './assets/fonts/unicons/unicons.css'
import './assets/css/plugins.css'
import '../css/app.css'
import './assets/css/colors/grape.css'
import './assets/fonts/space/space.css'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', {eager: true})
        return pages[`./Pages/${name}.vue`]
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .mount(el)
    },
})
