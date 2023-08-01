import { useState } from 'react';
import './App.css';
import InputNuevaNota from './components/InputNuevaNota';
import ListadoNotas from './components/ListadoNotas';

function App() {
  const [notas, setNotas] = useState(["Hacer la compra"])
  const addNuevaNota = (nuevaNota) => {
    setNotas([...notas, nuevaNota])
  }


  return (
    <div className="App">
    <h1>Bienvenido a la sesión número 11</h1>
    <h3>Esto va a ser una (otra) aplicación de notas</h3>
    <InputNuevaNota addNuevaNota={addNuevaNota} ></InputNuevaNota>
    <ListadoNotas notas={notas}></ListadoNotas>
    </div>
  );
}

export default App;
