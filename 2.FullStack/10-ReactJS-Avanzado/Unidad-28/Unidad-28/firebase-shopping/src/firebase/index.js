// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries
import { getMessaging, getToken } from "firebase/messaging"
import { getFirestore } from "firebase/firestore";



// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyBfhXlCzsOI87tx0eEEx-LEiK0eqtMYn2k",
  authDomain: "fir-shopping-b7712.firebaseapp.com",
  projectId: "fir-shopping-b7712",
  storageBucket: "fir-shopping-b7712.appspot.com",
  messagingSenderId: "699296086304",
  appId: "1:699296086304:web:f67ec425d80457731cff45"
};

const devFirebaseConfig = {
  apiKey: "AIzaSyBa7v8KqT4v3zhYxGXkFghOXOlFHA4RsvI",
  authDomain: "dev-firebase-shopping-6a5b9.firebaseapp.com",
  projectId: "dev-firebase-shopping-6a5b9",
  storageBucket: "dev-firebase-shopping-6a5b9.appspot.com",
  messagingSenderId: "392145891788",
  appId: "1:392145891788:web:78fa3f3c21030221086d69"
}

// currentToken = "dzHLgtB6zWC7EXiRwhK5_5:APA91bHT4n3l0iEMye2pUuN4k2Hm0V3zIft-Pq1E9e0aavUNScNZ--Cb9uAGmTr5KS6OgXBv_j2b69AWvuCF93dhwZoEcwomdkVVOAEw1LzDXppm7SENLaCYBNYIChOZPOg5nGvu-O1e";

// Initialize Firebase
let app;
if (process.env.NODE_ENV === 'productio') {
  app = initializeApp(firebaseConfig);
} else {
  app = initializeApp(devFirebaseConfig);
}

export {
  app
}

const vapidKeyProd = "BD5RQSf-yQbtFE1PVjyszuhtu98wsuWvay10bpoQA4oIDKLWKJ_09cX0XZ2MfWfE_wmFj2VoyYQ14mrpbFxdSHw";
const vapidKeyDev = "BK1dbI4NiqDwIvb3NVlR3sJb8JUrL8aHSJN1VQN7w7HHY0hXXgWMnpj0J9AmtmvvwPtGXpqMSCeIy7Fhjtxd6SA";

export const messaging = getMessaging();
getToken(messaging, { vapidKey: process.env.NODE_ENV === 'productio' ? vapidKeyProd : vapidKeyDev })
  .then(currentToken => {
    if (currentToken) {
      // Send the token to your server and update the UI if necessary
      // ...
      // console.log('currentToken', currentToken);
      sendTokenToServer(currentToken);
    } else {
      // Show permission request UI
      console.log('No registration token available. Request permission to generate one.');
      // ...
    }
  }).catch((err) => {
    console.log('An error occurred while retrieving token. ', err);
    // ...
  });

const sendTokenToServer = token => {
  if (localStorage.getItem('tokenSentToServer')) return;
  // TO-DO: Implementar la lógica de que en el servidor se almacene el token
  localStorage.setItem('tokenSentToServer', '1');
}

export const db = getFirestore();
