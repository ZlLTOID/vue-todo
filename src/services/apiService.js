import apiClient from "./apiClient";
import axios from "axios";

export async function getEmployees() {
    let response = await apiClient.get('v1/employees');

    return response;
}