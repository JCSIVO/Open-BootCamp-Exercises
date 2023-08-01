import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Taskdashboard from './pages/TaskDashboard';
import Login from './pages/Login';
import Register from './pages/Register'

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <BrowserRouter>
          <Routes>
            <Route path='/' element={<Login />} />
            <Route path='/registro' element={ <Register />} />
            <Route path='/dashboard' element={<Taskdashboard />}/>
          </Routes>
        </BrowserRouter>
      </header>
    </div>
  );
}

export default App;
