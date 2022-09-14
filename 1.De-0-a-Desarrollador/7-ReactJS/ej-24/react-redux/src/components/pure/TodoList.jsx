import React from 'react';
import PropTypes from 'prop-types';
import Todo from './Todo';

const TodoList = ({ todos, onTodoClick }) => {
    return (
        <div>
            <h1>Your TODOs</h1>
            <ul>
                {todos.map((todo, index) =>
                (
                    <Todo
                        key={index}
                        {...todo} //id, text, completed
                        onClick = {
                            () => onTodoClick(todo.id)
                        }
                    />
                )
                )}
            </ul>
        </div>
    );
}

TodoList.propTypes = {
    todos: PropTypes.arrayOf(
        PropTypes.shape(
            {
                id: PropTypes.number.isRequired,
                text: PropTypes.string.isRequired,
                completed: PropTypes.bool.isRequired
            }
        ).isRequired
    ).isRequired,
    onTodoClick: PropTypes.func.isRequired
}


export default TodoList;
