import React, { useEffect, useState } from 'react';
import { motion } from 'framer-motion';
import { addTask, getTasks, toggleComplete } from '../../firebase/tasksController';
import { async } from '@firebase/util';

/**
 * Componente que gestiona la lista de tareas
 *
 * @returns {React.Component}
 */

const TaskList = ({ showSettings, setShowSettings }) => {
    const [newTask, setNewTask] = useState('');
    const [Tasklist, setTasklist] = useState([]);

    useEffect(() => {
        getTasks()
            .then(tasks => setTasklist([...tasks]))
            .catch(e => console.error(e))
    }, []);

    /**
   * Añade una nueva tarea a la lista de tareas
   * v2: La nueva tarea se añade como un objeto
   * { task: nombre de la tarea, completed: Si esta cinpletada o no }
   */

    const addNewTask = () => {
        if (newTask === "") return;
        // Vamos a añadir una nueva tarea a la base de datos
        const task = { task: newTask, completed: false }
        addTask(task)
            .then(() => {
                // Cuando se haya añadido -> Mostraremos todas dentro del estado tasklist
                return setTasklist([...Tasklist, task]);
            })
            .catch(e => console.error(e))
            .finally(() => setNewTask(""));
        

        // setTasklist([...Tasklist, { task: newTask, completed: false }]);
        // setNewTask('');
        // return true;
    };

    /**
     * Función para chequear si la lista de tareas esta vacía
     * @returns true si taskslist.length === 0
     */

    const isTasksEmpty = () => Tasklist.length === 0;

    /**
     * Editar el nombre de la nueva tarea
     * @param {*} e - Evento de onChange proveniente de React
     */
    const editNewItem = (e) => setNewTask(e.target.value);

    /**
     * Función para eliminar una tarea en concreto
     * @param {*} index - índice de la tarea a eliminar
     */
    // const removeItem = (index) => {
      // const newTasklist = Tasklist.filter((t, i) => i !== index);
      // setTasklist(newTasklist);
    // };

    /**
     * Cambia el item po completado <-> pendiente
     * @param {*} index
     */
    const toggleCompletedItem = (index) => {
    // const newTaskList = Tasklist;
    let task = Tasklist.find(t => t.id === index);
    // Actualizar en la base de datos el estado de la tarea
    toggleComplete(task)
    .then(async() => {
        // Cuando se haya añadido -> Mostraremos todas dentro del estado tasklist
        const newTaskList = await getTasks();
        return setTasklist([
            ...newTaskList, ]);
    })
    .catch(e => console.error(e))
    // Cuando se haya actualizado -> Mostraremos todas las tareas dentro del estado tasklist

    // newTaskList[index].completed = !newTaskList[index].completed;
    // setTasklist([...newTaskList]);
    };

    /**
     * Añade una nueva tarea cuando se presiona la tecla Enter
     * @param {*} e - Evento onKeyDown que proviene por defecto de React
     */
    const insertNewItemOnEnterKey = (e) => e.key === 'Enter' && addNewTask();

    return (
    <div>
    <header className="flex justify-between">
        <h1 className="text-3xl text-sky-700 font-semibold dark:text-sky-300">
        Task List v2 - hosted on: Firebase</h1>
        <motion.button whileHover={{ scale: 1.1 }}
        whileTap={{ scale: 0.9 }}
        className="btn" onClick={() => setShowSettings(!showSettings)}>
        { !showSettings ?  "Show Settings" : "Hide Settings" }</motion.button>
        </header>
        <div className="my-4">
        <input
            className="shadow py-1 px-2 rounded-lg outline-none transition-all 
            duration-300 focus:ring-2 mr-2 dark:bg-slate-700"
            value={newTask}
            onKeyDown={insertNewItemOnEnterKey}
            onChange={editNewItem}
            placeholder="New Task"
            type="text"
        />
        <button className="btn" type="submit" onClick={addNewTask}>
            Create Task
        </button>
        </div>
        { isTasksEmpty()
            ? (<p>Task List is Empty</p>)
            : (
            <ul>
                {Tasklist.map((item, index) => (
                <motion.li initial={{ x: '100vw' }} animate={{ x: 0 }} key={index}>
                <label className='cursor-pointer'>
                    <input
                    type="checkbox"
                      // onClick={() => removeItem(index)}
                    onClick={() => toggleCompletedItem(item.id)}
                    checked={item.completed}
                    onChange={() => {}}
                    />
                    <span className={`ml-2 text-gray-800 text-sm italic dark:text-gray-100
                    ${item.completed && "line-through"}`}>{ item.task }</span>
                    </label>
                </motion.li>
                        ))}
            </ul>
            )}
    </div>
    );
};

export default TaskList;
