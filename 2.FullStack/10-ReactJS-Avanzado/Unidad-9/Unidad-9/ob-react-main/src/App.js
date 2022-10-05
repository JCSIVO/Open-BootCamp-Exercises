import logo from './logo.svg';
import './App.css';
import Todo from './testcomponents/Todo'


function App() {
  const todos = [
    {id:1, text: "Hacer la cama", completed: true},
    {id:2, text: "Cocinar", completed: false},
    {id:3, text: "Aprender Ingles", completed: false}
  ]

  return (
    <div className="App">
    <h1>Bienvenido</h1>
    {todos.map(todo => <Todo todo = {todo} />)}
    </div>
  );
}

export default App;
