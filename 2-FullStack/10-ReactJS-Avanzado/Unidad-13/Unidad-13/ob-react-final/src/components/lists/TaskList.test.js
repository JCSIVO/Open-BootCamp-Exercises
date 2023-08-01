import React from 'react';
import { render } from '@testing-library/react';
import TaskList from './TaskList';

// 0 - Renderiza el componente
test('0 - Renderiza el componente', () => {
    const r = render(<TaskList />);
    expect(r).toBeDefined();
});
