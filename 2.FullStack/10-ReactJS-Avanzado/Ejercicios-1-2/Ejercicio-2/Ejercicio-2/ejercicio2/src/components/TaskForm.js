import { useState } from "react";
import { useField } from '../hooks/useField.js'

export const TaskForm = ({ addTask, emptyTaskList, sortList, invertList }) =>{
    const [taskFormFunction, setTaskFormFunction] = useState('create')
    const taskName = useField('text')

    const handleSetTaskFormFunction = (theFormWillUse) => {
        return setTaskFormFunction(theFormWillUse)
    }

    const chooseButtonFunction = (taskFormFunctionName) => {
        switch (taskFormFunctionName) {
            case 'create':
                addTask(taskName.value)
                taskName.reset()
                break;
            case 'clearAll':
                    emptyTaskList()
                    break;
            case 'sort':
                return () => sortList()
            case 'invert':
                return () => invertList()
            default:
                console.log('No se disponen de mas ' + taskFormFunction + '.');
                break;
        }
    }
    const handleSubmit = (e) => {
        e.preventDefault()
        chooseButtonFunction(taskFormFunction)
    }
    return (
        <div>
            <h2>Crea tu nueva tarea:</h2>
            <form onSubmit={handleSubmit}>
                <div>
                    Content:
                    <input 
                        {...taskName}
                        reset=''
                    />
                </div>
                <p>Debes de utilizar los botones</p>
                <button onClick={handleSetTaskFormFunction('create')}>Crear nueva tarea</button>
                <button onClick={handleSetTaskFormFunction('clearAll')}>Eliminar todas las tareas</button>
            </form>
            <button type='button' onClick={chooseButtonFunction('sort')}>Ordenar las tareas</button>
            <button type='button' onClick={chooseButtonFunction('invert')}>Invertir las tareas</button>
        </div>
    )
}