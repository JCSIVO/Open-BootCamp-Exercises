import React, { useState, createContext, useContext } from 'react';
import logo from './logo.svg';
import './App.css';
import { app } from './firebase'; 
import Header from './components/Header';
import Home from './routes/Home';
import Login from './routes/Login';
import Register from './routes/Register';
import { Toaster } from 'react-hot-toast';

export const AppContext = createContext(null);

function App() {
  const [route, setRoute] = useState("home");
  const [user, setUser] = useState(null);
  return (
    <AppContext.Provider value={{ route, setRoute }}>
    <Toaster />
      <Header />
      <main className="p-6">
        {route === "home" && <Home /> }
        {route === "login" && <Login /> }
        {route === "register" && <Register /> }
        {user && <p>Usuario logueado: {user.email}</p>}
      </main>
    </AppContext.Provider>
  );
}

export default App;
