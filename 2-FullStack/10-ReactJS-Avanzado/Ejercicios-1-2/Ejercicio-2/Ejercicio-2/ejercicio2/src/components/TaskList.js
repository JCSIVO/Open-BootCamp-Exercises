export const Tasklist = ({  taskList, deleteTask }) => {
  return (
    <div>
      <h2>Lista de tareas</h2>
      <ul>
          {taskList.map((task, index) =>
              <div key={index}>
                <p>{`Tarea: ${task}`}</p>
                <button onClick={() => deleteTask(index)}>Eliminar Tarea</button>
              </div>)}
      </ul>
    </div>
  )
}
