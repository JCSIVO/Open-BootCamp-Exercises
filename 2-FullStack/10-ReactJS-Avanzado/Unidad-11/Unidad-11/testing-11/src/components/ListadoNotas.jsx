import React from 'react'

const ListadoNotas = ({ notas = [] }) => {
    return (
    <div className="listado-notas"aria-label='listado-notas'>
        {notas.map((nota, i) => 
            <div key={i}>{nota}</div>)}
    </div>
    )
}

export default ListadoNotas
