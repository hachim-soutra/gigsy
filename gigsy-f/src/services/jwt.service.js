const ID_API_TOKEN = 'token';
const ID_API_SPACE_NAME = 'spance_name';

export const getToken = () => {
    return {
        token: localStorage.getItem(ID_API_TOKEN),
        authName: localStorage.getItem(ID_API_SPACE_NAME)
    }
};

export const setToken = (token, space) => {
    localStorage.setItem(ID_API_TOKEN, token);
    localStorage.setItem(ID_API_SPACE_NAME, space);
};

export const unsetToken = () => {
    localStorage.removeItem(ID_API_TOKEN);
    localStorage.removeItem(ID_API_SPACE_NAME);
};

export default {getToken, setToken, unsetToken}
