import logo from './logo.svg';
import './App.css';
import TodoList from './components/TodoList';
import { StoreProvider } from './store/StoreProvider';

function App() {
  return (
    <div className="App">
      <h1>Todo-List</h1>
      <StoreProvider>
        <TodoList></TodoList>
      </StoreProvider>
    </div>
  );
}

export default App;
