import logo from './logo.svg';
import './App.css';
import Greeting from './components/pure/greeting';
import Greetingf from './components/pure/greetingF';
import TaskListComponent from './components/container/task_list';
import Ejemplo1 from './hooks/Ejemplo1';
import Ejemplo2 from './hooks/Ejemplo2';
import MiComponenteConContexto from './hooks/Ejemplo3'
import Ejemplo4 from './hooks/Ejemplo4';
import Greetingstyled from './components/pure/greetingStyled';
import Father from './components/container/father';
import Optionalrender from './components/pure/optionalRender';
import Loginformik from './components/pure/forms/loginFormik';
import Registerformik from './components/pure/forms/registerFormik';
import Asyncexample from './components/pure/AsyncExample';
import Observableexample from './components/pure/ObservableExample';
import Fetchexample from './components/pure/FetchExample';
import Axiosexample from './components/pure/AxiosExample';
import Axioscrudexample from './components/pure/AxiosCRUDExample';

import Updater from './components/sw/Updater';
import NotificationManager from './components/pure/NotificationManager';


function App() {
  // const version = "app-v3-Front";
  return (
    <div className="App">
    {/*<h1>Versión {version}</h1>*/}
      {/* <header className="App-header"> */}
        {/* <img src={logo} className="App-logo" alt="logo" /> */}
        {/* Componente propio Greeting.jsx */}
        {/* <Greeting name={"Martín"}></Greeting> */}
        {/* Componente de ejemplo funcional */}
        {/* <Greetingf name="Martín"></Greetingf> */}
        {/* Componente de Listado de Tareas */}
        {/* <TaskListComponent></TaskListComponent> */}
        {/* Ejemplos de uso de HOOKS */}
        {/* <Ejemplo1></Ejemplo1> */}
        {/* <Ejemplo2></Ejemplo2> */}
        {/* <MiComponenteConContexto></MiComponenteConContexto> */}
        {/* Todo loq ue hay aquí, es tratado como props.children */}
        {/* <Ejemplo4 nombre="Martín">
          <h3>
            Contenido del props.children
          </h3>
        </Ejemplo4> */}
        {/* <Greetingstyled name="Martín"></Greetingstyled> */}
      {/* </header> */}
      {/* Gestión de eventos */}
      {/* <Father></Father> */}

      {/* Ejemplos de Renderizado condicional */}
      {/* <Optionalrender></Optionalrender> */}

      {/* Ejemplos de uso de Formik y Yup */}
      {/* <Loginformik></Loginformik> */}
      {/* <Registerformik></Registerformik> */}

      {/* Ejemplos De procesos asínrconos */}
      {/* <Asyncexample></Asyncexample> */}
      {/* <Observableexample></Observableexample> */}
      {/* <Fetchexample></Fetchexample> */}
      {/* <Axiosexample></Axiosexample> */}
      {/* <Axioscrudexample></Axioscrudexample> */}
      <NotificationManager />

      {/* PROYECTO FINAL */}
      {/* <TaskListComponent></TaskListComponent> */}
      <Updater />
    </div>
  );
}

export default App;
