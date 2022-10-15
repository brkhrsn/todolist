require('./bootstrap');

import { createApp } from 'vue'
import App from './vue/app'
export const eventBus = createApp(App)
createApp(App).mount('#app')

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]).vue();
