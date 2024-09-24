import axios from "axios";

const API_URL = 'http://localhost:88/api/';

const apiClient = axios.create({
    baseURL: API_URL
});

export default apiClient;