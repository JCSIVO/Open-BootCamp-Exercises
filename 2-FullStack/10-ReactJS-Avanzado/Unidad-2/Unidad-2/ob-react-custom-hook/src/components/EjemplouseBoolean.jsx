import React, { useState, useRef, useEffect } from 'react';

// useBoolean Hook
const useBoolean = (initialValue) => {
    const [value, setValue] = useState(initialValue);

    const updateValue = useRef(
        {
            toggle: () => setValue(oldValue => !oldValue),
            on: () => setValue(true),
            off: () => setValue(false)
        }
    )

    return [value, updateValue.current]
}


const EjemplouseBoolean = (/*{ texto }*/) => {

    // const [mostrar, setMostrar] = useState(false);
    // const [mostrar, setMostrar] = useBoolean();

    // const mostrarTexto = () => {
    //    setMostrar(!mostrar);
    // }

    const [lista, setLista] = useState([]);
    
    // Uso de Hook useBoolean
    const [cargando, setCargando] = useBoolean(false);
    const [error, setError] = useBoolean(false);

    // Al iniciar el componente, cargamos la lista
    useEffect(() => {
        setCargando.on() // cargando = true
        fetch('https://reqres.in/users')
            .then((response) => response.json())
            .then(setLista)
            .catch((error) => {
                alert(`Ha ocurrido un error: ${error}`);
                setError.on(); // Error = true
            })
            .finally(() => setCargando.off)

    }, [lista, setCargando, setError]);

    return (
        <div>
            <p>{cargando ? 'Cargando...' : null}</p>
            <p>{error ? 'Ha ocurrido un error' : null}</p>
        </div>
        /*<div>
            <button onClick={mostrarTexto}>
                { mostrar ? 'Ocultar' : 'Mostrar' }
            </button> 
            {
                mostrar && 
                (<div>
                    <p>{texto}</p>
                </div>)
            }
        </div>*/
    );
}

export default EjemplouseBoolean;
