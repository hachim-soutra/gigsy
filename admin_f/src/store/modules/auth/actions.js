let timer;
export default {
    async login(context, payload) {
        return context.dispatch('auth', {
            ...payload,
            mode: 'login'
        })
    },
    async signup(context, payload) {
        return context.dispatch('auth', {
            ...payload,
            mode: 'signup'
        })
    },
    async auth(context, payload) {
        const mode = payload.mode;
        let url = this.$app_url + '/api/v1/admin/login';

        if (mode === 'signup') {
            // register
            url = this.$app_url + '/api/v1/admin/register';
            await window.axios.post(url, {
                    email: payload.email,
                    first_name: payload.first_name,
                    last_name: payload.last_name,
                    password: payload.password,
                    password_confirmation: payload.password_confirmation,
                })
                // .then(response => {
                //     const responseData = response.data.message;
                //     console.log(responseData);

            //     context.commit('setSuccess', {
            //         success: responseData,
            //     });

            // })
            .catch(errors => context.commit('setErrors', errors.response.data.errors));
        } else {
            //login
            await window.axios.post(url, {
                    email: payload.email,
                    password: payload.password
                })
                .then(response => {
                    const responseData = response.data;
                    //Token expiration (+ convert to number)
                    //const expiresIn = +responseData.expiresIn * 1000;
                    const expiresIn = 3600 * 1000;
                    const expirationDate = new Date().getTime() + expiresIn;

                    //Store Data in LocalStorage
                    localStorage.setItem('user', JSON.stringify(responseData.user));
                    localStorage.setItem('token', responseData.access_token);
                    localStorage.setItem('userId', responseData.user.id);
                    localStorage.setItem('tokenExpiration', expirationDate);
                    window.axios.defaults.headers.common["Authorization"] = responseData.access_token;

                    //After this duration "expiresIn" this function will execute 
                    timer = setTimeout(function() {
                        context.dispatch('autoLogout');
                    }, expiresIn)

                    context.commit('setUser', {
                        user: responseData.user,
                        token: responseData.access_token,
                        userId: responseData.user.id,
                    });
                })
                .catch(error => context.commit('setErrors', error));
        }

    },
    tryLogin(context) {
        const user = localStorage.getItem('user');
        const token = localStorage.getItem('token');
        const userId = localStorage.getItem('userId');
        const tokenExpiration = localStorage.getItem('tokenExpiration');

        const expiresIn = tokenExpiration - new Date().getTime();
        if (expiresIn < 0) {
            return;
        }
        timer = setTimeout(function() {
            context.dispatch('autoLogout');
        }, expiresIn);

        if (token && userId && user) {
            context.commit('setUser', {
                user: JSON.parse(user),
                token: token,
                userId: userId,
            });
            window.axios.defaults.headers.common["Authorization"] = token;
        }
    },
    logout(context) {
        localStorage.removeItem('user');
        localStorage.removeItem('token');
        localStorage.removeItem('userId');
        localStorage.removeItem('tokenExpiration');
        window.axios.defaults.headers.common["Authorization"] = null;
        //if we manualy click the logout
        clearTimeout(timer);
        context.commit('setUser', {
            user: null,
            token: null,
            userId: null,
            errors: '',
        });

    },
    autoLogout(context) {
        //redirect after loginOut
        context.dispatch('logout');
        context.commit('setAutoLogout');

    }
}