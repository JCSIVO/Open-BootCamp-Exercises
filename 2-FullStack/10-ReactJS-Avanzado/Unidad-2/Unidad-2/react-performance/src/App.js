import React from 'react';
import './App.css';

function App() {

  const names = [
    'Jose',
    'Blanca'
  ];

  return (
    <GeneradorNombres names={names} />
  );
}

function GeneradorNombres (props) {
  const { names } = props;

  const [name, setName] = React.useState(names[0]);

  const getName = React.useCallback(
    () => {
      const index = Math.floor(Math.random() * (names.length));
      setName(names[index]);
    },
    [names]
  );
  const clearName = React.useCallback(
    () => {
      setName(null)
    },
    []
  );
  return (
    <div className='app'>
      <h1>Memoize de React con useMemo y useCallback</h1>

      {React.useMemo(
        () => {
          console.log('Renderización Nombre');
          return (
            <div>
              <h2>Nombre Generado: {name ? name : 'Sin Nombre'}</h2>
            </div>
          );
        },
        [name]
      )}

      <Button
        label='Generar Nombre'
        click={getName}>
      </Button>
      <Button
        label='Borrar Nombre'
        click={clearName}>
        </Button>
    </div>
  );
}

function WrappedButton (props) {
  console.log('Renderización Botón');
  return (
    <button
      onClick={() => {
        props.click();
      }}
      >
        {props.label}
      </button>
  );
}

const Button = React.memo(WrappedButton);

export default App;
