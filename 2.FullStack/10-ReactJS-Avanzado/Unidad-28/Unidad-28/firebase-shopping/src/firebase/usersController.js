import {
    getAuth,
    signInWithEmailAndPassword,
    deleteUser
    } from "firebase/auth";

    import { app } from '.';

    const auth = getAuth();

    export const deleteTestUser= (email, password) => 
        signInWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
                const user = userCredential.user;
                deleteUser(user).then(() => console.log('user deleted'))
            })
            .catch((error) => {
                const errorCode = error.code;
                const errorMessage = errormessage;
            })
    