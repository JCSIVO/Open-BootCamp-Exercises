import logo from './logo.svg';
import './App.css';
import { app } from './firebase'; 
import Header from './components/Header';

function App() {
  return (
    <>
      <Header />
      <main className="p-6">
        Bienvenido a FIreShopping
      </main>
    </>
  );
}

export default App;
