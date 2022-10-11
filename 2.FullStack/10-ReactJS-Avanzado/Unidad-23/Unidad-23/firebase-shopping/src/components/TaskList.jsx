import React, { useEffect, useState } from "react";
import { addNewTask, deleteTask, getTasks, updateTask } from "../firebase/taskController";

const task = {
  title: "Este es el título",
  description: "Esta es la descripción",
};

const TaskList = () => {
  // const [title, setTitle] = useState("");
  // const [description, setDescription] = useState("");
  const [task, setTask] = useState({ title: "", description: "" });
  const [tasks, setTasks] = useState([]);
  const [mode, setMode] = useState("add");

  const createNewTask = async () => {
    await addNewTask(task);
    setTask({ title: "", description: "" });
    initializeTasks();
  };

  const updateExistingTask = async () => {
    await updateTask(task);
    setTask({ title: "", description: "" });
    initializeTasks();
    setMode("add");
  };

  const initializeTasks = () => {
    getTasks()
      .then((t) => setTasks([...t]))
      .catch((e) => console.error(e));
  };

  const editTask = (id) => {
    setMode("update");
    const taskToEdit = tasks.find((t) => t.id === id);
    setTask({ ...taskToEdit });
  };

  const removeTask = async id => {
    await deleteTask(id);
    initializeTasks();
  }

  useEffect(() => {
    initializeTasks();
  }, []);

  return (
    <div>
      <h1 className="text-sky-700 font-semibold text-lg">
        Estás en la tasklist
      </h1>
      <div className="flex flex-col gap-4">
        <h2>Introduce una nueva tarea</h2>
        <input
          type="text"
          value={task.title}
          placeholder="Título"
          className="border shadow outline-none focus:ring ring-sky-200 rounded px-2 py-1 w-full"
          onChange={(e) => setTask({ ...task, title: e.target.value })}
        />
        <textarea
          type="text"
          rows={3}
          value={task.description}
          placeholder="Descripción"
          className="border shadow outline-none focus:ring ring-sky-200 rounded px-2 py-1 w-full"
          onChange={(e) => setTask({ ...task, description: e.target.value })}
        />
        <button
          className="bg-sky-400 text-white rounded shadow py-1 hover:bg-sky-500 transition font-semibold"
          onClick={() =>
            mode === "add" ? createNewTask() : updateExistingTask()
          }
        >
          {mode === "add" ? "Añadir" : "Actualizar"}
        </button>
      </div>
      <div className="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        {tasks.map((task) => (
          <div
            key={task.id}
            className="rounded-lg border border-sky-300 p-4 flex flex-col gap-2"
          >
            <h1 className="font-semibold">{task.title}</h1>
            <div className="border-t border-sky-300"></div>
            <p>{task.description}</p>
            <div className="flex justify-between">
              <button
                className="bg-sky-400 text-white py-1 px-2 rounded"
                onClick={() => editTask(task.id)}
              >
                Editar
              </button>
              <button
                className="bg-red-600 text-white py-1 px-2 rounded"
                onClick={() =>
                  window.confirm("¿Seguro que quieres eliminar esta tarea?") &&
                  removeTask(task.id)
                }
              >
                Eliminar
              </button>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
};

export default TaskList;
