import React from 'react';
import useLocalStorage from '../../hooks/useLocalStorage';

const defaultConfig = {
    theme: 'dark',
    lang: 'es',
};

export default function Settings({ toggleDark }) {
    const [config, setConfig] = useLocalStorage('config', defaultConfig);

    /**
     * Función oara intercambiar light <-> dark tanto en localStorage
     * como en estado de la aplicación
     * @param {*} event - Evento de click proveniente de React
     */
    const toggleMode = (event) => {
        event.preventDefault();
        setConfig((oldConfig) => (
            {
            ...oldConfig,
            theme: oldConfig.theme === 'light' ? 'dark' : 'light',
            }));
            toggleDark();
    };

    return (
      <div>
        <h1>APP SETTINGS</h1>
        <p>
          Actual Config:
          { config.theme }
        </p>
        <button className="btn" type="button" onClick={toggleMode}>
          Toggle DarkMode
        </button>
      </div>
    );
}
