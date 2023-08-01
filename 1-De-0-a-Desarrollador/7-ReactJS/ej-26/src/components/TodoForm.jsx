import {
    FormControl,
    MenuItem,
    InputLabel,
    Select,
    Paper,
    InputBase,
    Divider,
    Button,
    } from "@mui/material";
    import PlaylistAddCircleIcon from "@mui/icons-material/PlaylistAddCircle";
    import styles from "../style/styledGlobal.module.css";
    
    const TodoForm = ({
    newTask,
    setNewTask,
    handleFilter,
    handleSubmit,
    completed,
    }) => {
        return (
        <div className={styles.headerTodo}>
            <Paper
            component="form"
            onSubmit={handleSubmit}
            sx={{
                p: "2px 4px",
                display: "flex",
                alignItems: "center",
                width: 700,
            }}
            >
            <InputBase
            value={newTask}
            onChange={(e) => setNewTask(e.target.value)}
            sx={{ ml: 1, flex: 1 }}
            placeholder="New Task"
            />
            <Divider sx={{ height: 28, m: 0.5 }} orientation="vertical" />
            <Button
                type="submit"
                variant="outlined"
                startIcon={<PlaylistAddCircleIcon fontSize="inherit" />}
                color="success"
            >
                Add Task
            </Button>
            </Paper>
            <FormControl sx={{ m: 1, minWidth: 120 }} size="small">
            <InputLabel id="demo-simple-select-label">Filter</InputLabel>
            <Select
                labelId="demo-simple-select-label"
                id="demo-simple-select"
                value={completed}
                label="Filter"
                onChange={handleFilter}
            >
            <MenuItem value={"All Todos"}>All Tasks</MenuItem>
            <MenuItem value={"Completed"}>Completed</MenuItem>
            <MenuItem value={"Not Completed"}>Not Completed</MenuItem>
            </Select>
            </FormControl>
        </div>
        );
    };
    
    export default TodoForm;