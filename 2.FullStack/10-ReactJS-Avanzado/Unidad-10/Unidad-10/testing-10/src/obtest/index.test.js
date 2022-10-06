import { sumar, restar, multiplicar, dividir, devuelveEmail, devuelveObjeto, Rectangulo, devuelveArrayStr, devuelveArrayNum, devuelveArrayObj,
devuelveTrue, devuelveFalse, devuelveNull, devuelveUndefined} from './index';
// Aquí vamos a crear nuestros casos de prubea 
// describe, test(it)
// Assertions "expect"

describe('Assertions básicos en los números', () => {
    test('La suma funciona', () => {
        const resultado = sumar(2, 3);
        expect(resultado).toBe(5);
        expect(resultado).toEqual(5);
    })
    test('La suma no resta', () => {
        const resultado = sumar(2, 3);
        expect(resultado).not.toBe(-1)
        expect(resultado).not.toEqual(-1);
    })
    test('La resta funciona', () => {
        const resultado = restar(2, 3);
        expect(resultado).toBe(-1)
        expect(resultado).toEqual(-1);
    })
    test('La multiplicación funciona', () => {
        const resultado = multiplicar(2, 5);
        expect(resultado).toBe(10);
        expect(resultado).toEqual(10);
    })
    test('La división funciona', () => {
        const resultado = dividir(100, 5);
        expect(resultado).toBe(20);
        expect(resultado).toEqual(20);
    })
    test('Probamos el >', () => {
        const resultado = dividir(100, 5);
        expect(resultado).toBeGreaterThan(0);
        expect(resultado).toBeGreaterThanOrEqual(20);
    })
    test('Probamos el <', () => {
        const resultado = multiplicar(5, 8);
        expect(resultado).toBeLessThan(100);
        expect(resultado).toBeLessThanOrEqual(40);
    })
});

describe('Assertions básicos con Booleanos', () => {
    test('Probar que algo es true', () => {
        const r = devuelveTrue();
        expect(r).toBeTruthy();
    })
    test('Probar que algo es false', () => {
        const r = devuelveFalse();
        expect(r).toBeFalsy();
    })
    test('Probar que algo es null', () => {
        const r = devuelveNull();
        expect(r).toBeNull();
    })
    test('Probar que algo es defined', () => {
        const r = 5;
        expect(r).toBeDefined();
    })
    test('Probar que algo es undefined', () => {
        const r = devuelveUndefined();
        expect(r).toBeUndefined();
    })
});


describe('Assertions básicos en los strings', () => {
    test('El campo debe tener un email', () => {
        const email = devuelveEmail();
        expect(email).toMatch(/[a-zA-Z].[a-zA-Z]\.com/)
        expect(email).toMatch('JCSIVO@jcsivo.com')
    })
})

describe('Assertions básicos en objetos', () => {
    test('Dos objetos son iguales', () => {
        const objA = devuelveObjeto();
        const objB = devuelveObjeto();
        // expect(objA).toBe(objB); -> Da error porque no son el mismo objeto
        expect(objA).toEqual(objB);
    })
    test('El objeto DEBE tener una propiedad llamada "ancho"', () => {
        const rectangulo = devuelveObjeto();
        expect(rectangulo).toHaveProperty('ancho');
        // expect(rectangulo).toHaveProperty('radio'); -> falla porque no tiene la propiedad radio
    })
    test('La propiedad "ancho" del rectangulo siempre debe ser 10', () => {
        const rectangulo = devuelveObjeto();
        expect(rectangulo).toHaveProperty('ancho', 10);
    })
    test('El objeto rectA bede ser una Clase Rectangulo', () => {
        // const  rectA = {ancho: 10, alto: 11};
        const  rectA = new Rectangulo(10, 11);
        expect(rectA).toBeInstanceOf(Rectangulo);
    })
    
});

describe('Assertions básicos en arrays', () => {
    test('Array contiene leche', () => {
        const ar = devuelveArrayStr();
        expect(ar).toContain('leche');
    })
    test('Array contiene 5', () => {
        const ar = devuelveArrayNum();
        expect(ar).toContain(5);
    })
    test('Array comtiene id: 5', () => {
    const ar = devuelveArrayObj();
    // expect(ar).toContain({ id: 5 }) -> da error 
    expect(ar).toContainEqual({ id: 5 })
    })
    
});

describe('Assertions con funciones mock', () => {
    test('Que la función haya sido llamada', () => {
        const mockFn = jest.fn(() => 5);
        const res = mockFn();
        // console.log(mockFn)
        // console.log(res);
        expect(mockFn).toHaveBeenCalled();
    })
    test('Que la función haya sido llamada n veces', () => {
        const mockFn = jest.fn(() => 5);
        const res = mockFn();
        const res2 = mockFn();
        const res3 = mockFn();
        expect(mockFn).toHaveBeenCalledTimes(3);
        // expect(mockFn).toHaveBeenCalledTimes(1); -> da error
    })
    test('Que la función haya sido llamada con un parametro', () => {
        const mockFn = jest.fn(() => 5);
        const res = mockFn('prueba');
        expect(mockFn).toHaveBeenCalledWith('prueba');
        // expect(mockFn).toHaveBeenCalledWith('prueba2'); -> da error
    })
});


