import axios from 'axios';

/**
 * Login Method to ReqRes endpoint
 * @param { string } email 
 * @param { string} password 
 */
export const login = (email, password) => {

    let body = {
        email: email,
        password: password
    }

    // Returns the response with a Promise
    return axios.post('https://reqres.in/api/login', body)

}


// Obtain All Users
export const getAllUsers = () => {
    return axios.get('https://reqres.in/api/users');
} 

// Obtain All paged users
export const getAllPagedUsers = (page) => {
    return axios.get(`https://reqres.in/api/users?page=${page}`);
} 


// Obtain User by ID
export const getUserByID = (id) => {
    return axios.get(`https://reqres.in/api/users/${id}`);
} 

// Create User
export const createUser = (name, job) => {
    let body = {
        name: name,
        job: job
    }

    // Returns the response with a Promise
    return axios.post('https://reqres.in/api/users', body)
}

// Update User
export const updateUserByID = (id, name, job) => {
    let body = {
        name: name,
        job: job
    }

    // Returns the response with a Promise
    return axios.put(`https://reqres.in/api/users/${id}`, body)
}

// Delete User
export const deleteUserByID = (id) => {
    return axios.delete(`https://reqres.in/api/users/${id}`);
} 


