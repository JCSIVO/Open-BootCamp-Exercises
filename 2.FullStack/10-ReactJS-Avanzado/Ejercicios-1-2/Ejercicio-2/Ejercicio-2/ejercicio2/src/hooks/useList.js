import { useState } from 'react';

const useList = (initialValue = []) => {
    const [value, setValue] = useState(initialValue);

    // Push new value to list
    const push = (element) => {
        setValue((oldValue) => [...oldValue, element]);
    };

    // Remove value from list
    const remove = (index) => {
        setValue((oldValue) => oldValue.filter((_, i) => i !== index));
    };

    // List is Empty ? true / false
    const isEmpty = () => value.length === 0;

    // Empty all the values of the list 
    const empty = () => {
        setValue([]);
    };

    // Sort all the values of the list
    const sortList = () => {
        setValue((oldValue) => [...oldValue].sort());
    };

    // Invert all the values of the list
    const invert = () => {
        setValue((oldValue) => [...oldValue].reverse());
    }

    return {
            value, setValue, push, remove, isEmpty, empty, sortList, invert
        };
};

export default useList;
