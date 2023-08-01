// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries
import { getFirestore } from 'firebase/firestore'

// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyBkD0iGivzP8KXzDCZl9qOJFEuhzWn0BEA",
    authDomain: "ob-tasklist-firebase-4cc5c.firebaseapp.com",
    projectId: "ob-tasklist-firebase-4cc5c",
    storageBucket: "ob-tasklist-firebase-4cc5c.appspot.com",
    messagingSenderId: "690723135042",
    appId: "1:690723135042:web:323c025e395fa4fde317db"
};

// Initialize Firebase
export const app = initializeApp(firebaseConfig);

// Inicializar Firestore
export const db = getFirestore();