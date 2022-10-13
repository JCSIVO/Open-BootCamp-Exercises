import React from 'react'

interface ProductProps {
    image: string;
    title: string;
    price: number;
}

const Product = ({ image, title, price }:ProductProps): JSX.Element => {
    return (
    <div>
        <div className='flex flex-col gap-2 border border-slate-100 p-4 shadow rounded'>
                <img src={image} />
                <h2 className='font-semibold text-slate-700'>{title}</h2>
                <p className='text-right text-slate-400'>{price} €</p>
            </div>
    </div>
    )
}

export default Product
