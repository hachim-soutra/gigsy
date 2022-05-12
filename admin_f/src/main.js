import { createApp, defineAsyncComponent } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import alertMixin from './mixins/alert'
import configFile from './config/config.json'
//Axios Global Use 
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['Accept'] = 'application/json';



const app = createApp(App);

app.config.globalProperties.$config = configFile;
store.$app_url = configFile.app_url;

/*Global Components*/
const WarningSpinner = defineAsyncComponent(() =>
    import ('./components/ui/spinner/WarningSpinner.vue'));
const TheHeader = defineAsyncComponent(() =>
    import ('./components/layout/TheHeader.vue'));
const TheSidebar = defineAsyncComponent(() =>
    import ('./components/layout/TheSidebar.vue'));
const BaseCard = defineAsyncComponent(() =>
    import ('./components/ui/card/BaseCard.vue'));
const RoundedButton = defineAsyncComponent(() =>
    import ('./components/ui/button/RoundedButton.vue'));
const DeleteDialog = defineAsyncComponent(() =>
    import ('./components/ui/dialog/DeleteDialog.vue'));
app.component('warning-spinner', WarningSpinner);
app.component('the-header', TheHeader);
app.component('the-sidebar', TheSidebar);
app.component('base-card', BaseCard);
app.component('rounded-button', RoundedButton);
app.component('delete-dialog', DeleteDialog);

app.mixin(alertMixin);
app.use(store);
app.use(router);
app.mount('#app');