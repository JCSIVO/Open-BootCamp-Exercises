import React from 'react';
import logo from './logo.svg';
import './App.css';
import Header from './components/Header';
import Title from './components/Title';
import ProductList from './components/ProductList';

function App(): JSX.Element {
  return (
    <div>
      <Header name='TypeShopping' />
      <div className='p-4'>
        <Title title="Te doy la bienvenida a la primera tienda online 
        creada con TypeScript y React" />
        <ProductList />
      </div>
    </div>
  );
}

export default App;
