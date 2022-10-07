import React, { useState } from 'react';

/**
 * Componente que gestiona la lista de tareas
 *
 * @returns {React.Component}
 */

const TaskList = () => {
  const [newTask, setNewTask] = useState('');
  const [tasklist, setTasklist] = useState([]);

  /**
   * Añade una nueva tarea a la lista
   * v2: La nueva tarea se añade como un objeto
   * { task: nombre de la tarea, completed: si está completada o no}
   */

  const addNewTask = () => {
    setTasklist([...tasklist, { task: newTask, completed: false }]);
    setNewTask('');
    return true;
  };

  /**
   * Función para chequear si la lista de tareas está vacía
   * @returns true si tasklist.length === 0
   */
  const isTasksEmpty = () => tasklist.length === 0;

  /**
   * Editar el nombre de la nueva tarea
   * @param {*} e - Evento de onChange proveniente de React
   */

  const editNewItem = (e) => setNewTask(e.target.value);

  /**
   * Función para eliminar una tarea en concreto
   * @param {*} index - Índice de la tarea a eliminar
   */

  const removeItem = (index) => {
    const newtasklist = tasklist.filter((t, i) => i !== index);
    setTasklist(newtasklist);
  };

  /**
   * Cambia el item por completado <-> pendiente
   * @param {*} index
   */

  const toggleCompleteItem = (index) => {
    const newTaskList = tasklist;
    newTaskList[index].completed = !newTaskList[index].completed;
    setTasklist([...newTaskList]);
  };

  /**
   * Añade una nueva tarea cuando se presiona la tecla Enter
   * @param {*} e - Evento onKeyDown que proviene por defecto de React
   */

  const insertNewItemOnEnterKey = (e) => e.key === 'Enter' && addNewTask();
  return (
    <>
      <h1>Task List</h1>
      <div>
        <input
          className="input"
          value={newTask}
          onKeyDown={insertNewItemOnEnterKey}
          onChange={editNewItem}
          placeholder="New Task"
          type="text"
        />
        <button type className="btn" onClick={addNewTask}>
          Create Task
        </button>
      </div>
      {isTasksEmpty() ? (
        <p>Task List is Empty</p>
      ) : (
        <ul>
          {tasklist.map((item, index) => (
            <li key={index}>
              <input
                type="checkbox"
                // onClick={() => removeItem(index)}
                onClick={() => toggleCompleteItem(index)}
                checked={item.completed}
                onChange={() => {}}
              />
              {item.task}
            </li>
          ))}
        </ul>
      )}
    </>
  );
};

export default TaskList;