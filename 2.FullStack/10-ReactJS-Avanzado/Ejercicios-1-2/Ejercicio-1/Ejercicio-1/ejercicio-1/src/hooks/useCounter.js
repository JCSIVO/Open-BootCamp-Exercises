import { useState } from 'react';

const useCounter = (minValue = -10, maxValue = 10, initialValue = 5) => {
    const [value, setValue] = useState(initialValue);

    // Incremento del valor
    const increment = () => setValue((value < maxValue) ? value + 1 : value);
    // Decremento del valor
    const decrement = () => setValue((value > minValue) ? value - 1 : value);
    // reiniciar el valor
    const reset = () => setValue(0);

    return { value, maxValue, minValue, increment, decrement, reset }
};


export default useCounter;

