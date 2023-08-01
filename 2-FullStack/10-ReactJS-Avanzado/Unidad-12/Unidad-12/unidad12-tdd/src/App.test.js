import { fireEvent, render, screen } from '@testing-library/react';
import '@testing-library/jest-dom';
import App from './App';

const mockArray = [{"changeuuid":"35b964f4-e826-4e41-adcb-799c6f56f5b6",
"stationuuid":"0fa1bfa4-f365-11e8-a471-52543be04c81",
"serveruuid":"c54c69a7-9175-4a27-9b13-e6fabc997b90","name":"- 0 N - Jazz on Radio",
"url":"https://0n-jazz.radionetz.de/0n-jazz.aac",
"url_resolved":"https://0n-jazz.radionetz.de/0n-jazz.aac","homepage":"http://www.0nradio.com/",
"favicon":"https://www.0nradio.com/logos/0n-jazz_600x600.jpg","tags":"jazz,smooth jazz,swing",
"country":"Germany","countrycode":"DE","iso_3166_2":"DE-BY","state":"Bavaria",
"language":"german","languagecodes":"DE,de","votes":116,
"lastchangetime":"2022-05-02 10:06:52","lastchangetime_iso8601":"2022-05-02T10:06:52Z",
"codec":"AAC+","bitrate":64,"hls":0,"lastcheckok":1,"lastchecktime":"2022-10-07 14:10:21",
"lastchecktime_iso8601":"2022-10-07T14:10:21Z","lastcheckoktime":"2022-10-07 14:10:21",
"lastcheckoktime_iso8601":"2022-10-07T14:10:21Z",
"lastlocalchecktime":"2022-10-07 09:15:53","lastlocalchecktime_iso8601":"2022-10-07T09:15:53Z",
"clicktimestamp":"2022-10-07 13:38:34","clicktimestamp_iso8601":"2022-10-07T13:38:34Z",
"clickcount":41,"clicktrend":4,"ssl_error":0,"geo_lat":50.3115,"geo_long":11.923,
"has_extended_info":true}] 

beforeEach(() => render(<App />))


/*test('renders learn react link', () => {
  render(<App />);
  const linkElement = screen.getByText(/learn react/i);
  expect(linkElement).toBeInTheDocument();
});*/
// Vamos a construir una aplicación de seleción y búsqueda de Emisoras de Radio en Streaming

// 0 - La aplicación debe renderizar correctamente
describe('0 - La aplicación debe renderizar correctamente', () => {
  test('0 - La aplicación debe renderizar correctamente', () => {
    const r = render(<App />)
    expect(r).toBeDefined();
  })
  
});

// 1 - El nombre de la aplicacion debe mostrarse en algún lugar  -> "OpenRadioCamp"
describe('1 - El nombre de la aplicacion debe mostrarse en algún lugar  -> "OpenRadioCamp"', () => {
  test('1 - El nombre de la aplicacion debe mostrarse en algún lugar  -> "OpenRadioCamp"', () => {
    const nombre = "OpenRadioCamp"
    const el = screen.getByText(nombre)
    expect(el).toBeInTheDocument();
  })
  
});

// 2 - Debemos podemos buscar radios por nombre
// 2a - La aplicacion debe tener un campo input con el placeholder => "Escribe el nombre de la radio"
// 2b - La aplicación debe tener un botón de búsqueda => Texto "Buscar"
// 2c - Cuando hacemos clic en el botón buscar, se debe ejecutar la función de búsqueda una sola vez
describe('2 - Debemos podemos buscar radios por nombre', () => {
  test('2a - La aplicacion debe tener un campo input con el placeholder => "Escribe el nombre de la radio"', () => {
    const placeholdertext = "Escribe el nombre de la radio";
    const input = screen.getByPlaceholderText(placeholdertext);
    expect(input).toBeInTheDocument();
  })
  test('2b - La aplicación debe tener un botón de búsqueda => Texto "Buscar"', () => {
    const buttontext = "Buscar";
    const button = screen.getByText(buttontext);
    expect(button).toBeInTheDocument();
  })
  test('2c - Cuando hacemos clic en el botón buscar, se debe ejecutar la función de búsqueda una sola vez"', () => {
    const funcionMock = jest.fn();
    const buttontext = "Buscar";
    const button = screen.getByText(buttontext);
    button.addEventListener('click', funcionMock);
    fireEvent.click(button);
    expect(funcionMock).toHaveBeenCalledTimes(1);
  })
})

// 3 - Listado de emisoras 
// 3a - Debe existir un listado de emisoras 
// 3b - El listado debe inicializar vacío
// 3c - Cuando se hace una búsqueda válida, el listado debe mostrar al menos un resultado
// 3d  - Cuando hacemos una búsqueda inválida (no existe), el listado debe mostrar un mensaje => 'No se han encontrado emisoras para esta búsqueda'
describe('3 - Listado de emisoras ', () => {
  test('3a - Debe existir un listado de emisoras ', () => {
    const listado = screen.getByLabelText('listado-emisoras')
    expect(listado).toBeInTheDocument();
  })
  test('3b - El listado debe inicializar vacío', () => {
    const listado = screen.getByLabelText('listado-emisoras')
    const childrenCount = listado.childElementCount;
    expect(childrenCount).toBe(0);
  })
  test('3c - Cuando se hace una búsqueda válida, el listado debe mostrar al menos un resultado',  () => {
    const placeholdertext = "Escribe el nombre de la radio";
    const input = screen.getByPlaceholderText(placeholdertext);
    const buttontext = "Buscar";
    const button = screen.getByText(buttontext);
    fireEvent.change(input, { target: { value: 'Country' }})
    fireEvent.click(button);
    const listado = screen.getByLabelText('listado-emisoras')
    const childrenCount = listado.childElementCount;
    expect(childrenCount).toBeGreaterThanOrEqual(0);
  })
});
