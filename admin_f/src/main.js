import { createApp, defineAsyncComponent } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

//Axios Global Use 
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['Accept'] = 'application/json';


const app = createApp(App);




/*Global Components*/
const WarningSpinner = defineAsyncComponent(() =>
    import ('./components/ui/spinner/WarningSpinner.vue'));
app.component('warning-spinner', WarningSpinner);

app.use(store);
app.use(router);
app.mount('#app');