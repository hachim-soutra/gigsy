import { createApp, defineAsyncComponent } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import alertMixin from './mixins/alert'
//Axios Global Use 
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['Accept'] = 'application/json';






const app = createApp(App);




/*Global Components*/
const WarningSpinner = defineAsyncComponent(() =>
    import ('./components/ui/spinner/WarningSpinner.vue'));
const TheHeader = defineAsyncComponent(() =>
    import ('./components/layout/TheHeader.vue'));
const TheSidebar = defineAsyncComponent(() =>
    import ('./components/layout/TheSidebar.vue'));
const BaseCard = defineAsyncComponent(() =>
    import ('./components/ui/card/BaseCard.vue'));
app.component('warning-spinner', WarningSpinner);
app.component('the-header', TheHeader);
app.component('the-sidebar', TheSidebar);
app.component('base-card', BaseCard);

app.mixin(alertMixin);
app.use(store);
app.use(router);
app.mount('#app');