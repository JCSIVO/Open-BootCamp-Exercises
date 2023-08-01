import React from 'react';
import ReactDOM from 'react-dom';

// Añadimos Bootstrap a nuestro proyecto
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-icons/font/bootstrap-icons.css';
// ! Importante: los estilos propios, deben ir debajo del bootstrap para que no los pise.
import './index.css';

import App from './App';
import reportWebVitals from './reportWebVitals';
import AppRoutingOne from './AppRoutingOne';
import AppRoutingFinal from './AppRoutingFinal';

import * as serviceWorkerRegistration from './serviceWorkerRegistration';
import { onServiceWorkerUpdate } from '@3m1/service-worker-updater';

ReactDOM.render(
  <React.StrictMode>
    <App />
    {/* <AppRoutingOne /> */}
    {/* <AppRoutingFinal /> */}
  </React.StrictMode>,
  document.getElementById('root')
);

serviceWorkerRegistration.register({
  onUpdate: onServiceWorkerUpdate
});

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
