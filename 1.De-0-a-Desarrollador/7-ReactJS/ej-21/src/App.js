import logo from './logo.svg';
import './App.css';
import CardContainer from './components/Card';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <CardContainer></CardContainer>
      </header>
    </div>
  );
}

export default App;
