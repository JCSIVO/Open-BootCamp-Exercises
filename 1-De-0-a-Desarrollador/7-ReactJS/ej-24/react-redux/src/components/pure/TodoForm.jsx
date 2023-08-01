import React, { useRef } from 'react';
import PropTypes from 'prop-types';

const Todoform = ({ submit }) => {
    
    const newText = useRef();

    return (
        <div>
            <h2>Create your TODOs</h2>
            <form onSubmit={(e) => {
                e.preventDefault();
                submit(newText.current.value);
                newText.current.value= '';
            }} >
                <input type='text' ref={newText}></input>
                <button type='submit'>
                    Create Todo
                </button>
            </form>
        </div>
    );
}

Todoform.propTypes = {
    submit: PropTypes.func.isRequired

}

export default Todoform;
