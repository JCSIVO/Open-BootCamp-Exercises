import React, { useState, useEffect } from 'react';
import { getAllPagedUsers, getAllUsers, getUserDetails, login } from '../../services/fetchService';

const Fetchexample = () => {

    const [users, setUsers] = useState([]);
    const [selectedUser, setSelectedUser] = useState(null)
    const [totalUsers, setTotalUsers] = useState(12);
    const [usersPerPage, setUsersPerPage] = useState(6)
    const [pages, setPages] = useState(2);

    useEffect(() => {
        obtainUsers();
    }, []);

    const obtainUsers = () => {
        getAllUsers()
            .then((response) => {
                console.log('All Users', response.data);
                setUsers(response.data);
                setTotalUsers(response.total);
                setUsersPerPage(response.per_page);
                setPages(response.total_pages);
            })
            .catch((error) => {
                alert(`Error while retreiving the users: ${error}`)
            })
            .finally(() => {
                console.log('Ended obtaining users:');
                console.table(users);
            });
    }


    const obtainPagedUsers = (page) => {
        getAllPagedUsers(page)
            .then((response) => {
                console.log('All Paged Users', response.data);
                setUsers(response.data);
                setTotalUsers(response.total);
                setUsersPerPage(response.per_page);
                setPages(response.total_pages);
            })
            .catch((error) => {
                alert(`Error while retreiving the users: ${error}`)
            })
            .finally(() => {
                console.log('Ended obtaining users:');
                console.table(users);
            });
    }

    const obtainUserDetails = (id) => {
        getUserDetails(id)
            .then((response) => {
                console.log('All Paged Users', response.data);
                setSelectedUser(response.data);
            })
            .catch((error) => {
                alert(`Error while retreiving the user: ${error}`)
            })
            .finally(() => {
                console.log('Ended obtaining user:');
                console.table(selectedUser);
            });
    }

    const authUser = () => {
        login('eve.holt@reqres.in', 'cityslicka')
            .then((response) => {
                console.log('TOKEN', response.token);
                sessionStorage.setItem('token', response.token)
            })
            .catch((error) => {
                alert(`Error while login user: ${error}`)
            })
            .finally(() => {
                console.log('Ended login user. Navigate to Home...');
            });
    }

    return (
        <div>
            {/* Button to simulate login */}
            <button onClick={authUser}>Auth User</button>
            <h2>
                Users:
            </h2>
            { users.map((user, index) => 
                (<p key={index} onClick={() => obtainUserDetails(user.id)}>
                    {user.first_name} {user.last_name}
                </p>)
                ) 
            }
            <p>Showing {usersPerPage} users of {totalUsers} in total.</p>
            <button onClick={() => obtainPagedUsers(1)}>
                1
            </button>
            <button onClick={() => obtainPagedUsers(2)}>
                2
            </button>
            <div>
                { selectedUser != null ? 
                    (
                        <div>
                            <h3>
                                User Details
                            </h3>
                            <p>Name: {selectedUser.first_name}</p>
                            <p>Last Name: {selectedUser.last_name}</p>
                            <p>Email: {selectedUser.email}</p>
                            <img alt='Avatar' src={selectedUser.avatar} style={{height: '150px', width:'150px'}} />
                        </div>
                    ):
                    ( <h6>Please click on a User to see its details</h6> )
                    }
            </div>
        </div>
    );
}

export default Fetchexample;
