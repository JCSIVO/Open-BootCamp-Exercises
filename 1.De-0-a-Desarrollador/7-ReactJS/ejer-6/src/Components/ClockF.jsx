import React, { useState, useEffect } from 'react'
//import '../../styles/clock.scss';

export const ClockF = () => {
      // Estado privado del component
        const defaultState = {
         // Se genera una fecha como estado inicial del componente
            fecha: new Date(),
            edad: 0,
            nombre: 'Jose',
            apellidos: 'CSi'
        };
        const [user, setUser] = useState(defaultState);
    

    useEffect(() => {
        const intervalAge = setInterval(() => {
            actualiceUser();
        }, 1000)
        return () => {
            clearInterval(intervalAge)
        };
    }, []);

    const actualiceUser = () => {
        return setUser({
            fecha: user.fecha,
            edad: user.edad + 1,
            nombre: user.nombre,
            apellidos: user.apellidos
        });
    };
    
        return (
            <div>
            <h2>
            Hora Actual:
            {user.fecha.toLocaleTimeString()}
            </h2>
            <h3>{user.nombre}</h3> <h3>{user.apellidos}</h3>
            <h1>Edad: {user.edad}</h1>
            </div>
        );
    };