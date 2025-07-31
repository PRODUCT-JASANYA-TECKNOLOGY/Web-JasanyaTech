import {createApp, h} from 'vue'
import {createInertiaApp, router} from '@inertiajs/vue3'

import './assets/fonts/unicons/unicons.css'
import './assets/css/plugins.css'
import '../css/app.css'
import './assets/style.css'
import './assets/css/colors/grape.css'
import './assets/fonts/space/space.css'
import './assets/js/plugins'
import './assets/js/theme'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', {eager: true})
        return pages[`./Pages/${name}.vue`]
    },
    setup({el, App, props, plugin}) {
        const vueApp = createApp({render: () => h(App, props)})
            .use(plugin)
            .mount(el)

        // Re-init theme setelah setiap navigasi
        router.on('finish', () => {
            if (window.theme && typeof window.theme.init === 'function') {
                window.theme.init()
            }
        })
    },
})
