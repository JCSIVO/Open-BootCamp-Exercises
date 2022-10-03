import logo from './logo.svg';
import './App.css';
import { TaskForm, taskForm } from './components/TaskForm';
import { Tasklist, taskList } from './components/TaskList';
import useList from './hooks/useList';

function App() {
  const listHook = useList(['robo']);

  return (
    <div className="App">
      <TaskForm
        addTask={listHook.push}
        emptyTaskList={listHook.empty}
        sortList={listHook.sortList}
        invertList={listHook.invert}
        />
        <Tasklist taskList={listHook.value} deleteTask={listHook.remove} />
    </div>
  );
}

export default App;
