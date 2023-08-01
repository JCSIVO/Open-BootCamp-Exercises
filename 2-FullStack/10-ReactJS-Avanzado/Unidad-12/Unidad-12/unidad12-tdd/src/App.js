import { useState } from 'react';
import axios from 'axios';
import './App.css';
import { IoPlay } from 'react-icons/io5';

function App() {
  const [busqueda, setBusqueda] = useState("");
  const [listado, setListado] = useState([]);

  const hazBusqueda = () => {
    const url = `https://de1.api.radio-browser.info/json/stations/byname/${busqueda}`;
    axios.get(url)
      .then(r => setListado(r.data))
      .catch(e => console.error(e))
  } 

  const playRadio = (radio) => {
    const audio = new Audio(radio.url)
    audio.play();
  } 

  return (
    <div className="App">
    <h1>Bienvenido a la aplicación <span>OpenRadioCamp</span></h1>
    <input type="text" placeholder='Escribe el nombre de la radio' 
    value={busqueda} onChange={e => setBusqueda(e.target.value)}></input>
    <button onClick={hazBusqueda}>Buscar  </button>
    {listado.length > 0 && <div aria-label='length-not-null'></div>}
    <section aria-label='listado-emisoras'>
    {listado.map((emisora, i) => <div key={i}>{emisora.name} <IoPlay 
    style={{ cursor: 'pointer' }} onClick={() => playRadio(emisora)}/> </div>)}
    </section>
    </div>
  );
}

export default App;
