import React from 'react'
import './Container.css'

const Container = ({ children, type = '' }) => {
    return (
    <div className={`container ${type}`}>
        {children}
    </div>
    )
}   
export default Container
