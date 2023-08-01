import React from 'react';
import { useHistory } from 'react-router-dom';

const Notfoundpage = () => {

    const history = useHistory();

    const navigateTo = (path) => {
        history.push(path);
    }

    return (
        <div>
            <h1>404 - Page Not Found</h1>
            <button onClick={() => navigateTo('/')}>
                Go back to home
            </button>
        </div>
    );
}

export default Notfoundpage;
