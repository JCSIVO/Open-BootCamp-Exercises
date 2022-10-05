import React, { useState } from 'react';
import PropTypes from 'prop-types';


const Greetingf = (props) => {

    // Breve introducción a useState
    // const [variable, método para actualizarlo] = useState(valor inicial)
    const [age, setage] = useState(29);

    const birthday = () => {
        // actualizamos el State
        setage(age + 1);
    }

    return (
        <div>
            <h1>
                ¡HOLA { props.name } desde componente funcional !
            </h1>
            <h2>
                Tu edad es de: { age }
            </h2>
            <div>
                <button onClick={birthday}>
                    Cumplir años
                </button>
            </div>
        </div>
    );
};


Greetingf.propTypes = {
    name: PropTypes.string
};


export default Greetingf;
