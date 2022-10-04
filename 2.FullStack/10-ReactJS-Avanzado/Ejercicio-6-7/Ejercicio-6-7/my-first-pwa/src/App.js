import React from 'react';
import './App.css';
import { withServiceWorkerUpdater } from '@3m1/service-worker-updater';
import axios from 'axios';

function App() {

  const [newItem, setNewItem] = React.useState("");
  const [items, setItems] = React.useState([]);
  const [inputs, setInputs] = React.useState({});

  const addNewItem = () => {
    setItems([...items, newItem]);
    setNewItem("");
  }

  const handleChange = (event) => {
    const name = event.target.name;
    const value = event.target.value;
    setInputs(values => ({...values, [name]: value}));
  }

  const handleSubmit = (event) => {
    event.preventDefault();
    console.log(inputs);
  }

  const sendNote = () => axios.post('http://localhost:5000/custom-notification', {
      title : inputs.title,
      message : inputs.message
    }).then(r => console.log(r)).catch(e => console.log(e));
  
  
  return (
    <div className="App">
      <header className="App-header">
        <h1>** Proyecto PWA - Lista de la compra v8 **</h1>
        <input style={{ fontSize: 24 }} type="text" onKeyPress={e => e.key === 'Enter' && addNewItem()} onChange={e => setNewItem(e.target.value)} value={newItem} />
        <button style={{ fontSize: 24 }} onClick={addNewItem}>Añadir</button>
        <ul>
          {items.map((item, key) => <li key={key}>{item}</li>)}
        </ul>

        <form onSubmit={handleSubmit}>
          <label>Enter your title:
          <input 
            type="text" 
            name="title" 
            value={inputs.title} 
            onChange={handleChange}
          />
          </label>
          <label>Enter your message:
            <input 
              type="text" 
              name="message" 
              value={inputs.message || ""} 
              onChange={handleChange}
            />
            </label>
            <button type='submit'>Send notification</button>
        </form>
      </header>
    </div>
  );
}

export default App;
