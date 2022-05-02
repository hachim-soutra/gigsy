export default {
    methods: {
        showAlert(icon, msg) {
            window.Toast.fire({
                icon: icon,
                title: msg
            })
        }
    }
}