import logo from './logo.svg';
import './App.css';
import useCounter from './hooks/useCounter';

function App() {
  const counterHook = useCounter()
  // El valor por defecto es 5 
  // Los minimos y máximos son -10 y 10
  return (
    <div className="App">
      <div>
        <h2>Ejercicio ReactJS Avanzado - Open BootCamp</h2>
        <h2>{(counterHook.value >= counterHook.minValue && counterHook.value <= counterHook.maxValue) ? counterHook.value : 'No se puede usar esta App'}</h2>
        <h3>{`Valor Mínimo: ${counterHook.minValue}`}</h3>
        <h3>{`Valor Máximo:${counterHook.maxValue}`}</h3>
      </div>
      <div>
        <p>Para modificar el valor del contador</p>
        <button onClick={counterHook.increment}>increment</button>
        <button onClick={counterHook.decrement}>decrement</button>
        <button onClick={counterHook.reset}>Reset</button>
      </div>
    </div>
  );
}

export default App;
