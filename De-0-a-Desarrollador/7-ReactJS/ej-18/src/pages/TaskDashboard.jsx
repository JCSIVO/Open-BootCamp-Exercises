import React, { useEffect, useState } from 'react';
import { useNavigate } from 'react-router-dom';

import Tasklist from '../components/list/TaskList';

const Taskdashboard = () => {
    const navigate = useNavigate();

    const user = localStorage.getItem('user') || null;

    useEffect(() => {
        if(!user) {
            navigate('/')
        }
    });
    return <Tasklist user={user} />
}



export default Taskdashboard;