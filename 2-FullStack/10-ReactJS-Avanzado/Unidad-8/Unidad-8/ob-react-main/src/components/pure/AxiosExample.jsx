import React, {useState, useEffect} from 'react';
import { getRandomUser } from '../../services/axiosService';

const Axiosexample = () => {

    const [user, setUser] = useState(null);

    useEffect(() => {
        obtainUser();
    }, []);

    const obtainUser = () => {
        getRandomUser()
            .then((response) => {
                if(response.status === 200){
                    // console.table(response.data.results[0])
                    setUser(response.data.results[0])
                }
            })
            .catch((error) => {
                alert(`Somethin went wrong: ${error}`);
            })
    }

    return (
        <div>
            <h1>Axios Example</h1>

            { user !== null ? 
                (
                    <div>
                        <img alt='avatar' src={user.picture.large} />
                        <h2>{user.name.title} {user.name.first} {user.name.last}</h2>
                        <h3>{user.email}</h3>
                    </div>
                )
            :null }
            <div>
                <p>Generate a new User</p>
                <button onClick={obtainUser}>
                    Random User
                </button>
            </div>
        </div>
    );
}

export default Axiosexample;
