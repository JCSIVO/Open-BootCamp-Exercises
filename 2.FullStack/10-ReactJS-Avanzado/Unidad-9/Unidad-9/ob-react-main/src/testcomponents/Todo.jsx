import React from 'react'

const Todo = ({ todo })  => {
    const {id, text, completed} = todo;
    const [checked, setChecked] = React.useState(completed);
    return (
    <div data-testid= {`todo-test-${id}`}>
        <label>
        <input type="checkbox" checked={checked} id="checkbox" onChange={() =>setChecked(checked)}></input>
        { text }
        </label>
    </div>
    )
}   

export default Todo