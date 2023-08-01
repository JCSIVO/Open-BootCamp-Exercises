import React, { useState, useContext } from 'react';
import { GoogleAuthProvider, getAuth, signInWithPopup, signInWithEmailAndPassword } from 'firebase/auth';
import toast from 'react-hot-toast';
import { AppContext } from '../App';


const auth = getAuth();
const provider = new GoogleAuthProvider();

const Login = () => {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const {setUser} = useContext(AppContext);
    const hazLoginGoogle = () => {
        signInWithPopup(auth, provider)
            .then((result) => {
                const credential = GoogleAuthProvider.credentialFromResult(result);
                const token = credential.accessToken;
                const user = result.user;
                console.log('token', token);
                console.log('user', user);
                toast("Inicio de sesion válido");
                setUser(user);
            })
            .catch((error) => {
                const errorCode = error.Code;
                const errorMessage = error.message;
                const email = error.email;
                const credential = GoogleAuthProvider.credentialFromError(error);
            });
    }
    const hazLoginConEmail = (e) => {
        e.preventDefault();
        signInWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
            const user = userCredential.user;
            toast("Inicio de sesion válido");
            setUser(user);
        })
        .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
        });
    }
    return (
    <div>
    <h1 className='text-xl font-semibold text-sky-700 mb-8'>Este es el login</h1>
        <div className='flex flex-col items-center'>
        <form onSubmit={hazLoginConEmail} className='flex flex-col gap-2 max-w-sm'> 
        <input className='border border-gray-500 rounded py-1 px-2 outline-none' 
        type='email' value={email} onChange={e => setEmail(e.target.value)}></input>
        <input className='border border-gray-500 rounded py-1 px-2 outline-none' 
        type='password' value={password} onChange={e => setPassword(e.target.value)}></input>
        <button className='bg-sky-400 py-1 text-white rounded shadow'>Log In</button>
        </form>
            <button onClick={hazLoginGoogle}>... o haz login con Google</button>
        </div>
    </div>
    )
}

export default Login
