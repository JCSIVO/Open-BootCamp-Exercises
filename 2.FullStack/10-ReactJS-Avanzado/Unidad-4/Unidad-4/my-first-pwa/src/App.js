import React from 'react';
import './App.css';

function App() {
  const [newItem, setNewItem] = React.useState('');
  const [items, setItems] = React.useState([]);
  return (
    <div className="App">
      <header className="App-header">
        <h1>
          ** Proyecto PWA - Lista de la compra ** 
        </h1>
        <input style={{ fontSize: 24 }} type='text' onChange={e => setNewItem(e.target.value)} value={newItem}></input>
        <button style={{ fontSize: 24 }} onClick={() =>  setItems([...items, newItem])}>Añadir</button>
        <ul>
          {items.map((item, key) => <li key={key}>{item}</li>)}
        </ul>
      </header>
    </div>
  );
}

export default App;
