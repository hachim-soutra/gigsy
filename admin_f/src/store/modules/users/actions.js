export default {
    async loadUsers(context) {
        const users = [];
        await window.axios.get('http://127.0.0.1:8001/api/v1/admin').then(response => {
            const respanseData = response.data.data;
            for (const key in respanseData) {
                const user = {
                    id: respanseData[key].id,
                    fullname: respanseData[key].user.fullname,
                    email: respanseData[key].user.email,
                    created_at: respanseData[key].user.created_at,
                }
                users.push(user);
            }
            context.commit('setUsers', users);
        }).catch(error => console.log(error));

    }
}