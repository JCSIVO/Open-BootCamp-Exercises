import React from 'react'
import Container from '../01_amotos/Container';
import Button from '../01_amotos/Button';

const Header = ({children}) => {
    return (
    <Container type='header'>
        <Button />
        {children}
    </Container>
    )
}

export default Header
