import logo from './logo.svg';
import './App.css';
import React, { useState, useEffect } from 'react';
import ContactForm from './components/contactForm';
import ContactComponent from './components/contactComponent';

function App() {

  const defaultContact = [
    {nombre: 'Samuel', email: 'Samuel@example.com', conectado: true},
    { nombre: 'Clara', email: 'clara@example.com', conectado: false},
  ];

  const [nuevoContacto, setNuevoContacto] = useState(defaultContact);

  function changeState(contacto){
    const index =nuevoContacto.indexOf(contacto);
    const tempContact = [...nuevoContacto];

    tempContact[index].estado = !tempContact[index].estado;
    setNuevoContacto(tempContact);
  }

  function remove(contacto){
    const index = nuevoContacto.indexOf(contacto);
    const tempContact = [...nuevoContacto];
    tempContact.splice(index,1);
    setNuevoContacto(tempContact);
  }

  function addContact(contacto){
    const tempContact = [...nuevoContacto];
    tempContact.push(contacto);
    setNuevoContacto(tempContact);
  }

  return (
    <div className="App">
    <h1>Contactos</h1>
      <div className='card-container'>
        {nuevoContacto.map((contacto, index) => {
          return (
            <ContactComponent
              key={index}
              contacto={contacto}
              changeState={changeState}
              remove={remove}
              >   
            </ContactComponent>
          )
        })}

      </div>
      <ContactForm onAddContact={addContact}></ContactForm>
    </div>
  );
}

export default App;
