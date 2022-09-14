import React from 'react';
import { unstable_HistoryRouter } from 'react-router-dom';
import useList from '../../hooks/useList';
import LEVELS from '../../models/levels.enum';
import Taskform from '../form/TaskForm';

const TaskList = ({ user }) => {
    const defaultTask = {
        name: 'Biscuit',
        description: 'Buy Biscuits',
        level: LEVELS.URGENT,
        done: false,
    };

    const tasks = useList([defaultTask])
    const usuario = JSON.parse(user);
    return (
        <div>
            <h1>Task List - Usuario: {usuario.email}</h1>
            <Taskform onAdd={(values) => tasks.push(values)}/>
            {tasks.isEmpty() ? (
                <p>Task Listcis Empty</p>
            ):(
                tasks.value.map((task, index) => (
                    <div key={index} style={{ display: 'flex', alignItems: 'center'}} role="button">
                    <input type="checkbox" onClick={() => tasks.remove(index)} checked={false}/>
                    <p style={{ fontWeight: 'bold', marginRight: '5px'}} >{task.name}</p>
                    <p>{task.description}</p>
                    </div>
                ))
            )}
        </div>
    );
}                                                                                                                   
export default TaskList;
