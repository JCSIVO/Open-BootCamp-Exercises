import React from 'react'
import Button from '@mui/material/Button';
import PropTypes  from 'prop-types';

const Boton = ({ text = "Botón", color = "primary" }) => {
    return (
    <Button variant="contained" color={color}>{ text }</Button>
    )
};

Boton.propTypes = {
    text: PropTypes.string,
    color: PropTypes.oneOf(["primary", "secondary","warning", "succes"])
}

export default Boton
