import React, { useState } from "react";
import useList from "../../hooks/useList";

const TaskList = () => {
return <h1>Task List</h1>;
};
//   const tasks = useList([]);
//   const [newTask, setNewTask] = useState("");

//   const addNewTask = () => {
//     tasks.push(newTask);
//     setNewTask("");
//   };

//   return (
//     <div>
//       <h1>Task List</h1>
//       <div>
//         <input
//           value={newTask}
//           onChange={(e) => setNewTask(e.target.value)}
//           placeholder="New Task"
//           type="text"
//         />
//         <button onClick={addNewTask}>Create Task</button>
//       </div>
//       {tasks.isEmpty() ? (
//         <p>Task List is Empty</p>
//       ) : (
//         <ul>
//           {tasks.value.map((task, index) => (
//             <li key={index}>
//               <input
//                 type="checkbox"
//                 onClick={() => tasks.remove(index)}
//                 checked={false}
//               />
//               {task}
//             </li>
//           ))}
//         </ul>
//       )}
//     </div>
//   );
// };

export default TaskList;