// import React from 'react';
import * as React from 'react';
import './App.css';

const str: dtring = 'Hola mundo';

const num: number = 6;

type AppProps = {
  saludo: string
  // numero : number
  // numero?: number // numero opcional
}

/**
 * Aplicacion principal sobre la que trabajamos 
 * 
 * @param {*} props 
 * @returns 
 */

function App(props: AppProps): React.Node {
  const [darkMode, setDarkMode] = React.useState(false);
  const [tasklist, setTasklist] = React.useState([]);
  const [newTask, setNewTask] = React.useState("");

  /**
   * 
   * @returns Cmabia el modo de light -> dark y viceversa
   */
  const toggleDark = () => setDarkMode(!darkMode);

  /**
   * Esta funcion cambia el estado de newTask a través del input
   * 
   * @param {*} e - Evento de change proveniente de react 
   * @returns 
   */

  const handleChange = e => setNewTask(e.target.value);


  /**
   * 
   * @returns Añade una nueva tarea a la lista de tareas
   */
  const addNewTask = () => setTasklist([...tasklist, newTask]);

  /**
   * 
   * @returns true si la lista está vacía 
   */
  const tasklistEmpty = () => tasklist.length === 0;
  

  return (
    <div className={`App ${darkMode && 'dark' }`}>
      <h1>{props.saludo}</h1>
      <br /><button className='toggleDark' onClick={toggleDark}>Cambiar Modo</button>
      <h2>Task List</h2>
      <div>
        <input  style={{ marginRight: 5 }} type='text' value={newTask} onChange={handleChange}></input>
        <button className='toggleDark' onClick={addNewTask}>Añadir Task</button>
        <div>
          {tasklistEmpty() 
            ? <h3>La lista de tareas está vacía</h3> 
            : tasklist.map((t, i) => <p key={i}>{t}</p>)}
        </div>
      </div>
    </div>
  );
}

export default App;
