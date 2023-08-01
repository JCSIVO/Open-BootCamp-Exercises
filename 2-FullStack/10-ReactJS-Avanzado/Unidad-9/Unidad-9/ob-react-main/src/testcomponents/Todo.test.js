// const suma = (a, b) => a - b;

// console.assert(suma(1, 3) === 4, "1 + 3 deberia ser 4");

/*if (suma(1, 3) !== 4) {
    console.error("1 + 3 deberia ser 4");
}*/
// console.log(suma(1, 3), "Esto deberia dar 4")

import { render, screen, cleanup } from '@testing-library/react';
import renderer from 'react-test-renderer';
import Todo from './Todo';

afterEach(() => cleanup());

describe('Todo component is working correctly', () => {
    const todo = { id: 5, text: "Hacer la compora", completed: false};
        render(<Todo todo = {todo} />);
        const todoelement = screen.getByTestId(`todo-test-${todo.id}`);
        const checkbox = todoelement.querySelector('#checkbox');
        
    it('should render TODO component', () => {
        expect(todoelement).toBeInTheDocument();
    })
    it('should have right text', () => {
        expect(todoelement).toHaveTextContent(todo.text);
    })

    const todo2 = {id: 12, text: "Hacer la compra", completed: true};
    render(<Todo todo = {todo2} />);
        const todoelement2 = screen.getByTestId(`todo-test-${todo2.id}`);
        const checkbox2 = todoelement2.querySelector('#checkbox');
        it('should be checked', () => {
            expect(checkbox2).toBeChecked();
        })

        it('matches snapshot', () => {
            const snapTodo = {id: 1, text: "Pasar los test", completed: false};
            const tree = renderer.create(<Todo todo={snapTodo} />);
            expect(tree).toMatchSnapshot();
            // console.log(tree); 
        })

})


