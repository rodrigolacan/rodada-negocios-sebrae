import axios from 'axios';

// Cria uma instância do Axios
const axiosInstance = axios.create({
    baseURL: 'http://localhost:8000/api/rest', // Altere para a URL base da sua API
    timeout: 10000, // Tempo limite para a requisição
    headers: {
        'Content-Type': 'application/json',
    },
});


const axiosService = {

    get: async (url, params = {}) => {
        try {
            const response = await axiosInstance.get(url, { params });
            return response.data;
        } catch (error) {
            throw error.response ? error.response.data : error.message;
        }
    },

    post: async (url, data) => {
        try {
            const response = await axiosInstance.post(url, data);
            return response.data;
        } catch (error) {
            throw error.response ? error.response.data : error.message;
        }
    },
};

export default axiosService;
