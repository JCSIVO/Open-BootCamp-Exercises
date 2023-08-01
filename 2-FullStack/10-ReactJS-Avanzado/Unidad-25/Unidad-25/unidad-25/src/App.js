import logo from './logo.svg';
import './App.css';
import { useEffect, useState } from 'react';
import Notes from './front/Notes';
import { getNotes } from './controllers/frontController';
import AtomicDesign from './front/AtomicDesign';


function App() {
  const [notes, setNotes] = useState([]);
  useEffect(() => {
    getNotes()
      .then(n => setNotes(n))
      .catch(e => console.error(e))
  }, []);
  return (
    <div className="App">
      <h1>Bienvenido a la aplicación de notas</h1>
      { /* <Notes notes={notes} /> */ }
      <AtomicDesign />
    </div>
  );
}

export default App;
