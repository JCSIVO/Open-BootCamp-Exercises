/// <reference types="cypress" />

describe('Testeamos nuestra aplicación de notas', () => {
    beforeEach(() => {
        cy.visit('/')
    })
    it('Se renderiza correctamente', () => {
        cy.contains('Task v2 - hosted on: Firebase');
    })
    it('Podemos añadir una nueva tarea', () => {
        const textNewTask = 'Testeamos en cypress'
        cy.get('input[placeholder="New Task"]').type(textNewTask)
        cy.get('button.btn-add-task').click()
        cy.wait(3000)
        cy.get('.todo-list li').last().contains
        (textNewTask)
        //  Aquí tendriamos que eliminar la última 
        // entrada -> tasksController de firebase
    })
});
