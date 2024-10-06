import axios from 'axios';
window.axios = axios;
import Swal from 'sweetalert2'
window.Swal = Swal;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Alpine.store('device', {
    mobile : window.innerWidth < 500,
    tablet : window.innerWidth < 868,
    desktop: window.innerWidth > 869
});
