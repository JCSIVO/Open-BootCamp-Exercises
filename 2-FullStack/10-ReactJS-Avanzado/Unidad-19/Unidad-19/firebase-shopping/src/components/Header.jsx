import React from 'react';
import { SiFirebase } from 'react-icons/si'; 

const Header = () => {
    return (
    <header className="h-20 w-full bg-gray-100 shadow-lg flex items-center justify-between px-8">
    <div className="flex items-center gap-2">
        <SiFirebase className='text-2xl text-pink-600' />
        <span className='text-xl font-semibold text-pink-600'>FIreShopping</span>
    </div>
    <button className='bg-sky-500 text-white py-1 px-3 rounded-full hover:bg-sky-700 transition'>Login</button>
    </header>
    )
}

export default Header
