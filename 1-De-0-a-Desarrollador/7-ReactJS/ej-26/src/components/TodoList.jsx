import { useContext, useState } from "react";
import { Switch, FormControlLabel, Button } from "@mui/material";
import DeleteIcon from "@mui/icons-material/Delete";
import styles from "../style/styledGlobal.module.css";
import { StoreContext } from "../store/StoreProvider";
import TodoForm from "./TodoForm";
import Swal from "sweetalert2";

const TodoList = () => {
    const [todos, dispatch, types] = useContext(StoreContext);
    const [newTask, setNewTask] = useState("");
    const [filter, setFilter] = useState(null);
    const [completed, setCompleted] = useState("");
    let todoID = Date.now();

    const handleSubmit = (e) => {
    e.preventDefault();
    if (newTask.length === 0) {
    Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "The input cannot be empty!",
    });
    } else {
    const addTodo = { id: todoID, nameTodo: newTask, checked: false };
    dispatch({ type: types.CREATE, payload: addTodo });
    sessionStorage.setItem("todos", JSON.stringify([...todos, addTodo]));
    Swal.fire({
    position: "center",
    icon: "success",
    title: "Your Task has been added",
    showConfirmButton: false,
    timer: 2000,
    });
    setNewTask("");
    }
    };

    const handleDelete = (todo) => {
    Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
    }).then((result) => {
    if (result.isConfirmed) {
    Swal.fire({
    position: "center",
    icon: "success",
    title: "Your file has been deleted.",
    showConfirmButton: false,
    timer: 2000,
    });
    dispatch({
    type: types.DELETE,
    payload: todo.id,
    });
    sessionStorage.setItem(
    "todos",
    JSON.stringify(todos.filter((item) => item.id !== todo.id))
    );
    }
    });
    };

    const handleFilter = (e) => {
    let value = e.target.value;
    switch (value) {
    case "Completed":
    setFilter(todos.filter((todo) => todo.checked === true));
    break;
    case "Not Completed":
    setFilter(todos.filter((todo) => todo.checked === false));
    break;
    default:
    setFilter(null);
    break;
    }
    setCompleted(e.target.value);
    };
    const handleChecked = (todo, e) => {
    const todoCheck = { ...todo, checked: e.target.checked };
    dispatch({
    type: types.CHECKED,
    payload: todoCheck,
    });
    sessionStorage.setItem(
    "todos",
    JSON.stringify(
    todos.map((item) => (item.id === todo.id ? todoCheck : item))
    )
    );
    };

    return (
    <>
    <TodoForm
    newTask={newTask}
    setNewTask={setNewTask}
    handleFilter={handleFilter}
    handleSubmit={handleSubmit}
    completed={completed}
    />
    {todos.length === 0 || filter?.length === 0 ? (
    <h3>There are no tasks.</h3>
    ) : (
    <ul className={styles.ul}>
    {filter
    ? filter.map((todo) => (
    <li key={todo.id} className={styles.todo}>
    <div className={styles.todoText}>
    <span className={styles.todoTitle}> Name Task : </span>
    <span className={styles.todoDescription}>
    {todo.nameTodo}
    </span>
    </div>
    <FormControlLabel
    control={
    <Switch
    size="small"
    checked={todo.checked}
    onChange={(e) => handleChecked(todo, e)}
    />
    }
    className={
    todo.checked
    ? styles.textSwitchCompleted
    : styles.textSwitchNotCompleted
    }
    label={todo.checked ? "Completed" : "Not Completed"}
    labelPlacement="bottom"
    />
    <Button
    onClick={() => handleDelete(todo)}
    variant="outlined"
    startIcon={<DeleteIcon fontSize="inherit" />}
    color="error"
    >
    Delete
    </Button>
    </li>
    ))
    : todos.map((todo) => (
    <li key={todo.id} className={styles.todo}>
    <div className={styles.todoText}>
    <span className={styles.todoTitle}> Name Task : </span>
    <span className={styles.todoDescription}>
    {todo.nameTodo}
    </span>
    </div>
    <FormControlLabel
    control={
    <Switch
    size="small"
    checked={todo.checked}
    onChange={(e) => handleChecked(todo, e)}
    />
    }
    className={
    todo.checked
    ? styles.textSwitchCompleted
    : styles.textSwitchNotCompleted
    }
    label={todo.checked ? "Completed" : "Not Completed"}
    labelPlacement="bottom"
    />
    <Button
    onClick={() => handleDelete(todo)}
    variant="outlined"
    startIcon={<DeleteIcon fontSize="inherit" />}
    color="error"
    >
    Delete
    </Button>
    </li>
    ))}
    </ul>
    )}
    </>
    );
};

export default TodoList;