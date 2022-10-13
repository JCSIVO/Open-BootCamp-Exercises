import React, { useEffect, useState } from 'react'
import { getProducts } from '../controllers/productController';
import Product from './Product';

interface ProductInterface {
    category: string;
    description: string;
    ir: number;
    image: string
    price: number;
    rating: object;
    title: string;
}

const ProductList = (): JSX.Element => {
    
    const [productList, setProductList] = useState<ProductInterface[]>([]);

    useEffect(() => {
        getProducts()
            .then((r) => setProductList(r.data))
            .catch((e) => console.error(e))
    }, [])

    return (
    <>
        {productList.length === 0 
        ?( "No hay productos" 
        ):( <div className='mt-4 grid grid-cols-3 md:grid-cols-5 gap-2'>
                {productList.map((product: ProductInterface, i: number): JSX.Element => (
                <Product key={i}
                    image={product.image} 
                    title={product.title} 
                    price={product.price} />
            ))}
            </div>
        )} 
    </>
    )
}

export default ProductList
