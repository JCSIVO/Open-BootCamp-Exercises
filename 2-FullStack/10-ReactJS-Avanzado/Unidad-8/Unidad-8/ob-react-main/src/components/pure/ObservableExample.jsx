import React, {useState} from 'react';
import { getNumbers } from '../../services/observableService';

const Observableexample = () => {

    const [number, setNumber] = useState(0);

    const obtainNewNumbers = () => {

        console.log('Subscription to Observable');
        getNumbers.subscribe(
            {
                next(newNumber){
                    console.log('New Number:', newNumber);
                    setNumber(newNumber);
                },
                error(error){
                    alert(`Something went wrong: ${error}`)
                    console.log('Error in observable')
                },
                complete(){
                    alert(`Finished with: ${number}`)
                    console.log('Done with the observable')
                }
            }
        )

    }

    return (
        <div>
            <h2>Number: {number}</h2>
            <button onClick={obtainNewNumbers}>
                Obtain new Numbers
            </button>
        </div>
    );
}

export default Observableexample;
