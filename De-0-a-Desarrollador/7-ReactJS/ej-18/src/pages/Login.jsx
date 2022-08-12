import React, { useEffect, useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import LoginForm from '../components/form/LoginForm';


const Login = () => {
    const [credentials, setCredentials] = useState(null);
    const navigate = useNavigate();
    const user = localStorage.getItem('user') || null;



    useEffect(() => {
        if(user) {
            navigate('/dashboard');
            }
    });

    useEffect(() => {
        if(credentials) {
            const c = JSON.stringify(credentials);
            localStorage.setItem('user', c);
            navigate('dashboard')
            }
        });
        return (
            <div>
                <LoginForm onSubmit={(e) => setCredentials(e)} />
                <Link to="/registro">Registrarse</Link>
                </div>
            );
}            

export default Login;
